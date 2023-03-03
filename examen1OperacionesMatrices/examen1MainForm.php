<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen 1</title>
</head>
<body>
    <h1>Examen 1 DIEGO GABRIEL CABALLERO CANTARELL</h1>
    <h2>Formulario matrices</h2>

    
    <form action= "examen1ViewData.php" method = "POST">

        Ingresa 2 matrices:
        <br>
        Ingresa número columnas Matriz A:
        <input type = "number" name = "columnasA" required>
        <br><br>

        Ingresa número filas Matriz A:
        <input type = "number" name = "filasA" required>
        <br><br>

        Ingresa número columnas Matriz B:
        <input type = "number" name = "columnasB" required>
        <br><br>

        Ingresa número filas Matriz B:
        <input type = "number" name = "filasB" required>
        <br><br>


        <p>Selecciona la operacion que deseas realizar</p>
        
            <input type="checkbox" id="suma" name="suma" value="1">
            <label for="suma"> Suma</label><br>
            <input type="checkbox" id="resta" name="resta" value="2">
            <label for="resta"> Resta</label><br>
            <input type="checkbox" id="multiplicacion" name="multiplicacion" value="3">
            <label for="multiplicacion"> Multiplicacion</label><br><br>
            <input type="submit" value="Submit">
        </form>
</form>
    
</body>
</html>