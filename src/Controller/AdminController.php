<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController{




    #[Route("/admin")]

    public function viviendas(){
        $adminMessage = "Esto es ADMIN";

        return $this->render("admin.html.twig", [
            'adminMessage' => $adminMessage,
        ]);
    }
}