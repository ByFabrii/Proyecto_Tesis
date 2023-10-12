<?php
    // Este ciclo se utiliza para leer lo que se toma de las variables de dirección del viento, etc.
    if ($resultado->num_rows > 0) {
        $row = $resultado->fetch_assoc();
        $ultimoValor = $row['Wind_Dir'];

        $significado = getWindDirection($row['Wind_Dir']); //Manda a llamar a la función para obtener el significado de la variable Wind_Dir.
    } else {
        echo "No se encontraron resultados.";
    }
?>