<?php
    include '../../../modelo/conexion.php';
    include '../../../modelo/consultas/consultaEstacionesParaJS.php';
?>
<div class ="col">
    <h2 class="text-center text-dark">Mapa de las estaciones:</h2>
    <div id="map" style="height: 400px; width: 100%;"></div>
</div>

<div id="dynamic-data" data-locations='<?php echo json_encode($locations); ?>'></div>
