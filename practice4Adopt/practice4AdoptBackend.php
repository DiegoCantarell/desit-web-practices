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
        //$name = isset($_POST['name'])? $_POST['name']: "";
        //$pet_name = isset($_POST['pet_name'])? $_POST['pet_name']: "";

        $user_id = $_REQUEST['user_id'];
        $pet_id = $_REQUEST['pets'];
        echo "User ID: $user_id <br>";
        echo "Pet ID : $pet_id <br>";
    ?>
     <input type="button" onclick="window.location.href='practice4MainPage.php';" value="Back to the Main Page" />
</body>
</html>