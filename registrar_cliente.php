<?php
// Establecer la conexión con la base de datos
$servername = "localhost";
$username = "root";
$password = "abc123";
$dbname = "dataforce";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

// Procesar el formulario cuando se envía
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $direccion = $_POST["direccion"];

    // Insertar los datos en la tabla "clientes"
    $sql = "INSERT INTO clientes (nombre, correo, telefono, direccion) VALUES ('$nombre', '$correo', '$telefono', '$direccion')";

if ($conn->query($sql) === TRUE) {
    // Redirigir a la página de agradecimiento y volver al inicio
    header("Location: gracias.html");
    exit();
} else {
    echo "Error al guardar los datos: " . $conn->error;
}


}

// Cerrar la conexión
$conn->close();
?>
