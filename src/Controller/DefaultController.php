<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController{
    #[Route("/saludo/{name}")]
    public function saludo($name){
        return new Response("<h1>Hola $name</h1>", 200, []);
    }

    // #[Route("/")]
    // public function home(){
    //     return $this->render("base.html.twig");
    // }
}