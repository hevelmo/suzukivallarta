<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

/**
 *
 * [Initial V 1.0]
 *
**/

require_once "core/vendor/autoload.php";
include_once "core/environment/WaxConfigSet.php";

// Medigraf

include_once "core/Medigraf/Bases.php";
include_once "core/Medigraf/Router.php";
include_once "core/Medigraf/Curl.php";
include_once "core/Medigraf/Template.php";

// Site
include_once "core/Site/Site.php";

$container = new \Slim\Container();

$container["notFoundHandler"] = function($c) {
    return function($request, $response) use ($c) {
        return $c["response"]->withStatus(404)
                             ->withHeader("Content-Type", "text/html")
                             ->write((new Control404())->getTemplate()->render());
    };
};

$app = new \Slim\App($container);

/**
 * [ROOM]
**/
    $app->get("/", "ControlHome:__invoke");
    // GRUPO SUZUKI
    $app->get("/grupo", "ControlGroup:__invoke");
    // CATALOGOS
    $app->get("/catalogos/{catalogo}", "ControlCatalogs:__invoke");
    // CONCESIONARIAS
    $app->get("/concesionarias", "ControlConcessionaires:__invoke");
    // CONTACTO
    $app->get("/contactanos", "ControlContact:__invoke");
    // BOLSA DE TRABAJO
    $app->get("/bolsa-de-trabajo", "ControlJobBoard:__invoke");
    // MODELOS
    $app->get("/modelos", "ControlModels:__invoke");
    $app->get("/modelos/{modelo}", "ControlByModel:__invoke");
    // FINANCIAMIENTO
    $app->get("/financiamiento", "ControlFinancing:__invoke");
    $app->get("/financiamiento/{modelo}", "ControlFinancingByModel:__invoke");
    // RAZONES
    $app->get("/razones", "ControlReasons:__invoke");
    // Garantia
    $app->get("/garantia-suzuki", "ControlWarranty:__invoke");
    // TERMINOS LEGALES Y AVISO DE PRIVACIDAD
    $app->get("/terminos-legales", "ControlLegal:__invoke");
    $app->get("/aviso-de-privacidad", "ControlPrivacy:__invoke");
    // PLANTILLAS
    //$app->get("/temas", "ControlThemes:__invoke");
    $app->run();
