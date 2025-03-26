<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class OrangePuppyController extends AbstractController
{
    #[Route('/', name: 'app_orange_puppy')]
    public function index(): Response
    {
        return $this->render('orange_puppy/index.html.twig', [
            'controller_name' => 'OrangePuppyController',
        ]);
    }
}
