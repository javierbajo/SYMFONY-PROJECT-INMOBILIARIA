<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ViviendasController extends AbstractController{




    #[Route("/viviendas")]

    public function viviendas(){
        $viviendasMessage = "Esto es VIVIENDAS";

        return $this->render("viviendas.html.twig", [
            'viviendasMessage' => $viviendasMessage,
        ]);
    }
}