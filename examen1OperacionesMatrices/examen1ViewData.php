<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>View Data</h1>
    <strong></strong>
    <?php


        $columnasA=$_REQUEST['columnasA'];
        $filasA=$_REQUEST['filasA'];
        $columnasB=$_REQUEST['columnasB'];
        $filasB=$_REQUEST['filasB'];

        $sumaOpt=$_REQUEST['suma'];
        $restaOpt=$_REQUEST['resta'];
        $multiplicacionOpt=$_REQUEST['multiplicacion'];


       

        echo "Valor de Columnas matriz A = $columnasA";
        echo "<br>";
        echo "Valor de filas matriz A = $filasA";
        echo "<br>";
        echo "Valor de Columnas matriz B = $columnasB";
        echo "<br>";
        echo "Valor de filas matriz B = $filasB";
        echo "<br>";
        
        echo "Valor de suma = $sumaOpt";
        echo "<br>";
        echo "Valor de resta = $restaOpt";
        echo "<br>";
        echo "Valor de multiplicacion = $multiplicacionOpt";
        echo "<br>";

        $matriz1 = array();
        for ($i = 0; $i < $filasA; $i++) {
            $matriz1[$i] = array();
            for ($j = 0; $j < $columnasA; $j++) {
                $matriz1[$i][$j] = 0;
            }
        }

        $matriz2 = array();
        for ($i = 0; $i < $filasB; $i++) {
            $matriz2[$i] = array();
            for ($j = 0; $j < $columnasB; $j++) {
                $matriz2[$i][$j] = 0;
            }
        }

        // Llenar las matrices con datos aleatorios para fines de demostración
        for ($i = 0; $i < $filasA; $i++) {
            for ($j = 0; $j < $columnasA; $j++) {
                $matriz1[$i][$j] = rand(0, 10);
            }
        }



        for ($i = 0; $i < $filasB; $i++) {
            for ($j = 0; $j < $columnasB;$j++){
            $matriz2[$i][$j] = rand(0, 10);
            }
        }


        $suma = array();
        $resta = array();
        $multiplicacion = array();


        echo "<br><br>Matrices aleatorias creadas: <br><br>";
        
        echo "<h2>Matriz A</h2>";
        echo "[";
        echo "<table>";
            for ($i = 0; $i < $filasA; $i++) {
            echo "<tr>";
                for ($j = 0; $j < $columnasA; $j++) {
                echo "<td>".$matriz1[$i][$j]."</td>";
                }
            echo "</tr>";
            }
        echo "</table>";
        echo "]";

        echo "<h2>Matriz B</h2>";
        echo "[";
        echo "<table>";
        for ($i = 0; $i < $filasB; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $columnasB; $j++) {
        echo "<td>".$matriz2[$i][$j]."</td>";
        }
        echo "</tr>";
        }
        echo "</table>";
        echo "]";

        

        echo "<br><br><strong>Resultados obtenidos:</strong> <br>";

        if($sumaOpt == 1){
            echo "<strong>Se seleccionó la suma</strong><br>";
            if($columnasA == $columnasB && $filasA == $filasB){
                echo "Las dimensiones son correctas, se puede realizar la suma <br>";
                
                for ($i = 0; $i < $filasA; $i++) {
                        $suma[$i] = array();
                        $resta[$i] = array();
                        for ($j = 0; $j < $columnasA; $j++) {
                        // Suma
                            $suma[$i][$j] = $matriz1[$i][$j] + $matriz2[$i][$j];
                    
                        }
                    }
                    echo "<h2>Resultado Suma</h2>";
                    echo "<table>";
                    for ($i = 0; $i < $filasA; $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < $columnasA; $j++) {
                    echo "<td>".$suma[$i][$j]."</td>";
                    }
                    echo "</tr>";
                    }
                    echo "</table>";
                    
            }else{
                echo "las dimensiones de las matrices son diferentes, no se pueden operar<br>";
            }

        }
        if($restaOpt == 2){
            echo "<strong>Se seleccionó la resta</strong><br>";
            if($columnasA == $columnasB && $filasA == $filasB){
                echo "Las dimensiones son correctas, se puede realizar la multiplicacion <br>";
                for ($i = 0; $i < $filasA; $i++) {
                        $suma[$i] = array();
                        $resta[$i] = array();
                        for ($j = 0; $j < $columnasA; $j++) {
                        // Resta
                            $resta[$i][$j] = $matriz1[$i][$j] - $matriz2[$i][$j];
                        }
                    }
                    echo "<h2>Resta</h2>";
                    echo "<table>";
                    for ($i = 0; $i < $filasA; $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < $columnasB; $j++) {
                    echo "<td>".$resta[$i][$j]."</td>";
                    }
                    echo "</tr>";
                    }
                    echo "</table>";
            }else{
                echo "las dimensiones de las matrices son diferentes, no se pueden operar<br>";
            }

        }
        if($multiplicacionOpt == 3){
            echo "<strong>Se seleccionó la Multiplicacion</strong><br>";
            if ($columnasA != $filasB) {
                die("Las dimensiones de las matrices no son compatibles para la multiplicación");
            }else{
                for ($i = 0; $i < $filasA; $i++) {
                    for ($j = 0; $j < $columnasB; $j++) {
                        // Multiplicación
                            $multiplicacion[$i][$j] = 0;
                                for ($k = 0; $k < $columnasA; $k++) {
                            $multiplicacion[$i][$j] += $matriz1[$i][$k] * $matriz2[$k][$j];
                                }
                        }
                }
                echo "<h2>Multiplicación</h2>";
                echo "<table>";
                for ($i = 0; $i < $filasA; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $columnasB; $j++) {
                echo "<td>".$multiplicacion[$i][$j]."</td>";
                }
                echo "</tr>";
                }
                echo "</table>";
            }

        }

    ?>
</body>
</html>