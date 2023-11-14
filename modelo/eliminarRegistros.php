<?php
    //Consulta para actualizar
    $query = "DELETE FROM registro WHERE idRegistro = $id";

    //Verificamos la consulta
    if($conexion->query($query) === true){
        header('Location: ../interfaz_admin/admin.php');

    }else{
        echo "Error en la consulta: " . $query . "<br>" . $conexion->error;
    }
?>