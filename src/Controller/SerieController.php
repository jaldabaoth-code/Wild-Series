<?php

namespace App\Controller;

use App\Entity\Serie;
use App\Entity\Season;
use App\Entity\Episode;
use App\Form\SerieType;
use App\Form\CommentType;
use App\Entity\Comment;
use App\Repository\SerieRepository;
use App\Form\SearchSerieFormType;
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
 * @Route("/series", name="serie_")
 */
class SerieController extends AbstractController
{
    /**
     * Show all rows from Series's entity
     * @Route("/", name="index")
     */
    public function index(Request $request, SerieRepository $serieRepository): Response
    {
        $formSearchSeries = $this->createForm(SearchType::class);
        $formSearchSeries->handleRequest($request);

        if ($formSearchSeries->isSubmitted() && $formSearchSeries->isValid()) {
            $search = $formSearchSeries->getData();
            $series = $serieRepository->findLikeName($search);
        } else {
            $series = $serieRepository->findAll();
            $search = '';
        }
        return $this->render('serie/index.html.twig', [
            'series' => $series,
            'formSearchSeries' => $formSearchSeries->createView(),
            'search' => $search,
        ]);
    }
    
    /**
     * Getting a series by id
     * @Route("/{slug}", name="show")
     * @return Response
     */
    public function show(Serie $series, Slugify $slugify):Response
    {
        $seasons = $this->getDoctrine()
        ->getRepository(Season::class)
        ->findBy([
            'serie' => $series->getId()
        ]);

        $slug = $slugify->generate($series->getTitle());
        $series->setSlug($slug);
        if (!$series) {
            throw $this->createNotFoundException(
                'No series with id : '. $series->getId() .' found in series table.'
            );
        }
        return $this->render('serie/show.html.twig', [
            'series' => $series,
            'seasons' => $seasons,
        ]);
    }

    /**
     * Display the form for add series
     * @Route("/new", name="new")
     */
    public function new(Request $request, Slugify $slugify, MailerInterface $mailer) : Response
    {
        // Create a new Series Object
        $serie = new Serie();
        // Create the associated Form
        $form = $this->createForm(SerieType::class, $serie);
        // Get data from HTTP request
        $form->handleRequest($request);
        
        // Was the form submitted ?
        if ($form->isSubmitted() && $form->isValid()) {
            $slug = $slugify->generate($serie->getTitle());
            $serie->setSlug($slug);
            // Deal with the submitted data
            // Get the Entity Manager
            $serie->setOwner($this->getUser());
            $entityManager = $this->getDoctrine()->getManager();
            // Persist Serie Object
            $entityManager->persist($serie);
            // Flush the persisted object
            $entityManager->flush();

            // Once the form is submitted, valid and the data inserted in database, you can define the success flash message
            $this->addFlash('success', 'The new serie has been added');

            $email = (new Email())
                    ->from($this->getParameter('mailer_from'))
                    ->to('your_email@example.com')
                    ->subject('Une nouvelle série vient d\'être publiée !')
                    ->html($this->renderView('mail/newSerieEmail.html.twig', ['serie' => $serie]));

            $mailer->send($email);
            // Finally redirect to series list
            return $this->redirectToRoute('serie_index');
        }
        // Render the form
        return $this->render('serie/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{slug}/edit", name="edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Serie $serie, Slugify $slugify,): Response
    {
        if (!($this->getUser() == $serie->getOwner()) && ($this->getUser()->getRoles()[0] != 'ROLE_ADMIN')) {
            // If not the owner, throws a 403 Access Denied exception
            throw new AccessDeniedException('Only the owner can edit the serie!');
        }
        $form = $this->createForm(SerieType::class, $serie);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $serie->setSlug($slugify->generate($serie->getTitle()));
            $this->getDoctrine()->getManager()->flush();
            // Once the form is submitted, valid and the data inserted in database, you can define the success flash message
            $this->addFlash('success', 'The serie has been edited');
            return $this->redirectToRoute('serie_index');
        }
        return $this->render('serie/edit.html.twig', [
            'serie' => $serie,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/delete/{id}", name="delete", methods={"POST"})
     */
    public function deleteComment(Request $request, Serie $serie): Response
    {
        if ($this->isCsrfTokenValid('delete' . $serie->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($serie);
            $entityManager->flush();
            $this->addFlash('danger', 'The serie is deleted');
        }
        return $this->redirectToRoute('serie_index');
    }

    /**
     * @Route("/{id}/watchlist", name="watchlist", methods={"GET","POST"})
     */
    public function addToWatchList(Serie $serie, EntityManagerInterface $em): Response
    {
        if ($this->getUser()->isInWatchList($serie)){
            $this->getUser()->removeFromWatchlist($serie);
        } else {
            $this->getUser()->addToWatchList($serie);
        }

        $em->flush();
        
        return $this->redirectToRoute('serie_show', [
            'slug' => $serie->getSlug(),
        ]);
        return $this->json([
            'isInWatchlist' => $this->getUser()->isInWatchlist($serie)
        ]);
    }
}
