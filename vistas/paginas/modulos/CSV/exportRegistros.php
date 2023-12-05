<?php
    include ("../../../../modelo/conexion.php");

    // Establecer encabezados para el archivo CSV
    header('Content-Type: text/csv; charset=UTF-8');
    header('Content-Disposition: attachment; filename=registrosTotales.csv');

    // Abrir el archivo de salida con la codificación UTF-8
    $output = fopen("php://output", "w");
    fprintf($output, chr(0xEF).chr(0xBB).chr(0xBF)); // Establecer BOM para UTF-8

    // Agregar encabezados al archivo CSV
    fputcsv($output, array('idRegistro', 'Nombre Estación', 'Fecha', 'Hora', 'Temp_Out', 'Hi_Temp', 'Low_Temp', 'Out_Hum', 'Dew_Pt', 'Wind_Speed', 'Wind_Dir', 'Wind_Chill', 'Heat_Index', 'Bar', 'Rain_Rate', 'Solar_Rad', 'Solar_Energy', 'In_Temp', 'In_Hum', 'In_Dew', 'In_Heat', 'ET'));

    // Obtener datos de la base de datos y escribir en el archivo CSV
    $query = $conexion->query("SELECT idRegistro, estaciones_nombre, fecha, hora, Temp_Out, Hi_Temp, Low_Temp, Out_Hum, Dew_Pt, Wind_Speed, Wind_Dir, Wind_Chill, Heat_Index, Bar, Rain_Rate, Solar_Rad, Solar_Energy, In_Temp, In_Hum, In_Dew, In_Heat, ET FROM `registro` ORDER BY `fecha` DESC");
    while ($fetch = $query->fetch_assoc()) {
        // Convertir cada valor a UTF-8 antes de escribirlo en el archivo CSV
        $convertedRow = array_map(function($value) {
            return mb_convert_encoding($value, 'UTF-8', 'auto');
        }, $fetch);

        // Escribir la fila en el archivo CSV
        fputcsv($output, $convertedRow);
    }

    // Cerrar el archivo CSV
    fclose($output);
?>
