<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de keyCAPTCHA</title>
</head>
<body>
    <div>
        <h1>Ejemplo de keyCAPTCHA</h1>
        <hr>

        <!-- CODIGO BRINDADO POR KEY CAPTCHA -->
        <form method="POST" action="terminar.php">
            Campo de Ejemplo 1: 
            <input type="text" name="ejem1" required>
            <br><br>
            Campo de Ejemplo 2: 
            <input type="text" name="ejem2" required>
            <br><br>

            Complete el siguiente CAPTCHA para poder continuar:
            <br><br>
            <!-- Cargamos el CAPTCHA -->
            <?php
            if (!class_exists('KeyCAPTCHA_CLASS')) {
                // Replace /path_to_keycaptcha_file/ with real path to keycaptcha.php file
                include('keycaptcha.php');
            }
            $kc_o = new KeyCAPTCHA_CLASS();
            echo $kc_o->render_js();
            ?>  
            <input type="hidden" name="capcode" id="capcode" value="false" />
            <input type="submit" value="CONTINUAR" id="postbut" class="button" />
        </form> 
        <?php
            if (isset($_POST['form_field'])){
                if (!class_exists('KeyCAPTCHA_CLASS')) {
                    // Replace /path_to_keycaptcha_file/ with real path to keycaptcha.php file
                    include('keycaptcha.php');
                }
                $kc_o = new KeyCAPTCHA_CLASS();
                if ($kc_o->check_result($_POST['capcode'])) {
                    // A visitor solved CAPTCHA task correctly
                    // Add your code that will save the data of your form
                    
                }
                else {
                    // A visitor solved CAPTCHA task incorrectly
                    // Add your code that will generate an error message                 
                }
            }
        ?>
        <!-- CODIGO BRINDADO POR KEY CAPTCHA -->
    </div>
    
</body>
</html>