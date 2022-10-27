<?php

declare(strict_types=1);

namespace App\Controller;

use App\Service\Subject;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    private array $posts;

    public function __construct(
        private readonly Subject $subject
    ) {
        $this->posts = $this->subject->getPosts();
    }

    #[Route('/', name: 'app_homepage')]
    public function index(): Response
    {
        return $this->render('index.html.twig', [
            'posts' => $this->posts
        ]);
    }

    #[Route('/embedded', name: 'embedded')]
    public function embedded(): Response
    {
        return $this->render('embedded.html.twig', [
            'posts' => $this->posts
        ]);
    }

    #[Route('/json', name: 'json')]
    public function asJson(): Response
    {
        return new JsonResponse($this->posts);
    }
}
