<?php
header("Access-Control-Allow-Origin:*");

require_once '../modelo/modelo_imagen.php';

$function = $_GET['function']; 

switch ($function) {
    case "agregar":
      agregarImagen();
    break;
    case "obtener":
        obtenerImagen();
        break;
    }
    
    function agregarImagen(){
        $nombre = $_POST['nombre'];
        $imagen = $_FILES['imagen'];
        $imagen = new imagen();
        $resultado = (new imagen())->agregarImagen( $nombre, $imagen);
        echo json_encode($resultado);
    }
    function obtenerImagen(){
        $resultado = (new imagen())->obtenerImagen();   
        echo json_encode($resultado);
    }

    


