<?php
    include "../login/validate_session.php";
    include "../login/validate_roles.php";
    include "../../../modelo/conexion.php";
    include "../modulos/header.php";
?>

<div class="container-fluid row pb-2 px-5">
    <?php
        include "../../../modelo/consultas/consultaUsuarios.php";
        include "../../../modelo/conexionExitosaYValidacionUsuario.php";
    ?>
    <?php
        //Sección de la fecha y hora superior
        include "../modulos/cabeceraBotones.php";
    ?>
    <?php
        //Sección del mapa
        include_once "../modulos/mapa2.php";
    ?>
    <!--Sección de los controladores-->
    <div class="container row col">
        <div class="col">
            <?php
                include "../modulos/filtroPorEstacion2.php";
            ?>
        </div>
    </div>
</div>

<?php
    include "datosGenerales.php";
?>

<?php
    //Incluir footer para funcionamiento de los botones.
    include_once "../modulos/footer.php";
?>