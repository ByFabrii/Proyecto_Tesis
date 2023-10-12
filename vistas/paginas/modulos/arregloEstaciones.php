<?php
    // Define un arreglo asociativo para las estaciones y sus configuraciones específicas
    $estaciones = [
        'Estacion 1' => [
            'titulo' => 'Estación 1',
            'nombre' => $nombre_estacion,
        ],
        'Estacion 2' => [
            'titulo' => 'Estacion 2',
            'nombre' => $nombre_estacion,
        ],
        'Estacion 3' => [
            'titulo' => 'Estacion 3',
            'nombre' => $nombre_estacion,
        ],
        'Estacion 4' => [
            'titulo' => 'Estacion 4',
            'nombre' => $nombre_estacion,
        ],
        'Estacion 5' => [
            'titulo' => 'Estacion 5',
            'nombre' => $nombre_estacion,
        ],
    ];

    // Verifica si la estación existe en el arreglo
    if (array_key_exists($nombre_estacion, $estaciones)) {
        $estacion = $estaciones[$nombre_estacion];
    } else {
        // Mostrar un mensaje de Bootstrap si no se encuentra una coincidencia
        echo '<div class="alert alert-warning">Estación no encontrada.</div>';
        // Puedes personalizar el mensaje o el estilo de Bootstrap según tus necesidades
        exit(); // Termina el script para evitar que se muestre la tabla vacía
    }
?>