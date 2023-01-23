<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumatoria con PHP</title>
    <?php


        //$ini = 5;
        //$fin = 12;
        function sumatoria($ini,$fin){
            $suma = 0;
            for ($i = $ini; $i <= $fin; $i++) {
                $suma = $suma + $i;
                //echo "La sumatoria desde  $ini hasta $fin es: $suma"
                
            }
            //echo $suma;
            return $suma;
        }
            $ini = $_REQUEST['inicial'];
            $fin = $_REQUEST['final'];;
            $res = sumatoria($ini,$fin);
            echo "La sumatoria desde  $ini hasta $fin es: $res"
       

    ?>
</head>
<body>
    
</body>
</html>