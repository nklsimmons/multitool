<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class MainController extends AbstractController
{
    #[Route('/', name: 'main_index', methods: ['GET'])]
    public function mainPage(): Response
    {
        return $this->render('main.html.twig');
    }
}