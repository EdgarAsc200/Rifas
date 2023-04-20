<?php
// Requerir  Modelos
require_once 'models/rifas.model.php';
require_once 'models/verificar.model.php';

// Requerir Controladores
require_once 'controllers/home.controller.php';
require_once 'controllers/rifas.controller.php';
require_once 'controllers/verificador.controller.php';

// Requerir Middlewares
require_once 'middlewares/whatsapp.php';
require_once 'middlewares/paginacion.php';

    // Establecer la ruta a la cual se va acceder
    $uri = explode('/',$_SERVER['REQUEST_URI']);
    // $url = explode('?',$uri[1]);
    
    // $routes = array(
    //     "/" => HomeController(),
    //     "rifas" => RifasController(),

    // );
    if(empty(explode('?',$uri[1])[0])){
       $index = new  HomeController();
       return $index;
       
    }
    else {
        if(!class_exists(explode('?',$uri[1])[0].'controller')){
            $index = new  HomeController();
             return $index;
        }
        $vista = explode('?',$uri[1])[0].'controller';
        $controlador = new $vista;  
    } 