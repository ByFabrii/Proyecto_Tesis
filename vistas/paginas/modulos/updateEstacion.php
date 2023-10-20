<?php
    include "../../../modelo/conexion.php";
    include "../modulos/header.php";

    $id = $_GET['id'];

    include "../../../modelo/consultas/consultaEstacionesPorId.php";
    include "../../../modelo/consultas/verificarConsultaEstaciones.php";

?>

<div id="editarEstacion">
    <form action="actualizarEstacion.php?id=<?php echo $row['idEstaciones']?>" method = "POST">
        <div class="username">
            <input type="text" name ="nombre" value = "<?php echo $nombre?>" required>
            <label>Nombre</label>
        </div>
        <div class="username">
            <input type="text" name ="longitud" value = "<?php echo $longitud?>" required>
            <label>Longitud</label>
        </div>
        <div class="username">
            <input type="text" name ="latitud" value = "<?php echo $latitud?>" required>
            <label>Latitud</label>
        </div>
        <input type="submit" class="btn btn-dark fs-4" value="Actualizar">

    </form>
</div>

