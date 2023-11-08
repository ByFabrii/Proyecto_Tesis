<?php
    //Consulta para el insert
    $sql = "SELECT * FROM registro ORDER BY idRegistro DESC";
    $resultado = $conexion->query($sql);
?>