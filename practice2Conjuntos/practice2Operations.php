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
                $a3 = $a1;
                $tamaño = $size1 + $size2;
                
                //foreach ($a1 = as $valor){
                  //  echo "El valor es: $valor";
                //}

                //$this ->arreglo=array_unique(array_merge($a1,$a2));
                //$this->numdatos=count($this->arreglo);

                //$this ->arreglo=$a3;
                $j = 0;
                for($i=0;$i<$tamaño;$i++){
                    if($i < $size1 )
                        $this->arreglo[]=$a1[$i];
                    else
                        $this->arreglo[]=$a2[$i - $size1];
                        //$j++;

                }
                //$this ->arreglo=sort(array_merge($a1,$a2));
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

        echo ("Union:<br>");
        $conj3= new set(0);
        $conj3->union($conj1,$conj2,$size1,$size2);
        $conj3->mostrar(" {");
        echo "<br>";
        echo "<br>";



    ?>
    
</body>
</html>