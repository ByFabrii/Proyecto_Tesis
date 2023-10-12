<script>
    // Gráfica de temperatura
    var ctxHumOut = document.getElementById('HumOutChart').getContext('2d');
    var data_h_o = <?php echo $data_json_hum_o; ?>;

    var chartHumOut = new Chart(ctxHumOut, {
        type: 'line',
        data: {
            labels: <?php echo json_encode($data_hora); ?>, // Etiquetas del eje X (puedes personalizarlas)
            datasets: [{
                label: 'Humedad relativa',
                data: data_h_o,
                borderColor: 'red',
                backgroundColor: 'rgba(255, 0, 0, 0.5)',
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