<?php require('layouts/header.php')?>
<?php require('layouts/conexion.php')?>
<?php require('layouts/plantilla-consulta.php')?>

<div class="container text-center">
    <li style="list-style:none; margin-bottom: 3rem"><a type="button" class="btn btn-primary fs-1 my-2 "
            href="interfaz_pg/publico.php">Ver público general</a></li>
</div>


<div class="container-xl">
    <div class="row">
        <div class="col">
            <div id="map" style="height: 400px; width: 100%;"></div>

            <script
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD-RWFfpA_S7fup-ld_8ivQSFpD7X_Y4_A&callback=initMap"
                async defer></script>

            <script>
            function initMap() {
                var locations = [{
                        name: 'OficinaPrincipal',
                        lat: 19.771331,
                        lng: -104.363150,
                        info: 'Kiosko Barcenas'
                    },
                    {
                        name: 'EstaciónObregon',
                        lat: 19.771137,
                        lng: -104.363240,
                        info: 'Estación: Obregón'
                    },
                    {
                        name: 'EstaciónHacienda',
                        lat: 19.764378,
                        lng: -104.385679,
                        info: 'Estación: Hacienda los chivos'
                    },
                    {
                        name: 'EstaciónVillas',
                        lat: 19.789196,
                        lng: -104.365488,
                        info: 'Estación: Villas de Autlán'
                    },
                    {
                        name: 'EstaciónVergel',
                        lat: 19.746267,
                        lng: -104.360462,
                        info: 'Estación: Vergel'
                    }
                ];

                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 13,
                    center: {
                        lat: 19.771331,
                        lng: -104.363150
                    }
                });


                var currentInfoWindow = null;


                for (var i = 0; i < locations.length; i++) {

                    addMarker(locations[i], map);

                }

                function addMarker(location, map) {
                    var marker = new google.maps.Marker({
                        position: {
                            lat: location.lat,
                            lng: location.lng
                        },
                        map: map,
                        title: location.name
                    });

                    var infowindow = new google.maps.InfoWindow({
                        content: location.info
                    });

                    var infowindow = new google.maps.InfoWindow({
                        content: location.info
                    });

                    marker.addListener('click', function() {
                        // Cerrar el infowindow actual si está abierto
                        if (currentInfoWindow) {
                            currentInfoWindow.close();
                        }

                        // Abrir el nuevo infowindow
                        infowindow.open(map, marker);
                        currentInfoWindow = infowindow;

                        //document.getElementById("info-box").innerHTML = location.info;

                        // Ocultar el infowindow después de 5 segundos (5000 ms)
                        setTimeout(function() {
                            infowindow.close();
                        }, 2000)
                    });
                }
            }
            </script>
        </div>

        <div class="card my-5">
            <div class="card-header">
                Temperatura
            </div>
            
            <div class="card-body">
                <h1 class="card-title">29°</h1>
  
                <div class="row">
                    <div>
                        <div class="row col-4 my-5">
                            <div class="col">
                            <i class="bi bi-thermometer-sun">Temperatura</i>
                            </div>
                            <div class="col">
                            Max: 29° / Min: 19°
                        </div>

                        <div class="row my-5">
                            <div class="col">
                            <i class="bi bi-droplet-half">Humedad</i>
                            </div>
                            <div class="col">
                            96%
                        </div>

                        <div class="row my-5">
                            <div class="col">
                            <i class="bi bi-arrow-down-up">Presión</i>
                            </div>
                            <div class="col">
                            1011.9 mb
                        </div>
                </div>
            </div>

            

            </div>
            
        </div>

    </div>
</div>



<table class="container-sm table table-hover border border-dark my-5 table-striped-columns">
    <thead class="bg-warning text-white table-dark">
        <tr>

            <td>Id</td>
            <td>Estación</td>
            <td>Fecha</td>
            <td>Hora</td>
            <td>Temperatura Actual</td>
            <td>Temperatura más alta</td>
            <td>Temperatura más baja</td>
        </tr>
    </thead>

    <?php
            while($datos=mysqli_fetch_array($resultado)){      
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
        </tr>
    </tbody>
    <?php
        } //Esta llave cierra el "while" que se empezó hace un momento.
        ?>
</table>



<script src="js/clima.js"></script>
<?php require('layouts/footer.php')?>