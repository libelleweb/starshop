<?php

namespace App\Controller;

use App\Model\Starship;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StarshipApiController extends AbstractController
{
    #[Route('/api/starships', name: 'api_starships')]
    public function getCollection(): Response
    {
        $starships = [
            new Starship(
                1,
                'Starship 1',
                'Latte',
                'Olexander'
            ),
            new Starship(
                2,
                'Starship 1',
                'Latte',
                'Anastasia'
            )
        ];
        // return new Response(json_encode($starships));
        return $this->json($starships);
    }
}
