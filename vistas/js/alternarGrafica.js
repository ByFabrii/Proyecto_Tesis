var verUsuarios = document.getElementById('VerUsuarios');
var verEstaciones = document.getElementById('VerEstaciones');
var verRegistros = document.getElementById('VerRegistros');

var mapa = document.getElementById('mapa');

function alternarContenido() {
    var tablasDiv = document.getElementById('tablas');
    var graficasDiv = document.getElementById('graficas');

    var textoBoton = document.getElementById('alternador');

    if (graficasDiv.style.display === 'none') {
        // Si las gráficas están ocultas, las mostramos y ocultamos las tablas
        graficasDiv.style.display = 'block';
        tablasDiv.style.display = 'none';
        
        textoBoton.textContent = 'Mostrar tabla';

        mapa.style.display = 'none';

    } else {
        // Si las gráficas están visibles, las ocultamos y mostramos las tablas
        graficasDiv.style.display = 'none';
        tablasDiv.style.display = 'block';

        textoBoton.textContent = 'Mostrar gráficas';

        mapa.style.display = 'none';
    }
}

function alternarTablaUsuarios() {
    // Tabla Usuarios
    if (verUsuarios.style.display === 'none' || verUsuarios.style.display === '') {
        verUsuarios.style.display = 'block';
        mapa.style.display = 'none';
        verEstaciones.style.display = 'none';
        verRegistros.style.display = 'none';
    } else if (verUsuarios.style.display === 'block') {
        verUsuarios.style.display = 'none';
        mapa.style.display = 'block';
    }
}

function alternarTablaEstaciones() {
    // Interfaz Admin
    if (verEstaciones.style.display === 'none' || verEstaciones.style.display === '') {
        verEstaciones.style.display = 'block';
        mapa.style.display = 'none';
        verUsuarios.style.display = 'none';
        verRegistros.style.display = 'none';
    } else if (verEstaciones.style.display === 'block') {
        verEstaciones.style.display = 'none';
        mapa.style.display = 'block';
    }
}

function alternarTablaRegistros() {
    // Interfaz Admin
    if (verRegistros.style.display === 'none' || verRegistros.style.display === '') {
        verRegistros.style.display = 'block';
        mapa.style.display = 'none';
        verUsuarios.style.display = 'none';
        verEstaciones.style.display = 'none';
    } else if (verRegistros.style.display === 'block') {
        verRegistros.style.display = 'none';
        mapa.style.display = 'block';
    }
}

