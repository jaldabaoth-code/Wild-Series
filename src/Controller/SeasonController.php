<?php

namespace App\Controller;

use App\Entity\Serie;
use App\Entity\Season;
use App\Entity\Episode;
use App\Form\SeasonType;
use App\Service\Slugify;
use App\Repository\SeasonRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

/**
 * @Route("/season")
 */
class SeasonController extends AbstractController
{
    /**
     * @Route("/", name="season_index", methods={"GET"})
     */
    public function index(SeasonRepository $seasonRepository): Response
    {
        return $this->render('season/index.html.twig', [
            'seasons' => $seasonRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="season_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $season = new Season();
        $form = $this->createForm(SeasonType::class, $season);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($season);
            $entityManager->flush();

            // Once the form is submitted, valid and the data inserted in database, you can define the success flash message
            $this->addFlash('success', 'The new serie has been created');
            return $this->redirectToRoute('season_index');
        }

        return $this->render('season/new.html.twig', [
            'season' => $season,
            'form' => $form->createView(),
        ]);
    }



    /**
     * @Route("/{slug}/seasons/{seasonId}", name="season_show")
     * @ParamConverter("serie", class="App\Entity\Serie", options={"mapping": {"slug": "slug"}})
     * @ParamConverter("season", class="App\Entity\Season", options={"mapping": {"seasonId": "id"}})
     * @return Response
     */
    public function show(Serie $serie, Season $season, Slugify $slugify): Response
    {
        $slug = $slugify->generate($serie->getTitle());
        $serie->setSlug($slug);
        $episodes = $this->getDoctrine()
        ->getRepository(Episode::class)
        ->findBy([
            'season' => $season->getId()
        ]);
        return $this->render('season/show.html.twig', [
            'serie' => $serie,
            'season' => $season,
            'episodes' => $episodes,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="season_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Season $season): Response
    {
        $form = $this->createForm(SeasonType::class, $season);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            
            // Once the form is submitted, valid and the data inserted in database, you can define the success flash message
            $this->addFlash('success', 'The serie has been edited');
            return $this->redirectToRoute('season_index');
        }

        return $this->render('season/edit.html.twig', [
            'season' => $season,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="season_delete", methods={"POST"})
     */
    public function delete(Request $request, Season $season): Response
    {
        if ($this->isCsrfTokenValid('delete'.$season->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($season);
            $entityManager->flush();
            $this->addFlash('danger', 'The serie is deleted');
        }

        return $this->redirectToRoute('season_index');
    }
}
