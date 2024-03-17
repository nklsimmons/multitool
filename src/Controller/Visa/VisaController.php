<?php

namespace App\Controller\Visa;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/visa')]
class VisaController extends AbstractController
{
    #[Route('/', name: 'app_visa')]
    public function index(): Response
    {
        return $this->render('visa/index.html.twig', [
            'controller_name' => 'VisaController',
        ]);
    }
}
