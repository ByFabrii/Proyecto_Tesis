var verUsuarios = document.getElementById('VerUsuarios');
var verEstaciones = document.getElementById('VerEstaciones');

var verMapa = document.getElementById('mapa');

function alternarContenido() {
    var tablasDiv = document.getElementById('tablas');
    var graficasDiv = document.getElementById('graficas');

    var textoBoton = document.getElementById('alternador');

    var selEstacion = document.getElementById('seleccionEstacion');

    if (graficasDiv.style.display === 'none') {
        // Si las gráficas están ocultas, las mostramos y ocultamos las tablas
        graficasDiv.style.display = 'block';
        tablasDiv.style.display = 'none';
        
        textoBoton.textContent = 'Mostrar tabla';

        selEstacion.style.display = 'none';

        mapa.style.display = 'none';

    } else {
        // Si las gráficas están visibles, las ocultamos y mostramos las tablas
        graficasDiv.style.display = 'none';
        tablasDiv.style.display = 'block';

        textoBoton.textContent = 'Mostrar gráficas';

        selEstacion.style.display = 'block';

        mapa.style.display = 'none';
    }
}

function alternarTablaUsuarios() {
    // Tabla Usuarios
    if (verUsuarios.style.display === 'none' || verUsuarios.style.display === '') {
        verUsuarios.style.display = 'block';
        verMapa.style.display = 'none';
        verEstaciones.style.display = 'none';
    } else if (verUsuarios.style.display === 'block') {
        verUsuarios.style.display = 'none';
        verMapa.style.display = 'block';
    }
}

function alternarTablaEstaciones() {
    // Interfaz Admin
    if (verEstaciones.style.display === 'none' || verEstaciones.style.display === '') {
        verEstaciones.style.display = 'block';
        verMapa.style.display = 'none';
        verUsuarios.style.display = 'none';
    } else if (verEstaciones.style.display === 'block') {
        verEstaciones.style.display = 'none';
        verMapa.style.display = 'block';
    }
}


