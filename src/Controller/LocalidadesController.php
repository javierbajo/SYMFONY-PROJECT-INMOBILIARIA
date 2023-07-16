<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LocalidadesController extends AbstractController{




    #[Route("/localidades")]

    public function localidades(){
        $localidadesMessage = "Esto es LOCALIDADES";

        return $this->render("localidades.html.twig", [
            'localidadesMessage' => $localidadesMessage,
        ]);
    }
}