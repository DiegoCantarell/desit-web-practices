<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>
</head>
<body>
    <h1>View the Data</h1>
    <?php
        include "class/sql.php";
        include "class/personas.php";
        include "class/partidos.php";
        $partidos = new partidos();

        $partidos->getAllData();
    ?>
</body>
</html>