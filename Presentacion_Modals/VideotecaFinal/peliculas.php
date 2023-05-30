<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>Videoteca</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="images/Envision.css" type="text/css" />  
</head>

<body>

<div id="modalActualizar" class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Actualizar Película.</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>      
                </div>
                <div id="modal-text" class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="guardar()">Guardar Cambios</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
</div>


<div id="wrap">
  <div id="header">
    <h1 id="logo-text">videoteca</h1>
    <br><br>
    <h2 id="slogan"><br><br>Facultad de Ciencias de la Computación </h2>
  </div>
  <div  id="menu">
    <ul>
      <li><a href="index.php">Inicio</a></li>
      <li id="current"><a href="peliculas.php">Peliculas</a></li>
      <li><a href="acceder.php">Acceder</a></li>
      <li class="last"><a href="contacto.php">Contacto</a></li>
    </ul>
  </div>
  <div id="content-wrap">
    <div id="main">
      <h1>Lista de películas </h1>
      <p>
	      <?php
        $enlace = mysqli_connect("localhost", "root", "");
        mysqli_select_db($enlace, "videoteca");

        $resultado = mysqli_query($enlace, "select * from pelicula");

        echo "<table border='1'>";
        echo "<tr><td> ID </td><td> Titulo </td><td> Director </td><td> Actor </td><td> Imagen </td></tr>" ;

        while ($fila = mysqli_fetch_array($resultado))
        {
            $id = $fila['id_pelicula'];
            $titulo = $fila['titulo'];
            $director = $fila['director'];
            $actor = $fila['actor'];
            $imagen = $fila['imagen'];

            echo    "<tr><td> $id </td>
                        <td> $titulo </td>
                        <td> $director </td>
                        <td> $actor </td>
                        <td> <a href='descripcion.php?id=$id'><img src='img/$imagen' height='80' width='70'> </a></td>
                        <td> <button onclick='actualizar($id)'><img src='img/actualizar.jpg' style='max-width: 40px; height=40px;'></img></button> </td>
                    </tr>";
        }
        echo "</table>";
        mysqli_close($enlace);
    	?>
	  </p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp; </p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p><br />
      </p>
      <br />
    </div>
  </div>
  <div id="footer">       
    <p>CSS de ejemplo de https://www.free-css.com/free-css-templates/page7/envision-1.0</p>
  </div>
</div>
</body>

<script src="js/jquery-3.6.3.min.js"></script>
<script src="js/bootstrap.js"></script>
<script>
    
        
  function load(){
    location.href ="peliculas.php";
  }


  function actualizar(id){
    var url="mostrar.php?id="+id+"&tipo=1";
    $.get(url,function(result){
      $("#modal-text").html(result);
    });
    $("#modalActualizar").modal("show");

  }

  function guardar(){

    var id = $("#id").val();
    var titulo = $("#titulo").val();
    var director = $("#director").val();
    var actor = $("#actor").val();
    var ranking = $("#ranking").val();
    var foto = $("#foto").val();    

    var error="";

    if(titulo == ""){
        error+="falta el título\n";
    }
    if(director == ""){
        error+="falta el director\n";
    }
    if(actor == ""){
        error+="falta el actor\n";
    }
    if(ranking == ""){
        error+="falta el ranking\n";
    }
    if(foto == ""){
        error+="falta la foto\n";
    }    
    if(error==""){
      var formData= new FormData();

        formData.append("tipo",2);
        formData.append("id",id);
        formData.append("titulo",titulo);
        formData.append("director",director);
        formData.append("actor",actor);
        formData.append("ranking",ranking);
        formData.append("foto",foto);
                

        var request = new XMLHttpRequest();

        request.onreadystatechange = function(){
          if(this.readyState == 4 && this.status == 200 ){
            //console.log(this.responseText);
            //alert(this.responseText);
            load();
            $("#modalActualizar").modal("hide");
          }
        }
        request.open("POST","mostrar.php");
        request.send(formData);
        alert("Listo");
    }else{
        alert(error);
    }
}
</script>

</html>
