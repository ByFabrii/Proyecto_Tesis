<?php
    if ($resultado->num_rows > 0) {
        $row = $resultado->fetch_assoc();
        $ultimoValor = $row['Wind_Dir'];
        
        $significado = getWindDirection($row['Wind_Dir']); //Manda a llamar a la función para obtener el significado de la variable Wind_Dir.

        echo "<span class= 'weather-temh1 fs-1'>" . $significado . "</span>";
    } else {
        echo "No se encontraron resultados.";
    }
?>