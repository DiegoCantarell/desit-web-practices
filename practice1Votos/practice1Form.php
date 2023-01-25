<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <h2>Students</h2>
    <form action = "practice1Data.php" method = "POST">
        Type your name:
        <input type = "text" name = "name" required>
        <br><br>
        

        <input type = "submit" name = "send" value = "Accept">
    </form>

    <?php

       /* $filename = 'salida.txt';
        $somecontent = "Add this to the file\n";
        if (is_writable($filename)) {

            // In our example we're opening $filename in append mode.
            // The file pointer is at the bottom of the file hence
            // that's where $somecontent will go when we fwrite() it.
            if (!$fp = fopen($filename, 'a')) {
                echo "Cannot open file ($filename)";
                exit;
            }

            // Write $somecontent to our opened file.
            if (fwrite($fp, $somecontent) === FALSE) {
                echo "Cannot write to file ($filename)";
                exit;
            }

            echo "Success, wrote ($somecontent) to file ($filename)";

            fclose($fp);

        } else {
            echo "The file $filename is not writable";
        }*/





        $fp = fopen("salida.txt","a+");
        if (isset($_POST['send'])){
            $name = $_REQUEST['name'];
            
            echo "Name: $name <br>";
           
            fwrite($fp,"$name\n");
        }
        fclose($fp);
    ?>

</head>
<body>
    
</body>
</html>