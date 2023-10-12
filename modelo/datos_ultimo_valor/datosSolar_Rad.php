<?php
    if ($resultado->num_rows > 0) {
        $row = $resultado->fetch_assoc();
        $ultimoValor = $row['Solar_Rad'];
        echo "<h1 class= 'weather-temh1'>" . $ultimoValor . " W/m²" . "</h1>";
    } else {
        echo "No se encontraron resultados.";
    }
?>