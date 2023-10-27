<?php 
    include "../../../modelo/conexion.php"
?>
<?php

    $nombre = $_POST['nombre'];
    $longitud = $_POST['longitud'];
    $latitud = $_POST['latitud'];

    $query_insert = "INSERT INTO estaciones(Nombre, Longitud, Latitud) VALUES('$nombre', '$longitud', '$latitud')";

    $ejecutar = mysqli_query($conexion, $query_insert);

    if($ejecutar){
        header('Location: ../interfaz_admin/admin.php');
    }

?>