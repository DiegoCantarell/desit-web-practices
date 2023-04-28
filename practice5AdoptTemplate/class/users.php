<?php
class users{
    //Indicamos el tipo de dato
    public $sql;
    public function __construct(){
        //clase sql
        //Es la conexión a la base de datos
        $this->sql=new sql();
    }

   


    public function getAllUsers(){
      $sql = "SELECT * FROM `users` ";
      //echo $sql;
      $this->result= $this->sql->ejecutar($sql);
      
      
        if($this->result-> num_rows >0){

          echo "<table class=\"table table-striped\">"; 

            echo "<tr>";

            echo "<th></th>";
            echo "<th>id_user</th>";
            echo "<th></th>";
            echo "<th>name</th>";
            echo "<th></th>";
            echo "<th>pets_number</th>";
            echo "<th></th>";
            
            echo "</tr>";
    
            while($row = $this->result->fetch_assoc()){
                echo "<tr>";

                echo "<th></th>";
                echo"<td>".$row["id_user"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["name"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["pets_number"]."</td>";
                echo "<th></th>";

                echo "</tr>";
            }
            echo "<table>";
        }
    }

    public function getUserID($name){
      $sql = "SELECT * FROM `users` where name = '".$name."'";
      //echo $sql;
      $this->result= $this->sql->ejecutar($sql);
      
      
        if($this->result-> num_rows >0){

          
            while($row = $this->result->fetch_assoc()){
                echo $row["id_user"];
                $id =  $row["id_user"];
            }
        }
        return $id;
    }

    public function getUserName($name){
      $sql = "SELECT * FROM `users` where name = '".$name."'";
      //echo $sql;
      $this->result= $this->sql->ejecutar($sql);
      
      
        if($this->result-> num_rows >0){

          
            while($row = $this->result->fetch_assoc()){
                echo $row["name"];
                $name =  $row["name"];
            }
        }
        return $name;
    }

    public function getUserPassword($name){
      $sql = "SELECT * FROM `users` where name = '".$name."'";
      //echo $sql;
      $this->result= $this->sql->ejecutar($sql);
      
      
        if($this->result-> num_rows >0){

          
            while($row = $this->result->fetch_assoc()){
                echo $row["password"];
                $password =  $row["password"];
            }
        }
        return $password;
    }
    public function getAllUserInfobyId($id_user){
      $sql = "SELECT * FROM `users` where id_user = '".$id_user."'";
      //echo $sql;
      $this->result= $this->sql->ejecutar($sql);
      
      
        if($this->result-> num_rows >0){

          echo "<table class=\"table table-striped\">"; 

            echo "<tr>";

            echo "<th></th>";
            echo "<th>id_user</th>";
            echo "<th></th>";
            echo "<th>name</th>";
            echo "<th></th>";
            echo "<th>pets_number</th>";
            echo "<th></th>";
            
            echo "</tr>";
    
            while($row = $this->result->fetch_assoc()){
                echo "<tr>";

                echo "<th></th>";
                echo"<td>".$row["id_user"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["name"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["pets_number"]."</td>";
                echo "<th></th>";

                echo "</tr>";
            }
            echo "<table>";
        }
    }
    public function addUser( $id_user, $name,$password,$pets_number){
      //DEFINIMOS LA EJECUCIÓN Y LA CONSULTA 

      //le mandamos la consulta por paso de parametros
      $sql = "insert into users values(null,'". $name."', '". $password."','". $pets_number."')";
      //echo $sql;
      $this->result= $this->sql->ejecutar($sql);

    }

  public function getPetsNumber($id_user){
    $sql = "SELECT * FROM `users` WHERE id_user = '".$id_user."'";
    //echo $sql;
    $this->result= $this->sql->ejecutar($sql);

    if($this->result-> num_rows >0){
        while($row = $this->result->fetch_assoc()){
            $numero = $row["pets_number"];
            echo "<br>";
            echo "The number of pets of the user is: $numero, the user is able to adopt!";
            echo "<br>";
        }
        
    }
    return $numero;
  }

  public function getUser($name){
    
    $sql = "SELECT * FROM `users` where name = '".$name."'";
    $this->result= $this->sql->ejecutar($sql);
    //echo "<form action='practice4AdoptBackend.php'>";
      //echo "Type your user ID:";
      //echo "<input type = 'number' name = 'user_id' required>";
      echo "<br><br>";
      //TEST
      echo "<label for='users'>Choose a user: </label>";
      echo "<select name = 'users' id='users' required>";
      echo "<optgroup label='Available Users'>";
      if($this->result-> num_rows >0){
        while($row = $this->result->fetch_assoc()){
           
            $id_user = $row["id_user"];
            $name = $row["name"];
            $pets_number = $row["pets_number"];
            
            if($pets_number < 2)
              echo "<option value= $id_user>$name</option>";               
        }
      }
      
      echo "</optgroup>";
      echo "</select>";
      //TEST

      echo "<br>";
      echo "<br>";
      echo "<br>";
      //echo "<input type='submit' value='Submit'>";
      //echo "</form>";
}

  public function getAllUserNames(){
    
      $sql = "SELECT * FROM `users` ";
      $this->result= $this->sql->ejecutar($sql);
      //echo "<form action='practice4AdoptBackend.php'>";
        //echo "Type your user ID:";
        //echo "<input type = 'number' name = 'user_id' required>";
        echo "<br><br>";
        //TEST
        echo "<label for='users'>Choose a user: </label>";
        echo "<select name = 'users' id='users' required>";
        echo "<optgroup label='Available Users'>";
        if($this->result-> num_rows >0){
          while($row = $this->result->fetch_assoc()){
             
              $id_user = $row["id_user"];
              $name = $row["name"];
              $pets_number = $row["pets_number"];
              
              if($pets_number < 2)
                echo "<option value= $id_user>$name</option>";               
          }
        }
        
        echo "</optgroup>";
        echo "</select>";
        //TEST

        echo "<br>";
        echo "<br>";
        echo "<br>";
        //echo "<input type='submit' value='Submit'>";
        //echo "</form>";
  }

  public function getAllUserNamesNoRestriction(){
    
    $sql = "SELECT * FROM `users` ";
    $this->result= $this->sql->ejecutar($sql);
    //echo "<form action='practice4AdoptBackend.php'>";
      //echo "Type your user ID:";
      //echo "<input type = 'number' name = 'user_id' required>";
      echo "<br><br>";
      //TEST
      echo "<label for='users'>Choose a user: </label>";
      echo "<select name = 'users' id='users' required>";
      echo "<optgroup label='Available Users'>";
      if($this->result-> num_rows >0){
        while($row = $this->result->fetch_assoc()){
           
            $id_user = $row["id_user"];
            $name = $row["name"];
            $pets_number = $row["pets_number"];
            
            
            echo "<option value= $id_user>$name</option>";               
        }
      }
      
      echo "</optgroup>";
      echo "</select>";
      //TEST

      echo "<br>";
      echo "<br>";
      echo "<br>";
      //echo "<input type='submit' value='Submit'>";
      //echo "</form>";
}

  public function searchUserById($id_user){
    $sql = "SELECT * FROM `users` where id_user = '".$id_user."'";
    $this->result= $this->sql->ejecutar($sql);
    //echo $sql;
    echo "<br><br>";
    if($this->result-> num_rows >0){
      while($row = $this->result->fetch_assoc()){
          $user_name = $row["name"];
          echo "the user name associated  with the ID is: <strong>$user_name</strong>";
          echo "<br><br>";
      }
      
  }
  return $user_name;


  }


  public function deleteUser( $id_user){
    $sql = "delete from users where id_user='". $id_user."' ";
    $this->result= $this->sql->ejecutar($sql);
    //echo $sql;
    //De esta manera puedo combinar los métodos sin perder la funcionalidad
    

  }
  public function modifyUser($id_user,$name,$password){
    //Query para hacer la actualización de contacto
    //$sql = "update contacto set nom = '".$nom."',";
    $sql = "update users set name='".$name."',password='".$password."' where id_user = '".$id_user."'";
    $this->result= $this->sql->ejecutar($sql);
    //echo $sql;
  }

  public function showUsers(){
    $sql = "SELECT * FROM `users`";
    $this->result= $this->sql->ejecutar($sql);

    if($this->result-> num_rows >0){
        echo "<table class=\"table table-striped\">";
        echo "<tr>";
        
        echo "<th>ID</th>";
        echo "<th>Name</th>";
        echo "<th>Password</th>";
        echo "<th>Actualizar</th>";
        
        echo "<th>Eliminar</th>";
        echo "<th>Insertar</th>";
        
        echo "<th></th>";
        echo "</tr>";

        while($row = $this->result->fetch_assoc()){
            echo "<tr>";
            echo "<form action='mainTableBackend.php' method = 'POST'> ";
            
              echo"<td>".$row["id_user"]."</td>";
              
              echo"<td><input type='text' id='fname' name='name' value=".$row["name"]."></td>";
              #echo"<td>".$row["name"]."</td>";
              echo"<td><input type='text' id='fname' name='password' value=".$row["password"]."></td>";
              #echo"<td>".$row["password"]."</td>";
              
              echo "<input type='text' name='id_user' value=".$row["id_user"]." style='display:none;'>";
              echo "<td><input type='submit' name = 'send' value='Submit'></td>";
              #echo "<td><input type='submit' name = 'sendEliminar' value='Eliminar '></td>";
            echo"</form>"; 
            
            //NO PODEMOS PONER EL ONCLICK() DEBIDO A QUE PODRIA AFECTAR EL HREF QUE TENEMOS
            echo "<form action='mainTableBackendDelete.php' method = 'POST' >";
            
       
                #echo"<td><a href=\"javascript:modificar1('".$row["id_user"]."')\" class='btn btn-primary' >Eliminar user con ID: '".$row["id_user"]."' </a></td>";
                echo "<input type='text' name='id_user' value=".$row["id_user"]." style='display:none;'>";
                #echo "<td><input type='submit' name = 'submit' value='Eliminar' onClick='alert();'></td>";
                echo "<td><input type='submit' name = 'submit' value='Eliminar' ></td>";
            echo"</form>"; 

            echo"<td><a href='mainTableAddUser.php' class='btn btn-primary' >Modificar</a></td>";
            echo "</tr>";
        }
        echo "<table>";
    }

}

    






    /*Se necesita identificar que usuario es el actual*/
    public function muestraContacto($usuario){
        $sql = "SELECT * FROM `contacto` WHERE usuario = '".$usuario."'";
        $this->result= $this->sql->ejecutar($sql);

        if($this->result-> num_rows >0){
            echo "<table class=\"table table-striped\">";
            echo "<tr>";
            echo "<th></th>";
            echo "<th>Nombre</th>";
            echo "<th>Teléfono</th>";
            echo "<th>Dirección</th>";
            echo "<th>Correo</th>";
            echo "<th></th>";
            echo "</tr>";

            while($row = $this->result->fetch_assoc()){
                echo "<tr>";
                echo"<td><img src='".$row["foto"]."' style=\"width: 70px; border-radius: 50%;\"></td>";
                echo"<td>".$row["nom"]."</td>";
                echo"<td>".$row["tel"]."</td>";
                echo"<td>".$row["dir"]."</td>";
                echo"<td>".$row["correo"]."</td>";
                //NO PODEMOS PONER EL ONCLICK() DEBIDO A QUE PODRIA AFECTAR EL HREF QUE TENEMOS
                echo"<td><a href=\"javascript:modificar1('".$row["id"]."')\" class='btn btn-primary' >Modificar</a></td>";
                echo "</tr>";
            }
            echo "<table>";
        }

    }

    public function modificar($id){
        /*UNA OPCIÓN PARA DARLE SEGURIDAD ES ASEGURARSE QUE EL ID BUSCADO VENGA DESDE EL USUARIO
        PERO TAMBIÉN SE PUEDE OMITIR*/
        $sql = "SELECT * FROM `contacto` WHERE id = '".$id."'";
        $this->result= $this->sql->ejecutar($sql);

        $id="";
        $nom="";
        $tel="";
        $dir="";
        $correo="";
        $foto="";
        //PREGUNTAMOS SI TIENE ELEMENTOS, SI LA CONSULTA REGRESA NEGATIVO, NO ENTRAREMOS A ELLA
        if($this->result-> num_rows >0){
            //PARA PROBAR OTRAS MANERAS LO MANDAREMOS SOBRE UN fetch_object()
            while($row = $this->result->fetch_object()){
                $id = $row->id;
                $nom = $row->nom;
                $tel = $row->tel; 
                $dir = $row->dir;
                $correo = $row->correo;
                $foto = $row->foto;
            }
            echo '

            <!--MODAL-->
            <div class="modal modal-alert bg-secundary py-5" tabindex="-1" role="dialog" id="modalValidar">
                    <div class="modal-dialog" role="document">
                        <div class = "modal-content rounded-4 shadow">
                          <div class = "modal-body p-4 text-center">
                              <h5 class = "mb-0">Validar</h5>
                              <p class = "mb-0" id = "modalValidarText">¿Esta seguro que desea hacer el cambio?</p>
                          </div>
                          <div class = "modal-footer fle-nowrap p-0">
                              <button type = "button" class = "btn btn-lg btn-link fs-6 text-decoration--none col-6 m-0 rounded-0 border-right"
                              onClick="ok()">
                              <strong>Ok</strong>
                              </button>
        
                              <button type = "button" class = "btn btn-lg btn-link fs-6 text-decoration--none col-6 m-0 rounded-0 border-right"
                              data-bs-dismiss = "modal">
                              <strong>Cancelar</strong>
                              </button>
        
                          </div>
        
                        </div>
                        
                    </div>
              </div>

                <div class="mb-3 mt-3 text-center">
                  
                  <img src="'.$foto.'" height=100px style = "border-radius:50%;">
                </div>
                <div class="mb-3 mt-3">
                  <label for="nom">Nombre:</label>
                  <!--PARAMETROS QUE NO QUIERO QUE VEA EL USUARIO LOS MANDO SOBRE hidden-->
                  <input type="hidden" class="form-control" id="id" name="id" value = "'.$id.'" >
                  <input type="text" class="form-control" id="nom" name="nom" value = "'.$nom.'" >
                </div>
                <div class="mb-3 mt-3">
                  <label for="tel">Teléfono:</label>
                  <input type="number" class="form-control" id="tel" name="tel" value = "'.$tel.'"  >
                </div>
                <div class="mb-3 mt-3">
                  <label for="dir">Dirección:</label>
                  <input type="text" class="form-control" id="dir" name="dir" value = "'.$dir.'" >
                </div>
                <div class="mb-3 mt-3">
                  <label for="correo">Correo:</label>
                  <input type="email" class="form-control" id="correo" name="correo" value = "'.$correo.'">
                </div>
                
                <div class="mb-3 mt-3">
                  <button type="button" class=" form-control btn btn-primary" id="modificarE" onClick="modificarContacto()">Modificar</button>
                </div>';
 

        }

    }
    //DECLARAMOS FUNCIONAMIENTO DE LA FUNCIÓN
    public function modificarContacto($id,$nom,$tel,$dir,$correo){
      //Query para hacer la actualización de contacto
      //$sql = "update contacto set nom = '".$nom."',";
      $sql = "update contacto set nom='".$nom."',tel='".$tel."',dir='".$dir."',correo='".$correo."' where id='".$id."'";
      $this->result= $this->sql->ejecutar($sql);
      echo $sql;
    }


    public function eliminarContacto($usuario){
      $sql = "SELECT * FROM `contacto` WHERE usuario = '".$usuario."'";
      $this->result= $this->sql->ejecutar($sql);

      if($this->result-> num_rows >0){
          echo "<table class=\"table table-striped\">";
          echo "<tr>";
          echo "<th></th>";
          echo "<th>Nombre</th>";
          echo "<th>Teléfono</th>";
          echo "<th>Dirección</th>";
          echo "<th>Correo</th>";
          echo "<th></th>";
          echo "</tr>";

          while($row = $this->result->fetch_assoc()){
              echo "<tr>";
              echo"<td><img src='".$row["foto"]."' style=\"width: 70px; border-radius: 50%;\"></td>";
              echo"<td>".$row["nom"]."</td>";
              echo"<td>".$row["tel"]."</td>";
              echo"<td>".$row["dir"]."</td>";
              echo"<td>".$row["correo"]."</td>";
              //NO PODEMOS PONER EL ONCLICK() DEBIDO A QUE PODRIA AFECTAR EL HREF QUE TENEMOS
              echo"<td><a href=\"javascript:eliminar1('".$row["id"]."')\" class='btn btn-danger' >Eliminar</a></td>";
              echo "</tr>";
          }
          echo "<table>";
      }

  }

  public function eliminarContactoItem($id,$claveUser){
    $sql = "delete from contacto where id='".$id."' and usuario = '".$claveUser."'";
    $this->result= $this->sql->ejecutar($sql);
    //echo $sql;
    //De esta manera puedo combinar los métodos sin perder la funcionalidad
    $this->eliminarContacto($claveUser);

  }

  public function buscarContacto($usuario, $buscar){
    $sql = "SELECT * FROM `contacto` WHERE usuario = '".$usuario."' and (nom like '%".$buscar."%' or tel like '%".$buscar."%')";
    $this->result= $this->sql->ejecutar($sql);

    if($this->result-> num_rows >0){
        echo "<table class=\"table table-striped\">";
        echo "<tr>";
        echo "<th></th>";
        echo "<th>Nombre</th>";
        echo "<th>Teléfono</th>";
        echo "<th>Dirección</th>";
        echo "<th>Correo</th>";
        
        echo "</tr>";

        while($row = $this->result->fetch_assoc()){
            echo "<tr>";
            echo"<td><img src='".$row["foto"]."' style=\"width: 70px; border-radius: 50%;\"></td>";
            echo"<td>".$row["nom"]."</td>";
            echo"<td>".$row["tel"]."</td>";
            echo"<td>".$row["dir"]."</td>";
            echo"<td>".$row["correo"]."</td>";
            //NO PODEMOS PONER EL ONCLICK() DEBIDO A QUE PODRIA AFECTAR EL HREF QUE TENEMOS
            
            echo "</tr>";
        }
        echo "<table>";
    }

}

}
?>   