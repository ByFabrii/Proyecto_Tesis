<?php
    if(mysqli_num_rows($resultado)==1){
        $row = mysqli_fetch_array($resultado);
        $nombre = $row['Nombre'];
        $longitud = $row['Longitud'];
        $latitud = $row['Latitud'];
    }else{
        echo "Error en la consulta: " . $query . "<br>" . $conexion->error;
    }
?>