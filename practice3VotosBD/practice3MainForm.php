<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form P3</title>
    <h2>Sistema Votaciones</h2>
    <link rel="stylesheet" href="css/styles.css">
    <form action = "practice3MainForm.php" method = "POST">
        Type your name:
        <input type = "text" name = "name" required>
        <br><br>
        <p>Selecciona tu partido</p>
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
        include "class/sql.php";
        include "class/personas.php";
        include "class/partidos.php";

        
    
        $name = isset($_POST["name"])? $_POST["name"]: "";
        $partido = isset($_POST["partido"])? $_POST["partido"]: "";


        echo($name)."<br>";
        echo($partido)."<br>";

     

        if($partido == 1){
           echo "partido1";
           $partidoElegido = "PRI";
           $personas = new personas();
           $partidos = new partidos();
           $numero = 10;
            /*La variable usuario nos permite identificar el usuario que contiene contactos
            La variable es llamada desde autenticación, iniciando la sesión, se válida
            y al poner el archivo valida.php en el presente archivo, se ejecuta el script, es lo primero que hace
            se manda el header, siempre y cuando no s eha escrito nada en la pantalla
            esto nos sirve ya que primero hace la validación y luego todo lo demás*/
            $personas->addPersona(null, $name, $partidoElegido );
            $partidos -> updateNumeroVotos($numero,$partido);
            echo "<br>";
            echo "La persona se cargó correctamente a la BD";
        }

        else if($partido == 2){
            echo "partido2";
          
           $partidoElegido = "PAN";
           $personas = new personas();
            /*La variable usuario nos permite identificar el usuario que contiene contactos
            La variable es llamada desde autenticación, iniciando la sesión, se válida
            y al poner el archivo valida.php en el presente archivo, se ejecuta el script, es lo primero que hace
            se manda el header, siempre y cuando no s eha escrito nada en la pantalla
            esto nos sirve ya que primero hace la validación y luego todo lo demás*/
            $personas->addPersona(null, $name, $partidoElegido );
            echo "<br>";
            echo "La persona se cargó correctamente a la BD";
            
        }
        else if($partido == 3){
            echo "partido3";
            $partidoElegido = "PRD";
           $personas = new personas();
            /*La variable usuario nos permite identificar el usuario que contiene contactos
            La variable es llamada desde autenticación, iniciando la sesión, se válida
            y al poner el archivo valida.php en el presente archivo, se ejecuta el script, es lo primero que hace
            se manda el header, siempre y cuando no s eha escrito nada en la pantalla
            esto nos sirve ya que primero hace la validación y luego todo lo demás*/
            $personas->addPersona(null, $name, $partidoElegido );
            echo "<br>";
            echo "La persona se cargó correctamente a la BD";
        }
        else if($partido == 4){
            echo "partido4";
            $partidoElegido = "NULO";
            $personas = new personas();
            /*La variable usuario nos permite identificar el usuario que contiene contactos
            La variable es llamada desde autenticación, iniciando la sesión, se válida
            y al poner el archivo valida.php en el presente archivo, se ejecuta el script, es lo primero que hace
            se manda el header, siempre y cuando no s eha escrito nada en la pantalla
            esto nos sirve ya que primero hace la validación y luego todo lo demás*/
            $personas->addPersona(null, $name, $partidoElegido );
            echo "<br>";
            echo "La persona se cargó correctamente a la BD";
        }




    ?>
</head>
<body>
    
</body>
</html>