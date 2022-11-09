<?php

namespace App\Controller;

use App\Entity\Season;
use App\Entity\Series;
use App\Entity\Episode;
use App\Form\SeasonType;
use App\Service\Slugify;
use App\Repository\SeasonRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

/**
 * @Route("/season", name="season_")
 */
class SeasonController extends AbstractController
{
    /**
     * @Route("/series/{seriesSlug}/{seriesId}/new", name="new", methods={"GET","POST"})
     * @ParamConverter("series", class="App\Entity\Series", options={"mapping": {"seriesId": "id"}})
     */
    public function new(Request $request, Series $series): Response
    {
        $season = new Season();
        $formSeason = $this->createForm(SeasonType::class, $season);
        $formSeason->handleRequest($request);
        // Add series in form data of season
        $formSeason->getData()->setSeries($series);
        if ($formSeason->isSubmitted() && $formSeason->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($season);
            $entityManager->flush();
            // Once the form is submitted, valid and the data is inserted in database, you can define the success flash message
            $this->addFlash('success', 'The new season has been added : ' . $series->getTitle() . ' - The season ' . $season->getNumber());
            return $this->redirectToRoute('season_show', [
                'seasonNumber' => $season->getnumber(),
                'id' => $season->getId(),
                'seriesSlug' => $series->getSlug(),
                'seriesId' => $series->getId()
            ]);
        }
        return $this->render('season/new.html.twig', [
            'season' => $season,
            'series' => $series,
            'formSeason' => $formSeason->createView()
        ]);
    }

    /**
     * @Route("/{seasonNumber}/{id}/series/{seriesSlug}/{seriesId}/show", name="show")
     * @ParamConverter("series", class="App\Entity\Series", options={"mapping": {"seriesId": "id"}})
     */
    public function show(Slugify $slugify, Season $season, Series $series): Response
    {
        $slug = $slugify->generate($series->getTitle());
        $series->setSlug($slug);
        $episodes = $this->getDoctrine()
            ->getRepository(Episode::class)
            ->findBy([
                'season' => $season->getId()
            ]);
        return $this->render('season/show.html.twig', [
            'season' => $season,
            'series' => $series,
            'episodes' => $episodes
        ]);
    }

    /**
     * @Route("/{seasonNumber}/{id}/series/{seriesSlug}/{seriesId}/edit", name="edit", methods={"GET","POST"})
     * @ParamConverter("series", class="App\Entity\Series", options={"mapping": {"seriesId": "id"}})
     */
    public function edit(Request $request, Season $season, Series $series): Response
    {
        $formSeason = $this->createForm(SeasonType::class, $season);
        $formSeason->handleRequest($request);
        // Add series in form data of season
        $formSeason->getData()->setSeries($series);
        if ($formSeason->isSubmitted() && $formSeason->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            // Once the form is submitted, valid and the data is inserted in database, you can define the success flash message
            $this->addFlash('success', 'The season has been edited : ' . $series->getTitle() . ' - The season ' . $season->getNumber());
            return $this->redirectToRoute('season_show', [
                'seasonNumber' => $season->getnumber(),
                'id' => $season->getId(),
                'seriesSlug' => $series->getSlug(),
                'seriesId' => $series->getId()
            ]);
        }
        return $this->render('season/edit.html.twig', [
            'season' => $season,
            'series' => $series,
            'formSeason' => $formSeason->createView()
        ]);
    }

    /**
     * @Route("/{id}/delete", name="delete", methods={"POST"})
     * @IsGranted("ROLE_ADMIN", message="No access! Get out!")
     */
    public function delete(Request $request, Season $season): Response
    {
        if ($this->isCsrfTokenValid('delete'.$season->getId(), $request->request->get('_token'))) {
            // Get season before delete, for use in flash message
            $seasonNumber = $season->getNumber();
            // Get series before delete, for use in return
            $series = $season->getSeries();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($season);
            $entityManager->flush();
            $this->addFlash('danger', 'The season is deleted : ' . $series->getTitle() . ' - The season ' . $seasonNumber);
        }
        return $this->redirectToRoute('series_show', [
            'slug' => $series->getSlug(),
            'id' => $series->getId()
        ]);
    }
}
