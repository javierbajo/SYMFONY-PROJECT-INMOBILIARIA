<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactoController extends AbstractController{




    #[Route("/contacto")]

    public function contacto(){
        $contactoMessage = "Esto es CONTACTO";

        return $this->render("contacto.html.twig", [
            'contactoMessage' => $contactoMessage,
        ]);
    }
}