<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body>
    <h2>Clase Circulo</h2>
    <?php
        require("circle.php");
        $C1 = new Circulo(100,50,20);
        $C2 = new Circulo(50,120,30);
        $C1 -> muestra("Circulo1");
        $C2 -> muestra("Circulo2");

        echo "<br>";
        $ar1 = $C1->area();
        echo "El area del circulo 1 es: $ar1";
        echo "<br>";
        $pr1 = $C1->perimetro();
        echo "El perimetro del circulo 1 es: $pr1";
        echo "<br>";
        $ar2 = $C2->area();
        echo "El area del circulo 2 es: $ar2";
        echo "<br>";
        $pr2 = $C2->perimetro();
        echo "El perimetro del circulo 2 es: $pr2";
        echo "<br>";

        
        echo "<h2>Sumatoria circulos</h2>";
        $C3 -> suma($C1,$C2);
        $C3 -> muestra("Circulo3");
    ?>
</body>
</html>