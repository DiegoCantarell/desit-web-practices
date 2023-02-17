<?php
class personas{
    //Indicamos el tipo de dato
    public $sql;
    public function __construct(){
        //clase sql
        //Es la conexión a la base de datos
        $this->sql=new sql();
    }
 
    public function addPersona($id_persona, $nombre, $numero_votos){
        //DEFINIMOS LA EJECUCIÓN Y LA CONSULTA 

        //le mandamos la consulta por paso de parametros
        $sql = "insert into personas values(null,'". $nombre."', '". $numero_votos."')";
        $this->result= $this->sql->ejecutar($sql);

    }

    public function getAllData(){
      echo "<p>Entrando al método</p>";
        $sql = "SELECT * FROM `personas` ";
        $this->result= $this->sql->ejecutar($sql);


        echo "<SELECT name = 'personas'>";
        if($this->result-> num_rows >0){


          while($row = $this->result->fetch_assoc()){
              echo "<tr>";
              
              $id = $row["id_persona"];
              $nombre = $row["nombre"];
              $partido = $row["partido"];
              
              //echo "$id <br>";
              //echo "$nombre<br>";
              //echo "$partido<br>";
              echo "<option value=$id>$nombre</option>";
              
          }
          echo "</select>";
          
          //$this->result= $this->sql->ejecutar($sql);
          
         
      }

     


    }
    public function getAllData2(){
      $sql = "SELECT * FROM `personas` ";
      $this->result= $this->sql->ejecutar($sql);
      if($this->result-> num_rows >0){
        echo "<table class=\"table table-striped\">";
        echo "<tr>";
        
        echo "<th>ID</th>";
        echo "<th>Nombre</th>";
        echo "<th>Partido</th>";
        echo "<th></th>";
        echo "</tr>";

        while($row = $this->result->fetch_assoc()){
            echo "<tr>";
            
            echo"<td>".$row["id_persona"]."</td>";
            echo"<td>".$row["nombre"]."</td>";
            echo"<td>".$row["partido"]."</td>";
            echo "</tr>";
        }
        echo "<table>";
    }
  }
}
?>   