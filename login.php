<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "abc123";
$dbname = "dataforce";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Obtener los datos enviados por el formulario
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Consulta para verificar las credenciales de administrador
$sql = "SELECT * FROM admins WHERE usuario = '$usuario' AND contrasena = '$contrasena'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Credenciales válidas, redirigir a la página de administrador
    header("Location: admin.php");
} else {
    // Credenciales inválidas, redirigir de nuevo a la página de inicio de sesión
    header("Location: index.html");
}

$conn->close();
?>
