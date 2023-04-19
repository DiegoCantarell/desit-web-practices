<?php
session_start();

$name = $_SESSION['name'];
$password = $_SESSION['password'];
$user = $_SESSION['user'];
if ($user == 2 ){
  echo "You are on indexUser";

  echo '<br>';
  echo $name;
  echo '<br>';
  echo $password;
  echo '<br>';
}
else{
  header("Location: salir.php");
}





?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Adopt a Pet!</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="images/Envision.css" type="text/css" />
</head>
<body>
<div id="wrap">
  <div id="header">
  <?php
    echo "<h1 id='logo-text'>View your pets info $name</h1>";
    ?>
    <h2 id="slogan">Adopt a pet can change your life and a pet life...</h2>
    <div id="header-links">
    <p> <a href="#">Contact</a> | <a href="practice5LoginAdmin.php">Admin</a> | <a href="salir.php">Salir</a> </p>
    </div>
  </div>
  <div  id="menu">
    <ul>
    <li ><a href="indexUser.php">Home</a></li>
      <li ><a href="practice5ViewPetsUser.php">Catalogue of pets</a></li>
      <li id="current"><a href="practice5ViewYourPetsUser.php">View your Pets</a></li>
      <li><a href="practice5ViewAdoptMain.php">Adopt a Pet</a></li>
    </ul>
  </div>
  <div id="content-wrap">
    <div id="sidebar">
      
      <h1>Support Styleshout</h1>
      <div class="left-box">
        <p>If you are interested in supporting my work and would like to contribute, you are welcome to make a small donation through the <a href="http://www.styleshout.com/">donate link</a> on my website - it will be a great help and will surely be appreciated.</p>
      </div>
    </div>
    <div id="main"> <a name="TemplateInfo"></a>
        <h1>Pets info</h1>
        
    <?php
    include "class/sql.php";
    include "class/pets.php";
    include "class/users.php";

    $users = new users();
    $id_user_adopt = $users->getUserID($name);
    $pets = new pets();
    //$pets->getAllPets();
    $pets->getAllPetsbyUser($id_user_adopt);
    ?>
        
    </div>
  </div>
  <div id="footer">
    <p> &copy; 2006 <strong>Your Company</strong> | Design by: <a href="http://www.styleshout.com/">styleshout</a> | Valid <a href="http://validator.w3.org/check?uri=referer">XHTML</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="#">Home</a>&nbsp;|&nbsp; <a href="#">Sitemap</a>&nbsp;|&nbsp; <a href="salir.php">Salir</a> </p>
  </div>
</div>
</body>
</html>












