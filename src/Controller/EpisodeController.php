<?php

namespace App\Controller;

use App\Entity\Season;
use App\Entity\Series;
use App\Entity\Comment;
use App\Entity\Episode;
use App\Service\Slugify;
use App\Form\CommentType;
use App\Form\EpisodeType;
use Symfony\Component\Mime\Email;
use App\Repository\CommentRepository;
use App\Repository\EpisodeRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

/**
 * @Route("/episode", name="episode_")
 */
class EpisodeController extends AbstractController
{
    /**
     * @Route("/season/{seasonNumber}/{seasonId}/series/{seriesSlug}/{seriesId}/new", name="new", methods={"GET","POST"})
     * @ParamConverter("season", class="App\Entity\Season", options={"mapping": {"seasonId": "id"}})
     * @ParamConverter("series", class="App\Entity\Series", options={"mapping": {"seriesId": "id"}})
     */
    public function new(Request $request, Slugify $slugify, MailerInterface $mailer, Season $season, Series $series): Response
    {
        $episode = new Episode();
        $formEpisode = $this->createForm(EpisodeType::class, $episode);
        $formEpisode->handleRequest($request);
        // Add season in form data of episode
        $formEpisode->getData()->setSeason($season);
        if ($formEpisode->isSubmitted() && $formEpisode->isValid()) {
            $slugEpisode = $slugify->generate($episode->getTitle());
            $episode->setSlug($slugEpisode);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($episode);
            $entityManager->flush();
            // Once the form is submitted, valid and the data is inserted in database, you can define the success flash message
            $this->addFlash('success', 'The new episode has been added : ' . $series->getTitle() . ' - season ' . $season->getNumber() . ' - The episode ' . $episode->getTitle());
            $email = (new Email())
                    ->from($this->getParameter('mailer_from'))
                    ->to('your_email@example.com')
                    ->subject('A new episode has just been published !')
                    ->html($this->renderView('mail/newEpisodeEmail.html.twig', [
                        'episode' => $episode,
                        'season' => $season,
                        'series' => $series
                    ]));
            $mailer->send($email);
            return $this->redirectToRoute('episode_show', [
                'episodeSlug' => $episode->getSlug(),
                'id' => $episode->getId(),
                'seasonNumber' => $season->getNumber(),
                'seasonId' => $season->getId(),
                'seriesSlug' => $series->getSlug(),
                'seriesId' => $series->getId()
            ]);
        }
        return $this->render('episode/new.html.twig', [
            'episode' => $episode,
            'season' => $season,
            'series' => $series,
            'formEpisode' => $formEpisode->createView()
        ]);
    }

    /**
     * @Route("/{episodeSlug}/{id}/season/{seasonNumber}/{seasonId}/series/{seriesSlug}/{seriesId}/show", name="show")
     * @ParamConverter("series", class="App\Entity\Series", options={"mapping": {"seriesId": "id"}})
     * @ParamConverter("season", class="App\Entity\Season", options={"mapping": {"seasonId": "id"}})
     */
    public function show(Request $request, Slugify $slugify, CommentRepository $commentRepository, Episode $episode, Season $season, Series $series): Response
    {
        // Comment form in episode
        $comment = new Comment();
        $formComment = $this->createForm(CommentType::class, $comment);
        $formComment->handleRequest($request);
        $comment->setEpisode($episode);
        if ($formComment->isSubmitted() && $formComment->isValid() && $this->getUser()) {
            $entityManager = $this->getDoctrine()->getManager();
            $comment->setAuthor($this->getUser());
            $entityManager->persist($comment);
            $entityManager->flush();
            return $this->redirect($request->getUri());
        }
        // Episode rating
        $averageRateEpisode = $commentRepository->averageRateByEpisodeId($episode->getId());
        $averageRate = round($averageRateEpisode[0]['rate_avg'], 2);
        return $this->render('episode/show.html.twig', [
            'episode' => $episode,
            'season' => $season,
            'series' => $series,
            'averageRate' => $averageRate,
            'formComment' => $formComment->createView()
        ]); 
    }

    /**
     * @Route("/{episodeSlug}/{id}/season/{seasonNumber}/{seasonId}/series/{seriesSlug}/{seriesId}/edit", name="edit", methods={"GET","POST"})
     * @ParamConverter("series", class="App\Entity\Series", options={"mapping": {"seriesId": "id"}})
     * @ParamConverter("season", class="App\Entity\Season", options={"mapping": {"seasonId": "id"}})
     */
    public function edit(Request $request, Slugify $slugify, Episode $episode, Season $season, Series $series): Response
    {
        $formEpisode = $this->createForm(EpisodeType::class, $episode);
        $formEpisode->handleRequest($request);
        if ($formEpisode->isSubmitted() && $formEpisode->isValid()) {
            $slugEpisode = $slugify->generate($episode->getTitle());
            $episode->setSlug($slugEpisode);
            $this->getDoctrine()->getManager()->flush();
            // Once the form is submitted, valid and the data is inserted in database, you can define the success flash message
            $this->addFlash('success', 'The episode has been edited : ' . $series->getTitle() . ' - season ' . $season->getNumber() . ' - The episode ' . $episode->getTitle());
            return $this->redirectToRoute('episode_show', [
                'episodeSlug' => $episode->getSlug(),
                'id' => $episode->getId(),
                'seasonNumber' => $season->getNumber(),
                'seasonId' => $season->getId(),
                'seriesSlug' => $series->getSlug(),
                'seriesId' => $series->getId()
            ]);
        }
        return $this->render('episode/edit.html.twig', [
            'episode' => $episode,
            'season' => $season,
            'series' => $series,
            'formEpisode' => $formEpisode->createView()
        ]);
    }

    /**
     * @Route("/{id}/delete", name="delete", methods={"POST"})
     */
    public function delete(Request $request, Episode $episode): Response
    {
        if ($this->isCsrfTokenValid('delete'.$episode->getId(), $request->request->get('_token'))) {
            // Get season and series before delete, for use them in return
            $season = $episode->getSeason();
            $series = $season->getSeries();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($episode);
            $entityManager->flush();
            $this->addFlash('danger', 'The episode is deleted : ' . $series->getTitle() . ' - season ' . $season->getNumber() . ' - The episode ' . $episode->getTitle());
        }
        return $this->redirectToRoute('season_show', [
            'seasonNumber' => $season->getnumber(),
            'id' => $season->getId(),
            'seriesSlug' => $series->getSlug(),
            'seriesId' => $series->getId()
        ]);
    }
}
