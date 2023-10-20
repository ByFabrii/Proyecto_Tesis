<div class="col">
    <h2 class="px-5">Selecciona una estación</h2>
    <!-- Contenido de la primera columna -->
    <div class="container-xl my-3">
        <div class="row">
            <div class="col form-check">
                <?php
                    include "../../../modelo/consultas/consultaEstaciones.php";

                    if ($resultado->num_rows > 0) {
                        echo "<select class='form-select fs-2 form-select-lg my-3' name='CBEstaciones' id='CBEstaciones' aria-label='Default select example'>";
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
            <div class="mx-5">
                <input type="button" class="btn btn-primary fs-1" id="BFiltrar" value="Filtrar" onclick="peticionGetPublico()">
                <input type="button" class="btn btn-light border border-dark fs-1" id="BLimpiar" value="Limpiar Filtros" onclick="limpiarFiltrosPublico()">
            </div>
        </div>
    </div>
</div>