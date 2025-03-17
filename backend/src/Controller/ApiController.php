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
    #[Route('/api/todos', name: 'get_todos', methods: ['GET'])]
    public function getTodos(TodoRepository $todoRepository): JsonResponse
    {
        return $this->json($todoRepository->findAll());
    }
}
