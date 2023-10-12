function limpiarFiltros(){
    xmlhttp = new XMLHttpRequest();

    var limpiar = document.getElementById('BLimpiar').value;
    

    var url = "limpiar2.php?limpiar=" + limpiar;
    xmlhttp.open('GET', url, true);
    xmlhttp.send(null);
    xmlhttp.onreadystatechange = function () {

        if (xmlhttp.readyState == 4) {//estado Listo!
            if (xmlhttp.status == 200) {//Recarga exitosa
                document.getElementById('divContenedor').innerHTML = xmlhttp.responseText;
            } else {
                alert("Error ->" + xmlhttp.responseText);
            }
        }
    };
}