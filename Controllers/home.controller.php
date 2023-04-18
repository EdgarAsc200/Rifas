<?php

class HomeController
{
    public function __construct()
    {
        if (
            isset($_SERVER["REQUEST_METHOD"]) &&
            $_SERVER["REQUEST_METHOD"] == "POST"
        ) {
            $this->ApartarBoletos($_POST);
        }else{
            $this->MostrarBoletos();
        }
    }
    public function MostrarBoletos()
    {
        // Consulta la rifa e su informacion
        $rifas = RifasModel::mostrar_rifas();
        $id_rifa = $rifas[0]->id_rifas;
        // Variables para la paginacion
        $pagina  = (isset($_GET['pagina'])) ? $_GET['pagina'] : 1;
        $registros = 50;
        $inicio = ($pagina*$registros)-$registros;
        $totalBoletos = count(RifasModel::Total_Boletos($id_rifa));

        // Consulta los boletos de la rifa seleccionada
        $boletos = RifasModel::Boletos_disponibles($id_rifa,$inicio,$registros);
        // Mostrar los boletos Disponibles
        $boletosDisponibles = RifasModel::BoletosDisponibles($id_rifa);
        include 'views/home.view.php';
       
    }
    // }
    public function ApartarBoletos($datos)
    {
        $num_boletos = str_replace(' ', '|', $datos['boletos']);
        $num_boletos = substr($num_boletos, 1);
        $boletos = RifasModel::Apartar_Boletos($datos['nombre'], $datos['apellido'], $datos['numero'], $datos['ciudad'], $datos['estado'], $num_boletos, $datos['rifa']);
        return $boletos;
    }
}