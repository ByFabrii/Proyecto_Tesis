<?php
    //Consulta para el insert
    $sql = "SELECT * FROM registro ORDER BY idRegistro DESC LIMIT 15";
    $resultado = $conexion->query($sql);
?>