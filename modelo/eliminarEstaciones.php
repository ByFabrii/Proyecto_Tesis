<?php
    //Consulta para actualizar
    $query = "DELETE FROM estaciones WHERE idEstaciones = $id";

    //Verificamos la consulta
    if($conexion->query($query) === true){
        header('Location: ../interfaz_admin/admin.php?mensaje=Eliminado&showModal=3');

    }else{
        echo "Error en la consulta: " . $query . "<br>" . $conexion->error;
    }
?>