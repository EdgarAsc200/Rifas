<?php

 class RifasController {


    public function __construct()
    {
       $this->MostrarTodasRifas();
    }
    

    public function MostrarTodasRifas()
    {   $response = RifasModel::mostrar_rifas();
        $rifas = $response[0];
        include 'views/rifas.view.php';
        
    }
 }