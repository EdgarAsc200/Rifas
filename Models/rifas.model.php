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
    static public function BoletosDisponibles(int $id)
    {
        $query = ConexionDB::connection()->prepare('SELECT  count(status) as boletosDisponibles from detalle_rifas where status = 0 and id_rifa = :id_rifa;');
        $query->bindParam(':id_rifa',$id, PDO::PARAM_INT);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_CLASS);
    }

    static public function Boletos_disponibles(int $id_rifa, int $inicio, int $registros)
    {
        $query = ConexionDB::connection()->prepare("select * from detalle_rifas where id_rifa=$id_rifa limit $inicio, $registros");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS);
    }
    static public function Total_Boletos(int $id_rifa)
    {
        $query = ConexionDB::connection()->prepare("select * from detalle_rifas where id_rifa=$id_rifa");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS);
    }

    static public function Apartar_Boletos($nombre, $apellido, $telefono, $ciudad, $estado, $boletos, $rifa)
    {
        $query = ConexionDB::connection()->prepare("call apartar_boletos('$nombre', '$apellido', '$telefono', '$ciudad', '$estado', '$boletos', $rifa)");

        if ($query->execute()) {
            return "Exito!, Se apartaron tus boletos Exitosamente";
        } else {
            return ConexionDB::connection()->errorInfo();
        }
    }
}