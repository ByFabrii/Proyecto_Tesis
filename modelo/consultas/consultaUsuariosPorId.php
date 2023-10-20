<?php
    //Consulta
    $query = "SELECT * FROM usuarios WHERE idUsuario = $id";
    $resultado = mysqli_query($conexion, $query);
?>