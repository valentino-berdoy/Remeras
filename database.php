<?php
// Conexión a la base de datos
$c = mysqli_connect("localhost", "root", "", "mybase");

// Verificar la conexión
if (mysqli_connect_errno()) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Realizar la consulta
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];

// Consulta SQL para insertar datos en la base de datos (ajusta la tabla y las columnas según tu estructura)
$sql = "INSERT INTO usuarios (usuario, email, contrasena) VALUES ('$usuario', '$email', '$contrasena')";


// Verificar si la consulta fue exitosa
if (!$result) {
    die("Error en la consulta: " . mysqli_error($c));
}

// Mostrar los resultados por consola
while ($row = mysqli_fetch_assoc($result)) {
    print_r($row); // Imprimir cada fila como un array asociativo
}

?>
