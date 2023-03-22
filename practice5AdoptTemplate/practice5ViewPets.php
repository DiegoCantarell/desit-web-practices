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
    <h1 id="logo-text">See all the Pets info and their status!</h1>
    <h2 id="slogan">Adopt a pet can change your life and a pet life...</h2>
    <div id="header-links">
      <p> <a href="#">Home</a> | <a href="#">Contact</a> | <a href="#">Site Map</a> </p>
    </div>
  </div>
  <div  id="menu">
    <ul>
      <li id="current"><a href="index.php">Home</a></li>
      <li><a href="practice5ViewPets.php">Catalogue of pets</a></li>
      <li class="last"><a href="practice5LogIn.php">Log in</a></li>
      <li class="last"><a href="practice5SignUp.php">Sign up</a></li>
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
        <h1>View all the pets info</h1>
    <?php
    include "class/sql.php";
    include "class/pets.php";
    $pets = new pets();
    //$partidos = new partidos();
    $pets->getAllPets();
    ?>
        
    </div>
  </div>
  <div id="footer">
    <p> &copy; 2006 <strong>Your Company</strong> | Design by: <a href="http://www.styleshout.com/">styleshout</a> | Valid <a href="http://validator.w3.org/check?uri=referer">XHTML</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="#">Home</a>&nbsp;|&nbsp; <a href="#">Sitemap</a>&nbsp;|&nbsp; <a href="#">RSS Feed</a> </p>
  </div>
</div>
</body>
</html>












