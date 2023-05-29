<?php
class users{
    //Indicamos el tipo de dato
    public $sql;
    public function __construct(){
        //clase sql
        //Es la conexión a la base de datos
        $this->sql=new sql();
    }


    public function getUserId($name){
        $sql = "SELECT * FROM `users` where name = '".$name."'";
        //echo $sql;
        $this->result= $this->sql->ejecutar($sql);
          if($this->result-> num_rows >0){
              while($row = $this->result->fetch_assoc()){
                $id_user =  $row["id_user"];
                //echo "<br>The id from the method is:" .$row['id_user']."<br>";
              }
          }
          return $id_user;
    }


    public function getUserName($name){
        $sql = "SELECT * FROM `users` where name = '".$name."'";
        //echo $sql;
        $this->result= $this->sql->ejecutar($sql);
        
        
          if($this->result-> num_rows >0){
  
            
              while($row = $this->result->fetch_assoc()){
                $name =  strtolower($row["name"]);
                //echo "The name from the method is:" .$row['name']."<br>";
                
                
              }
          }
          return $name;
    }

    public function getUserEmail($name){
        $sql = "SELECT * FROM `users` where name = '".$name."'";
        //echo $sql;
        $this->result= $this->sql->ejecutar($sql);


            if($this->result-> num_rows >0){

            
                while($row = $this->result->fetch_assoc()){
                    //echo "The password from the method is:" .$row['password']."<br>";
                    $email =  $row["email"];
                }
            }
            return $email;
    }

    public function getUserPassword($name){
        $sql = "SELECT * FROM `users` where name = '".$name."'";
        //echo $sql;
        $this->result= $this->sql->ejecutar($sql);


            if($this->result-> num_rows >0){

            
                while($row = $this->result->fetch_assoc()){
                    //echo "The password from the method is:" .$row['password']."<br>";
                    $password =  $row["password"];
                }
            }
            return $password;
    }


    public function getUserCellphone($name){
        $sql = "SELECT * FROM `users` where name = '".$name."'";
        //echo $sql;
        $this->result= $this->sql->ejecutar($sql);


            if($this->result-> num_rows >0){

            
                while($row = $this->result->fetch_assoc()){
                    //echo "The password from the method is:" .$row['password']."<br>";
                    $cellphone =  $row["cellphone"];
                }
            }
            return $cellphone;
    }

    

    

      public function seeUserProfileByName($name){
        $sql = "SELECT * FROM `users` where name = '".$name."'";
        $this->result= $this->sql->ejecutar($sql);
        //echo $sql;
        echo "<br><br>";
        if($this->result-> num_rows >0){

            echo "<table class=\"table table-striped\">"; 

            echo "<tr>";
            echo "<th></th>";
            echo "<th>id_user</th>";
            echo "<th></th>";
            echo "<th>name</th>";
            echo "<th></th>";
            echo "<th>email</th>";
            echo "<th></th>";
            echo "<th>password</th>";
            echo "<th></th>";
            echo "<th>cellphone</th>";
            echo "<th></th>";
            echo "<th>registration_date</th>";
            echo "<th></th>";
            echo "</tr>";

            while($row = $this->result->fetch_assoc()){
                echo "<tr>";
                echo "<th></th>";
                echo"<td>".$row["id_user"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["name"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["email"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["password"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["cellphone"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["registration_date"]."</td>";
                echo "<th></th>";
            }
            echo "<table>";
        }
      return $title;
    }


    public function updateUser($name,$email,$password,$cellphone){
        //Query para hacer la actualización de contacto
        //$sql = "update contacto set nom = '".$nom."',";
        $sql = "update users set email='".$email."',password='".$password."',cellphone='".$cellphone."' where name = '".$name."'";
        $this->result= $this->sql->ejecutar($sql);
        //echo $sql;
    }


   
}
?>   