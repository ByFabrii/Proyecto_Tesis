<?php
    //Consulta para el insert
    $sql = "SELECT Nombre as name, Longitud as lng, Latitud as lat FROM estaciones";
    $resultado = $conexion->query($sql);

    // Si hay resultados, formatearlos como un array en PHP
    $locations = array();
    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            $locations[] = $row;
        }
    }

    // Convertir el array PHP a formato JSON para JavaScript
    $jsonLocations = json_encode($locations);
?>




<!-- Imprimir datos para que JavaScript los use -->
<script>
    var locations = <?php echo $jsonLocations; ?>;
    // Aquí puedes usar los datos de 'locations' en tu código JavaScript
    console.log(locations); // Solo como ejemplo
</script>