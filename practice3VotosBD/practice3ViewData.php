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
        $personas = new personas();


        //$id_persona = 8;
        $personas->getAllData();

        /*echo "Inicio";
        $link = mysqli_connect("localhost","root","");
        mysqli_select_db($link,"personas");
        $result =mysqli_query($link,"SELECT * FROM `personas` ");

        echo "<SELECT name = 'personas'>";
        while($row = mysqli_fetch_array($result)){
        $id =  $row['id_persona'];
        $nombre = $row['nombre'];
        $partido =  $row['partido'];
        echo "<option value=$id>$nombre</option>";
        }
        echo "</select>";
        */
        
    ?>
    
    <input type='submit' name = 'enviar' value = 'enviar'>
</body>
</html>