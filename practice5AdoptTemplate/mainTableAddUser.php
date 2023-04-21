

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <h2>Add a new User!</h2>
    <link rel="stylesheet" href="css/styles.css">
    <form action = "mainTableAddUser.php" method = "POST">
        Type your name:
        <input type = "text" name = "name" required>
        <br><br>Type your password:
        <input type = "text" name = "password" required>
        <br><br>
        <input type = "submit" name = "send" value = "Accept">
        
    </form>
    <?php
        include "class/sql.php";
        
        include "class/users.php";

        if(isset($_POST["name"])){
            $name = isset($_POST["name"])? $_POST["name"]: "";
        
            echo "<strong>Información ingresada a la BD</strong><br><br>";
            echo"Nombre: ".($name)."<br>";
            echo "<br>";
        
            $users = new users();
            $num = 0;
            $users->addUser(null, $name,$password, $num );
 
            echo "<br>";
            echo "La información se cargó correctamente a la BD";
            echo "<br>";
        }
       
    ?>
     <input type="button" onclick="window.location.href='mainTable.php';" value="Back to the Main Page" />
</head>
<body>
    
</body>
</html>