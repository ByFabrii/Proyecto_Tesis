
<?php require("../modulos/conexion.php")?>


<?php
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];
    $password = hash("sha512", $password);


    $validacion = "SELECT u.nombre, u.contraseña, r.usuario as rol FROM usuarios u left join tipousuario r ON u.tipousuario_idTipousuario = r.idTipoUsuario WHERE nombre = '$nombre' and contraseña = '$password'";
    $resultado = $conexion->query($validacion);
    $row = $resultado -> fetch_assoc();

    if($resultado->num_rows > 0){
        session_start();
        $_SESSION['usuario'] = $nombre;
        $_SESSION['rol'] = $row['rol'];

        if($_SESSION['rol'] == 'Usuario2'){
            header("location: ../interfaz_ag/agricultores.php");
        } else if($_SESSION['rol'] == 'Usuario1'){
            header("location: ../interfaz_pc/proteccionCivil.php");
        } else if($_SESSION['rol'] == 'Admin'){
            header("location: ../interfaz_admin/admin.php");
        }
        exit;
    }else{
       echo ' 
       <script>
            alert("Usuario no existe en la base de datos");
            window.location = "login.php";
        </script>
        ';
        exit;
    }

?>