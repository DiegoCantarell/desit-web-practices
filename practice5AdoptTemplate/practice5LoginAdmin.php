<?php
session_start();
echo "You are on a view";
$name = $_SESSION['name'];
$password = $_SESSION['password'];
$name2 = 'diego';
echo '<br>';
echo $name;
echo '<br>';
echo $password;
echo '<br>';
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
    <h1 id="logo-text">Log in Admin</h1>
    <h2 id="slogan">Adopt a pet can change your life and a pet life...</h2>
    <div id="header-links">
    <p> <a href="#">Contact</a> | <a href="practice5LoginAdmin.php">Admin</a> </p>
    </div>
  </div>
  <div  id="menu">
    <ul>
      <li ><a href="index.php">Home</a></li>
      <li><a href="practice5ViewPets.php">Catalogue of pets</a></li>
      <li id="current" class="last"><a href="practice5LogIn.php">Log in</a></li>
      <li class="last"><a href="practice5SignUp.php">Sign up</a></li>
    </ul>
  </div>
  <div id="content-wrap">
    
    <div id="main"> <a name="TemplateInfo"></a>
 
      <h3>Ingresar al sistema</h3>

      <form action = "mainAdmin.php" method = "POST">
      Type your name:
        <input type = "text" name = "name" required>
        <br><br>
        Type your password:
        <input type = "password" name = "password" required>
        <br><br>
        <input type = "submit" name = "send" value = "Accept">
        
        
    </form>
      <br />
    </div>
  </div>
  <div id="footer">
    <p> &copy; 2006 <strong>Your Company</strong> | Design by: <a href="http://www.styleshout.com/">styleshout</a> | Valid <a href="http://validator.w3.org/check?uri=referer">XHTML</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="#">Home</a>&nbsp;|&nbsp; <a href="#">Sitemap</a>&nbsp;|&nbsp; <a href="salir.php">Salir</a> </p>
  </div>
</div>
</body>
</html>
