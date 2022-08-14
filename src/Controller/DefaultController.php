<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="app_index")
     */
    public function index(): Response
    {
        return $this->render('index.html.twig');
    }

    public function navbarTop(CategoryRepository $categoryRepository): Response
    {
        return $this->render('includes/_navbar.html.twig', [
            'categories' => $categoryRepository->findBy([], ['id' => 'DESC'])
        ]);
    }
}