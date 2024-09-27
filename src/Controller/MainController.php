<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {
        $starshipCount = 99;

        $myShip = [
            'name' => 'Jedi Starship',
            'model' => 'Starship',
            'manufacturer' => 'Jedi Order',
            'cost_in_credits' => '100000',
            'length' => '20',
            'max_atmosphering_speed' => '1000',
            'crew' => '1',
            'passengers' => '1',
            'cargo_capacity' => '100',
            'consumables' => '1 month',
            'hyperdrive_rating' => '1.0',
            'MGLT' => '100',
            'starship_class' => 'Starfighter',
        ];

        return $this->render('main/homepage.html.twig', [
            'numberOfStarships' => $starshipCount,
            'myShip' => $myShip,
        ]);
    }
}
