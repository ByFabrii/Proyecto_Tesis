<?php
    if ($resultado->num_rows > 0) {
        $row = $resultado->fetch_assoc();
        $ultimoValor = $row['Temp_Out'];
        echo "<h1 class= 'weather-temh1'>" . $ultimoValor . "°C" . "</h1>";
    } else {
        echo "No se encontraron resultados.";
    }
?>