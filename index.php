<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include('conexion.php');

    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Consulta SQL para insertar datos en la base de datos (ajusta la tabla y las columnas según tu estructura)
    $sql = $conexion ->query("select count(*) as usuarios from usuarios where usuario = '$usuario' and contrasena = '$contrasena';");

    if ($sql) {
        // Mostrar los resultados
        while ($usu = $sql->fetch_assoc()) {
            if ($usu['usuarios'] >= 1) {
                header("Location: ./index.html");
            }
            else{
                $mensaje = true;
                
            }
        }
    } else {
        echo "Error en la consulta: " . $conexion->error;
    }

}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <link href="styleindex.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
</head>
<body>
    
    <form method="post">
        <div class="formulario">
            <h2>Iniciar Sesion</h2>
            <?php if(isset($mensaje)){ ?>
                <div class="modal-error">
                    <p>Error: el usuario o contraseña incorrecta.</p>
                </div>
            <?php } ?>
            
            
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" required>    

            <label for="contrasena">Contraseña:</label>
            <input type="password" name="contrasena" required>

            <input type="submit" value="Iniciar Sesión">

            <a href="registro.php">Registro</a>
        </div>
    </form>
</body>
</html>