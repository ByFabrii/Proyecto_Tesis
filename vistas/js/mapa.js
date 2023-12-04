function initMap() {
    // Obtener el elemento div que contiene los datos
    var dataDiv = document.getElementById('dynamic-data');


    console.log(dataDiv.dataset.locations);
    
    // Obtener los datos del atributo data-locations usando dataset
    var locations = JSON.parse(dataDiv.dataset.locations);

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 13,
        center: { lat: 19.771331, lng: -104.363150 }
    });

    var currentInfoWindow = null;

    for (var i = 0; i < locations.length; i++) {
        addMarker(locations[i], map);
    }

    function addMarker(location, map) {
        var marker = new google.maps.Marker({
            position: { lat: parseFloat(location.lat), lng: parseFloat(location.lng) },
            map: map,
            title: location.name
        });

        var infowindow = new google.maps.InfoWindow({
            content: location.name
        });

        marker.addListener('click', function () {
            // Cerrar el infowindow actual si está abierto
            if (currentInfoWindow) {
                currentInfoWindow.close();
            }

            // Abrir el nuevo infowindow
            infowindow.open(map, marker);
            currentInfoWindow = infowindow;

            // Ocultar el infowindow después de 3 segundos (3000 ms)
            setTimeout(function () {
                infowindow.close();
            }, 3000);
        });
    }
}
