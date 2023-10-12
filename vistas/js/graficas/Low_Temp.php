<script>
    // Gráfica de temperatura
    var ctxTempLow = document.getElementById('tempLowChart').getContext('2d');
    var data_t_l = <?php echo $data_json_temp_l; ?>;

    var chartTempLow = new Chart(ctxTempLow, {
        type: 'line',
        data: {
            labels: <?php echo json_encode($data_hora); ?>, // Etiquetas del eje X (puedes personalizarlas)
            datasets: [{
                label: 'Temperatura más baja',
                data: data_t_l,
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