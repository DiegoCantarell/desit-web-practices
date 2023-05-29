<?php
class users{
    //Indicamos el tipo de dato
    public $sql;
    public function __construct(){
        //clase sql
        //Es la conexión a la base de datos
        $this->sql=new sql();
    }

    public function getUserPassword($name){
        $sql = "SELECT * FROM `users` where name = '".$name."'";
        //echo $sql;
        $this->result= $this->sql->ejecutar($sql);


            if($this->result-> num_rows >0){

            
                while($row = $this->result->fetch_assoc()){
                    echo "The password from the method is:" .$row['password']."<br>";
                    $password =  $row["password"];
                }
            }
            return $password;
    }

    public function getUserName($name){
        $sql = "SELECT * FROM `users` where name = '".$name."'";
        //echo $sql;
        $this->result= $this->sql->ejecutar($sql);
        
        
          if($this->result-> num_rows >0){
  
            
              while($row = $this->result->fetch_assoc()){
                echo "The name from the method is:" .$row['name']."<br>";
                
                $name =  strtolower($row["name"]);
              }
          }
          return $name;
      }


   
}
?>   