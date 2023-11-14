<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include('conexion.php');

    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];

    // Consulta SQL para insertar datos en la base de datos (ajusta la tabla y las columnas según tu estructura)
    $sql = $conexion ->query("INSERT INTO usuarios (usuario, email, contrasena) VALUES ('$usuario', '$email', '$contrasena')");
    header("Location: ./index.php");

}
?>