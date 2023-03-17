<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopt Page</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Welcome to the adoption section</h1>
    <p>The user only can adopt 2 pets</p>

    <p>The pets available are: </p>
    <?php
    include "class/sql.php";
    include "class/pets.php";
    include "class/users.php";
    echo "<form action='practice4AdoptBackend.php'>";
    $users = new users();
    $users->getAllUserNames();
    $pets = new pets();
    $pets->getAllPetNames();
    echo "<br>";
    echo "<input type='submit' value='Submit'>";
    echo "</form>";
    
    ?>
    <input type="button" onclick="window.location.href='practice4MainPage.php';" value="Back to the Main Page" />
</body>
</html>