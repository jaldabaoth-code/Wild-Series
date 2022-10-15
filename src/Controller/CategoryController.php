<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Serie;
use App\Form\CategoryType;
use App\Repository\CategoryRepository;
use App\Repository\SerieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

    /**
     * @Route("/categories", name="category_")
     */
class CategoryController extends AbstractController
{
    /**
     *
     * @Route("/", name="index")
     * @return Response A response instance
     */
    public function index(SerieRepository $serieRepository): Response
    {
        $categories = $this->getDoctrine()
        ->getRepository(Category::class)
        ->findAll();
        for ($i = 0; $i <= sizeof($categories)-1; $i++) {
            $seriesCategorie = $serieRepository->findByCategory($categories[$i]->getId());
            if (isset($seriesCategorie[0])) {
                $seriesCategories[$categories[$i]->getName()] = $seriesCategorie[0];
            }
        }
        return $this->render('category/index.html.twig', ['categories' => $categories, 'seriesCategories' => $seriesCategories]);
    }

    /**
     * The controller for the category add form
     * Display the form or deal with it
     * @Route("/new", name="new")
     * @IsGranted("ROLE_ADMIN")
     */
    public function new(Request $request) : Response
    {
        // Create a new Category Object
        $category = new Category();
        // Create the associated Form
        $form = $this->createForm(CategoryType::class, $category);
        // Get data from HTTP request
        $form->handleRequest($request);
        // Was the form submitted ?
        if ($form->isSubmitted()) {
            // Deal with the submitted data
            // Get the Entity Manager
            $entityManager = $this->getDoctrine()->getManager();
            // Persist Category Object
            $entityManager->persist($category);
            // Flush the persisted object
            $entityManager->flush();
            // Finally redirect to categories list
            return $this->redirectToRoute('category_index');
        }
        // Render the form
        return $this->render('category/new.html.twig', ["form" => $form->createView()]);
    }

    /**
     *
     * @Route("/{categoryName}", name="show")
     * @return Response
     */
    public function show(string $categoryName): Response
    {
        $category = $this->getDoctrine()
        ->getRepository(Category::class)
        ->findOneBy(['name' => $categoryName]);
        
        if (!$category) {
            throw $this->createNotFoundException(
                'Error 404 No category found.'
            );
        }

        $series = $this->getDoctrine()
        ->getRepository(Serie::class)
        ->findBy(['category' => $category->getId()],
                    ['id' => 'DESC'], 3);
                    
        return $this->render('category/show.html.twig', [
            'series' => $series,
        ]);
    }

    /**
     * Dropdown in navbar, for display series categories
     */
    public function dropdown(CategoryRepository $categoryRepository): Response
    {
        $categories = $categoryRepository->findBy([], ['id' => 'DESC']);
        return $this->render('includes/_dropdown_navbar.html.twig', [
            'categories' => $categories
        ]);
    }
}
