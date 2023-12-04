<?php
    include "../../../modelo/conexion.php";
?>
<div class="container-fluid vh-100">
    <div class="row vh-100">
        <?php
            include "sidebar.php";
            include "datosGenerales.php";
        ?>
    </div>
</div>

<?php
    //Incluir footer para funcionamiento de los botones.
    include_once "../modulos/footer.php";
?>