<?php
// Obtener las dimensiones de las matrices desde el formulario
$filas1 = $_POST['filas1'];
$columnas1 = $_POST['columnas1'];
$filas2 = $_POST['filas2'];
$columnas2 = $_POST['columnas2'];

// Verificar que las dimensiones son válidas
if ($columnas1 != $filas2) {
    die("Las dimensiones de las matrices no son compatibles para la multiplicación");
}

// Inicializar las matrices con ceros
$matriz1 = array();
for ($i = 0; $i < $filas1; $i++) {
    $matriz1[$i] = array();
    for ($j = 0; $j < $columnas1; $j++) {
        $matriz1[$i][$j] = 0;
    }
}

$matriz2 = array();
for ($i = 0; $i < $filas2; $i++) {
    $matriz2[$i] = array();
    for ($j = 0; $j < $columnas2; $j++) {
        $matriz2[$i][$j] = 0;
    }
}



// Llenar las matrices con datos aleatorios para fines de demostración
for ($i = 0; $i < $filas1; $i++) {
    for ($j = 0; $j < $columnas1; $j++) {
        $matriz1[$i][$j] = rand(0, 10);
    }
}



for ($i = 0; $i < $filas2; $i++) {
    for ($j = 0; $j < $columnas2;$j++){
      $matriz2[$i][$j] = rand(0, 10);
    }
}

// Calcular la matriz resultante para cada operación
$suma = array();
$resta = array();
$multiplicacion = array();

for ($i = 0; $i < $filas1; $i++) {
$suma[$i] = array();
$resta[$i] = array();
for ($j = 0; $j < $columnas1; $j++) {
// Suma
$suma[$i][$j] = $matriz1[$i][$j] + $matriz2[$i][$j];
    // Resta
$resta[$i][$j] = $matriz1[$i][$j] - $matriz2[$i][$j];
    }
}




for ($i = 0; $i < $filas1; $i++) {
    for ($j = 0; $j < $columnas2; $j++) {
        // Multiplicación
            $multiplicacion[$i][$j] = 0;
                for ($k = 0; $k < $columnas1; $k++) {
            $multiplicacion[$i][$j] += $matriz1[$i][$k] * $matriz2[$k][$j];
                }
        }
}

// Imprimir los resultados
echo "<h1>Resultados</h1>";
echo "<h2>Matriz 1</h2>";
echo "<table>";
    for ($i = 0; $i < $filas1; $i++) {
    echo "<tr>";
        for ($j = 0; $j < $columnas1; $j++) {
        echo "<td>".$matriz1[$i][$j]."</td>";
        }
    echo "</tr>";
    }
echo "</table>";

echo "<h2>Matriz 2</h2>";
echo "<table>";
for ($i = 0; $i < $filas2; $i++) {
echo "<tr>";
for ($j = 0; $j < $columnas2; $j++) {
echo "<td>".$matriz2[$i][$j]."</td>";
}
echo "</tr>";
}
echo "</table>";

echo "<h2>Suma</h2>";
echo "<table>";
for ($i = 0; $i < $filas1; $i++) {
echo "<tr>";
for ($j = 0; $j < $columnas1; $j++) {
echo "<td>".$suma[$i][$j]."</td>";
}
echo "</tr>";
}
echo "</table>";

echo "<h2>Resta</h2>";
echo "<table>";
for ($i = 0; $i < $filas1; $i++) {
echo "<tr>";
for ($j = 0; $j < $columnas1; $j++) {
echo "<td>".$resta[$i][$j]."</td>";
}
echo "</tr>";
}
echo "</table>";

echo "<h2>Multiplicación</h2>";
echo "<table>";
for ($i = 0; $i < $filas1; $i++) {
echo "<tr>";
for ($j = 0; $j < $columnas2; $j++) {
echo "<td>".$multiplicacion[$i][$j]."</td>";
}
echo "</tr>";
}
echo "</table>";

?>