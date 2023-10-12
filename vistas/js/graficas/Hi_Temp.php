<script>
    // Gráfica de temperatura
    var ctxTempHi = document.getElementById('tempHiChart').getContext('2d');
    var data_t_h = <?php echo $data_json_temp_h; ?>;

    var chartTempHi = new Chart(ctxTempHi, {
        type: 'line',
        data: {
            labels: <?php echo json_encode($data_hora); ?>, // Etiquetas del eje X (puedes personalizarlas)
            datasets: [{
                label: 'Temperatura más alta',
                data: data_t_h,
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