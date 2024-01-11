<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\HttpClient;
use Symfony\Component\HttpFoundation\Request;

class PokemonController extends AbstractController
{
        #[Route('/pokemon/{pokemons?}', name: 'app_pokemon')]

        public function index($pokemons,Request $request): Response
        {
          /*   
          if ($request->attributes->has('pokemons')) {
            $pokemons = json_decode(urldecode($request->attributes->get('pokemons')), true);
        }
    
        // $pokemons devrait maintenant contenir les données décodées
        dd($pokemons);      
*/

              return $this->render('pokemon/index.html.twig');        
          }


          #[Route('/pokemonLoading', name: 'app_loading')]

          public function chargement(): Response
          {   
  
                return $this->render('LoadingApi/LoadingPokemon.html.twig');
    }
    #[Route('/l', name: 'app_l')]
  
    public function load(): Response
    {   
          return $this->render('LoadingApi/dd.html.twig');
}

  }