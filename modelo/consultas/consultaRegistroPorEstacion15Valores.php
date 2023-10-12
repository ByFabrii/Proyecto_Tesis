<?php
    //Consulta para el insert
    $sql = "SELECT * FROM registro WHERE estaciones_nombre = '".$nombre_estacion."' ORDER BY idRegistro DESC LIMIT 15";
    $resultado = $conexion->query($sql);
?>