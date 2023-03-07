<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <title>Adoptions info</title>
</head>
<body>
    <h1>Page to see what pets have been adopted by a user</h1>
    <?php
    include "class/sql.php";
    include "class/pets.php";
    include "class/users.php";
    
    echo "<form action='practice4AdoptionsInfo.php'>";
    $users = new users();
    $pets = new pets();
    $users->getAllUserNamesNoRestriction();
    
    echo "<br>";
    echo "<input type='submit' value='Submit'>";
    echo "</form>";

    $id_user = $_REQUEST['users'];
    //if(isset($_POST["name"])){
    echo "The following data is by the form";
    echo "<br><br>";
    echo "User ID: $id_user <br>";
    
    $users->getAllUserInfobyId($id_user);
    echo "<br><br>";
    echo "<p>The pets associated with this user are: </p>";
    echo "<br><br>";
    $pets->getAllPetAdoptionbyUserId($id_user);
    //}

    ?>
    <input type="button" onclick="window.location.href='practice4MainPage.php';" value="Back to the Main Page" />
</body>
</html>