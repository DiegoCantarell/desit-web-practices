<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>Videoteca</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <link rel="stylesheet" href="images/Envision.css" type="text/css" />
</head>

<body>

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
</html>
