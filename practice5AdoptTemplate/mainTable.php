<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<?php
  include "class/sql.php";
  include "class/users.php";
  
  $users = new users();
  $users->showUsers();
  if (isset($_POST['send'])){
    $id_user = $_REQUEST['id_user'];
    $name = $_REQUEST['name'];
    $password = $_REQUEST['password'];

    
    //if(isset($_POST["name"])){
    echo "The following data is by the form";
    echo "<br><br>";
    echo "User ID: $id_user <br>";
    echo "<br><br>";
    echo "Nombre actualizado: $name <br>";
    echo "<br><br>";
    echo "Password actualizada: $password <br>";
  }
?>
</body>
</html>