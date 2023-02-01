<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sets</title>
</head>
<body>
    <h1>Operations with sets</h1>

    <?php
        class set{
            private $numdatos;
            private $arreglo=array();

            public function __construct($size){
                $this->numdatos=$size;
                for($i=0;$i<$size;$i++){
                    $this->arreglo[]=rand(1,20);
                }
            }

            public function getDat(){
                return$this ->arreglo;
            }

            public function mostrar(){
                $str="{";
                    if($this ->numdatos!=0){
                        foreach($this ->arreglo as $valor){
                            $str=$str.$valor." , ";
                        }
                    }
                    $str=$str." }";
                    echo $str;
            }

            /*public function union($array1,$array2,$size1,$size2){
                echo "<br>";
                
                echo "Function union";
                
                echo "<br>";
                $this -> arreglo=array();
                //$array1 -> arreglo=array();
                //$array2 -> arreglo=array();
                $arraySupport-> arreglo=array();

                $array = array("foo", "bar", "hello", "world");
                
                $arrayOne = $array1->getDat();
                $arrayTwo=$array2->getDat();
                //$numdatos1 = $size1;
                //$numdatos2 = $size2;
                //$this->numdatos=$size1+$size2;

                /*for($i=0;$i<$size1;$i++){
                    echo "i = $i <br>";
                    foreach($array1 ->arreglo as $valor){
                        echo "El valor es: $valor";
                        $arraySupport->arreglo[]=$valor;
                    }
                }
                for($i=0;$i<$size2;$i++){
                    echo "i = $i <br>";
                    foreach($array2 ->arreglo as $valor){
                        echo "El valor es: $valor";
                        $arraySupport->arreglo[]=$valor;
                    }   
                }
                foreach ($array = as $valor){
                    echo "El valor es: $valor";
                  }
                //$this ->arreglo=array_unique(array_merge($c1,$c2));
                //$this->numdatos=count($this->arreglo);
                $this ->arreglo=$arrayOne;
                $this->numdatos=count($this->arreglo);
            }*/
            public function union($array1,$array2,$size1,$size2){
                echo "<br>";                
                echo "Function union";       
                echo "<br>";
                $this -> arreglo=array(); 
                               
                $a1 = $array1->getDat();
                $a2 = $array2->getDat();
                
                $tamaño = $size1 + $size2;
                
                //foreach ($a1 = as $valor){
                  //  echo "El valor es: $valor";
                //}

                //$this ->arreglo=array_unique(array_merge($a1,$a2));
                //$this->numdatos=count($this->arreglo);

                //$this ->arreglo=$a3;
                
                for($i=0;$i<$tamaño;$i++){
                    if($i < $size1 )
                        $this->arreglo[]=$a1[$i];
                    else
                        $this->arreglo[]=$a2[$i - $size1];
                        //$j++;

                }
                $a3 = $this->arreglo;
                $a4 = $this->arreglo;
                sort($a3);
                //$arrlength = count($a3);
                for($i = 0; $i < $tamaño; $i++) {
                    $a4[$i] = $a3[$i];
                    
                }
                $a5[0] =  $a4[0];
                for($i = 1; $i <= $tamaño; $i++) {
                    
                     if($a4[$i] != $a5[$i-1] && $a4[$i] != $a5[$i])   
                        $a5[$i] = $a4[$i];
                    
                    
                }

                $this ->arreglo=$a5;
                $this->numdatos=count($this->arreglo);
                
            }
            public function unionComprobacion($co1,$co2){
                $this -> arreglo=array();
                $c1=$co1->getDat();
                $c2=$co2->getDat();
                $this ->arreglo=array_unique(array_merge($c1,$c2));
                $this->numdatos=count($this->arreglo);
            }
            public function interseccion($array1,$array2,$size1,$size2){
                
                $this -> arreglo=array(); 

                $a3= []; 
                               
                $a1 = $array1->getDat();
                $a2 = $array2->getDat();
                
                $tamaño = $size1 + $size2;

                if($size1 > $size2){
                    echo "Caso 1<br>";
                    for($i = 0; $i < $size1; $i++) {
                        for($j = 0; $j < $size2; $j++) {
                            //echo "Se compara $a1[$i] == $a2[$j] <br>";
                            if($a1[$i] == $a2[$j])
                            array_push($a3, $a1[$i]);
                        }
                        
                    }
                }
                else{
                    echo "Caso 2<br>";
                    for($i = 0; $i < $size2; $i++) {
                        for($j = 0; $j < $size1; $j++) {
                            //echo "Se compara $a2[$i] == $a1[$j] <br>";
                            if($a2[$i] == $a1[$j])
                            array_push($a3, $a2[$i]);
                        }
                        
                    }

                }
                $this ->arreglo=$a3;
                $this->numdatos=count($this->arreglo);
            }
            public function interseccionComprobacion($co1,$co2){
                $this -> arreglo=array();
                $c1=$co1->getDat();
                $c2=$co2->getDat();
                $this ->arreglo=array_intersect($c1,$c2);
                $this->numdatos=count($this->arreglo);
            }
            public function diferencia1($array1,$array2,$size1,$size2){
                $this -> arreglo=array(); 

                $a3= []; 
                               
                $a1 = $array1->getDat();
                $a2 = $array2->getDat();
                
                $tamaño = $size1 + $size2;

                if($size1 > $size2){
                    echo "Caso 1<br>";
                    for($i = 0; $i < $size1; $i++) {
                        $flag = 0;
                        for($j = 0; $j < $size2; $j++) {
                            //echo "Se compara $a1[$i] == $a2[$j] <br>";
                            if($a1[$i] == $a2[$j]){
                                $flag = 1;
                            }
                            
                        }
                        if($flag == 0){
                            array_push($a3, $a1[$i]);
                        }
                        
                    }
                }
                
                $this ->arreglo=$a3;
                $this->numdatos=count($this->arreglo);


            }
            public function diferencia2($array1,$array2,$size1,$size2){
                $this -> arreglo=array(); 

                $a3= []; 
                               
                $a1 = $array1->getDat();
                $a2 = $array2->getDat();
                
                $tamaño = $size1 + $size2;

            
                
                    echo "Caso 2<br>";
                    for($i = 0; $i < $size2; $i++) {
                        $flag = 0;
                        for($j = 0; $j < $size1; $j++) {
                            //echo "Se compara $a2[$i] == $a1[$j] <br>";
                            
                          
                            if($a2[$i] == $a1[$j]){
                                $flag = 1;
                            }
                        }
                        if($flag == 0){
                            array_push($a3, $a2[$i]);
                        }
                        
                    }

                
                $this ->arreglo=$a3;
                $this->numdatos=count($this->arreglo);


            }
            public function diferenciaA($co1,$co2){
                $this -> arreglo=array();
                $c1=$co1->getDat();
                $c2=$co2->getDat();
                $this ->arreglo=array_diff($c1,$c2);
                $this->numdatos=count($this->arreglo);
            }

            public function diferenciaB($co2,$co1){
                $this -> arreglo=array();
                $c1=$co1->getDat();
                $c2=$co2->getDat();
                $this ->arreglo=array_diff($c2,$c1);
                $this->numdatos=count($this->arreglo);
            }
        }




        $size1=$_REQUEST['setA'];
        $size2=$_REQUEST['setB'];

        echo "The size of the set A is: $size1";
        echo "<br><br>";
        echo "The size of the set B is: $size2";
        echo "<br><br>";

        echo ("Set 1:<br>");
        $conj1= new set($size1);
        $conj1->mostrar(" {");
        echo "<br>";
        echo "<br>";

        echo ("Set 2:<br>");
        $conj2= new set($size2);
        $conj2->mostrar(" {");
        echo "<br>";
        echo "<br>";

        echo ("<h2>UNION</h2><br>");
        $conj3= new set(0);
        $conj3->union($conj1,$conj2,$size1,$size2);
        $conj3->mostrar(" {");
        echo "<br>";
        echo "<br>";

        echo ("Union Comprobacion:<br>");
        $conjUnion= new set(0);
        $conjUnion->unionComprobacion($conj1,$conj2);
        $conjUnion->mostrar(" {");
        echo "<br>";

        echo ("<h2>INTERSECCION</h2><br>");
        $conj4= new set(0);
        $conj4->interseccion($conj1,$conj2,$size1,$size2);
        $conj4->mostrar(" {");
        echo "<br>";
        
        echo ("Interseccion Comprobacion:<br>");
        $conjComprobacion= new set(0);
        $conjComprobacion->interseccionComprobacion($conj1,$conj2);
        $conjComprobacion->mostrar(" {");
        echo "<br>";

        echo ("<h2>DIFERENCIA SET1 - SET2</h2><br>");

        echo ("Diferencia conjunto1 - conjunto 2:<br>");
        $conj5= new set(0);
        $conj5->diferencia1($conj1,$conj2,$size1,$size2);
        $conj5->mostrar(" {");
        echo "<br>";

        echo ("Diferencia conjunto1 - conjunto 2:<br>");
        $conjDiferenciaA= new set(0);
        $conjDiferenciaA->diferenciaA($conj1,$conj2);
        $conjDiferenciaA->mostrar(" {");
        echo "<br>";

        echo ("<h2>DIFERENCIA SET2 - SET1</h2><br>");

        echo ("Diferencia conjunto 2 - conjunto 1:<br>");
        $conj6= new set(0);
        $conj6->diferencia2($conj1,$conj2,$size1,$size2);
        $conj6->mostrar(" {");
        echo "<br>";

        echo ("Diferencia conjunto 2 - conjunto 1:<br>");
        $conjDiferenciaB= new set(0);
        $conjDiferenciaB->diferenciaB($conj2,$conj1);
        $conjDiferenciaB->mostrar(" {");
        echo "<br>";


    ?>
    
</body>
</html>