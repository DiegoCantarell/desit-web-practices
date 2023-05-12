<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scatter Chart</title>
    <script src="js/chart.js"></script>
</head>
<body>

    <canvas id="ScatterChart"></canvas>

    <?php
        for ($i = 0; $i < 100; $i++)
        {
            $datos[$i][0] = rand(5, 50);
            $datos[$i][1] = rand(5, 50);
        }
    ?>

    <script>
        const ctx = document.getElementById('ScatterChart');

        const valuesData = 
        [
            <?php foreach ($datos as $i): ?>
            {
                x: <?php echo $i[0]; ?>,
                y: <?php echo $i[1]; ?>
            },
            <?php endforeach; ?>
        ];

        const data =
        {
            datasets:
            [{
                label: 'Scatter Dataset',
                data: valuesData,
                pointBackgroundColor: 'rgb(255, 85, 85)',
                pointBorderColor: 'rgb(68, 71, 90)',
                pointBorderWidth: 2,
                pointRadius: 5,
                pointRotation: 0,
                pointStyle: 'rectRounded', //  circle, cross, crossRot, dash, line, rect, rectRounded, rectRot, star, triangle, false
                pointHoverBackgroundColor: 'rgb(255, 121, 198)',
                pointHoverBorderColor: 'rgb(248, 248, 242)',
                pointHoverBorderWidth: 4,
                pointHoverRadius: 10
            }]
        };

        const config =
        {
            type: 'scatter',
            data: data,
            options:
            {
                scales:
                {
                    x:
                    {
                        type: 'linear',
                        position: 'bottom'
                    }
                }
            }
        };

        new Chart(ctx, config);
    </script>
</body>
</html>