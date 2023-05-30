<?php session_start(); 


$usuario=$_REQUEST['usuario']; 
$password=$_REQUEST['password'];

$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"videoteca");

$resultado = mysqli_query($link,"select password,usuario,tipo from usuarios where usuario=$usuario");

   if($row = mysqli_fetch_array($resultado)){
        if($row["password"] == $password){
            $_SESSION["k_username"] = $row['usuario'];           
			$ti=$row['tipo'];
			if($ti==0){
				header("Location: indexADM.php");
           }else{
			   	header("Location: indexUsuario.php");
		   }
		}   
        else {
            	print("Password incorrecto");
		     	echo '<a href="index.php"> Regresar</a></p>';
         } 
      }
   else {
         print("Login incorrecto");
	 	echo '<a href="index.php"> Regresar</a></p>';
   }

?> 