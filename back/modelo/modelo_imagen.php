<?php
require_once  '../conexion/conexion.php';

class imagen {

    function agregarImagen(){
        $connection = connection();
        $sql = "SELECT * FROM libro";
        $respuesta = $connection->query($sql);
        $imagen = $respuesta->fetch_all(MYSQLI_ASSOC);// array con clave y valor 
        return $imagen;
    }
}