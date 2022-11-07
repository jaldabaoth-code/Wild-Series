<?php

namespace App\Controller;

use App\Entity\Actor;
use App\Form\ActorType;
use App\Repository\ActorRepository;
use App\Repository\SeriesRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/actor", name="actor_")
 */
class ActorController extends AbstractController
{
    /**
     * @Route("", name="index")
     */
    public function index(ActorRepository $actorRepository): Response
    {
        return $this->render('actor/index.html.twig', [
            'actors' => $actorRepository->findAll()
        ]);
    }

    /**
     * @Route("/new", name="new")
     */
    public function new(Request $request): Response
    {
        $actor = new Actor();
        $formActor = $this->createForm(ActorType::class, $actor);
        $formActor->handleRequest($request);
        if ($formActor->isSubmitted() && $formActor->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($actor);
            $entityManager->flush();
            $actorName = $actor->getName();
            $this->addFlash('success', 'The actor has been added : ' . $actorName);
            return $this->redirectToRoute('actor_show', [
                'actorName' => $actorName,
                'id' => $actor->getId()
            ]);
        }
        return $this->render('actor/new.html.twig', [
            'actor' => $actor,
            'formActor' => $formActor->createView()
        ]);
    }

    /**
     * @Route("/{actorName}/{id}/show", name="show")
     */
    public function show(Actor $actor, SeriesRepository $seriesRepository): Response
    {
        if (!$actor) {
            throw $this->createNotFoundException(
                'The actor was not found'
            );
        }
        $seasonsSeries = [];
        foreach($actor->getSeasons() as $season) {
            $seasonsSeries[] = $seriesRepository->findBy(['id' => $season->getSeries()])[0];
        }
        // Removes duplicate values from an array
        $series = array_unique($seasonsSeries, SORT_REGULAR);
        return $this->render('actor/show.html.twig', [
            'actor' => $actor,
            'series' => $series
        ]);
    }

    /**
     * @Route("/{actorName}/{id}/edit", name="edit")
     */
    public function edit(Request $request, Actor $actor): Response
    {
        $formActor = $this->createForm(ActorType::class, $actor);
        $formActor->handleRequest($request);
        if ($formActor->isSubmitted() && $formActor->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $actorName = $actor->getName();
            $this->addFlash('success', 'The actor has been edited : ' . $actorName);
            return $this->redirectToRoute('actor_show', [
                'actorName' => $actorName,
                'id' => $actor->getId()
            ]);
        }
        return $this->render('actor/edit.html.twig', [
            'actor' => $actor,
            'formActor' => $formActor->createView()
        ]);
    }

    /**
     * @Route("/{id}/delete", name="delete")
     */
    public function delete(Request $request, Actor $actor): Response
    {
        if ($this->isCsrfTokenValid('delete' . $actor->getId(), $request->request->get('_token'))) {
            // Get actor name before delete, for use them in flash message
            $actorName = $actor->getName();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($actor);
            $entityManager->flush();
            $this->addFlash('danger', 'The actor is deleted : ' . $actorName);
        }
        return $this->redirectToRoute('actor_index');
    }
}
