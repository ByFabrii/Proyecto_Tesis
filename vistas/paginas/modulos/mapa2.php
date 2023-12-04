<?php
    include '../../../modelo/conexion.php';
    include '../../../modelo/consultas/consultaEstacionesParaJS.php';
?>

<div class="container" id ="mapa">
    <h2 class="text-center">Mapa de las estaciones:</h2>
    <div id="map" style="height: 520px; width: 100%;">
    </div>
</div>

<div id="dynamic-data" data-locations='<?php echo json_encode($locations); ?>'></div>
