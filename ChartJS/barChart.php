<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bar Chart</title>
    <script src="js/chart.js"></script>
</head>
<body>

    <canvas id="BarChart" style="max-width:600px;max-height:600px"></canvas>

    <?php
        for ($i = 0; $i < 7; $i++)
            $nombresEtiquetas[$i] = "Nombre " . $i + 1;

        for ($i = 0; $i < count($nombresEtiquetas); $i++)
            $datos[$i] = rand(20, 100);
    ?>

    <script>
        const ctx = document.getElementById('BarChart');

        const nameLabels =
        [
            <?php foreach($nombresEtiquetas as $i): ?>
            "<?php echo $i; ?>",
            <?php endforeach; ?>
        ];

        const valuesData =
        [
            <?php foreach($datos as $i): ?>
            <?php echo $i; ?>, 
            <?php endforeach; ?>
        ];
        

        const data =
        {
            labels: nameLabels,
            datasets:
            [{
                label: 'Etiqueta',
                data: valuesData,
                backgroundColor:
                [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                ],
                borderColor:
                [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
                borderSkipped: 'bottom',    //  bottom, left, top, right
                borderWidth: 2,
                borderRadius: 10,
                barPercentage: 0.65,
                hoverBackgroundColor:
                [
                    '#ff5555',
                    '#ffb86c',
                    '#f1fa8c',
                    '#50fa7b',
                    '#8be9fd',
                    '#bd93f9',
                    '#ff79c6'
                ],
                hoverBorderColor: 'rgb(40, 42, 54)',
                hoverBorderWidth: 4,
                hoverBorderRadius: 20
            }]
        };

        const config =
        {
            type: 'bar',
            data: data,
            options:
            {
                indexAxis: 'x',
                scales:
                {
                    y:
                    {
                        beginAtZero: true
                    }
                }
            },
        };

        new Chart(ctx, config);
    </script>
</body>
</html>