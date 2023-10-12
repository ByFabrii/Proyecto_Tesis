<?php 
    //Consulta para el insert con el último elemento
    $sql = "SELECT * FROM registro WHERE estaciones_nombre = '".$estacion['nombre']."' ORDER BY idRegistro DESC LIMIT 1";
    $resultado = $conexion->query($sql);
?>