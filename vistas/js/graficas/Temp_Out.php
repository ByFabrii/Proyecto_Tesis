<script>
    // Gráfica de temperatura
    var ctxTempOut = document.getElementById('tempOutChart').getContext('2d');
    var data_t_o = <?php echo $data_json_temp_o; ?>;

    var chartTempOut = new Chart(ctxTempOut, {
        type: 'line',
        data: {
            labels: <?php echo json_encode($data_hora); ?>, // Etiquetas del eje X (puedes personalizarlas)
            datasets: [{
                label: 'Temperatura',
                data: data_t_o,
                borderColor: 'green',
                backgroundColor: 'rgba(0, 255, 0, 0.5)',
                borderWidth: 1,
                fill: true
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>