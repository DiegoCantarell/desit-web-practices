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
        <input type="button" onclick="window.location.href='practice1VerDatos.php';" value="Ver Datos" />
</form>
    <?php
 
    

    ?>
</head>
<body>
    
</body>
</html>