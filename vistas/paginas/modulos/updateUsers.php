<?php
    include "../../../modelo/conexion.php";
    include "../modulos/header.php";

    $id = $_GET['id'];

    include "../../../modelo/consultas/consultaUsuariosPorId.php";
    include "../../../modelo/consultas/verificarConsultaUsuarios.php";

?>

<div id="editarUsuario">
    <form action="actualizarUsuario.php?id=<?php echo $row['idUsuario']?>" method = "POST">
        <div class="username">
            <input type="text" name ="nombre" value = "<?php echo $nombre?>" required>
            <label>Nombre</label>
        </div>
        <div class="username">
            <input type="text" name ="lastname1" value = "<?php echo $apellidoP?>" required>
            <label>Apellido paterno</label>
        </div>
        <div class="username">
            <input type="text" name ="lastname2" value = "<?php echo $apellidoM?>" required>
            <label>Apellido materno</label>
        </div>
        <div class="username">
            <input type="text" name ="job" value = "<?php echo $profesion?>" required>
            <label>Profesión</label>
        </div>
        <div class="username">
            <input type="text" name ="institution" value = "<?php echo $institucion?>" required>
            <label>Institución</label>
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
        <input type="submit" class="btn btn-dark fs-4" value="Actualizar">

    </form>
</div>

