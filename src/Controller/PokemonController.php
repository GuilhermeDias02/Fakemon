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

    #[Route('/', name: 'pokemon_list')]
  
    public function load(): Response
    {   
          return $this->render('LoadingApi/index.html.twig');
}

#[Route('/pokemon/add', name: 'pokemon_add')]
  
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