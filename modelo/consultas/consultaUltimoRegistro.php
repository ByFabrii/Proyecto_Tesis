<?php
    //Consulta para el insert
    $sql = "SELECT * FROM registro ORDER BY idRegistro DESC LIMIT 1";
    $resultado = $conexion->query($sql);
    
    
    if ($resultado && $resultado->num_rows > 0) {
        $ultimoRegistro = $resultado->fetch_assoc();
        $nombreEstacion = $ultimoRegistro['estaciones_nombre']; // Reemplaza 'Nombre' por el nombre real de la columna
        
    } else {
        echo "No se encontró el último registro de la estación";
    }
?>