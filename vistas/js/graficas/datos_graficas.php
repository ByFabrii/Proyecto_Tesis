<?php
    // Realiza la consulta SQL para obtener los datos históricos
    $sql = "SELECT * FROM registro ORDER BY idRegistro DESC LIMIT 15";
    $result = $conexion->query($sql);

    $data_wind_speed = array(); // Array para almacenar los datos
    $data_temp_out = array();
    $data_Solar_Rad = array();
    $data_precipitation = array();
    $data_Wind_Dir = array();
    $data_hora = array();


    $data_temp_hi = array();
    $data_temp_low = array();
    $data_hum_out = array();
    $data_et = array();

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $data_wind_speed[] = $row["Wind_Speed"];
            $data_temp_out[] = $row["Temp_Out"];
            $data_Solar_Rad[] = $row["Solar_Rad"];
            $data_precipitation[] = $row["Rain_Rate"];
            $d_Wind_Dir = $row["Wind_Dir"];

            $hora = $row["hora"];
            $data_hora[] = $hora;

            $data_temp_hi[] = $row["Hi_Temp"];
            $data_temp_low[] = $row["Low_Temp"];
            $data_hum_out[] = $row["Out_Hum"];
            $data_et[] = $row["ET"];

            if (isset($data_Wind_Dir[$d_Wind_Dir])) {
                $data_Wind_Dir[$d_Wind_Dir]++;
            } else {
                // Si no existe en el array, agrega la cadena de texto con frecuencia 1
                $data_Wind_Dir[$d_Wind_Dir] = 1;
            }

        }
    }

    // Convierte el array PHP en un objeto JSON
    $data_json_wind_s = json_encode($data_wind_speed);
    $data_json_temp_o = json_encode($data_temp_out);
    $data_json_solar_r = json_encode($data_Solar_Rad);
    $data_json_precipitation = json_encode($data_precipitation);

    $data_json_temp_h = json_encode($data_temp_hi);
    $data_json_temp_l = json_encode($data_temp_low);
    $data_json_hum_o = json_encode($data_hum_out);
    $data_json_et = json_encode($data_et);
    ?>