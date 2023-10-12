<?php
    include "../../../modelo/conexion.php";

    $nombre_estacion = $_GET['Nombre'];

    include "../modulos/arregloEstaciones.php";
?>

<div class="vista" id="divContenedorTabla">
        <table class="container-sm table table-hover border border-dark my-5 table-striped-columns">
            <thead class="bg-warning text-white table-dark">
                <tr>
                    <td>Id</td>
                    <td>Estación</td>
                    <td>Fecha</td>
                    <td>Hora</td>
                    <td>Temp. Actual</td>
                    <td>Temp. más alta</td>
                    <td>Temp. más baja</td>
                    <td>Radiación Solar</td>
                    <td>Precipitación</td>
                    <td>Velocidad del viento</td>
                    <td>Dir. Viento</td>
                    <td>Humedad</td>
                    <td>Evotranspiración</td>
                </tr>
            </thead>

            <?php
                include "../../../modelo/consultas/consultaRegistroPorEstacion15Valores.php";
                include "../../../app/helpers/helpers.php";            

                while($datos=mysqli_fetch_array($resultado)){  
                $significado = getWindDirection($datos['Wind_Dir']);

            ?>
            <tbody>
                <tr>
                    <td><?php echo $datos['idRegistro']?></td>
                    <td><?php echo $datos['estaciones_nombre']?></td>
                    <td><?php echo $datos['fecha']?></td>
                    <td><?php echo $datos['hora']?></td>
                    <td><?php echo $datos['Temp_Out']?></td>
                    <td><?php echo $datos['Hi_Temp']?></td>
                    <td><?php echo $datos['Low_Temp']?></td>
                    <td><?php echo $datos['Solar_Rad']?></td>
                    <td><?php echo $datos['Rain_Rate']?></td>
                    <td><?php echo $datos['Wind_Speed']?></td>
                    <td><?php echo $significado?></td>
                    <td><?php echo $datos['Out_Hum']?></td>
                    <td><?php echo $datos['ET']?></td>
                </tr>
            </tbody>
            <?php
                } //Esta llave cierra el "while" que se empezó hace un momento.
            ?>
        </table>
    </div>