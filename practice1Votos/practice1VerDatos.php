<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Form</title>
    <h2>Students Data</h2>
    <link rel="stylesheet" href="css/styles.css">
    
    <?php
        $suma1 = 0;
        $suma2 = 0;
        $suma3 = 0;
        $suma4 = 0;
        $n = 0;
        $uno = '1'; 

        $fp = fopen("salida.txt","r");


        while(!feof($fp)){
            $linea = fgets($fp);
            echo "$linea<br>";
            if(!empty($linea)){
                $n++;
                $partes = explode(",",$linea);
                $name = $partes[0];
                //echo "partes1 = $partes[0]\n\n";
                $partido = $partes[1];
                $partidoData = intval($partido);
                //echo gettype($partidoData), "\n\n";
                echo "Name: $name<br>";
                echo "Partido: $partidoData<br><br>";
                //echo gettype($linea), "\n";
                //echo gettype($linea), "\n";
                //echo gettype($partido), "\n";
                //echo gettype($partes[1]), "\n\n";

                

                if($partidoData == 1){
                    $suma1 = $suma1 + 1;
                }

                else if($partidoData == 2){
                    $suma2 = $suma2 + 1;
                }
                else if($partidoData == 3){
                    $suma3 = $suma3 + 1;
                }
                else if($partidoData == 4){
                    $suma4 = $suma4 + 1;
                }
                

                

            }


        }
        echo "Partido 1 = $suma1<br>";
        echo "Partido 2 = $suma2<br>";
        echo "Partido 3 = $suma3<br>";
        echo "Partido 4 = $suma4<br>";
        fclose($fp);
    ?>

      
</head>
<body>
    
</body>
</html>