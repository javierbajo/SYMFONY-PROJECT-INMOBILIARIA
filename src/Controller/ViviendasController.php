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
    #[Route("/new/viviendas")]

    public function newVivienda(EntityManagerInterface $doctrineCasas){

        $vivienda1 = new Vivienda;
        $vivienda1->setHouseName("Casa independiente en Cala Llombards");
        $vivienda1->setHouseType("Casa independiente");
        $vivienda1->setHouseSurface(580);
        $vivienda1->setHouseRooms(6);
        $vivienda1->setHouseDescription("Moderna y lujosa Finca con vistas al mar a tan solo 1 km de la playa de Cala LLombards. Construida en 2021, dispone de 6 habitaciones, jardín con piscina, suelo radiante por aerotermia y un garaje de 36m2. Acabado en materiales de primeras marcas con calidades de lujo");
        $vivienda1->setHouseBathrooms(4);
        $vivienda1->setHouseImg("https://img3.idealista.com/blur/WEB_DETAIL_TOP-L-L/0/id.pro.es.image.master/7b/af/a3/1042187829.jpg");
        $vivienda1->setHousePrice(4900000);

        $vivienda2 = new Vivienda;
        $vivienda2->setHouseName("Casa independiente en calle 73,2 Port d'Andratx");
        $vivienda2->setHouseType("Casa independiente");
        $vivienda2->setHouseSurface(321);
        $vivienda2->setHouseRooms(6);
        $vivienda2->setHouseDescription("La villa está situada en la tranquila ladera de Port d'Andratx, con una espectacular vista panorámica al mar que se puede disfrutar desde todas las habitaciones y terrazas. Una caminata rápida lo lleva a una pequeña playa de arena y unos minutos más de caminata lo llevan a los restaurantes frente al puerto que sirven almuerzos del día y cócteles para contemplar la puesta de sol. Las habitaciones y las zonas comunes se abren a grandes terrazas para aprovechar al máximo las cautivadoras vistas al mar azul, lo que proporciona el lugar perfecto para pasar una tarde observando yates bajo el sol de Mallorca.");
        $vivienda2->setHouseBathrooms(6);
        $vivienda2->setHouseImg("https://img3.idealista.com/blur/WEB_DETAIL-XL-L/0/id.pro.es.image.master/72/34/a9/1088894150.jpg");
        $vivienda2->setHousePrice(7900000);

        $doctrineCasas -> persist($vivienda1);
        $doctrineCasas -> persist($vivienda2);

        $doctrineCasas -> flush();

        return new Response("Casas cargadas correctamente");
    }
//---------------------------------------------------------------------------------------------
#[Route("/vivienda/{id}", name:"getVivienda")]

public function getTarjetaVivienda(EntityManagerInterface $doctrineCasas, $id){

    $repository = $doctrineCasas -> getRepository(Vivienda::class);
    $vivienda = $repository -> find($id);
     
    return $this->render("viviendaTarjeta.html.twig", ["vivienda"=>$vivienda]);

}

}


