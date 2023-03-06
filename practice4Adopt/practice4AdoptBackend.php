<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Info about the adoption</h1>
    <?php
        $name = $_REQUEST['name'];
        $name_pet = $_REQUEST['name_pet'];
        echo "Name: $name <br>";
        echo "Pet name : $name_pet <br>";
    ?>
</body>
</html>