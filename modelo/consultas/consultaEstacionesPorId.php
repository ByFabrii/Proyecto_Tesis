<?php
    //Consulta
    $query = "SELECT * FROM estaciones WHERE idEstaciones = $id";
    $resultado = mysqli_query($conexion, $query);
?>