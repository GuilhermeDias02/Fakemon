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

    #[Route('/list', name: 'pokemon_list')]
  
    public function load(): Response
    {   
          return $this->render('LoadingApi/index.html.twig');
}

#[Route('/add', name: 'pokemon_add')]
  
public function add(): Response
{   
      return $this->render('LoadingApi/add.html.twig');
}

#[Route('/pokemon/modify/{id?}', name: 'pokemon_modify')]
public function modify($id): Response
{
    return $this->render('LoadingApi/modify.html.twig', [
        'id' => $id
    ]);
}


  }