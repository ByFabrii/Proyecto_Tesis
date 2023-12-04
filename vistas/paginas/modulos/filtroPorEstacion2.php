<div class="col form-check d-flex justify-content-center">
    <?php
        include "../../../modelo/consultas/consultaEstaciones.php";

        if ($resultado->num_rows > 0) {
            echo "<select class='form-select fs-3 form-select-lg my-3' name='CBEstaciones' id='CBEstaciones' aria-label='Default select example'>";
            $estaciones = "";
            while ($row = $resultado->fetch_assoc()) {
                $estaciones .= "<option value='" . $row['Nombre'] . "'>" . $row['Nombre'] . "</option>";
            }
            echo $estaciones;
            echo "</select>";
        } else {
            echo "No hubo resultados";
        }
    ?>
</div>
<div class="d-flex justify-content-center">
    <input type="button" class="btn btn-primary fs-3 mx-4" id="BFiltrar" value="Filtrar"
        onclick="peticionGet()">
    <input type="button" class="btn btn-light border border-dark fs-3" id="BLimpiar"
        value="Limpiar" onclick="limpiarFiltros()">
</div>