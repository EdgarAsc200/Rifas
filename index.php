<?php
// Requerir  Modelos
require_once 'models/rifas.model.php';
// Requerir Controladores
require_once 'controllers/home.controller.php';
// Requerir Middlewares
require_once 'middlewares/whatsapp.php';

    // Establecer la ruta a la cual se va acceder
    $uri = explode('/',$_SERVER['REQUEST_URI']);

    if(empty($uri[1])){
       $index = new  HomeController();
       $index->view();
       
    }
    else {
        echo "Si hay peteticion en la ruta: ".$uri[1];   
    } 