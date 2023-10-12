<?php
	//Datos para la conexión con MySQL
    $servidor = "localhost";
	$usuario = "root";
	$password = "";
	$bd_nombre = "bdestaciones";

    //Conexión con la base de datos
    $conexion = new mysqli($servidor, $usuario, $password, $bd_nombre);

    //Verificamos la conexión
    if($conexion->connect_error){
		die("Error en la conexión: ".$conexion->connect_error);
	}

    /*Cada vez que se mande a llamar este archivo,debemos
    abrir la etiqueta PHP si lo requerimos de nuevo.*/
?>