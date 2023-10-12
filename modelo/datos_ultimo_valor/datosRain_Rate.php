<?php
    if ($resultado->num_rows > 0) {
        $row = $resultado->fetch_assoc();
        $ultimoValor = $row['Rain_Rate'];
        echo "<h1 class= 'weather-temh1'>" . $ultimoValor . " mm" . "</h1>";
    } else {
        echo "No se encontraron resultados.";
    }
?>