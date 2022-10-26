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
 * @Route("/episode")
 */
class EpisodeController extends AbstractController
{
    /**
     * @Route("season/{seasonId}/series/{seriesSlug}/new/", name="episode_new", methods={"GET","POST"})
     * @ParamConverter("season", class="App\Entity\Season", options={"mapping": {"seasonId": "id"}})
     * @ParamConverter("series", class="App\Entity\Series", options={"mapping": {"seriesSlug": "slug"}})
     */
    public function new(Request $request, Slugify $slugify, MailerInterface $mailer, Season $season, Series $series): Response
    {
        $episode = new Episode();
        $form = $this->createForm(EpisodeType::class, $episode);
        $form->handleRequest($request);
        // Add season in form data of episode
        $form->getData()->setSeason($season);
        if ($form->isSubmitted() && $form->isValid()) {
            $slug = $slugify->generate($episode->getTitle());
            $episode->setSlug($slug);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($episode);
            $entityManager->flush();
            // Once the form is submitted, valid and the data is inserted in database, you can define the success flash message
            $this->addFlash('success', 'The new episode has been added');
            $email = (new Email())
                    ->from($this->getParameter('mailer_from'))
                    ->to('your_email@example.com')
                    ->subject('A new episode has just been published !')
                    ->html($this->renderView('mail/newEpisodeEmail.html.twig', ['episode' => $episode]));
            $mailer->send($email);
/*             var_dump($season);
            die; */
            return $this->redirectToRoute('episode_show', [
                'seasonNumber' => $season->getNumber(),
                'slug' => $series->getSlug(),
                'id' => $season->getId()
            ]
        );
        }
        //seasonNumber: season.number, slug: series.slug, id: season.id
        return $this->render('episode/new.html.twig', [
            'season' => $season,
            'episode' => $episode,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{episodeSlug}/{id}/season/{seasonNumber}/{seasonId}/series/{seriesSlug}/{seriesId}", name="episode_show")
     * @ParamConverter("series", class="App\Entity\Series", options={"mapping": {"seriesSlug": "slug"}})
     * @ParamConverter("season", class="App\Entity\Season", options={"mapping": {"seasonId": "id"}})
     */
    public function show(Request $request, Slugify $slugify, CommentRepository $commentRepository, Series $series, Season $season, Episode $episode): Response
    {
        $comment = new Comment();
        $averageRateEpisode = $commentRepository->averageRateByEpisodeId($episode->getId());
        $averageRate = round($averageRateEpisode[0]['rate_avg'], 2);
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
        $slug = $slugify->generate($series->getTitle());
        $series->setSlug($slug);
        return $this->render('episode/show.html.twig', [
            'series' => $series,
            'season' => $season,
            'episode' => $episode,
            'averageRate' => $averageRate,
            'formComment' => $formComment->createView(),
        ]); 
    }

    /**
     * @Route("/{id}/{slug}/edit", name="episode_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Episode $episode, Slugify $slugify): Response
    {
        $form = $this->createForm(EpisodeType::class, $episode);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $slug = $slugify->generate($episode->getTitle());
            $episode->setSlug($slug);
            $this->getDoctrine()->getManager()->flush();
            
            // Once the form is submitted, valid and the data inserted in database, you can define the success flash message
            $this->addFlash('success', 'The series has been edited');

            return $this->redirectToRoute('episode_index');
        }

        return $this->render('episode/edit.html.twig', [
            'episode' => $episode,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="episode_delete", methods={"POST"})
     */
    public function delete(Request $request, Episode $episode): Response
    {
        if ($this->isCsrfTokenValid('delete'.$episode->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($episode);
            $entityManager->flush();
            $this->addFlash('danger', 'The series is deleted');
        }

        return $this->redirectToRoute('episode_index');
    }
}
