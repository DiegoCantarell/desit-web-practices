<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doughnut and Pie Chart</title>
    <script src="js/chart.js"></script>
</head>
<body>

    <canvas id="DoughnutChart" style="max-width:600px;max-height:600px"></canvas>

    <?php
        for ($i = 0; $i < 7; $i++)
            $nombresEtiquetas[$i] = "Nombre " . $i + 1;

        for ($i = 0; $i < count($nombresEtiquetas); $i++)
            $datos[$i] = rand(50, 200);
    ?>

    <script>
        const ctx = document.getElementById('DoughnutChart');

        const nameLabels =
        [
            <?php foreach ($nombresEtiquetas as $i): ?>
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
                label: 'Valor',
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
                cutout: '50%',  //  number is considered to be pixels
                radius: '100%', //  number is considered to be pixels
                rotation: 135,
                circumference: 360
            }]
        };

        const config =
        {
            type: 'doughnut',   //  doughnut, pie
            data: data
        };

        new Chart(ctx, config)
    </script>  
</body>
</html>