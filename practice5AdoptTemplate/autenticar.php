<?php
//Incluimos las clases para trabajo con DB
include "class/sql.php";
include "class/usuario.php";
#Paso #1 CREAR LA SESIÓN
session_start();
//Originalmente era:
//$id = isset($_POST["correo"]) ? $_POST["correo"]:"";
$id = isset($_POST["usuario"]) ? $_POST["usuario"]:"";
$pass = isset($_POST["password"]) ?  $_POST["password"]:"";
//Con este método voy a crear la sesión
$usuario = new usuario();
//Uso un objeto 
//Traigo lo que tenga ID y PASSWORD
$obj = $usuario->validaUsuario($id,$pass);

 
//echo $id;
//echo "<br>" .$pass;
//Mi comparación original era:
//if($id == "root" && $pass == "toor"){
//Aquí se define el inicio de sesión
if($id == $obj->auxUser && $pass == $obj->auxPass){
    #Paso #2 indicar la sesión
    $_SESSION["misession"] = $id;
    $_SESSION["name"] = $obj->name;
    $_SESSION["usuario"] = $obj->usuario;
    //ORIGINALMENTE EL HEADER ERA:
    //header("location: app.php");
    //AQUÍ LA MANDARIAMOS A INDEX
    header("location: index.php");
    //echo $id;
    //echo "<br>" .$pass;
}
else{
    header("Location: login.php");
}
?>