/**
 * CONTROL MASTER
 * 
 * This is the parent class for the general management of Slim routes.
 * This class provides methods needed to interact with the API
 * And to show the templates created by Twig.
 * This class will never be used directly by a route Slim,
 * But each Slim route will be handled by a child class class ControlMaster
 * 
 * @author 
 * @copyright 2017
**/
    abstract class ControlMaster {
        /**
         * @var Bases      $bases      new Bases()      instance
         * @var Router     $router     new Router()     instance
         * @var Curl       $curl       new Curl()       instance
         * @var Template   $template   new Template()   instance
         * @var Site       $site       new Site()       instance
        **/
        private $bases, $router, $curl, $template, $site;
        /**
         * Constructor
         * 
         * This method is in charge to initialize the instances to the classes which will be used
         * The Template() instance has a default $masterConfigArray, $twigConfig which will be
         * merged with the received by constructor.
         * 
         * @param   array   $masterConfigArray  Elements to be used by the template
         * @param   array   $twigConfig         Twig configuration
         * @param   string  $name               The template to be rendered
        **/
        function __construct($masterConfigArray, $twigConfig, $name) {
            //BASES
            $this->bases   = new Bases();
            //ROUTER
            $this->router   = new Router();
            //CURL
            $this->curl     = new Curl(_HOST . "api/v1/");
            //TEMPLATE
            $this->template = new Template(
                "templates/twig/interfaz",
                $name,
                array_merge(
                    array(
                        "cache" => "cache",
                        "debug" => "true"
                    ),
                    $twigConfig
                ),
                array_merge(
                    $this->bases->getConstants(),
                    $masterConfigArray
                )
            );
            //SITE
            $this->site = new Site();
        }
        /**
         * @return  Bases   With its related methods and performance.
        **/
        public function getBases() {
            return $this->bases;
        }
        /**
         * @return  Router   With its related methods and performance.
        **/
        public function getRouter() {
            return $this->router;
        }
        /**
         * @return  Curl   With its related methods and performance.
        **/
        public function getCurl() {
            return $this->curl;
        }
        /**
         * @return  Template   With its related methods and performance.
        **/
        public function getTemplate() {
            return $this->template;
        }
        /**
         * @return  Site6   With its related methods and performance.
        **/
        public function getSite() {
            return $this->site;
        }
        /**
         * This abstract method ensures that each child class will have an standar method
         * To be used like a handler of its related Slim route.
         * The declared arguments are wich a Slim handler method needs.
         * 
         * @param   Slim\Http\Request       $request 
         * @param   Slim\Http\Response      $response 
         * @param   array                   $args
        **/
        abstract public function __invoke($request, $response, $args);
    }
    /**
     * CONTROL 404
    **/
    class Control404 extends ControlMaster {
        function __construct() {
            parent::__construct(
                array(
                    "title" => "Página no encontrada",
                    "title_header" => "Página no encontrada"
                ),
                array(),
                "404/_404.twig"
            );
            // Facebook Metatags
            parent::getTemplate()->makeFacebookTags(
                "Página no encontrada",
                "Suzuki Autos " . _LOC,
                "Página no encontrada",
                _HOST . "img/template/common/header/horizontal_logo.png"
            );
        }
        /**
         * This inherited method don't do nothing however is mandatory to implement it
         * Because the parent method is an abstract one.
         * 
         * @param   Slim\Http\Request       $request 
         * @param   Slim\Http\Response      $response 
         * @param   array                   $args
        **/
        public function __invoke($request, $response, $args) {
        }   
    }
    /**
     * CONTROL HOME
    **/
    class ControlHome extends ControlMaster {    
        function __construct() {
            parent::__construct(
                array(
                    "title" => "Suzuki Autos " . _LOC,
                    "title_header" => "Suzuki Autos " . _LOC
                ),
                array(),
                "home/_home.twig"
            );
            // Facebook Metatags
            parent::getTemplate()->makeFacebookTags(
                "Suzuki Autos " . _LOC,
                "Suzuki Autos " . _LOC,
                "Suzuki Autos " . _LOC,
                _HOST . "img/template/common/header/horizontal_logo.png"
            );
        }
        /**
         * This inherited method don't do nothing however is mandatory to implement it
         * Because the parent method is an abstract one.
         * 
         * @param   Slim\Http\Request       $request 
         * @param   Slim\Http\Response      $response 
         * @param   array                   $args
        **/
        public function __invoke($request, $response, $args) {
            parent::getTemplate()->display();
            //echo "<pre>", print_r(parent::getTemplate()->getMasterConfigArray()), "</pre>";
        }
    }
    /**
     * CONTROL GROUP
    **/
    class ControlGroup extends ControlMaster {    
        function __construct() {
            parent::__construct(
                array(
                    "title" => "Suzuki Autos " . _LOC . ": Grupo",
                    "title_header" => "Suzuki Autos " . _LOC . ": Grupo"
                ),
                array(),
                "grupo/_grupo.twig"
            );
            // Facebook Metatags
            parent::getTemplate()->makeFacebookTags(
                "Suzuki Autos " . _LOC . ": Grupo",
                "Suzuki Autos " . _LOC,
                "Suzuki Autos " . _LOC . ": Grupo",
                _HOST . "img/template/common/header/horizontal_logo.png"
            );
        }
        /**
         * This inherited method don't do nothing however is mandatory to implement it
         * Because the parent method is an abstract one.
         * 
         * @param   Slim\Http\Request       $request 
         * @param   Slim\Http\Response      $response 
         * @param   array                   $args
        **/
        public function __invoke($request, $response, $args) {
            parent::getTemplate()->display();
            //echo "<pre>", print_r(parent::getTemplate()->getMasterConfigArray()), "</pre>";
        }
    }
    /**
     * CONTROL CATALOGS
    **/
    class ControlCatalogs extends ControlMaster {
        function __construct() {
            parent::__construct(
                array(
                    "title" => "Suzuki Autos " . _LOC . ": Catalogos",
                    "title_header" => "Suzuki Autos " . _LOC . ": Catalogos"
                ),
                array(),
                "catalogos/_catalogos.twig"
            );
            // Facebook Metatags
            parent::getTemplate()->makeFacebookTags(
                "Suzuki Autos " . _LOC . ": Catalogos",
                "Suzuki Autos " . _LOC,
                "Suzuki Autos " . _LOC . ": Catalogos",
                _HOST . "img/template/common/header/horizontal_logo.png"
            );
        }
        /**
         * This inherited method don't do nothing however is mandatory to implement it
         * Because the parent method is an abstract one.
         * 
         * @param   Slim\Http\Request       $request 
         * @param   Slim\Http\Response      $response 
         * @param   array                   $args
        **/
        public function __invoke($request, $response, $args) {
            parent::getRouter()->setRouteParams($request, $response, $args);
            parent::getTemplate()->addToMasterConfigArray(parent::getRouter()->getArgs());

            $catalog = parent::getRouter()->getArgs('catalogo');
            $detalle = parent::getSite()->getCatalogByKey($catalog);
            parent::getTemplate()->addToMasterConfigArray('catpa', $detalle);
            
            $catalog = $args["catalogo"];
            $catalog = str_replace("-", " ", ucfirst($catalog));

            parent::getTemplate()->addToMasterConfigArray("title", "Suzuki Autos " . _LOC . ": " . $catalog);

            parent::getTemplate()->display();
            //echo "<pre>", print_r(parent::getTemplate()->getMasterConfigArray()), "</pre>";
        }
    }
    /**
     * CONTROL CONCESSIONAIRES
    **/
    class ControlConcessionaires extends ControlMaster {    
        function __construct() {
            parent::__construct(
                array(
                    "title" => "Suzuki Autos " . _LOC . ": Concesionarias",
                    "title_header" => "Suzuki Autos " . _LOC . ": Concesionarias"
                ),
                array(),
                "concesionarias/_concesionarias.twig"
            );
            // Facebook Metatags
            parent::getTemplate()->makeFacebookTags(
                "Suzuki Autos " . _LOC . ": Concesionarias",
                "Suzuki Autos " . _LOC,
                "Suzuki Autos " . _LOC . ": Concesionarias",
                _HOST . "img/template/common/header/horizontal_logo.png"
            );
        }
        /**
         * This inherited method don't do nothing however is mandatory to implement it
         * Because the parent method is an abstract one.
         * 
         * @param   Slim\Http\Request       $request 
         * @param   Slim\Http\Response      $response 
         * @param   array                   $args
        **/
        public function __invoke($request, $response, $args) {
            parent::getTemplate()->display();
            //echo "<pre>", print_r(parent::getTemplate()->getMasterConfigArray()), "</pre>";
        }
    }
    /**
     * CONTROL CONTACT
    **/
    class ControlContact extends ControlMaster {    
        function __construct() {
            parent::__construct(
                array(
                    "title" => "Suzuki Autos " . _LOC . ": Contactanos",
                    "title_header" => "Suzuki Autos " . _LOC . ": Contactanos"
                ),
                array(),
                "contacto/_contacto.twig"
            );
            // Facebook Metatags
            parent::getTemplate()->makeFacebookTags(
                "Suzuki Autos " . _LOC . ": Contactanos",
                "Suzuki Autos " . _LOC,
                "Suzuki Autos " . _LOC . ": Contactanos",
                _HOST . "img/template/common/header/horizontal_logo.png"
            );
        }
        /**
         * This inherited method don't do nothing however is mandatory to implement it
         * Because the parent method is an abstract one.
         * 
         * @param   Slim\Http\Request       $request 
         * @param   Slim\Http\Response      $response 
         * @param   array                   $args
        **/
        public function __invoke($request, $response, $args) {
            parent::getRouter()->setRouteParams($request, $response, $args);
            parent::getTemplate()->addToMasterConfigArray(parent::getRouter()->getArgs());

            $modelos = parent::getSite()->getGamma();
            parent::getTemplate()->addToMasterConfigArray('mdopa', $modelos);

            parent::getTemplate()->display();
            //echo "<pre>", print_r(parent::getTemplate()->getMasterConfigArray()), "</pre>";
        }
    }
    /**
     * CONTROL BOLSA
    **/
    class ControlJobBoard extends ControlMaster {    
        function __construct() {
            parent::__construct(
                array(
                    "title" => "Suzuki Autos " . _LOC . ": Bolsa de Trabajo",
                    "title_header" => "Suzuki Autos " . _LOC . ": Bolsa de Trabajo"
                ),
                array(),
                "bolsa/_bolsa.twig"
            );
            // Facebook Metatags
            parent::getTemplate()->makeFacebookTags(
                "Suzuki Autos " . _LOC . ": Bolsa de Trabajo",
                "Suzuki Autos " . _LOC,
                "Suzuki Autos " . _LOC . ": Bolsa de Trabajo",
                _HOST . "img/template/common/header/horizontal_logo.png"
            );
        }
        /**
         * This inherited method don't do nothing however is mandatory to implement it
         * Because the parent method is an abstract one.
         * 
         * @param   Slim\Http\Request       $request 
         * @param   Slim\Http\Response      $response 
         * @param   array                   $args
        **/
        public function __invoke($request, $response, $args) {
            parent::getRouter()->setRouteParams($request, $response, $args);
            parent::getTemplate()->addToMasterConfigArray(parent::getRouter()->getArgs());

            $modelos = parent::getSite()->getGamma();
            parent::getTemplate()->addToMasterConfigArray('mdopa', $modelos);

            parent::getTemplate()->display();
            //echo "<pre>", print_r(parent::getTemplate()->getMasterConfigArray()), "</pre>";
        }
    }
    /**
     * CONTROL MODELS
    **/
    class ControlModels extends ControlMaster {    
        function __construct() {
            parent::__construct(
                array(
                    "title" => "Suzuki Autos " . _LOC . ": Modelos",
                    "title_header" => "Suzuki Autos " . _LOC . ": Modelos"
                ),
                array(),
                "modelos/_modelos.twig"
            );
            // Facebook Metatags
            parent::getTemplate()->makeFacebookTags(
                "Suzuki Autos " . _LOC . ": Modelos",
                "Suzuki Autos " . _LOC,
                "Suzuki Autos " . _LOC . ": Modelos",
                _HOST . "img/template/common/header/horizontal_logo.png"
            );
        }
        /**
         * This inherited method don't do nothing however is mandatory to implement it
         * Because the parent method is an abstract one.
         * 
         * @param   Slim\Http\Request       $request 
         * @param   Slim\Http\Response      $response 
         * @param   array                   $args
        **/
        public function __invoke($request, $response, $args) {
            parent::getRouter()->setRouteParams($request, $response, $args);
            parent::getTemplate()->addToMasterConfigArray(parent::getRouter()->getArgs());

            $modelos = parent::getSite()->getGamma();
            parent::getTemplate()->addToMasterConfigArray('mdopa', $modelos);

            parent::getTemplate()->display();
            //echo "<pre>", print_r(parent::getTemplate()->getMasterConfigArray()), "</pre>";
        }
    }
    /**
     * CONTROL BY MODEL
    **/
    class ControlByModel extends ControlMaster {    
        function __construct() {
            parent::__construct(
                array(
                    "title" => "Suzuki Autos " . _LOC,
                    "title_header" => "Suzuki Autos " . _LOC
                ),
                array(),
                "modelos/modelo/_modelo.twig"
            );
            // Facebook Metatags
            parent::getTemplate()->makeFacebookTags(
                "Suzuki Autos " . _LOC,
                "Suzuki Autos " . _LOC,
                "Suzuki Autos " . _LOC,
                _HOST . "img/template/common/header/horizontal_logo.png"
            );
        }
        /**
         * This inherited method don't do nothing however is mandatory to implement it
         * Because the parent method is an abstract one.
         * 
         * @param   Slim\Http\Request       $request 
         * @param   Slim\Http\Response      $response 
         * @param   array                   $args
        **/
        public function __invoke($request, $response, $args) {
            parent::getRouter()->setRouteParams($request, $response, $args);
            parent::getTemplate()->addToMasterConfigArray(parent::getRouter()->getArgs());

            $modelo = parent::getRouter()->getArgs('modelo');
            $detalle = parent::getSite()->getModelos($modelo);
            parent::getTemplate()->addToMasterConfigArray('mdopa', $detalle);
            
            $modelo = $args["modelo"];
            $modelo = str_replace("-", " ", ucfirst($modelo));

            parent::getTemplate()->addToMasterConfigArray("title", "Suzuki Autos " . _LOC . ": " . $modelo);

            parent::getTemplate()->display();
            //echo "<pre>", print_r(parent::getTemplate()->getMasterConfigArray()), "</pre>";
        }
    }
    /**
     * CONTROL FINANCING
    **/
    class ControlFinancing extends ControlMaster {    
        function __construct() {
            parent::__construct(
                array(
                    "title" => "Suzuki Autos " . _LOC . ": Financiamiento",
                    "title_header" => "Suzuki Autos " . _LOC . ": Financiamiento"
                ),
                array(),
                "financiamiento/_financiamiento.twig"
            );
            // Facebook Metatags
            parent::getTemplate()->makeFacebookTags(
                "Suzuki Autos " . _LOC . ": Financiamiento",
                "Suzuki Autos " . _LOC,
                "Suzuki Autos " . _LOC . ": Financiamiento",
                _HOST . "img/template/common/header/horizontal_logo.png"
            );
        }
        /**
         * This inherited method don't do nothing however is mandatory to implement it
         * Because the parent method is an abstract one.
         * 
         * @param   Slim\Http\Request       $request 
         * @param   Slim\Http\Response      $response 
         * @param   array                   $args
        **/
        public function __invoke($request, $response, $args) {
            parent::getRouter()->setRouteParams($request, $response, $args);
            parent::getTemplate()->addToMasterConfigArray(parent::getRouter()->getArgs());

            $modelos = parent::getSite()->getGamma();
            parent::getTemplate()->addToMasterConfigArray('mdopa', $modelos);

            parent::getTemplate()->display();
            //echo "<pre>", print_r(parent::getTemplate()->getMasterConfigArray()), "</pre>";
        }
    }
    /**
     * CONTROL FINANCING BY MODEL
    **/
    class ControlFinancingByModel extends ControlMaster {    
        function __construct() {
            parent::__construct(
                array(
                    "title" => "Suzuki Autos " . _LOC . ": Financiamiento",
                    "title_header" => "Suzuki Autos " . _LOC . ": Financiamiento"
                ),
                array(),
                "financiamiento/modelo/_modelo.twig"
            );
            // Facebook Metatags
            parent::getTemplate()->makeFacebookTags(
                "Suzuki Autos " . _LOC . ": Financiamiento",
                "Suzuki Autos " . _LOC,
                "Suzuki Autos " . _LOC . ": Financiamiento",
                _HOST . "img/template/common/header/horizontal_logo.png"
            );
        }
        /**
         * This inherited method don't do nothing however is mandatory to implement it
         * Because the parent method is an abstract one.
         * 
         * @param   Slim\Http\Request       $request 
         * @param   Slim\Http\Response      $response 
         * @param   array                   $args
        **/
        public function __invoke($request, $response, $args) {
            parent::getRouter()->setRouteParams($request, $response, $args);
            parent::getTemplate()->addToMasterConfigArray(parent::getRouter()->getArgs());

            $modelos = parent::getSite()->getGamma();
            parent::getTemplate()->addToMasterConfigArray('mdopa', $modelos);

            $modelo = parent::getRouter()->getArgs('modelo');
            $detalle = parent::getSite()->getModelos($modelo);
            parent::getTemplate()->addToMasterConfigArray('mdopa', $detalle);

            $modelo = $args["modelo"];
            $modelo = str_replace("-", " ", ucfirst($modelo));

            parent::getTemplate()->addToMasterConfigArray("title", "Suzuki Autos " . _LOC . ": " . $modelo);

            parent::getTemplate()->display();
            //echo "<pre>", print_r(parent::getTemplate()->getMasterConfigArray()), "</pre>";
        }
    }
    /**
     * CONTROL REASONS
    **/
    class ControlReasons extends ControlMaster {    
        function __construct() {
            parent::__construct(
                array(
                    "title" => "Suzuki Autos " . _LOC . ": Razones",
                    "title_header" => "Suzuki Autos " . _LOC . ": Razones"
                ),
                array(),
                "razones/_razones.twig"
            );
            // Facebook Metatags
            parent::getTemplate()->makeFacebookTags(
                "Suzuki Autos " . _LOC . ": Razones",
                "Suzuki Autos " . _LOC,
                "Suzuki Autos " . _LOC . ": Razones",
                _HOST . "img/template/common/header/horizontal_logo.png"
            );
        }
        /**
         * This inherited method don't do nothing however is mandatory to implement it
         * Because the parent method is an abstract one.
         * 
         * @param   Slim\Http\Request       $request 
         * @param   Slim\Http\Response      $response 
         * @param   array                   $args
        **/
        public function __invoke($request, $response, $args) {
            parent::getTemplate()->display();
            //echo "<pre>", print_r(parent::getTemplate()->getMasterConfigArray()), "</pre>";
        }
    }
    /**
     * CONTROL WARRANTY
    **/
    class ControlWarranty extends ControlMaster {    
        function __construct() {
            parent::__construct(
                array(
                    "title" => "Suzuki Autos " . _LOC . ": Garantía",
                    "title_header" => "Suzuki Autos " . _LOC . ": Garantía"
                ),
                array(),
                "garantia/_garantia.twig"
            );
            // Facebook Metatags
            parent::getTemplate()->makeFacebookTags(
                "Suzuki Autos " . _LOC . ": Garantía",
                "Suzuki Autos " . _LOC,
                "Suzuki Autos " . _LOC . ": Garantía",
                _HOST . "img/template/common/header/horizontal_logo.png"
            );
        }
        /**
         * This inherited method don't do nothing however is mandatory to implement it
         * Because the parent method is an abstract one.
         * 
         * @param   Slim\Http\Request       $request 
         * @param   Slim\Http\Response      $response 
         * @param   array                   $args
        **/
        public function __invoke($request, $response, $args) {
            parent::getTemplate()->display();
            //echo "<pre>", print_r(parent::getTemplate()->getMasterConfigArray()), "</pre>";
        }
    }
    /**
     * CONTROL LEGAL
    **/
    class ControlLegal extends ControlMaster {
        function __construct() {
            parent::__construct(
                array(
                    "title" => "TERMINOS LEGALES",
                    "title_header" => "TERMINOS LEGALES"
                ),
                array(),
                "legales/_legales.twig"
            );
            //Facebook Metatags
            parent::getTemplate()->makeFacebookTags(
                "TERMINOS LEGALES", 
                "Suzuki Autos " . _LOC,
                "TERMINOS LEGALES",
                _HOST . "img/template/common/header/horizontal_logo.png"
            );
        }
        /**
         * This inherited method don't do nothing however is mandatory to implement it
         * Because the parent method is an abstract one.
         * 
         * @param   Slim\Http\Request       $request 
         * @param   Slim\Http\Response      $response 
         * @param   array                   $args
        **/
        public function __invoke($request, $response, $args) {            
            parent::getTemplate()->display();
            //echo "<pre>", print_r(parent::getTemplate()->getMasterConfigArray()), "</pre>";
        }
    }
    /**
     * CONTROL PRIVACY NOTICE
    **/
    class ControlPrivacy extends ControlMaster {
        function __construct() {
            parent::__construct(
                array(
                    "title" => "AVISO DE PRIVACIDAD",
                    "title_header" => "AVISO DE PRIVACIDAD"
                ),
                array(),
                "privacidad/_privacidad.twig"
            );
            //Facebook Metatags
            parent::getTemplate()->makeFacebookTags(
                "AVISO DE PRIVACIDAD", 
                "Suzuki Autos " . _LOC,
                "AVISO DE PRIVACIDAD",
                _HOST . "img/template/common/header/horizontal_logo.png"
            );
        }
        /**
         * This inherited method don't do nothing however is mandatory to implement it
         * Because the parent method is an abstract one.
         * 
         * @param   Slim\Http\Request       $request 
         * @param   Slim\Http\Response      $response 
         * @param   array                   $args
        **/
        public function __invoke($request, $response, $args) {            
            parent::getTemplate()->display();
            //echo "<pre>", print_r(parent::getTemplate()->getMasterConfigArray()), "</pre>";
        }
    }
    /**
     * CONTROL THEMES
    class ControlThemes extends ControlMaster {
        function __construct() {
            parent::__construct(
                array(
                    "title" => "Temas",
                    "title_header" => "Temas"
                ),
                array(),
                "plantillas/_main.twig"
            );
        }
    **/
        /**
         * This inherited method don't do nothing however is mandatory to implement it
         * Because the parent method is an abstract one.
         * 
         * @param   Slim\Http\Request       $request 
         * @param   Slim\Http\Response      $response 
         * @param   array                   $args
        public function __invoke($request, $response, $args) {
            parent::getTemplate()->display();
            //echo "<pre>", print_r(parent::getTemplate()->getMasterConfigArray()), "</pre>";
        }  
    }
        **/