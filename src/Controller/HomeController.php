<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController{




    #[Route("/", name:"home")]

    public function home(){
        $homeMessage = "Esto es el HOME";

        return $this->render("home.html.twig", [
            'homeMessage' => $homeMessage,
        ]);
    }
}