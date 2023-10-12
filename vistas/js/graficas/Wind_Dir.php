
<script>
    // Datos de ejemplo para la gráfica polar
    var ctxWindDir = document.getElementById('polarChart').getContext('2d');
    
    var texto = <?php echo json_encode(array_keys($data_Wind_Dir)); ?>;
    var frecuencia = <?php echo json_encode(array_values($data_Wind_Dir)); ?>;

    var data = {
        labels: texto,
        datasets: [{
            label: 'frecuencia',
            data: frecuencia, // Datos de ejemplo
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 87, 51, 0.2)',
                'rgba(51, 204, 51, 0.2)',
                // Agrega más colores si es necesario
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 87, 51, 0.2)',
                'rgba(51, 204, 51, 0.2)',
                // Agrega más colores si es necesario
            ],
            borderWidth: 1
        }]
    };

    // Crear la gráfica polar
    var chartWind_Dir = new Chart(ctxWindDir, {
        type: 'polarArea', // Cambia el tipo de gráfica a polar
        data: data,
        options: {
            scales: {
                r: {
                    suggestedMin: 0,
                    suggestedMax: frecuencia, // Ajusta esto según tus datos
                    ticks: {
                    stepSize: 1, // Define el paso entre etiquetas (valores enteros)
                    callback: function (value) {
                        return value.toFixed(0); // Convierte el valor a entero
                        }
                    }
                }
            }
        }
    });
</script>
