
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
    <h1>Page to delete a user</h1>
    <?php
    include "class/sql.php";
    include "class/users.php";
    

    $users = new users();
    $id_user = $_REQUEST['id_user'];
    //if(isset($_POST["name"])){
    echo "The following data is by the form";
    echo "<br><br>";
    echo "User ID: $id_user <br>";
    

    //$users-> deleteUser( $id_user);
    echo "The user have been deleted sucessfully";
    ?>
    <input type="button" onclick="window.location.href='mainTable.php';" value="Back to the table />
</body>
</html>