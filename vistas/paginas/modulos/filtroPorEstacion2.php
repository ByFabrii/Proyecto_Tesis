<div class="col" id="seleccionEstacion">
    <h2 class="px-5 text-center">Filtrar por estación</h2>
    <!-- Contenido de la primera columna -->
    <div class="container-xl my-3">
        <div class="row">
            <div class="col form-check d-flex justify-content-center">
                <?php
                    include "../../../modelo/consultas/consultaEstaciones.php";

                    if ($resultado->num_rows > 0) {
                        echo "<select class='form-select form-select-lg fs-2 my-3 text-center w-25' name='CBEstaciones' id='CBEstaciones' aria-label='Default select example'>";
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
            <div class="d-flex mt-3 justify-content-center">
                <input type="button" class="btn btn-primary fs-1 mx-5" id="BFiltrar" value="Filtrar"
                    onclick="peticionGet()">
                <input type="button" class="btn btn-light border border-dark fs-1 mx-5" id="BLimpiar"
                    value="Limpiar" onclick="limpiarFiltros()">
            </div>
        </div>
    </div>
</div>