<?php
header("Access-Control-Allow-Origin:*");

require_once '../modelo/modelo_imagen.php';

$function = $_GET['function']; 

switch ($function) {
    case "agregar":
      agregarImagen();
    break;

    function agregarImagen(){
        $nombre = $_POST['nombre'];
        
        $extension = pathinfo(($_FILES)['ima']['neme'], PATHINFO_EXTENSION);
        move_uploaded_file($_FILES['ima']['name',$extension]);
        $resultado = (new libro())->agregarImagen( $nombre);
        echo json_encode($resultado);
     }
    


}