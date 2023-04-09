<?php

class verificadorController
{
    function __construct()
    {
        $this->VerificarBoletos();
        return;
    }

    public function VerificarBoletos()
    {
        if (
            isset($_SERVER["REQUEST_METHOD"]) &&
            $_SERVER["REQUEST_METHOD"] == "POST") {
            $boletos = VerificarModel::VerificarBoletos($_POST['numero']);
            echo json_encode($boletos);
            return;
            }
        include 'views/verificador.view.php';


    }
}