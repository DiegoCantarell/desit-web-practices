<?php
    class Circulo{
        private $px;
        private $py;
        private $radio;
        

        public function __construct($x,$y,$r){
            $this->px=$x;
            $this->py=$y;
            $this->radio=$r;
        }
        public function muestra($cad){
            echo "<br> $cad <br>";
            echo "px = $this->px<br>";
            echo "py = $this->py<br>";
            echo "radio = $this->radio <br>";


        }
        public function suma($A,$B){
            $this -> px = $A -> px + $B -> px;
            $this -> py = $A -> py + $B -> py;
            $this -> radio = $A -> radio + $B -> radio;
            
        }
        public function area(){
            return 3.1416*($this->radio * $this->radio);
        }
        public function perimetro(){
            return 3.1416*2 * $this->radio;
        }
    }
?>