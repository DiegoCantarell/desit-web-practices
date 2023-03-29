<?php
  session_start();
  if(isset($_POST['name']) && isset($_POST['password'])){
    $name = isset($_POST["name"])? $_POST["name"]: "";
    $password = isset($_POST["password"])? $_POST["password"]: "";
    $_SESSION['name'] = $name;
    $_SESSION['password'] = $password;
  
    //echo"Usuario: ".($name1)."<br>";
    //echo $password1;
    
    //echo "<br>";
    header("Location: indexAdmin.php");

    
  } else {
    //echo "No hay sesi'on";
    header("Location: index.php");
  }
  ?>