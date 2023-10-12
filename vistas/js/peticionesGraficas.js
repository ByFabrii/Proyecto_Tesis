function peticionesGraficas() {
    xmlhttp = new XMLHttpRequest();

    var variables = document.getElementById('CBVariables').value;

       //alert(variables);
    var url = "buscar_grafica.php?variable=" + variables;
    xmlhttp.open('GET', url, true);
    xmlhttp.send(null);
    xmlhttp.onreadystatechange = function () {

        if (xmlhttp.readyState == 4) {//estado Listo!
            if (xmlhttp.status == 200) {//Recarga exitosa
              //  alert(""+xmlhttp.responseText);
                document.getElementById('divContenedorGrafica').innerHTML = xmlhttp.responseText;

            } else {
                alert("Error ->" + xmlhttp.responseText);
            } 
        }
    };
}