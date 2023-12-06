<?php

namespace App\Controller;

use App\Entity\Pokemon;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PokemonController extends AbstractController
{
    #[Route('/pokemon', name: 'app_pokemon')]
    public function index(ManagerRegistry $doctrine): Response
    {    
        $pokemons = $doctrine->getRepository(Pokemon::class)->findAll();

        return $this->render('pokemon/index.html.twig', [
            'controller_name' => 'PokemonController',
            'pokemons' => $pokemons,

        ]);
    }
}
