<?php

namespace App\Controller;

use App\Entity\Actor;
use App\Form\ActorType;
use App\Repository\ActorRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/actors", name="actor_")
 */
class ActorController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(ActorRepository $actorRepository): Response
    {
        return $this->render('actor/index.html.twig', [
            'actors' => $actorRepository->findAll(),
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

            return $this->redirectToRoute('actor_index');
        }

        return $this->render('actor/new.html.twig', [
            'actor' => $actor,
            'formActor' => $formActor->createView(),
        ]);
    }

    /**
     * @Route("/show/{id}", name="show")
     *
     * @return Response
     */
    public function show(Actor $actor): Response
    {
        if (!$actor) {
            throw $this->createNotFoundException(
                'No actor with id : ' . $actor->getId() . ' found in actor\'s table.'
            );
        }

        return $this->render('actor/show.html.twig', [
            'actor' => $actor,
        ]);
    }

        /**
     * @Route("/{id}/edit", name="edit")
     */
    public function edit(Request $request, Actor $actor): Response
    {
        $formActor = $this->createForm(ActorType::class, $actor);
        $formActor->handleRequest($request);

        if ($formActor->isSubmitted() && $formActor->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('actor_index');
        }

        return $this->render('actor/edit.html.twig', [
            'actor' => $actor,
            'formActor' => $formActor->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="delete")
     */
    public function delete(Request $request, Actor $actor): Response
    {
        if ($this->isCsrfTokenValid('delete' . $actor->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($actor);
            $entityManager->flush();
        }

        return $this->redirectToRoute('actor_index');
    }
}
