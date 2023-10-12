<?php
    if ($resultado->num_rows > 0) {
        $row = $resultado->fetch_assoc();
        $ultimoValor = $row['Wind_Speed'];
        echo "<span class= 'weather-temh1 fs-1'>" . $ultimoValor . " km/h" . "</span>";
    } else {
        echo "No se encontraron resultados.";
    }
?>