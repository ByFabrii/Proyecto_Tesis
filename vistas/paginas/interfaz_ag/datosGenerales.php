<div class="col-9 m-auto p-auto">
    <?php 
        include "../modulos/fechaAutomatica.php";
    ?>
    <?php
        //Sección del mapa
        include_once "../modulos/mapa2.php";
    ?>


    <!--Sección de la tabla de datos-->
    <div id="tablas">
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
                    include "../../../modelo/consultas/consultaRegistro15Valores.php";
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
    </div>

    <!--Sección de la gráfica de datos-->
    <div id="graficas">
        <div class="vista" id="divContenedorGrafica">
            <!--Sección de los divs donde se muestran los datos-->
            <div class="container-fluid row">
                <div class="col-4">
                    <canvas id="tempOutChart"></canvas>
                </div>
                <div class="col-4">
                    <canvas id="tempHiChart"></canvas>
                </div>

                <div class="col-4">
                    <canvas id="tempLowChart"></canvas>
                </div>
            </div>

            <div class="container-fluid row">
                <div class="col-4 my-5">
                    <canvas id="precipitationChart"></canvas>
                </div>

                <div class="col-4 d-flex justify-content-center">
                    <canvas id="polarChart"></canvas>
                </div>

                <div class="col-4 my-5">
                    <canvas id="radSolarChart"></canvas>
                </div>
            </div>
            
            <div class="container-fluid row">
                <div class="col-4">
                    <canvas id="windSpeedChart"></canvas>
                </div>
                
                <div class="col-4">
                    <canvas id="HumOutChart"></canvas>
                </div>
                
                <div class="col-4">
                    <canvas id="EtChart"></canvas>
                </div>
                
            </div>
            
            <!--Sección de incrustación de datos para el funcionamiento de las gráficas-->
            <?php 
                include "../../js/graficas/datos_graficas.php";
                include "../../js/graficas/Temp_Out.php";
                include "../../js/graficas/Hi_Temp.php";
                include "../../js/graficas/Low_Temp.php";
                include "../../js/graficas/Solar_Rad.php";
                include "../../js/graficas/Wind_Speed.php";
                include "../../js/graficas/Rain_Rate.php";
                include "../../js/graficas/Wind_Dir.php";
                include "../../js/graficas/Out_Hum.php";
                include "../../js/graficas/Et.php";
            ?>
        </div>
    </div>

</div>

