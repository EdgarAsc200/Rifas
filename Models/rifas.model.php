<?php
require_once 'models/connection.php';

class RifasModel
{

    static public function mostrar_rifas()
    {
        $query = ConexionDB::connection()->prepare('SELECT * FROM rifas where id_rifas = 3');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS);
    }

    static public function Boletos_disponibles(int $id_rifa)
    {
        $query = ConexionDB::connection()->prepare("CALL Consultar_boletos(5,$id_rifa)");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS);
    }

    static public function Apartar_Boletos($nombre, $apellido, $telefono, $ciudad, $estado, $boletos, $rifa)
    {
        $query = ConexionDB::connection()->prepare("call apartar_boletos('$nombre', '$apellido', '$telefono', '$ciudad', '$estado', '$boletos', $rifa)");
//                                           call apartar_boletos('edeewerfdf', 'FDSFDF', '3456565465', '4FSDFGDFG', 'GDFGHFH', '193|194|198', 3);
        if ($query->execute()) {
            return "Exito!, Se apartaron tus boletos Exitosamente";
        } else {
            return ConexionDB::connection()->errorInfo();
        }
    }
}