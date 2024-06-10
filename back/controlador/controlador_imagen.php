<?php
header("Access-Control-Allow-Origin:*");

require_once '../modelo/modelo_imagen.php';

$function = $_GET['function']; 

switch ($function) {
    case "agregar":
      agregarImagen();
    break;
    }
    
    function agregarImagen(){
        $nombre = $_POST['nombre'];
        
       
        $resultado = (new imagen())->agregarImagen( $nombre);
        echo json_encode($resultado);
     }
    


