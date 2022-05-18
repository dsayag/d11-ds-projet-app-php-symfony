<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Exe03Controller extends AbstractController
{
    #[Route('/exe03', name: 'app_exe03')]
    public function index(): Response
    {
        return $this->render('exe03/index.html.twig', [
            'controller_name' => 'Exe03Controller',
        ]);
    }
}
