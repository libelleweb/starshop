<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function indexStarShop(): Response
    {
        $starshipCount = 333;

        $myShip = [
            'name' => 'StarshipAN',
            'class' => 'Garden',
            'captain' => 'professor mr. alex',
            'status' => 'In progress'
        ];
        return $this->render('main/indexStarShop.html.twig', [
            'numberOfStarshipCount' => $starshipCount,
            'myShip' => $myShip
        ]);
    }
}
