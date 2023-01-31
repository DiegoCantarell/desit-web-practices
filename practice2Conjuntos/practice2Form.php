<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operations with sets</title>
</head>
<body>
    <h1>Operaciones con conjuntos</h1>
    <form action = "practice2Operations.php" method = "POST">
            Number of elements in the set A:
            <input type = "number" name = "setA" required>
            <br><br>
            Number of elements in the set B:
            <input type = "number" name = "setB" required>
            <br><br>
            <input type = "submit" name = "send" value = "Accept">
            
        </form>
        <?php
        $fp = fopen("salidaConjuntos.txt","a+");

        if (isset($_POST['send'])){
            $setA = $_REQUEST['setA'];
            $setB = $_REQUEST['setB'];
            
            
            echo "setA: $setA <br>";
            echo "setB: $setB <br>";
           
            fwrite($fp,"$setA,$setB\n");
        }

        
        fclose($fp);
        ?>
</body>
</html>