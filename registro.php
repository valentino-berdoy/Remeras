<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include('conexion.php');

    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];

 // Consulta SQL para verificar si el usuario ya está registrado
 $consulta_existencia = $conexion->query("SELECT * FROM usuarios WHERE usuario = '$usuario'");

 // Verificar si se encontraron resultados (si ya existe el usuario o el correo electrónico)
 if ($consulta_existencia->num_rows > 0) {
     $mensaje = true;
 } else {
    $sql = $conexion ->query("INSERT INTO usuarios (usuario, email, contrasena) VALUES ('$usuario', '$email', '$contrasena')");
    header("Location: ./index.php");
 }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <link href="stylephp.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Inicio de Sesión</title>
</head>
<body>
    
    <form method="post">
        <div class="formulario">
            <h2>Registrate</h2>
            <?php if(isset($mensaje)){ ?>
                <div class="modal-error">
                    <p>Error: Ya hay una cuenta creada a este usuario</p>
                </div>
            <?php } ?>
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" required>  

            <label for="email">Email:</label>
            <input type="email" name="email" required>  

            <label for="contrasena">Contraseña:</label>
            <input type="password" name="contrasena" required>

            <input type="submit" value="Registrarse">

            <a href="index.php">Ya tengo una cuenta</a>
        </div>
    </form>
</body>
</html>