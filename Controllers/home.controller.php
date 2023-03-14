<?php

class HomeController
{

    public function view()
    {
        if (
            isset($_SERVER["REQUEST_METHOD"]) &&
            $_SERVER["REQUEST_METHOD"] == "POST"
        ) {
            // EnviarWhatsapp($_POST['numero'],$_POST['boletos']);
            // echo $_POST['boletos'];
            $HomeController = new HomeController();
            $HomeController->ApartarBoletos($_POST);

        } else {
            $response = RifasModel::mostrar_rifas();
            $rifas = $response;
            $id_rifa = $response[0]->id_rifas;
            $boletos = RifasModel::Boletos_disponibles($id_rifa);

            include 'views/home.view.php';
        }



    }
    public function ApartarBoletos($datos)
    {
        $num_boletos = str_replace(' ', '|', $datos['boletos']);
        $num_boletos = substr($num_boletos, 1);
        $boletos = RifasModel::Apartar_Boletos($datos['nombre'], $datos['apellido'], $datos['numero'], $datos['ciudad'], $datos['estado'], $num_boletos, $datos['rifa']);
        return $boletos;
    }
}