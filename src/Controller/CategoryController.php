<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Series;
use App\Form\CategoryType;
use App\Repository\CategoryRepository;
use App\Repository\SeriesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @Route("/category", name="category_")
 */
class CategoryController extends AbstractController
{
    /**
     * @Route("/new", name="new")
     * @IsGranted("ROLE_ADMIN")
     */
    public function new(Request $request): Response
    {
        // Create a new Category Object
        $category = new Category();
        // Create the associated Form
        $formCategory = $this->createForm(CategoryType::class, $category);
        // Get data from HTTP request
        $formCategory->handleRequest($request);
        // Was the form submitted ?
        if ($formCategory->isSubmitted() && $formCategory->isValid()) {
            // Get the Entity Manager
            $entityManager = $this->getDoctrine()->getManager();
            // Persist Category Object
            $entityManager->persist($category);
            // Flush the persisted object
            $entityManager->flush();
            // Finally redirect to categories list
            return $this->redirectToRoute('series_index');
        }
        // Render the form
        return $this->render('category/new.html.twig', [
            'formCategory' => $formCategory->createView()
        ]);
    }

    /**
     * @Route("/{categoryName}/{id}/show", name="show")
     */
    public function show(string $categoryName): Response
    {
        $category = $this->getDoctrine()
            ->getRepository(Category::class)
            ->findOneBy(['name' => $categoryName]);
        // If category not found
        if (!$category) {
            throw $this->createNotFoundException(
                'Error 404 No category found.'
            );
        }
        $series = $this->getDoctrine()
            ->getRepository(Series::class)
            ->findBy(['category' => $category->getId()], ['title' => 'ASC'], 3);
        return $this->render('category/show.html.twig', [
            'category' => $category,
            'series' => $series
        ]);
    }

    /**
     * @Route("/{categoryName}/{id}/edit", name="edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Category $category): Response
    {
        $formCategory = $this->createForm(CategoryType::class, $category);
        $formCategory->handleRequest($request);
        if ($formCategory->isSubmitted() && $formCategory->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            // Once the form is submitted, valid and the data is inserted in database, you can define the success flash message
            $this->addFlash('success', 'The category has been edited : ' . $category->getName());
            return $this->redirectToRoute('category_show', [
                'categoryName' => $category->getName(),
                'id' => $category->getId()
            ]);
        }
        return $this->render('category/edit.html.twig', [
            'category' => $category,
            'formCategory' => $formCategory->createView()
        ]);
    }

    /**
     * @Route("/{id}/delete", name="delete", methods={"POST"})
     */
    public function delete(Request $request, Category $category): Response
    {
        if ($this->isCsrfTokenValid('delete' . $category->getId(), $request->request->get('_token'))) {
            // Get category name before delete, for use in flash message
            $categoryName = $category->getName();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($category);
            $entityManager->flush();
            $this->addFlash('danger', 'The category is deleted : ' . $categoryName);
        }
        return $this->redirectToRoute('series_index');
    }

    /**
     * Dropdown in navbar, for display series categories
     */
    public function dropdown(CategoryRepository $categoryRepository): Response
    {
        $categories = $categoryRepository->findBy([], ['name' => 'ASC']);
        return $this->render('includes/_dropdown_navbar.html.twig', [
            'categories' => $categories
        ]);
    }
}
