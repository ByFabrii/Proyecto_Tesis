<?php
    include "../modulos/header.php";
    include "../../../modelo/conexion.php";
?>

<div class="formulario">
    <h2>Registrarse</h2>

    <form action ="register_data.php" method = "POST">
        <div class="username">
            <input type="text" name ="nombre" required>
            <label>Nombre</label>
        </div>
        <div class="username">
            <input type="text" name ="lastname1" required>
            <label>Apellido paterno</label>
        </div>
        <div class="username">
            <input type="text" name ="lastname2" required>
            <label>Apellido materno</label>
        </div>
        <div class="username">
            <input type="text" name ="job" required>
            <label>Profesión</label>
        </div>
        <div class="username">
            <input type="text" name ="institution" required>
            <label>Institución</label>
        </div>
        <div class="username">
            <input type="password" name = "password" required>
            <label>Contraseña</label>
        </div>
        <div class="username">

            <?php
                include "../../../modelo/consultas/consultaTipoUsuarios.php";

                if ($resultado->num_rows > 0) {
                    echo "<select name='userType' id='userType' aria-label='Default select example' required>";
                    $tipoUsuario = "";
                    while ($row = $resultado->fetch_assoc()) {
                        $tipoUsuario .= "<option value='" . $row['usuario'] . "'>" . $row['usuario'] . "</option>";
                    }
                    echo $tipoUsuario;
                    echo "</select>";
                } else {
                    echo "No hubo resultados";
                }
            ?>
        </div>
        <div class="recordar">¿Olvidó su contraseña?</div>
        <input type="submit" value="Entrar">
        <div class="registrarse">
            <a href ="login.php">Volver al inicio de sesión</a>
        </div>
    </form>
</div>

<?php
    include "../modulos/footer.php";
?>