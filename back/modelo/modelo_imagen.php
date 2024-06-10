<?php
require_once  '../conexion/conexion.php';

class imagen {
    public function agregarImagen( $nombre,){
            $sql = "INSERT INTO  VALUES(0,)";
            $connection = connection();
            $respuesta = $connection->query($sql);
            return $respuesta;
    }
}