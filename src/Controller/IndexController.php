<?php

namespace App\Controller;

use App\Repository\PodcastRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    public const ELEMENTOS_POR_PAGINA = 1;
    
    #[Route('/', name: 'app_index')]
    public function index( PodcastRepository $podcastRepository): Response
    {
        $podcasts = $podcastRepository->findAll();
        return $this->render('index/index.html.twig', [
            'podcasts' => $podcasts,
        ]);
    }
}
