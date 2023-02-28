<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>
</head>
<body>
    <h1>View the Data in the DataBase</h1>
    <?php
        include "class/sql.php";
        include "class/personas.php";
        include "class/partidos.php";

        
        $personas = new personas();
        $partidos = new partidos();

        $personas->getAllUsersList();
    ?>
    
</body>
</html>