<?php
include "class/sql.php";
include "class/adminClass.php";
  session_start();
  if(isset($_POST['name']) && isset($_POST['password'])){
    $name = isset($_POST["name"])? $_POST["name"]: "";
    $password = isset($_POST["password"])? $_POST["password"]: "";
    $admin = 1;
    $_SESSION['name'] = $name;
    $_SESSION['password'] = $password;
    $_SESSION['admin'] = $admin;
  
    //echo"Usuario: ".($name1)."<br>";
    //echo $password1;
    
    //echo "<br>";
    $admin = new admin();
         
    $nameOriginal = strtolower($admin->getAdminName($name));
    $passwordOriginal = $admin->getAdminPassword($name);
    $name = strtolower($name);
    echo  "Name = $nameOriginal<br>";
    echo  "pass = $passwordOriginal<br>";
  
    echo"Usuario: ".($name)."<br>";
    echo $password;
    
    //echo "<br>";
   if( $nameOriginal == $name && $passwordOriginal == $password){
      header("Location: admin/indexAdmin.php");
      echo "si";
    }
    else{
      header("Location: index.php");
      echo "no";
    }
       // header("Location: indexUser.php");
    

    
  } else {
    //echo "No hay sesi'on";
    header("Location: index.php");
  }
  ?>