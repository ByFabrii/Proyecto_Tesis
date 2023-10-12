<script>
// Gráfica de velocidad del viento
var ctxWindSpeed = document.getElementById('windSpeedChart').getContext('2d');
    var data_w_s = <?php echo $data_json_wind_s; ?>;

    var chartWindSpeed = new Chart(ctxWindSpeed, {
        type: 'line',
        data: {
            labels: <?php echo json_encode($data_hora); ?>, // Etiquetas del eje X (puedes personalizarlas)
            datasets: [{
                label: 'Velocidad del Viento',
                data: data_w_s,
                borderColor: 'red',
                backgroundColor: 'rgba(255, 0, 0, 0.5)',
                borderWidth: 1,
                fill: true
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>