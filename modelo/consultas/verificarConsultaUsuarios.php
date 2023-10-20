<?php
    if(mysqli_num_rows($resultado)==1){
        $row = mysqli_fetch_array($resultado);
        $nombre = $row['nombre'];
        $apellidoP = $row['apellidoP'];
        $apellidoM = $row['apellidoM'];
        $profesion = $row['profesion'];
        $institucion = $row['institucion'];
        $tipoUsuario = $row['tipoUsuario_usuario'];
    }else{
        echo "Error en la consulta: " . $query . "<br>" . $conexion->error;
    }
?>