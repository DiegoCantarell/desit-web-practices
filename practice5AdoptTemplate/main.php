<?php
  session_start();
  if(isset($_POST["name"]) && isset($_POST["password"])){
    $name = isset($_POST["name"])? $_POST["name"]: "";
    $password = isset($_POST["password"])? $_POST["password"]: "";

  
    //echo"Usuario: ".($name)."<br>";
    
    //echo "<br>";
    header("Location: indexUser.php");

    
  } else {
    //echo "No hay sesi'on";
    header("Location: index.php");
  }
  ?>