<?php
    include "../modulos/header.php";
    include "../modulos/conexion.php";
?>
<!-- Sección de filtros en la cabecera -->
<div class="container pb-2 px-5">
    <div class="row justify-content-center">
        <?php
            include_once "../modulos/filtroPorEstacion.php";
            include_once "../modulos/solicitarVariables.php";
            include_once "../modulos/fechaAutomatica.php";
        ?>
    </div>
</div>

<!-- Sección de datos principales y mapa -->
<div class="container-fluid mb-5">
    <div class="row">
        <?php
            include_once "../modulos/mapa.php";
            include_once "datosGenerales.php";
        ?>
    </div>
</div>

<!-- Sección de componentes de publico (buscar, limpiar filtros, etc) -->
<?php


    //Incluir footer para funcionamiento de los botones.
    include_once "../modulos/footer.php";
?>