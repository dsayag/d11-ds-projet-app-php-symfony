<?php

namespace App\Controller;

use App\Repository\QuoteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;


class QuoteController extends AbstractController {

    #[Route('', name: 'index')]

    public function index(QuoteRepository $quoteRepository): Response {

        return $this->render('quote/index.html.twig', ['quotes' => $quoteRepository->findAll(),]);
    }

    /* public function index(): RedirectResponse {
        $url = $this->generateUrl('exo_exe01', ['name' => 'Mooiiiiiiiii'], UrlGeneratorInterface::ABSOLUTE_URL);
        return $this->redirect($url);
        //return $this->redirectToRoute('app_exe03');
    } */
}