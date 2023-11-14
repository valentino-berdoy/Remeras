<?php
$server = "localhost";  // Cambia a la dirección de tu servidor de base de datos
$user = "root";   // Cambia a tu nombre de usuario de la base de datos
$pass = ""; // Cambia a tu contraseña de la base de datos
$db = "mybase";

$conexion = mysqli_connect($server, $user, $pass, $db);

if (!$conexion){
    die("Error de conexión: " . mysqli_connect_errno() . ":" . mysqli_connect_error());
}


?>
