<?php


namespace App\Controller;

use App\Entity\Localidad;
use App\Entity\Vivienda;
use Doctrine\Migrations\Tools\Console\ConsoleLogger;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SetViviendasController extends AbstractController
{

    //------------------------------------------------------------------------------
    #[Route("/new/localidades")]

    public function newLocalidad(EntityManagerInterface $doctrine)
    {


        $localidad1 = new Localidad;
        $localidad1->setPlaceName("Palma");
        $localidad1->setPlaceType("Costa");
        $localidad1->setPlacePopulation(409661);
        $localidad1->setPlaceDescription("Mallorca es el nombre con el que se conoce a la isla mayor de las Islas Baleares, y Palma de Mallorca es el nombre de la capital de la isla. Está situada en el lado sur de la isla, y su nombre completo es Palma de Mallorca, aunque a menudo se le llama simplemente Palma.");
        $localidad1->setPlaceImg("https://www.spain.info/export/sites/segtur/.content/imagenes/cabeceras-grandes/baleares/catedral-santamaria-palma-s434080438.jpg_604889389.jpg");

        $localidad2 = new Localidad;
        $localidad2->setPlaceName("Andratx");
        $localidad2->setPlaceType("Costa");
        $localidad2->setPlacePopulation(11004);
        $localidad2->setPlaceDescription("Andrach​​​ o Andraitx​ es un municipio de la comunidad autónoma de Islas Baleares, España. Situado en el sur-oeste de la isla de Mallorca, perteneciente a la comarca de la Sierra de Tramontana, y que dista 30 km de la capital.");
        $localidad2->setPlaceImg("https://img.balearity.com/locations/puerto-andratx-main.jpg");

        $localidad3 = new Localidad;
        $localidad3->setPlaceName("Santanyí");
        $localidad3->setPlaceType("Costa");
        $localidad3->setPlacePopulation(12112);
        $localidad3->setPlaceDescription("Santañí​​​​​ (también escrito Santañy,​​ y oficialmente Santanyí, en catalán) es una localidad y municipio español situado en la parte suroriental de Mallorca, comunidad autónoma de las Islas Baleares. A orillas del mar Mediterráneo, este municipio limita con los de Felanich, Campos y Las Salinas.");
        $localidad3->setPlaceImg("https://media.mallorca-touristguide.com/imagenes/1296/mercado%20de%20santanyi%2029-5-19%20-%20001.jpeg");

        $localidad4 = new Localidad;
        $localidad4->setPlaceName("Inca");
        $localidad4->setPlaceType("Interior");
        $localidad4->setPlacePopulation(12112);
        $localidad4->setPlaceDescription("Inca es una ciudad y municipio español situado en la parte centro-norte de Mallorca, en la comunidad autónoma de las Islas Baleares.");
        $localidad4->setPlaceImg("https://pymstatic.com/119884/inca-psicologos.jpg");

        $localidad5 = new Localidad;
        $localidad5->setPlaceName("Valldemossa");
        $localidad5->setPlaceType("Montaña");
        $localidad5->setPlacePopulation(12112);
        $localidad5->setPlaceDescription("Valldemossa es la definición de pueblo de cuento. Un rincón situado en la Serra de Tramuntana conocido por su belleza natural, su historia y su arquitectura. Además también es conocido por su belleza natural y unas vistas panorámicas de la Serra de Tramuntana, un clima cálido y soleado durante gran parte del año y un encanto irresistible que pervive entre el pasado y el presente, la melancolía y la tradición.");
        $localidad5->setPlaceImg("https://www.caleiatalayotspahotel.com/wp-content/blogs.dir/1564/files/cultura/VALLDEMOSSA.jpg");


//-------------------------------------------------------------------------------

        $repository = $doctrine->getRepository(Vivienda::class); 

        $viviendasPalma = $repository->findBy(array('houseName' => array('Ático en venta en Cort', 'Ático en venta en Cort', 'Ático en venta en Urb. Palma City Centre, Sta Catalina - El Jonquet','Piso en venta en Portixol','Piso en venta en Monti-Sión')));

        $viviendasSantanyi = $repository->findBy(array('houseName' => array('Chalet pareado en venta en calle simonet, 1', 'Casa independiente en Cala Llombards')));
        
        $viviendasInca = $repository->findBy(array('houseName' => array('Casa o chalet independiente en venta en Gran Via de Colom')));

        $viviendasValldemossa = $repository->findBy(array('houseName' => array('Finca rústica en venta en Valldemossa')));

        $viviendasAndratx = $repository->findBy(array('houseName' => array("Piso en venta en Port d'Andratx","Casa independiente en calle 73,2 Port d'Andratx")));
//------------------------------------------------------------------------------
        $vivienda = new Vivienda;

        foreach ($viviendasPalma as $vivienda) {
            $localidad1->addPlaceHouse($vivienda);
        }
        foreach ($viviendasAndratx as $vivienda) {
            $localidad2->addPlaceHouse($vivienda);
        }
        foreach ($viviendasSantanyi as $vivienda) {
            $localidad3->addPlaceHouse($vivienda);
        }
        foreach ($viviendasInca as $vivienda) {
            $localidad4->addPlaceHouse($vivienda);
        }
        foreach ($viviendasValldemossa as $vivienda) {
            $localidad5->addPlaceHouse($vivienda);
        }

        $doctrine->persist($localidad1);
        $doctrine->persist($localidad2);
        $doctrine->persist($localidad3);
        $doctrine->persist($localidad4);
        $doctrine->persist($localidad5);


        $doctrine->flush();

        return new Response("Localidades cargadas correctamente");
    }
}
