<script>
    // Gráfica de temperatura
    var ctxEt = document.getElementById('EtChart').getContext('2d');
    var data_et = <?php echo $data_json_et; ?>;

    var chartEt = new Chart(ctxEt, {
        type: 'line',
        data: {
            labels: <?php echo json_encode($data_hora); ?>, // Etiquetas del eje X (puedes personalizarlas)
            datasets: [{
                label: 'Evotranspiración',
                data: data_et,
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