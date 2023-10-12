function initMap() {
    var locations = [
        { name: 'Estación 1', lat: 19.76488, lng: -104.353466, info: 'Estación: Jardines' },
        { name: 'Estación 2', lat: 19.77777, lng: -104.363879, info: 'Estación: Montañas' },
        { name: 'Estación 3', lat: 19.763157, lng: -104.376035, info: 'Estación: Echeverria' },
        { name: 'Estación 4', lat: 19.78472, lng: -104.36444, info: 'Estación: Arquitos' },
        { name: 'Estación 5', lat: 19.77888, lng: -104.36776, info: 'Estación: Morelos' }
    ];

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
        position: { lat: location.lat, lng: location.lng },
        map: map,
        title: location.name
    });

    var infowindow = new google.maps.InfoWindow({
        content: location.info
    });

    var infowindow = new google.maps.InfoWindow({
            content: location.info
        });

    marker.addListener('click', function () {
            // Cerrar el infowindow actual si está abierto
            if (currentInfoWindow) {
                currentInfoWindow.close();
            }

            // Abrir el nuevo infowindow
            infowindow.open(map, marker);
            currentInfoWindow = infowindow;


            // Ocultar el infowindow después de 5 segundos (5000 ms)
            setTimeout(function () {
                infowindow.close();
            }, 3000)
    });
}
}