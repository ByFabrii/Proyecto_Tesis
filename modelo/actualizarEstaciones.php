<?php
    //Consulta para actualizar
    $query = "UPDATE estaciones SET Nombre = '$nombre', Longitud = '$longitud', Latitud = '$latitud' WHERE idEstaciones = $id";

    //Verificamos la consulta
    if($conexion->query($query) === true){
        header('Location: ../interfaz_admin/admin.php');

    }else{
        echo "Error en la consulta: " . $query . "<br>" . $conexion->error;
    }
?>