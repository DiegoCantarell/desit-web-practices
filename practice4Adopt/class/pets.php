<?php
class pets{
    //Indicamos el tipo de dato
    public $sql;
    public function __construct(){
        //clase sql
        //Es la conexión a la base de datos
        $this->sql=new sql();
    }

    public function getAllPets(){
      $sql = "SELECT * FROM `pets` ";
      //echo $sql;
      $this->result= $this->sql->ejecutar($sql);
      
      
        if($this->result-> num_rows >0){

          echo "<table class=\"table table-striped\">"; 

            echo "<tr>";
            echo "<th></th>";
            echo "<th>id_pet</th>";
            echo "<th></th>";
            echo "<th>name</th>";
            echo "<th></th>";
            echo "<th>id_user_adopt</th>";
            echo "<th></th>";
            echo "<th>status</th>";
            echo "<th></th>";
            echo "</tr>";
    
            while($row = $this->result->fetch_assoc()){
                echo "<tr>";
                echo "<th></th>";
                echo"<td>".$row["id_pet"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["name"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["id_user_adopt"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["status"]."</td>";
                echo "<th></th>";
                echo "</tr>";
            }
            echo "<table>";
        }
    }
    public function addPet( $id_pet, $name, $id_user_adopt,$status){
      //DEFINIMOS LA EJECUCIÓN Y LA CONSULTA 

      //le mandamos la consulta por paso de parametros
      $sql = "insert into pets values(null,'". $name."', '". $id_user_adopt."', '". $status."')";
      echo $sql;
      $this->result= $this->sql->ejecutar($sql);

    }


    public function getAllNames(){
      echo "<p>Entrando al método</p>";
        $sql = "SELECT * FROM `pets` ";
        $this->result= $this->sql->ejecutar($sql);

        echo "<form action='practice4AdoptBackend.php'>";
          echo "Type your name:";
          echo "<input type = 'text' name = 'name' required>";
          echo "<br><br>";


          echo "<SELECT name = 'pets'>";
          if($this->result-> num_rows >0){


            while($row = $this->result->fetch_assoc()){
                echo "<tr>";
                
                $id_pet = $row["id_pet"];
                $name = $row["name"];
                $id_user_adopt = $row["id_user_adopt"];
                $status = $row["status"];
                
                //echo "$id <br>";
                //echo "$nombre<br>";
                //echo "$partido<br>";
                if($status == 1)
                  echo "<option value=$name>$name</option>";
                
            }
          echo "</select>";
          echo "<br>";
          echo "<input type='submit' value='Submit'>";
          echo "</form>";
          
          $name = isset($_POST["name"])? $_POST["name"]: "";
          echo"Nombre: ".($name)."<br>";


          
          //$this->result= $this->sql->ejecutar($sql);
          
         
      }
    }

    
      
}
?>
  

   
