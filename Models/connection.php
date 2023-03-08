<?php

class ConexionDB {

    static public function connection()
    {
        try {
            $connect = new PDO('mysql:host=162.241.61.215;dbname=pointsof_Krisapaxvls','pointsof_Ticketagp','EwyO%*p1492JXnkMgT8RX1');
            $connect->exec('set names utf8');

        } catch (PDOException $e) {
            die("Error: ".$e->getMessage());
        }

        return $connect;
    }
}