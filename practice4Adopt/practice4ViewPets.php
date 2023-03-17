<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Pets</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>View all the pets info</h1>
    <?php
    include "class/sql.php";
    include "class/pets.php";
    $pets = new pets();
    //$partidos = new partidos();
    $pets->getAllPets();
    ?>
    <input type="button" onclick="window.location.href='practice4MainPage.php';" value="Back to the Main Page" />
</body>
</html>