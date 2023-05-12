<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bubble Chart</title>
    <script src="js/chart.js"></script>
</head>
<body>
    <canvas id="BubbleChart" style="max-width:600px;max-height:600px"></canvas>

    <?php
        for ($i = 0; $i < 20; $i++)
            $nombresEtiquetas[$i] = "Nombre " . $i + 1;

        for ($i = 0; $i < count($nombresEtiquetas); $i++)
        {
            $datos[$i][0] = rand(5, 50);
            $datos[$i][1] = rand(5, 50);
            $datos[$i][2] = rand(5, 20);
        }
    ?>

    <script>
        const ctx = document.getElementById('BubbleChart');

        const nameLabels =
        [
            <?php foreach ($nombresEtiquetas as $nombre): ?>
            "<?php echo $nombre; ?>",
            <?php endforeach; ?>
        ];

        const valuesData =
        [
            <?php foreach ($datos as $i): ?>
            {
                x: <?php echo $i[0]; ?>,
                y: <?php echo $i[1]; ?>,
                r: <?php echo $i[2]; ?>
            },
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
                    'rgba(255, 99, 132, 0.5)',
                    'rgba(255, 159, 64, 0.5)',
                    'rgba(255, 205, 86, 0.5)',
                    'rgba(75, 192, 192, 0.5)',
                    'rgba(54, 162, 235, 0.5)',
                    'rgba(153, 102, 255, 0.5)',
                    'rgba(201, 203, 207, 0.5)'
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
                borderWidth: 3,
                pointStyle: 'rectRounded', //  circle, cross, crossRot, dash, line, rect, rectRounded, rectRot, star, triangle, false
                rotation: 0,    //  degrees
                hoverBackgroundColor:
                [
                    'rgb(255, 85, 85)',
                    'rgb(255, 184, 108)',
                    'rgb(241, 250, 140)',
                    'rgb(80, 250, 123)',
                    'rgb(139, 233, 253)',
                    'rgb(189, 147, 249)',
                    'rgb(255, 121, 198)'
                ],
                hoverBorderColor: 'rgb(40, 42, 54)',
                hoverBorderWidth: 4,
                hoverRadius: 10
            }]
        };

        const config =
        {
            type: 'bubble',
            data: data,
            options: {}
        };

        new Chart(ctx, config);
    </script>
</body>
</html>