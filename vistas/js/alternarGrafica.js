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

