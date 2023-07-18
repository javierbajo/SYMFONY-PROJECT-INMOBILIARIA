<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController{




    #[Route("/admin")]

    public function admin(){
        $adminMessage = "Esto es ADMIN";
        // $this->denyAccessUnlessGranted('ROLE_ADMIN');

        return $this->render("admin.html.twig", [
            'adminMessage' => $adminMessage,
        ]);
    }
}