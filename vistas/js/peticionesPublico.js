function peticionGet() {
    xmlhttp = new XMLHttpRequest();

    var estaciones = document.getElementById('CBEstaciones').value;
       // alert(estaciones);
    var url = "buscar2.php?Nombre=" + estaciones;
    xmlhttp.open('GET', url, true);
    xmlhttp.send(null);
    xmlhttp.onreadystatechange = function () {

        if (xmlhttp.readyState == 4) {//estado Listo!
            if (xmlhttp.status == 200) {//Recarga exitosa
              //  alert(""+xmlhttp.responseText);
                document.getElementById('divContenedor').innerHTML = xmlhttp.responseText;

            } else {
                alert("Error ->" + xmlhttp.responseText);
            } 
        }
    };
}