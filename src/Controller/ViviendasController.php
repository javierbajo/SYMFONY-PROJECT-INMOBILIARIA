<?php


namespace App\Controller;

use App\Entity\Vivienda;
use Doctrine\Migrations\Tools\Console\ConsoleLogger;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ViviendasController extends AbstractController{
//---------------------------------------------------------------------------------------------
    #[Route("/viviendas")]

    public function viviendas(EntityManagerInterface $doctrineCasas){
 
        $repository = $doctrineCasas->getRepository(Vivienda::class);

        $viviendas = $repository->findAll();

        return $this->render("viviendas.html.twig", ["viviendas"=>$viviendas]);

    }
//---------------------------------------------------------------------------------------------
#[Route("/vivienda/{id}", name:"getVivienda")]

public function getTarjetaVivienda(EntityManagerInterface $doctrineCasas, $id){

    $repository = $doctrineCasas -> getRepository(Vivienda::class);
    $vivienda = $repository -> find($id);
     
    return $this->render("viviendaTarjeta.html.twig", ["vivienda"=>$vivienda]);

}

}


