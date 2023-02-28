<?php
class partidos{
    //Indicamos el tipo de dato
    public $sql;
    public function __construct(){
        //clase sql
        //Es la conexión a la base de datos
        $this->sql=new sql();
    }


    public function updateNumeroVotos($numero,$id_partido){
      //DEFINIMOS LA EJECUCIÓN Y LA CONSULTA 

      //le mandamos la consulta por paso de parametros
      $sql = "UPDATE partidos SET  numero_votos= '".$numero."' WHERE id_partido = '".$id_partido."'";
      
      $this->result= $this->sql->ejecutar($sql);

    }


    public function getNumeroVotos($id_partido){
      $sql = "SELECT * FROM `partidos` WHERE id_partido = '".$id_partido."'";
      $this->result= $this->sql->ejecutar($sql);

      if($this->result-> num_rows >0){
          while($row = $this->result->fetch_assoc()){
              $numero = $row["numero_votos"];
              //echo $numero;
          }
          
      }
      return $numero;
    }
   

 
    public function crearContacto($id, $nom, $tel, $dir, $correo, $foto, $usuario){
        //DEFINIMOS LA EJECUCIÓN Y LA CONSULTA 

        //le mandamos la consulta por paso de parametros
        $sql = "insert into contacto values(null,'". $nom."', '". $tel."','". $dir."','". $correo."','". $foto."','". $usuario."')";
        $this->result= $this->sql->ejecutar($sql);

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