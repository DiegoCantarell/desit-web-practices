<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radar Chart</title>
    <script src="js/chart.js"></script>
</head>
<body>

    <canvas id="RadarChart" style="max-width:600px;max-height:600px"></canvas>

    <?php
        for ($i = 0; $i < 7; $i++)
            $nombresEtiquetas[$i] = "Nombre " . $i + 1;
    
        for ($i = 0; $i < count($nombresEtiquetas); $i++)
            $datos1[$i] = rand(50, 100);

        for ($i = 0; $i < count($nombresEtiquetas); $i++)
            $datos2[$i] = rand(50, 100);
    ?>


    <script>
        const ctx = document.getElementById('RadarChart');

        const nameLabels =
        [
            <?php foreach ($nombresEtiquetas as $i): ?>
            "<?php echo $i; ?>",
            <?php endforeach; ?>
        ];

        const valuesData1 =
        [
            <?php foreach($datos1 as $i): ?>
            <?php echo $i; ?>, 
            <?php endforeach; ?>
        ];

        const valuesData2 =
        [
            <?php foreach($datos2 as $i): ?>
            <?php echo $i; ?>, 
            <?php endforeach; ?>
        ];

        const data =
        {
            labels: nameLabels,
            datasets:
            [{
                label: 'Valor 1',
                data: valuesData1,
                fill: true,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgb(255, 99, 132)',
                pointBackgroundColor:
                [
                    'rgba(255, 99, 132, 0.75)',
                    'rgba(255, 159, 64, 0.75)',
                    'rgba(255, 205, 86, 0.75)',
                    'rgba(75, 192, 192, 0.75)',
                    'rgba(54, 162, 235, 0.75)',
                    'rgba(153, 102, 255, 0.75)',
                    'rgba(201, 203, 207, 0.75)'
                ],
                pointBorderColor: 'rgb(68, 71, 90)',
                pointBorderWidth: 3,
                pointRadius: 10,
                pointRotation: 0,
                pointStyle: 'rectRounded', //  circle, cross, crossRot, dash, line, rect, rectRounded, rectRot, star, triangle, false
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'rgb(255, 99, 132)',
                borderWidth: 2,
                tension: 0,
                pointHoverBackgroundColor:
                [
                    'rgb(255, 85, 85)',
                    'rgb(255, 184, 108)',
                    'rgb(241, 250, 140)',
                    'rgb(80, 250, 123)',
                    'rgb(139, 233, 253)',
                    'rgb(189, 147, 249)',
                    'rgb(255, 121, 198)'
                ],
                pointHoverBorderColor: 'rgb(248, 248, 242)',
                pointHoverBorderWidth: 6,
                pointHoverRadius: 25
            },
            {
                label: 'Valores 2',
                data: valuesData2,
                fill: true,
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgb(54, 162, 235)',
                pointBackgroundColor:
                [
                    'rgba(255, 99, 132, 0.75)',
                    'rgba(255, 159, 64, 0.75)',
                    'rgba(255, 205, 86, 0.75)',
                    'rgba(75, 192, 192, 0.75)',
                    'rgba(54, 162, 235, 0.75)',
                    'rgba(153, 102, 255, 0.75)',
                    'rgba(201, 203, 207, 0.75)'
                ],
                pointBorderColor: 'rgb(68, 71, 90)',
                pointBorderWidth: 3,
                pointRadius: 10,
                pointRotation: 0,
                pointStyle: 'rectRounded', //  circle, cross, crossRot, dash, line, rect, rectRounded, rectRot, star, triangle, false
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'rgb(54, 162, 235)',
                borderWidth: 2,
                tension: 0,
                pointHoverBackgroundColor:
                [
                    'rgb(255, 85, 85)',
                    'rgb(255, 184, 108)',
                    'rgb(241, 250, 140)',
                    'rgb(80, 250, 123)',
                    'rgb(139, 233, 253)',
                    'rgb(189, 147, 249)',
                    'rgb(255, 121, 198)'
                ],
                pointHoverBorderColor: 'rgb(248, 248, 242)',
                pointHoverBorderWidth: 6,
                pointHoverRadius: 25
            }]
        };

        const config =
        {
            type: 'radar',
            data: data,
            options:
            {
                elements:
                {
                    line:
                    {
                        borderWidth: 3
                    }
                }
            }
        };

        new Chart(ctx, config);
    </script>
</body>
</html>