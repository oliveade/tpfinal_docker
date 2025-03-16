<?php
namespace App\Controller;


use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class UserController extends AbstractController
{
    #[Route('/api/todos', name: 'get_todos', methods: ['GET'])]
    public function getTodos(TodoRepository $todoRepository): JsonResponse
    {
        return $this->json($todoRepository->findAll());
    }
}
