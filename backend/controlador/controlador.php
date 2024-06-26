<?php

require_once "../modelo/modelo.php";

$request = $_GET['request'];

switch ($request){
    case "agregarimg":
        agregarimg();
        break;
    case "obtenerimg":
        obtenerimg();
        break;
    case "eliminarimg":
        eliminarimg();
        break;
    case "modificarimg":
        modificarimg();
        break;
}

function agregarimg(){
    $nombre = $_POST['nombre'];
    $imagen = $_FILES['imagen'];
    $result = (new imagen())->agregarimg($nombre, $imagen);
    echo json_encode($result);
}

function obtenerimg(){
    $result = (new imagen())->obtenerimg();
    echo json_encode($result);
}
  
function eliminarimg(){
    $id = $_POST['id'];
    $resultado = (new imagen())->eliminarimg($id);
    echo json_encode($resultado);

}

function modificarimg(){
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $resultado = (new imagen())->modificarimg($id, $nombre);
    echo json_encode($resultado);
}


?>