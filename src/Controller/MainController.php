<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController {

    #[Route('/', name:'index')]
    public function homepage() : Response
    {
        //Ce tableau associatif ressemble à celui que l'on obtiendrait en faisant
        //une requête SELECT sur une BDD
        $musicTracks = [
            ['title' => 'Poker Face', 'artist' => 'Lady Gaga'],
            ['title' => 'Blue', 'artist' => 'Eiffel 65'],
            ['title' => 'Light Up the Night', 'artist' => 'The Protomen'],
            ['title' => 'Ride the Lightning', 'artist' => 'Metallica'],
            ['title' => 'Dead on Time', 'artist' => 'Queen'],
            ['title' => 'Born in the USA', 'artist' => 'Bruce Springsteen'],
        ];

        //On le balance dans data
        $data =[
            'variableTitre' => "Accueil",
            'songList' => $musicTracks
        ];
        return $this->render("simpleTest.html.twig", $data);
    }

}




