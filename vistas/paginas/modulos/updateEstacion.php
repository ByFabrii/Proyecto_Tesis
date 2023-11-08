<?php
    include "../../../modelo/conexion.php";
    include "../modulos/header.php";

    $id = $_GET['id'];

    include "../../../modelo/consultas/consultaEstacionesPorId.php";
    include "../../../modelo/consultas/verificarConsultaEstaciones.php";

?>

<div id="editarEstacion" class="container text-center h-100 d-flex align-items-center justify-content-center">
    <form action="actualizarEstacion.php?id=<?php echo $row['idEstaciones']?>" method = "POST" class ="border p-5">
        <h2 class = "border mb-5 fs-1">MODIFICAR ESTACIÓN</h2>
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
        <input type="submit" class="btn btn-primary fs-4" value="Actualizar">
        <br>
        <a type="button" class="btn btn-secondary fs-1 px-2 mt-3 rounded-pill" href="../interfaz_admin/admin.php">Regresar</a>

    </form>
</div>

