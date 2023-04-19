
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
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <title>Adoptions info</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Page to delete a pet</h1>
    <?php
    include "class/sql.php";
    include "class/pets.php";
    include "class/users.php";
    
    echo "<form action='practice5DeletePet.php'>";
    $users = new users();
    $pets = new pets();
    $pets->getAllPetNamesNoRestriction();
    
    echo "<br>";
    echo "<input type='submit' value='Submit'>";
    echo "</form>";

    $id_pet = $_REQUEST['pets'];
    //if(isset($_POST["name"])){
    echo "The following data is by the form";
    echo "<br><br>";
    echo "User ID: $id_pet <br>";
    

    $pets-> deletePet( $id_pet);

    ?>
    <input type="button" onclick="window.location.href='indexAdmin.php';" value="Back to the Main Page" />
</body>
</html>