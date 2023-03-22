<?php

session_start();
// Ya tengo creados mis métodos que validan 
//la sesion

//Con esto se destruye la sesión
session_destroy();

header("Location: index.php");
//Le añadimos el exit, que se asegura de salir
exit();


?>