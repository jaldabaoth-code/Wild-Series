<?php

namespace App\Controller;

use App\Entity\Series;
use App\Entity\Season;
use App\Entity\Episode;
use App\Form\SeriesType;
use App\Form\CommentType;
use App\Entity\Comment;
use App\Repository\SeriesRepository;
use App\Form\SearchSeriesFormType;
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
 * @Route("/series", name="series_")
 */
class SeriesController extends AbstractController
{
    /**
     * Show all rows from Series's entity
     * @Route("/", name="index")
     */
    public function index(Request $request, SeriesRepository $seriesRepository): Response
    {
        $formSearchSeries = $this->createForm(SearchType::class);
        $formSearchSeries->handleRequest($request);

        if ($formSearchSeries->isSubmitted() && $formSearchSeries->isValid()) {
            $search = $formSearchSeries->getData();
            $series = $seriesRepository->findLikeName($search);
        } else {
            $series = $seriesRepository->findAll();
            $search = '';
        }
        return $this->render('series/index.html.twig', [
            'series' => $series,
            'formSearchSeries' => $formSearchSeries->createView(),
            'search' => $search,
        ]);
    }
    
    /**
     * Display the form for add series
     * @Route("/new", name="new")
     */
    public function new(Request $request, Slugify $slugify, MailerInterface $mailer) : Response
    {
        // Create a new Series Object
        $series = new Series();
        // Create the associated Form
        $form = $this->createForm(SeriesType::class, $series);
        // Get data from HTTP request
        $form->handleRequest($request);
        
        // Was the form submitted ?
        if ($form->isSubmitted() && $form->isValid()) {
            $slug = $slugify->generate($series->getTitle());
            $series->setSlug($slug);
            // Deal with the submitted data
            // Get the Entity Manager
            $series->setOwner($this->getUser());
            $entityManager = $this->getDoctrine()->getManager();
            // Persist Series Object
            $entityManager->persist($series);
            // Flush the persisted object
            $entityManager->flush();

            // Once the form is submitted, valid and the data inserted in database, you can define the success flash message
            $this->addFlash('success', 'The new series has been added');

            $email = (new Email())
                    ->from($this->getParameter('mailer_from'))
                    ->to('your_email@example.com')
                    ->subject('Une nouvelle série vient d\'être publiée !')
                    ->html($this->renderView('mail/newSeriesEmail.html.twig', ['series' => $series]));

            $mailer->send($email);
            // Finally redirect to series list
            return $this->redirectToRoute('series_index');
        }
        // Render the form
        return $this->render('series/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * Getting a series by id
     * @Route("/{slug}", name="show")
     * @return Response
     */
    public function show(Series $series, Slugify $slugify):Response
    {
        $seasons = $this->getDoctrine()
        ->getRepository(Season::class)
        ->findBy([
            'series' => $series->getId()
        ]);

        $slug = $slugify->generate($series->getTitle());
        $series->setSlug($slug);
        if (!$series) {
            throw $this->createNotFoundException(
                'No series with id : '. $series->getId() .' found in series table.'
            );
        }
        return $this->render('series/show.html.twig', [
            'series' => $series,
            'seasons' => $seasons,
        ]);
    }

    /**
     * @Route("/{slug}/edit", name="edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Series $series, Slugify $slugify,): Response
    {
        if (!($this->getUser() == $series->getOwner()) && ($this->getUser()->getRoles()[0] != 'ROLE_ADMIN')) {
            // If not the owner, throws a 403 Access Denied exception
            throw new AccessDeniedException('Only the owner can edit the series!');
        }
        $form = $this->createForm(SeriesType::class, $series);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $series->setSlug($slugify->generate($series->getTitle()));
            $this->getDoctrine()->getManager()->flush();
            // Once the form is submitted, valid and the data inserted in database, you can define the success flash message
            $this->addFlash('success', 'The series has been edited');
            return $this->redirectToRoute('series_index');
        }
        return $this->render('series/edit.html.twig', [
            'series' => $series,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/delete/{id}", name="delete", methods={"POST"})
     */
    public function deleteComment(Request $request, Series $series): Response
    {
        if ($this->isCsrfTokenValid('delete' . $series->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($series);
            $entityManager->flush();
            $this->addFlash('danger', 'The series is deleted');
        }
        return $this->redirectToRoute('series_index');
    }

    /**
     * @Route("/{id}/watchlist", name="watchlist", methods={"GET","POST"})
     */
    public function addToWatchList(Series $series, EntityManagerInterface $em): Response
    {
        if ($this->getUser()->isInWatchList($series)){
            $this->getUser()->removeFromWatchlist($series);
        } else {
            $this->getUser()->addToWatchList($series);
        }

        $em->flush();
        
        return $this->redirectToRoute('series_show', [
            'slug' => $series->getSlug(),
        ]);
        return $this->json([
            'isInWatchlist' => $this->getUser()->isInWatchlist($series)
        ]);
    }
}
