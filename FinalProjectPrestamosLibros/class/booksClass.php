<?php
class books{
    //Indicamos el tipo de dato
    public $sql;
    public function __construct(){
        //clase sql
        //Es la conexión a la base de datos
        $this->sql=new sql();
    }

    public function getTableBooks(){
        $sql = "SELECT * FROM `books` ";
        //echo $sql;
        $this->result= $this->sql->ejecutar($sql);
        
        
        if($this->result-> num_rows >0){

            echo "<table class=\"table table-striped\">"; 

            echo "<tr>";
            echo "<th></th>";
            echo "<th>id_book</th>";
            echo "<th></th>";
            echo "<th>title</th>";
            echo "<th></th>";
            echo "<th>editorial</th>";
            echo "<th></th>";
            echo "<th>subject</th>";
            echo "<th></th>";
            echo "<th>availability</th>";
            echo "<th></th>";
            echo "<th>release_date</th>";
            echo "<th></th>";
            echo "<th>owner</th>";
            echo "<th></th>";
            echo "<th>borrower</th>";
            echo "<th></th>";
            echo "<th>borrow_start_date</th>";
            echo "<th></th>";
            echo "<th>borrow_end_date</th>";
            echo "<th></th>";
            echo "</tr>";

            while($row = $this->result->fetch_assoc()){
                echo "<tr>";
                echo "<th></th>";
                echo"<td>".$row["id_book"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["title"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["editorial"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["subject"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["availability"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["release_date"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["owner"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["borrower"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["borrow_start_date"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["borrow_end_date"]."</td>";
                echo "<th></th>";
                echo "</tr>";
            }
            echo "<table>";
        }
    }

    public function searchBookByTitle($title){
        $sql = "SELECT * FROM `books` where title = '".$title."'";
        $this->result= $this->sql->ejecutar($sql);
        //echo $sql;
        echo "<br><br>";
        if($this->result-> num_rows >0){

            echo "<table class=\"table table-striped\">"; 

            echo "<tr>";
            echo "<th></th>";
            echo "<th>id_book</th>";
            echo "<th></th>";
            echo "<th>title</th>";
            echo "<th></th>";
            echo "<th>editorial</th>";
            echo "<th></th>";
            echo "<th>subject</th>";
            echo "<th></th>";
            echo "<th>availability</th>";
            echo "<th></th>";
            echo "<th>release_date</th>";
            echo "<th></th>";
            echo "<th>owner</th>";
            echo "<th></th>";
            echo "<th>borrower</th>";
            echo "<th></th>";
            echo "<th>borrow_start_date</th>";
            echo "<th></th>";
            echo "<th>borrow_end_date</th>";
            echo "<th></th>";
            echo "</tr>";

            while($row = $this->result->fetch_assoc()){
                echo "<tr>";
                echo "<th></th>";
                echo"<td>".$row["id_book"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["title"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["editorial"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["subject"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["availability"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["release_date"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["owner"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["borrower"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["borrow_start_date"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["borrow_end_date"]."</td>";
                echo "<th></th>";
                echo "</tr>";
            }
            echo "<table>";
        }
      return $title;
    }


    public function addBook( $id_book, $title, $editorial,$subject,$availability, $release_date,$owner,$borrower,$borrow_start_date,$borrow_end_date){
        //DEFINIMOS LA EJECUCIÓN Y LA CONSULTA 
  
        //le mandamos la consulta por paso de parametros
        $sql = "insert into books values(null,'". $title."', '". $editorial."', '". $subject."', '". $availability."', '". $release_date."', '". $owner."', null,null,null)";
        echo $sql;
        $this->result= $this->sql->ejecutar($sql);
  
      }
    


    
      
}
?>
  

   
