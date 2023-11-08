<?php
    include "../../../modelo/conexion.php";
?>

<!-- Modal -->
<div class="modal fade" id="usuariosModal" tabindex="-1" aria-labelledby="usuariosModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-1 text-center" id="usuariosModalLabel">Registro de usuarios</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="">
                <form action ="../login/register_data2.php" method = "POST">
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
                    <input type="submit" value="Crear" class="btn btn-primary fs-1">
                </form>
            </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
    </div>
  </div>
</div>