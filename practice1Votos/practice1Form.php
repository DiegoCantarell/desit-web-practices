<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <h2>Students</h2>
    <FORM action = "practice1Data.php" method = "POST">
        Type your name:
        <input type = "text" name = "name" required>
        <br><br>
        

        <input type = "submit" name = "send" value = "Accept">
    </FORM>

    <?php
        $fp = fopen("salida.txt","a");
        if (isset($_POST['send'])){
            $nombre = $_REQUEST['name'];
            
            echo "Name: $name <br>";
           
            fwrite($fp,"$name\n");
        }
        fclose($fp);
    ?>

</head>
<body>
    
</body>
</html>