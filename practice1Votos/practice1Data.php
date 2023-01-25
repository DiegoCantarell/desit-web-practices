<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
    <h2>Students</h2>
    <link rel="stylesheet" href="css/styles.css">
    <form action = "practice1Form.php" method = "POST">
        Type your name:
        <input type = "text" name = "name" required>
        <br><br>

        <div class class="divLine ">Partido 1
        <img src="images/pri.webp" alt="PRI" width="42" height="42">
        <input type="radio" name="partido" id="partido1" value="1"/>
        <label for="partido1">PRI</label>
        </div>
        <br><br>
        
        <div>Partido 2
        <img src="images/pan.webp" alt="PAN" width="42" height="42">
        <input type="radio" name="partido" id="partido2" value="2"/>
        <label for="partido2">PAN</label>
        </div>
        <br><br>

        <div>Partido 3
        <img src="images/prd.webp" alt="PRD" width="42" height="42">
        <input type="radio" name="partido" id="partido3" value="3"/>
        <label for="partido3">PRD</label>
        </div>
        <br><br>

        <div>Partido 4
        <img src="images/equis.webp" alt="NULO" width="42" height="42">
        <input type="radio" name="partido" id="partido4" value="4"/>
        <label for="partido4">NULO</label>
        </div>
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
            $partido = $_REQUEST['partido'];
            
            
            echo "Name: $name <br>";
            echo "Partido: $partido <br>";
           
            fwrite($fp,"$name,$partido\n");
        }
        fclose($fp);
    ?>
</head>
<body>
    
</body>
</html>