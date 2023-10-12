// Función para obtener el nombre del día de la semana
function obtenerNombreDia(dia) {
    const diasDeLaSemana = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];
    return diasDeLaSemana[dia];
}

// Función para obtener la fecha y el día de la semana actual
function obtenerFechaYDia() {
    const fechaActual = new Date();
    const diaSemana = fechaActual.getDay(); // 0 = Domingo, 1 = Lunes, etc.
    const dia = fechaActual.getDate();

    // Obtén el número de mes actual (0 = enero, 1 = febrero, ..., 11 = diciembre)
    const numeroMes = fechaActual.getMonth();

    // Crea un array con los nombres de los meses
    const nombresMeses = [
    "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
    "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
    ];

    // Obtiene el nombre del mes correspondiente al número de mes
    const nombreMes = nombresMeses[numeroMes];

    const año = fechaActual.getFullYear();

    const nombreDia = obtenerNombreDia(diaSemana);

    // Formatea la fecha como "Día de la semana, DD/MM/AAAA"
    const fechaFormateada = `${nombreDia}, ${dia} de ${nombreMes} del ${año}`;

    // Actualiza el contenido del elemento HTML con la fecha formateada
    document.getElementById("fechaYDia").textContent = fechaFormateada;
}

// Llama a la función para mostrar la fecha y el día de la semana al cargar la página
window.onload = obtenerFechaYDia;