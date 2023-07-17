<?php


namespace App\Controller;

use App\Entity\Localidad;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LocalidadesController extends AbstractController{




    #[Route("/localidades")]

    public function localidades(EntityManagerInterface $doctrine){
 
        $repository = $doctrine->getRepository(Localidad::class);

        $localidades = $repository->findAll();

        return $this->render("localidades.html.twig", ["localidades"=>$localidades]);

    }
}