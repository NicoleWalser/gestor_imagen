<?php
require_once  '../conexion/conexion.php';

class imagen {
    public function agregarImagen($nombre, $imagen){
        
            $rutaTemporal=$imagen['tmp_name'];
            $nombreImagen = $imagen['name'];
            $extension = pathinfo($nombreImagen, PATHINFO_EXTENSION);
            $sql = "INSERT INTO imagen(nombre,extension) values('$nombre','$extension')";
            $connection = $this->connection();
            $connection->query($sql);
            $id = $connection->insert_id;
            move_uploaded_file($rutaTemporal,"../imagenes/$id.$extension");
        }
        public function obtenerImagen(){
            $sql = "SELECT * FROM imagen";
            $connection = $this->connection();
            $resultado = $connection->query($sql);
            return $resultado->fetch_all(MYSQLI_ASSOC);
            
        }
    }
           
        
        
        /*$rutaTemporal= $imagen['tmp_name'];

        $extension = pathinfo(($_FILES)['imagen']['neme'], PATHINFO_EXTENSION);
        $sql = "INSERT INTO  VALUES imagen (0, $nombre, $extension)";
            $connection = connection();
            $respuesta = $connection->query($sql);
           $id = $connection-> insert_id;
            
            move_uploaded_file($_FILES['imagen']['tmp_name'],'./img/'.$id.$extension);
            return $respuesta;
           */
?>
