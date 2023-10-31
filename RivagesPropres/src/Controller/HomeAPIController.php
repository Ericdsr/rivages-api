<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeAPIController extends AbstractController
{
    #[Route('', name: 'app_home_a_p_i')]
    public function index(): Response
    {
        return $this->render('home_api/index.html.twig', [
            'controller_name' => 'HomeAPIController',
        ]);
    }
}
