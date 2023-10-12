<script>
    // Gráfica de radiación solar
    var ctxSolarRad = document.getElementById('radSolarChart').getContext('2d');
    var data_s_r = <?php echo $data_json_solar_r; ?>;

    var chartSolarRad = new Chart(ctxSolarRad, {
        type: 'line',
        data: {
            labels: <?php echo json_encode($data_hora); ?>, // Etiquetas del eje X (puedes personalizarlas)
            datasets: [{
                label: 'Radiación Solar',
                data: data_s_r,
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