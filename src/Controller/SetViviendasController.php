<?php


namespace App\Controller;

use App\Entity\Vivienda;
use App\Entity\Localidad;
use Doctrine\Migrations\Tools\Console\ConsoleLogger;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SetViviendasController extends AbstractController{

//---------------------------------------------------------------------------------------------
    #[Route("/new/viviendas")]

    public function newVivienda(EntityManagerInterface $doctrine){

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

        $vivienda3 = new Vivienda;
        $vivienda3->setHouseName("Ático en venta en Cort");
        $vivienda3->setHouseType("Ático");
        $vivienda3->setHouseSurface(292);
        $vivienda3->setHouseRooms(3);
        $vivienda3->setHouseDescription("Este excepcional dúplex de tres dormitorios y tres baños ocupa las dos últimas plantas del edificio. Una de sus características más destacadas es la sensacional terraza de la azotea, que ofrece vistas panorámicas de los tejados de la ciudad.

        El nivel inferior del dúplex abarca un amplio y luminoso salón situado en la parte delantera del edificio. Esta habitación cuenta con baldosas antiguas y vigas de madera a la vista, que desprenden encanto y carácter. Dos balcones dan a la calle y ofrecen un lugar encantador para disfrutar del entorno. Hacia la parte trasera de este nivel, encontrará dos dormitorios de generosas dimensiones, cada uno con su propio cuarto de baño.");
        $vivienda3->setHouseBathrooms(3);
        $vivienda3->setHouseImg("https://img3.idealista.com/blur/WEB_DETAIL_TOP-L-L/0/id.pro.es.image.master/a7/41/74/1044981531.jpg");
        $vivienda3->setHousePrice(4750000);

        $vivienda4 = new Vivienda;
        $vivienda4->setHouseName("Ático en venta en Urb. Palma City Centre, Sta Catalina - El Jonquet");
        $vivienda4->setHouseType("Ático");
        $vivienda4->setHouseSurface(425);
        $vivienda4->setHouseRooms(3);
        $vivienda4->setHouseDescription("Exclusivo apartamento tipo loft ubicado en uno de los barrios más solicitados de Palma construido con materiales de alta calidad.

        El apartamento de diseño moderno, ofrecerá una cocina equipada a estándares altos así como entre otros detalles, en la sala de estar una chimenea de suspensión.
        Todos los suelos estarán hechos de madera de alta calidad y los acabados de diseño se combinarán para convertir esta propiedad en una joya inmobiliaria de máximo confort en una zona cosmopolita rodeada por numerosos restaurantes internacionales y cafés de moda. Los techos altos y con vigas de madera expuestas le añadirán un carácter especial. Luces ocultas integradas proporcionaran un ambiente agradable en todo el apartamento. Ventanas de gran tamaño permiten traspasar la luz natural y la gran terraza invita a disfrutar momentos memorables al aire libre ofreciendo paz y tranquilidad mientras se disfruta de las vistas y la piscina.");
        $vivienda4->setHouseBathrooms(3);
        $vivienda4->setHouseImg("https://img3.idealista.com/blur/WEB_DETAIL_TOP-L-L/0/id.pro.es.image.master/80/41/e4/1117878669.jpg");
        $vivienda4->setHousePrice(3800000);

        $vivienda5 = new Vivienda;
        $vivienda5->setHouseName("Piso en venta en Portixol");
        $vivienda5->setHouseType("Piso");
        $vivienda5->setHouseSurface(228);
        $vivienda5->setHouseRooms(4);
        $vivienda5->setHouseDescription("Piso muy exclusivo en la primera línea del Portixol de Palma de Mallorca. Con las mejores vista de Palma para quien gusta del mar y los atardeceres.
        Vivienda amplia con 4 habitaciones 3 baños. La habitación principar es en suite con vista al mar (reformado hace 2 años). La ducha de este baño en suite tiene una espectacular cristalera que da al mar. Salón amplio con terraza balcón de 25m2 frente al mar. Cocina muy amplia y actual, con office, mucho espacio para organización y coladuría lavadero independiente. El agua caliente funciona con gas ciudad.
        Incluye 1 plaza de aparcamiento de 23m2 y 1 trastero de 13m2. Posibildad de comprar una plaza de parking adicional por 58.000€.
        Edificio del 2002. Comunidad muy bien organizada. En zonas comunitarias se cuenta con pista de paddle, 2 piscinas amplias y jardines. Seguridad 24 horas.");
        $vivienda5->setHouseBathrooms(3);
        $vivienda5->setHouseImg("https://img3.idealista.com/blur/WEB_DETAIL_TOP-L-L/0/id.pro.es.image.master/33/95/3a/986637790.jpg");
        $vivienda5->setHousePrice(3600000);

        $vivienda6 = new Vivienda;
        $vivienda6->setHouseName("Piso en venta en Monti-Sión");
        $vivienda6->setHouseType("Piso");
        $vivienda6->setHouseSurface(360);
        $vivienda6->setHouseRooms(3);
        $vivienda6->setHouseDescription("En el corazón del casco antiguo de Palma se encuentra esta mansión catalogada del siglo XVI. Tras una amplia restauración, el hermoso edificio alberga seis lujosos pisos cuya arquitectura, arte moderno y materiales de alta calidad forman una acertada simbiosis.

        Este apartamento está situado en el entresuelo. La superficie construida de 360 m2 se distribuye en tres dormitorios, tres baños y una gran terraza privada que mide unos 150 m2.
        
        Otras características incluyen calefacción por suelo radiante, aire acondicionado, domótica, un gran patio comunitario en la zona de entrada, ascensor y aparcamiento subterráneo para dos coches.");
        $vivienda6->setHouseBathrooms(3);
        $vivienda6->setHouseImg("https://img3.idealista.com/blur/WEB_DETAIL_TOP-L-L/0/id.pro.es.image.master/fc/6f/33/1088814034.jpg");
        $vivienda6->setHousePrice(4300000);

        
        $vivienda7 = new Vivienda;
        $vivienda7->setHouseName("Chalet pareado en venta en calle simonet, 1");
        $vivienda7->setHouseType("Adosado");
        $vivienda7->setHouseSurface(559);
        $vivienda7->setHouseRooms(6);
        $vivienda7->setHouseDescription("Santanyi - Adosado de lujo en el corazón de Santanyi con garaje.

        Una mezcla armoniosa de elegancia y comodidad.
        
        Tenemos la suerte de presentarles nuestra excepcional casa adosada ubicada en el encantador centro de Santanyi.Con una notable área total de 559m2 en una parcela de 325m2, esta magnífica propiedad ofrece una oportunidad inigualable de experimentar el epítome de la vida de lujo.Sumérgete en un mundo de comodidad, estilo y conveniencia, donde cada detalle ha sido cuidadosamente seleccionado para cumplir con los más altos estándares de los propietarios más exigentes.");
        $vivienda7->setHouseBathrooms(4);
        $vivienda7->setHouseImg("https://img3.idealista.com/blur/WEB_DETAIL_TOP-L-L/0/id.pro.es.image.master/7e/54/9c/1140344568.jpg");
        $vivienda7->setHousePrice(1490000);

        $vivienda8 = new Vivienda;
        $vivienda8->setHouseName("Casa o chalet independiente en venta en Gran Via de Colom");
        $vivienda8->setHouseType("Casa independiente");
        $vivienda8->setHouseSurface(1240);
        $vivienda8->setHouseRooms(9);
        $vivienda8->setHouseDescription("Esta finca rural se encuentra a poca distancia de Inca, Palma y de las playas del norte o del sur. Si no quiere prescindir de estar cerca de una ciudad y de pueblos, y no obstante quiere vivir tranquilamente en una fantástica finca rural, entonces esta propiedad no le decepcionará.

        Cada vez son más las personas que vuelven a la agricultura y quieren dedicarse a ella para vivir de forma autosuficiente. Esta independencia es lo que hace que esta finca sea tan interesante. Si sus muros gruesos y sus arcos de piedra, de cientos de años de antigüedad, pudieran hablar, nos contarían historias de tiempos pasados.");
        $vivienda8->setHouseBathrooms(2);
        $vivienda8->setHouseImg("https://img3.idealista.com/blur/WEB_DETAIL_TOP-L-L/0/id.pro.es.image.master/99/24/d5/1138157009.jpg");
        $vivienda8->setHousePrice(2950000);

        $vivienda9 = new Vivienda;
        $vivienda9->setHouseName("Finca rústica en venta en Valldemossa");
        $vivienda9->setHouseType("Casa independiente");
        $vivienda9->setHouseSurface(500);
        $vivienda9->setHouseRooms(5);
        $vivienda9->setHouseDescription("La propiedad se asienta sobre una parcela de unos 137.000m2 en la que hay una casa principal con piscina y dos casas más para uso agrícola. La casa principal fue construida hace unos 45 años y, aunque está en buenas condiciones, necesitaría una pequeña reforma. Actualmente se distribuye, en dos niveles, en una entrada, un salón-comedor, una cocina con comedor, trastero y lavadero, 5 dormitorios, 4 baños y una habitación con un baño pequeño. El sótano dispone de mucho espacio el cual se puede utilizar como aparcamiento, zona de juegos o terraza cubierta. En el exterior encontramos la piscina de 10m x 5m. La propiedad dispone de varias terrazas con almendros, algarrobos y olivos y una gran zona boscosa en la que se encuentran varios miradores. Esta finca única ofrece excelentes vistas panorámicas de Valldemossa y el mar. Cabe destacar, especialmente, su proximidad al pueblo. La orientación suroeste garantiza muchas horas de sol y puestas inolvidables.");
        $vivienda9->setHouseBathrooms(4);
        $vivienda9->setHouseImg("https://img3.idealista.com/blur/WEB_DETAIL_TOP-L-L/0/id.pro.es.image.master/83/55/54/1048706156.jpg");
        $vivienda9->setHousePrice(3000000);

        $vivienda10 = new Vivienda;
        $vivienda10->setHouseName("Piso en venta en Port d'Andratx");
        $vivienda10->setHouseType("Piso");
        $vivienda10->setHouseSurface(150);
        $vivienda10->setHouseRooms(3);
        $vivienda10->setHouseDescription("Este apartamento con vistas al mar en el Puerto de Andratx está situado en una zona residencial privilegiada sobre la entrada del puerto y con vistas al puerto deportivo y al mar. El apartamento, lujosamente amueblado, dispone de un salón-comedor con chimenea, una cocina abierta y moderna, varios dormitorios y baños y un pequeño trastero con lavadora y secadora. El dormitorio principal tiene baño en suite. La terraza, muy grande y parcialmente cubierta, es accesible desde la zona de estar así como desde 2 dormitorios. Desde la terraza se puede observar el ajetreo de la entrada del puerto durante el día y la iluminación atmosférica del puerto por la noche. Un trastero así como una plaza de aparcamiento en el garaje subterráneo pertenecen a esta oferta.");
        $vivienda10->setHouseBathrooms(3);
        $vivienda10->setHouseImg("https://img3.idealista.com/blur/WEB_DETAIL_TOP-L-L/0/id.pro.es.image.master/06/f4/b3/1106304071.jpg");
        $vivienda10->setHousePrice(1890000);

        //------------------------------------------------------------------------------------------------------------------------------------------------
        
        $localidad1 = new Localidad;
        $localidad1->setPlaceName("Palma");
        $localidad1->setPlaceType("Costa");
        $localidad1->setPlacePopulation(409661);
        $localidad1->setPlaceDescription("Mallorca es el nombre con el que se conoce a la isla mayor de las Islas Baleares, y Palma de Mallorca es el nombre de la capital de la isla. Está situada en el lado sur de la isla, y su nombre completo es Palma de Mallorca, aunque a menudo se le llama simplemente Palma.");
        $localidad1->setPlaceImg("https://www.spain.info/export/sites/segtur/.content/imagenes/cabeceras-grandes/baleares/catedral-santamaria-palma-s434080438.jpg_604889389.jpg");


        $localidad1->addPlaceHouse($vivienda6);


        $doctrine -> persist($vivienda1);
        $doctrine -> persist($vivienda2);
        $doctrine -> persist($vivienda3);
        $doctrine -> persist($vivienda4);
        $doctrine -> persist($vivienda5);
        $doctrine -> persist($vivienda6);
        $doctrine -> persist($vivienda7);
        $doctrine -> persist($vivienda8);
        $doctrine -> persist($vivienda9);
        $doctrine -> persist($vivienda10);

        $doctrine -> persist($localidad1);



        $doctrine -> flush();

        return new Response("Casas cargadas correctamente");
    }


}


