<?php
    //Obtener datos
    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    $longitud = $_POST['longitud'];
    $latitud = $_POST['latitud'];

    include "../../../modelo/conexion.php";
    include "../../../modelo/actualizarEstaciones.php";
?>
