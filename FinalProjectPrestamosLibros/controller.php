<?php
include "class/sql.php";
include "class/usersClass.php";
  session_start();
  if(isset($_POST['name']) && isset($_POST['password'])){
    $name = isset($_POST["name"])? $_POST["name"]: "";
    $password = isset($_POST["password"])? $_POST["password"]: "";
    $user = 2;
    $_SESSION['name'] = $name;
    $_SESSION['password'] = $password;
    $_SESSION['user'] = $user;
    echo $name;
    echo "<br>";
    echo $password;
    echo "<br>";
    echo $user;
    echo "<br>";
  

    echo "Applying the class <br>";
    $users = new users();
    echo "<br>";
    $nameOriginal = strtolower($users->getUserName($name));
    $passwordOriginal = $users->getUserPassword($name);
    echo  "Name Original = $nameOriginal<br>";
    echo  "password Original = $passwordOriginal<br>";
  
    echo"Usuario by web: ".($name)."<br>";
    echo "password by web: ".($password)."<br>";
    
  
    
    //echo "<br>";
   if( $nameOriginal == $name && $passwordOriginal == $password){
      header("Location: user/indexUser.php");
      /*
      echo "$nameOriginal";
      echo "$name";
      echo "si";
      */
    }
    else{
      header("Location: index.php");
      /*
      echo "<br>$nameOriginal<br>";
      echo "<br>$name<br>";
      echo "<br>$passwordOriginal<br>";
      echo "<br>$password<br>";
      echo "<br>";
      echo "no";
      */
    }
       // header("Location: indexUser.php");
    
    
  } else {
    //echo "No hay sesi'on";
    header("Location: index.php");
  }

  
  
  ?>