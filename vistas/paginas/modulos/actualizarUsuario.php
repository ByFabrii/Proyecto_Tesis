<?php
    
    //Obtener datos
    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    $apellidoP = $_POST['lastname1'];
    $apellidoM = $_POST['lastname2'];
    $profesion = $_POST['job'];
    $institucion = $_POST['institution'];
    $tipoUsuario = $_POST['userType'];

    include "../../../modelo/conexion.php";
    include "../../../modelo/actualizarUsuarios.php";
?>
