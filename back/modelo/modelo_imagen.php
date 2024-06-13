<?php
require_once "../conexion/conexion.php";


class imagen {


    public function agregarImagen($nombre, $imagen){
        $connection = connection();
        $nomImg = $imagen['name'];
        $extension = pathinfo($nomImg, PATHINFO_EXTENSION);
        $sql = "INSERT INTO imagen VALUES(0,'$nombre', '$extension');";
        $connection->query($sql);
        $id = $connection->insert_id;
        $rutaTemp = $imagen['tmp_name'];
        move_uploaded_file($rutaTemp, "../img/$id.$extension");
    }


    public function obtenerImagen(){

        $connection = connection();
        $sql = "SELECT * FROM imagen";
        $respuesta = $connection->query($sql);
        $imagenes = $respuesta->fetch_all(MYSQLI_ASSOC);
        return $imagenes;

    }



}
