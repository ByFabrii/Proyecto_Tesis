<?php
    //Consulta
    $query = "SELECT * FROM tipousuario WHERE idTipoUsuario = $id";
    $resultado = mysqli_query($conexion, $query);
?>