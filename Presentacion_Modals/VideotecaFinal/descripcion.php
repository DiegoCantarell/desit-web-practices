<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Videoteca</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="images/Envision.css" type="text/css" /></head>
<body>
<div id="wrap">
  <div id="header">
    <h1 id="logo-text">videoteca</h1>
    <h2 id="slogan">Facultad de Ciencias de la Computaci&oacute;n </h2>
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
      <h1>Descripcion de pelicula </h1>

      <p>
	  <?php
    $id = $_GET['id'];

    $enlace = mysqli_connect("localhost", "root", "");
    mysqli_select_db($enlace, "videoteca");

    $resultado = mysqli_query($enlace, "select * from pelicula where id_pelicula = '$id'");
    $fila = mysqli_fetch_array($resultado);

    $titulo = $fila['titulo'];
    $director = $fila['director'];
    $actor = $fila['actor'];
    $imagen = $fila['imagen'];
    $ranking = $fila['ranking'];

    echo "<img src = 'img/$imagen' width = '270' height = '270'><br>";
    echo "- Titulo: $titulo<br>";
    echo "- Director: $director<br>";
    echo "- Actor: $actor<br>";
    echo "- Ranking: $ranking<br>";
?>
	  &nbsp;</p>
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
