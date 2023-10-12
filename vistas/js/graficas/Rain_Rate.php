<script>
    // Gráfica de precipitación
    var ctxPrecipitation = document.getElementById('precipitationChart').getContext('2d');
    var data_pr = <?php echo $data_json_precipitation; ?>;

    var chartPrecipitation = new Chart(ctxPrecipitation, {
        type: 'line',
        data: {
            labels: <?php echo json_encode($data_hora); ?>, // Etiquetas del eje X (puedes personalizarlas)
            datasets: [{
                label: 'Precipitación',
                data: data_pr,
                borderColor: 'pink',
                backgroundColor: 'rgba(255, 0, 255, 0.5)',
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