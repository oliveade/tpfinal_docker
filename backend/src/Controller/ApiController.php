<?php

namespace App\Controller;

use App\Repository\TodoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ApiController extends AbstractController
{
    #[Route('/todos', name: 'todos_list', methods: ['GET'])]
    public function todosView(TodoRepository $todoRepository): Response
    {
        $todos = $todoRepository->findAll();
        return $this->render('todos/index.html.twig', [
            'todos' => $todos,
        ]);
    }
}
