<?php
class admin{
    //Indicamos el tipo de dato
    public $sql;
    public function __construct(){
        //clase sql
        //Es la conexión a la base de datos
        $this->sql=new sql();
    }


    public function getAdminId($name){
        $sql = "SELECT * FROM `admin` where name = '".$name."'";
        //echo $sql;
        $this->result= $this->sql->ejecutar($sql);
          if($this->result-> num_rows >0){
              while($row = $this->result->fetch_assoc()){
                $id_admin =  $row["id_admin"];
                //echo "<br>The id from the method is:" .$row['id_user']."<br>";
              }
          }
          return $id_admin;
    }


    public function getAdminName($name){
        $sql = "SELECT * FROM `admin` where name = '".$name."'";
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

    public function getEmail($name){
        $sql = "SELECT * FROM `admin` where name = '".$name."'";
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

    public function getAdminPassword($name){
        $sql = "SELECT * FROM `admin` where name = '".$name."'";
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


    public function getAdminCellphone($name){
        $sql = "SELECT * FROM `admin` where name = '".$name."'";
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

    public function getAdminShift($name){
        $sql = "SELECT * FROM `admin` where name = '".$name."'";
        //echo $sql;
        $this->result= $this->sql->ejecutar($sql);
          if($this->result-> num_rows >0){
              while($row = $this->result->fetch_assoc()){
                $shift =  $row["shift"];
               
              }
          }
          return $shift;
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

    //Get a table with all the users except the actual user to rate the users
    public function getAllUserNamesPoints($id_user){
        $sql = "SELECT * FROM `users` where id_user != '".$id_user."'";
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
            echo "<th>registration_date</th>";
            echo "<th></th>";
            echo "<th>Points</th>";
            echo "<th></th>";
            echo "<th>Rate User</th>";
            echo "<th></th>";
            echo "</tr>";

            while($row = $this->result->fetch_assoc()){
                echo "<form action='../user/rateActionUserBackend.php' method = 'POST'>";
                echo "<tr>";
                echo "<th></th>";
                echo"<td>".$row["id_user"]."</td>";
                echo "<input type='text' name='id_user' value=".$row["id_user"]." style='display:none;'>";
                echo "<th></th>";
                echo"<td>".$row["name"]."</td>";
                echo "<input type='text' name='name' value=".$row["name"]." style='display:none;'>";
                echo "<th></th>";
                echo"<td>".$row["email"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["registration_date"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["points"]."</td>";
                echo "<th></th>";
                echo"<td>  <button   class='btn btn-secondary px-4 px-lg-5' type = 'submit' name = 'send' >Give a Point!</button> </td>";
                echo "<th></th>";
                echo "</form>";
            }
            echo "<table>";
        }
      return $title;
    }


    //Get a table with all the users except the actual user to rate the users
    public function getAllUsernamesForBarChart($array){
        $sql = "SELECT * FROM `users` ";
        $this->result= $this->sql->ejecutar($sql);
        //echo $sql;
        echo "<br><br>";
        if($this->result-> num_rows >0){
            while($row = $this->result->fetch_assoc()){
                //echo"<br>".$row["name"]."<br>";
                $array[$i] = $row["name"];
                $i=$i+1;
            }   
        }
      return $array;
    }

    public function getAllUserPointsForBarChart($array){
        $sql = "SELECT * FROM `users` ";
        $this->result= $this->sql->ejecutar($sql);
        //echo $sql;
        echo "<br><br>";
        if($this->result-> num_rows >0){
            while($row = $this->result->fetch_assoc()){
                //echo"<br>".$row["name"]."<br>";
                $array[$i] = $row["points"];
                $i=$i+1;
            }   
        }
      return $array;
    }


    public function updateUser($name,$email,$password,$cellphone){
        //Query para hacer la actualización de contacto
        //$sql = "update contacto set nom = '".$nom."',";
        $sql = "update users set email='".$email."',password='".$password."',cellphone='".$cellphone."' where name = '".$name."'";
        $this->result= $this->sql->ejecutar($sql);
        //echo $sql;
    }

    public function addPoint ($id_user,$points){
        //Query para hacer la actualización de contacto
        //$sql = "update contacto set nom = '".$nom."',";
        $sql = "update users set points='".$points."' where id_user = '".$id_user."'";
        $this->result= $this->sql->ejecutar($sql);
        //echo $sql;
    }

    public function addUser( $id_user,$name,$email,$password,$cellphone,$registration_date ){
        //DEFINIMOS LA EJECUCIÓN Y LA CONSULTA 
  
        //le mandamos la consulta por paso de parametros
        $sql = "insert into users values(null,'". $name."', '". $email."', '". $password."', '". $cellphone."', '". $registration_date."', 0)";
        //echo $sql;
        $this->result= $this->sql->ejecutar($sql);
  
    }



   
}
?>   