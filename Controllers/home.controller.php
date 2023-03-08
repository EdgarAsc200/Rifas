<?php

class HomeController {
    
    public function view()
    {
        if(isset($_POST['boletos'])){
            echo 'Estos son los boletos apartados';
        }
  
        $response = RifasModel::mostrar_rifas();
        $rifas = $response;
        $id_rifa = $response[0]->id_rifas;
        $boletos = RifasModel::Boletos_disponibles($id_rifa);

        include 'views/home.view.php';
    }
}

