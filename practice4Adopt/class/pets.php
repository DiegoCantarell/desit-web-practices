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


    public function getAllPetNames(){
      
        $sql = "SELECT * FROM `pets` ";
        $this->result= $this->sql->ejecutar($sql);
        //echo "<form action='practice4AdoptBackend.php'>";
          //echo "Type your user ID:";
          //echo "<input type = 'number' name = 'user_id' required>";
          echo "<br><br>";
          
          echo "<label for='pets'>Choose a pet: </label>";
          echo "<select name = 'pets' id='pets' required>";
          echo "<optgroup label='Available pets'>";
          if($this->result-> num_rows >0){
            while($row = $this->result->fetch_assoc()){
               
                $id_pet = $row["id_pet"];
                $pet_name = $row["name"];
                $id_user_adopt = $row["id_user_adopt"];
                $status = $row["status"];
                if($status == 1)
                  echo "<option value= $id_pet>$pet_name</option>";               
            }
          }
          $pet_name = "exe";
          echo "</optgroup>";
          echo "</select>";
          echo "<br>";
          echo "<br>";
          echo "<br>";
          //echo "<input type='submit' value='Submit'>";
          //echo "</form>";
    }


    public function searchPetById($id_pet){
      $sql = "SELECT * FROM `pets` where id_pet = '".$id_pet."'";
      $this->result= $this->sql->ejecutar($sql);
      //echo $sql;
      echo "<br><br>";
      if($this->result-> num_rows >0){
        while($row = $this->result->fetch_assoc()){
            $pet_name = $row["name"];
            echo "the pet name associated  with the ID is: <strong>$pet_name</strong>";
            echo "<br><br>";
        }
        
    }
    return $pet_name;


    }

    
      
}
?>
  

   
