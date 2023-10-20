<?php
    //Consulta para actualizar
    $query = "UPDATE usuarios SET nombre = '$nombre', apellidoP = '$apellidoP', apellidoM = '$apellidoM', profesion = '$profesion', institucion = '$institucion', tipoUsuario_usuario = '$tipoUsuario' WHERE idUsuario = $id";

    //Verificamos la consulta
    if($conexion->query($query) === true){
        header('Location: ../interfaz_admin/admin.php?mensaje=Actualizado');

    }else{
        echo "Error en la consulta: " . $query . "<br>" . $conexion->error;
    }
?>