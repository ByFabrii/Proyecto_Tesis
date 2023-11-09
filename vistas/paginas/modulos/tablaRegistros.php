<?php
    include "../../../modelo/conexion.php";

    include "../../../modelo/consultas/consultaRegistro.php";
    include "../../../app/helpers/helpers.php";
?>
<div class="container" id="EditarRegistros">

</div>
<div class ="container" id="VerRegistros">
    <h2 class = "text-center pt-2">Registros:</h2>
    <div class="table-responsive border border-dark mx-auto" style="max-height: 600px; max-width: 1100px">
    <table class="table table-hover table-striped-columns">
        <thead class="bg-warning text-white table-dark">
            <tr>
                <th>Id</th>
                <th>Estación</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Temp. Actual</th>
                <th>Temp. más alta</th>
                <th>Temp. más baja</th>
                <th>Humedad relativa</th>
                <th>Punto de Rocío</th>
                <th>Velocidad del viento</th>
                <th>Dir. Viento</th>
                <th>Sensación Térmica</th>
                <th>índice de calor</th>
                <th>Presión atmosférica</th>
                <th>Precipitación</th>
                <th>Radiación Solar</th>
                <th>Energía Solar</th>
                <th>Temperatura Interna</th>
                <th>Humedad Interna</th>
                <th>Punto de rocio interno</th>
                <th>Índice de calor interno</th>
                <th>Evotranspiración</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <?php                            
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
                <td><?php echo $datos['Out_Hum']?></td>
                <td><?php echo $datos['Dew_Pt']?></td>
                <td><?php echo $datos['Wind_Speed']?></td>
                <td><?php echo $significado?></td>
                <td><?php echo $datos['Wind_Chill']?></td>
                <td><?php echo $datos['Heat_Index']?></td>
                <td><?php echo $datos['Heat_Index']?></td>
                <td><?php echo $datos['Bar']?></td>
                <td><?php echo $datos['Rain_Rate']?></td>
                <td><?php echo $datos['Solar_Rad']?></td>
                <td><?php echo $datos['Solar_Energy']?></td>
                <td><?php echo $datos['In_Temp']?></td>
                <td><?php echo $datos['In_Hum']?></td>
                <td><?php echo $datos['In_Dew']?></td>
                <td><?php echo $datos['In_Heat']?></td>
                <td><?php echo $datos['ET']?></td>
                <td><a type="button" class="btn btn-danger fs-4" href="../modulos/eliminarRegistro.php?id=<?php echo $datos['idRegistro']?>">Eliminar</a></td>
            </tr>
        </tbody>
        <?php
            }
        ?>
    </table>
</div>

</div>


