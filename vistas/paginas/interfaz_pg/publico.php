<?php
    include "../../../modelo/conexion.php";
?>

<!-- Sección de datos principales y mapa -->
<div class="container-fluid vh-100">
    <div class="row vh-100">
        <?php
            include "sidebar.php";
            include "datosGenerales.php";
        ?>
    </div>
</div>

<!-- Sección de componentes de publico (buscar, limpiar filtros, etc) -->
<?php
    //Incluir footer para funcionamiento de los botones.
    include_once "../modulos/footer.php";
?>