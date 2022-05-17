<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Exe01Controller extends AbstractController
{
    #[Route('/exe01/candidat/{name}', name: 'exe01',  methods: ['GET', 'POST'])]
    
    public function index(string $name): Response
    {

/*         $param = array(
            'name' => "David",
            'firstname' => "Sayag"
        );

        $name = 'David';
        $firstname = 'Sayag'; */

        // return $this->render('exe01/index.html.twig', toto('name', 'firstname'));
        // return $this->render('exe01/index.html.twig', $param);
        return $this->render('exe01/index.html.twig',
            ['name' => $name,
        ]);
    }

    #[Route('/exe01/candidat/{numeroSecu}', name: 'get_numero', requirements: ['numeroSecu' => '\d+'], methods: ['GET'])]

    public function getNumeroSecu(int $numeroSecu)
    {

        return $this->render('exe01/index.html.twig', [
            'numeroSecu'  => $numeroSecu,
        ]);
    }
}