<?php 
    include "../../../modelo/conexion.php"
?>
<?php

    $nombre = $_POST['nombre'];
    $apellidoP = $_POST['lastname1'];
    $apellidoM = $_POST['lastname2'];
    $profesion = $_POST['job'];
    $institucion = $_POST['institution'];
    $password = $_POST['password'];
    $tipoUsuario = $_POST['userType'];

    $password = hash('sha512', $password);

    $query_insert = "INSERT INTO usuarios(nombre, apellidoP, apellidoM, profesion, institucion, contraseña, tipoUsuario_usuario) VALUES('$nombre', '$apellidoP', '$apellidoM', '$profesion', '$institucion', '$password', '$tipoUsuario')";

    $ejecutar = mysqli_query($conexion, $query_insert);

    if($ejecutar){
        header('Location: ../interfaz_admin/admin.php');
    }

?>