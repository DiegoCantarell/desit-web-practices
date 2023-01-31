<HTML>
    <head><title> Operaciones con conjuntos </title><head>
        <body>
        <hr>
            <?php
            class conjunto{
                private $numdatos;
                private $arreglo=array();

                public function __construct($tamaño){
                    $this->numdatos=$tamaño;
                    for($i=0;$i<$tamaño;$i++){
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

                public function union($co1,$co2){
                    $this -> arreglo=array();
                    $c1=$co1->getDat();
                    $c2=$co2->getDat();
                    $this ->arreglo=array_unique(array_merge($c1,$c2));
                    $this->numdatos=count($this->arreglo);
                }

                public function interseccion($co1,$co2){
                    $this -> arreglo=array();
                    $c1=$co1->getDat();
                    $c2=$co2->getDat();
                    $this ->arreglo=array_intersect($c1,$c2);
                    $this->numdatos=count($this->arreglo);
                }

                public function diferencia($co1,$co2){
                    $this -> arreglo=array();
                    $c1=$co1->getDat();
                    $c2=$co2->getDat();
                    $this ->arreglo=array_diff($c1,$c2);
                    $this->numdatos=count($this->arreglo);
                }

                public function diferencia2($co2,$co1){
                    $this -> arreglo=array();
                    $c1=$co1->getDat();
                    $c2=$co2->getDat();
                    $this ->arreglo=array_diff($c2,$c1);
                    $this->numdatos=count($this->arreglo);
                }
            }

            $tamaño1=$_REQUEST['conjunto1'];
            $tamaño2=$_REQUEST['conjunto2'];
            
            echo ("Conjunto 1:<br>");
            $conj1= new conjunto($tamaño1);
            $conj1->mostrar(" {");
            echo "<br>";

            echo ("Conjunto 2:<br>");
            $conj2= new conjunto($tamaño2);
            $conj2->mostrar(" {");
            echo "<br>";
            
            echo ("Union:<br>");
            $conj3= new conjunto(0);
            $conj3->union($conj1,$conj2);
            $conj3->mostrar(" {");
            echo "<br>";

            echo ("Interseccion:<br>");
            $conj4= new conjunto(0);
            $conj4->interseccion($conj1,$conj2);
            $conj4->mostrar(" {");
            echo "<br>";

            echo ("Diferencia conjunto1 - conjunto 2:<br>");
            $conj5= new conjunto(0);
            $conj5->diferencia($conj1,$conj2);
            $conj5->mostrar(" {");
            echo "<br>";

            echo ("Diferencia conjunto 2 - conjunto 1:<br>");
            $conj6= new conjunto(0);
            $conj6->diferencia2($conj2,$conj1);
            $conj6->mostrar(" {");
            echo "<br>";
            ?>
            </body>
            </HTML>