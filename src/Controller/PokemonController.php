<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class PokemonController extends AbstractController
{
        #[Route('/pokemon', name: 'app_pokemon', methods: 'GET')]

        public function index(HttpClientInterface $httpClient)
        {   
              //  dd(1);
       
                 $response = $this-> $httpClient ->request(
                'GET',
                'http://127.0.0.1:8000/api/pokema' 
        );

           // return $this->render('pokemon/index.html.twig');
        }
    }

