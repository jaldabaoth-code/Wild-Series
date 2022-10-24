<?php

namespace App\Controller;

use App\Repository\SeriesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(SeriesRepository $seriesRepository): Response
    {
        // Get the last 3 series from the database
        $lastSeries = $seriesRepository->findBy(array(),array('id'=>'DESC'),3,0);
        return $this->render('home/index.html.twig', [
            'lastSeries' => $lastSeries
        ]);
    }
}
