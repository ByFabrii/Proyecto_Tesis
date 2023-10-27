<?php
    //Consulta para actualizar
    $query = "UPDATE usuarios SET nombre = '$nombre', apellidoP = '$apellidoP', apellidoM = '$apellidoM', profesion = '$profesion', institucion = '$institucion', tipoUsuario_usuario = '$tipoUsuario' WHERE idUsuario = $id";

    //Verificamos la consulta
    if($conexion->query($query) === true){
        echo '<script>';
        echo 'alert("El usuario ' . $nombre . ' se actualizó exitosamente!");';
        echo 'window.location = "../interfaz_admin/admin.php";'; // Redirige a la página de administrador
        echo '</script>';
    }else{
        echo "Error en la consulta: " . $query . "<br>" . $conexion->error;
    }
?>