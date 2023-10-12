<?php 
    include_once "../modulos/conexion.php";
    include_once "../../../app/helpers/helpers.php";

?>
<?php

$nombre_estacion = $_GET['Nombre'];

?>

<?php
    include_once "../modulos/arregloEstaciones.php";

    include "../../../modelo/consultas/consultaRegistroPorEstacion.php";
?>
<div class="container-weather row col" id="divContenedor">
    <div class="row">
        <h2 class="text-center text-dark">Datos generales:</h2>
        <div class="weather-side col ">
            <?php
                include "../../../modelo/consultas/consultaRegistroPorEstacion.php";
            ?>
            <div class="weather-container text-center">
                <div class="date-container text-center pt-5">
                    <h2 class="title">TEMPERATURA <i class="bi bi-thermometer"></i> </h2>
                </div>
                <?php
                    include "../../../modelo/datos_ultimo_valor/datosTemp_Out.php";
                ?>
            </div>
        </div>
        <div class="weather-side col pt-1 mx-3">
            <div class="today-info-container">
                <div class="today-info">
                    <div class="py-4 text-center">
                        <h2 class="title mb-3">VIENTO <i class="bi bi-wind"></i></h2>
                        <h3 class="title">Velocidad</h3>
                        <?php
                            include "../../../modelo/consultas/consultaRegistroPorEstacion.php";
                        ?>
                        <?php
                            include "../../../modelo/datos_ultimo_valor/datosWind_Speed.php";
                        ?>
                        <div class="clear"></div>
                    </div>
                    <div class="wind text-center">
                        <h3 class="title">Dirección</h3>
                        <?php
                            include "../../../modelo/consultas/consultaRegistroPorEstacion.php";
                        ?>
                        <?php
                            include "../../../modelo/datos_ultimo_valor/datosWind_Dir.php";
                        ?>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="weather-side col">
            <?php
                include "../../../modelo/consultas/consultaRegistroPorEstacion.php";
            ?>
            <div class="weather-gradient"></div>
                <div class="date-container text-center pt-5">
                    <h2 class="date-dayname">RADIACIÓN SOLAR <i class="bi bi-brightness-high"></i></h2>
                </div>
                <div class="weather-container text-center">
                    <?php
                        include "../../../modelo/datos_ultimo_valor/datosSolar_Rad.php";
                    ?>
                </div>
        </div>
        <div class="weather-side col pt-1 mx-3">
            <div class="today-info-container">
                <div class="today-info">
                    <div class="precipitation pt-5 text-center">
                        <h2 class="title">PRECIPITACIÓN <i class="bi bi-cloud-drizzle"></i></h2>     
                        <?php
                            include "../../../modelo/consultas/consultaRegistroPorEstacion.php";
                        ?>
                        <div class="weather-container text-center">
                            <?php
                            include "../../../modelo/datos_ultimo_valor/datosRain_Rate.php";
                            ?>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
    
        </div>
    </div>
</div>