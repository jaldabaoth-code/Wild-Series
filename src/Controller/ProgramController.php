<?php

namespace App\Controller;

use App\Entity\Program;
use App\Entity\Season;
use App\Entity\Episode;
use App\Form\ProgramType;
use App\Form\CommentType;
use App\Entity\Comment;
use App\Repository\ProgramRepository;
use App\Form\SearchProgramFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Service\Slugify;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\RedirectController;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * @Route("/programs", name="program_")
 */
class ProgramController extends AbstractController
{
    /**
     * show all rows from Program's entity
     * @Route("/", name="index")
     * @return Response A response instance
     */
    public function index(Request $request, ProgramRepository $programRepository, SessionInterface $session): Response
    {
        // If total doesn’t exist in session, it is initialized
        if (!$session->has('total')) {
            $session->set('total', 0);
        }
        // Get actual value in session with ‘total' key
        $total = $session->get('total');

        $form = $this->createForm(SearchType::class);
        $form->handleRequest($request);
        // 
        if ($form->isSubmitted() && $form->isValid()) {
            $search = $form->getData();
            $programs = $programRepository->findLikeName($search);
        } else {
            $programs = $programRepository->findAll();
        }

        return $this->render('program/index.html.twig', [
            'programs' => $programs,
            'form' => $form->createView(),
        ]);
    }
    
    /**
     * The controller for the program add form
     * Display the form or deal with it
     *
     * @Route("/new", name="new")
     */
    public function new(Request $request, Slugify $slugify, MailerInterface $mailer) : Response
    {
        // Create a new Program Object
        $program = new Program();
        // Create the associated Form
        $form = $this->createForm(ProgramType::class, $program);
        // Get data from HTTP request
        $form->handleRequest($request);
        // Was the form submitted ?
        if ($form->isSubmitted() && $form->isValid()) {
            $slug = $slugify->generate($program->getTitle());
            $program->setSlug($slug);
            // Deal with the submitted data
            // Get the Entity Manager
            $program->setOwner($this->getUser());
            $entityManager = $this->getDoctrine()->getManager();
            // Persist Program Object
            $entityManager->persist($program);
            // Flush the persisted object
            $entityManager->flush();

            // Once the form is submitted, valid and the data inserted in database, you can define the success flash message
            $this->addFlash('success', 'The new program has been created');

            $email = (new Email())
                    ->from($this->getParameter('mailer_from'))
                    ->to('your_email@example.com')
                    ->subject('Une nouvelle série vient d\'être publiée !')
                    ->html($this->renderView('mail/newProgramEmail.html.twig', ['program' => $program]));

            $mailer->send($email);
            // Finally redirect to programs list
            return $this->redirectToRoute('program_index');
        }
        // Render the form
        return $this->render('program/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * Getting a program by id
     *
     * @Route("/{slug}", name="show")
     * 
     * @return Response
     */
    public function show(Program $program, Slugify $slugify):Response
    {
        $seasons = $this->getDoctrine()
        ->getRepository(Season::class)
        ->findBy([
            'program' => $program->getId()
        ]);

        $slug = $slugify->generate($program->getTitle());
        $program->setSlug($slug);
        if (!$program) {
            throw $this->createNotFoundException(
                'No program with id : '. $program->getId() .' found in program\'s table.'
            );
        }
        return $this->render('program/show.html.twig', [
            'program' => $program,
            'seasons' => $seasons,
        ]);
    }

    /**
     * @Route("/{slug}/seasons/{seasonId}", name="season_show")
     * @ParamConverter("program", class="App\Entity\Program", options={"mapping": {"slug": "slug"}})
     * @ParamConverter("season", class="App\Entity\Season", options={"mapping": {"seasonId": "id"}})
     * @return Response
     */
    public function showSeason(Program $program, Season $season, Slugify $slugify): Response
    {
        $slug = $slugify->generate($program->getTitle());
        $program->setSlug($slug);
        $episodes = $this->getDoctrine()
        ->getRepository(Episode::class)
        ->findBy([
            'season' => $season->getId()
        ]);

        return $this->render('program/season_show.html.twig', [
            'program' => $program,
            'season' => $season,
            'episodes' => $episodes,
        ]);
    }

    /**
     * @Route("/{programSlug}/seasons/{seasonId}/episodes/{episodeSlug}", name="episode_show")
     * @ParamConverter("program", class="App\Entity\Program", options={"mapping": {"programSlug": "slug"}})
     * @ParamConverter("season", class="App\Entity\Season", options={"mapping": {"seasonId": "id"}})
     * @ParamConverter("episode", class="App\Entity\Episode", options={"mapping": {"episodeSlug": "slug"}})
     * @return Response
     */
    public function showEpisode(Request $request, Program $program, Season $season, Episode $episode, Slugify $slugify): Response
    {
        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);
        $comment->setEpisode($episode);
        if ($form->isSubmitted() && $form->isValid()) {
            if ($this->getUser()) {
                $entityManager = $this->getDoctrine()->getManager();
                $comment->setAuthor($this->getUser());
                $entityManager->persist($comment);
                $entityManager->flush();
                return $this->redirect($request->getUri());
            }
        }

        $slug = $slugify->generate($program->getTitle());
        $program->setSlug($slug);
        return $this->render('program/episode_show.html.twig', [
            'program' => $program,
            'season' => $season,
            'episode' => $episode,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{slug}/edit", name="edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Program $program, Slugify $slugify): Response
    {

        if (!($this->getUser() == $program->getOwner())) {
            // If not the owner, throws a 403 Access Denied exception
            throw new AccessDeniedException('Only the owner can edit the program!');
        }

        $form = $this->createForm(ProgramType::class, $program);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $program->setSlug($slugify->generate($program->getTitle()));
            $this->getDoctrine()->getManager()->flush();

            // Once the form is submitted, valid and the data inserted in database, you can define the success flash message
            $this->addFlash('success', 'The program has been edited');

            return $this->redirectToRoute('program_index');
        }

        return $this->render('program/edit.html.twig', [
            'program' => $program,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/delete/{id}", name="delete_comment", methods={"POST"})
     */
    public function deleteComment(Request $request, Comment $comment): Response
    {
        if ($this->isCsrfTokenValid('delete' . $comment->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($comment);
            $entityManager->flush();
            $this->addFlash('danger', 'The program is deleted');
        }
        return $this->redirectToRoute('program_index');
    }

    /**
     * @Route("/{id}/watchlist", name="watchlist", methods={"GET","POST"})
     */
    public function addToWatchList(Program $program, EntityManagerInterface $em): Response
    {
        if ($this->getUser()->isInWatchList($program)){
            $this->getUser()->removeFromWatchlist($program);
        } else {
            $this->getUser()->addToWatchList($program);
        }

        $em->flush();
        /*
        return $this->redirectToRoute('program_show', [
            'slug' => $program->getSlug(),
        ]);*/
        return $this->json([
            'isInWatchlist' => $this->getUser()->isInWatchlist($program)
        ]);
    }
}
