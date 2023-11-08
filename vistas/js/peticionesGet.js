function peticionGetPublico() {
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
                document.getElementById('divContenedorTabla').innerHTML = xmlhttp.responseText;

            } else {
                alert("Error ->" + xmlhttp.responseText);
            } 
        }
    };
}


function actualizarUsuario(id){
    xmlhttp = new XMLHttpRequest();
    
    var url = "../modulos/modalEditarUsuario.php?id="+id;
    alert(url);
    xmlhttp.open('GET', url, true);
    xmlhttp.send(null);
    xmlhttp.onreadystatechange = function () {

        if (xmlhttp.readyState == 4) {//estado Listo!
            if (xmlhttp.status == 200) {//Recarga exitosa
              //  alert(""+xmlhttp.responseText);
              const urlParams = new URLSearchParams(window.location.search);
              if (urlParams.get('showModal') === '2') {
                  // Abre el modal con los usuarios aquí
                  $('#editarUsuarioModal').modal('show');
              }
            } else {
                alert("Error ->" + xmlhttp.responseText);
            } 
        }
    };
}

