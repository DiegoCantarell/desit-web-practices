<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Info about the adoption</h1>
    <?php
        include "class/sql.php";
        include "class/pets.php";
        include "class/users.php";
        include "class/usersAndPets.php";
        //$name = isset($_POST['name'])? $_POST['name']: "";
        //$pet_name = isset($_POST['pet_name'])? $_POST['pet_name']: "";
        

        $id_user = $_REQUEST['users'];
        $id_pet = $_REQUEST['pets'];
        echo "The following data is by the form";
        echo "<br><br>";
        echo "User ID: $id_user <br>";
        echo "Pet ID : $id_pet <br>";
        echo "<br>";
        $users = new users();
        $usersAndPets = new usersAndPets();

        $users -> searchUserById($id_user);
        $oldNumber = $users -> getPetsNumber($id_user);
        $pets_number= $oldNumber + 1;
        echo "Now the number of pets of the user is: $pets_number";
        echo "<br>";
        $usersAndPets ->adoption($id_user,$id_pet,$pets_number);
        echo "<br>";
        echo "<br>";
        $pets = new pets();
        $pets -> searchPetById($id_pet);
        echo "<br>";

    ?>
    <p>Congratulations, you have adopted  a new pet</p>
    <input type="button" onclick="window.location.href='practice4MainPage.php';" value="Back to the Main Page" />
</body>
</html>