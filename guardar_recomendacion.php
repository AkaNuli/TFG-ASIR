<?php
$servername = "localhost";
$username = "root";
$password = "abc123";
$dbname = "dataforce";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $recomendacion = $_POST["recomendacion"];

    $sql = "INSERT INTO recomendaciones (nombre, email, recomendacion) VALUES ('$nombre', '$email', '$recomendacion')";

    if ($conn->query($sql) === TRUE) {
        echo '<h1>¡Gracias por tu recomendación!</h1>';
        echo '<p>Tu recomendación ha sido enviada correctamente.</p>';
        echo '<p><a href="index.html">Volver al inicio</a></p>';
    } else {
        echo "Error al guardar la recomendacion: " . $conn->error;
    }
}

$conn->close();
?>
