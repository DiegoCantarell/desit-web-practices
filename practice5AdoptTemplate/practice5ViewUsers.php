
<?php
session_start();

$name = $_SESSION['name'];
$password = $_SESSION['password'];
$admin = $_SESSION['admin'];
if ($admin == 1 ){
  echo "You are on indexAdmin";

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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View users</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>View all the users info</h1>
    <?php
    include "class/sql.php";
    include "class/users.php";
    $users = new users();
    //$partidos = new partidos();
    $users->getAllUsers();
    ?>
    <input type="button" onclick="window.location.href='indexAdmin.php';" value="Back to the Main Page" />
</body>
</html>