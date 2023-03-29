<?php
include "class/sql.php";
include "class/users.php";
  session_start();
  if(isset($_POST['name']) && isset($_POST['password'])){
    $name = isset($_POST["name"])? $_POST["name"]: "";
    $password = isset($_POST["password"])? $_POST["password"]: "";
    $user = 2;
    $_SESSION['name'] = $name;
    $_SESSION['password'] = $password;
    $_SESSION['user'] = $user;

    $users = new users();
         
    $nameOriginal = strtolower($users->getUserName($name));
    $passwordOriginal = $users->getUserPassword($name);
    echo  "Name = $nameOriginal<br>";
    echo  "pass = $passwordOriginal<br>";
  
    echo"Usuario: ".($name)."<br>";
    echo $password;
    
    //echo "<br>";
   if( $nameOriginal == $name && $passwordOriginal == $password){
      header("Location: indexUser.php");
      //echo "si";
    }
    else{
      header("Location: index.php");
      //echo "no";
    }
       // header("Location: indexUser.php");
    
    
  } else {
    //echo "No hay sesi'on";
    header("Location: index.php");
  }
  ?>