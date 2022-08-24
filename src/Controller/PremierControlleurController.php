<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PremierControlleurController extends AbstractController
{
    #[Route('/premier/controlleur', name: 'app_premier_controlleur')]
    public function index(): Response
    {
        return $this->render('premier_controlleur/page404.html.twig');
        
    }
}
