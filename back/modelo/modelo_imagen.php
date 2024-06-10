<?php
require_once  '../conexion/conexion.php';

class imagen {
    public function agregarImagen($nombre){
        $extension = pathinfo(($_FILES)['imagen']['neme'], PATHINFO_EXTENSION);
        $sql = "INSERT INTO  VALUES imagen (0, $nombre, $extension)";
            $connection = connection();
            $respuesta = $connection->query($sql);
           $id = $connection-> insert_id;
            
            move_uploaded_file($_FILES['imagen']['tmp_name'],'./img/'.$id.$extension);
            return $respuesta;
           
    }


}

