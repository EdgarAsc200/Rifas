<?php 
require_once 'models/connection.php';
class VerificarModel {


    static public function VerificarBoletos(int $numero)
    {
        $query = ConexionDB::connection()->prepare("CALL verificar_boletos($numero)");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS);
    }
}