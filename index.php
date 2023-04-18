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

    // Establecer la ruta a la cual se va acceder
    $uri = explode('/',$_SERVER['REQUEST_URI']);
    $url = explode('?',$uri[1]);
    

    if(empty($url[0])){
       $index = new  HomeController();
       return $index;
       
    }
    else {
        $vista = $url[0].'controller';
        $controlador = new $vista;  
    } 