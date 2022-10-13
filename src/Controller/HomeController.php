<?php

namespace App\Controller;

use App\Repository\SerieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(SerieRepository $serieRepository): Response
    {
        // Get the last 3 series from the database
        $lastSeries = $serieRepository->findBy(array(),array('id'=>'DESC'),3,0);
        return $this->render('home/index.html.twig', [
            'lastSeries' => $lastSeries
        ]);
    }
}
