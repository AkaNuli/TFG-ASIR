<!DOCTYPE html>
<html>
<head>
    <title>Recomendaciones - DataForce</title>
    <style>
        /* Estilos generales */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        
        h1, h2, p {
            color: #333;
        }
        
        header {
            background-color: #333;
            padding: 20px;
            color: #fff;
            text-align: center;
        }
        
        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 5px;
        }
        
        section {
            margin-bottom: 20px;
        }
        
        /* Estilos específicos */
        h1 {
            font-size: 36px;
            margin: 0;
        }
        
        h2 {
            font-size: 24px;
            margin: 0 0 10px;
        }
        
        p {
            margin: 0 0 10px;
        }
        
        .recomendacion {
            background-color: #f9f9f9;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        
        .recomendacion p {
            margin: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Recomendaciones - DataForce</h1>
    </header>
    
    <main>
        <section>
            <h2>Todas las Recomendaciones</h2>
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

            // Obtener todas las recomendaciones de la tabla
            $sql = "SELECT * FROM recomendaciones";
            $result = $conn->query($sql);

            // Mostrar las recomendaciones
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="recomendacion">';
                    echo '<p><strong>Nombre:</strong> ' . $row["nombre"] . '</p>';
                    echo '<p><strong>Correo:</strong> ' . $row["email"] . '</p>';
                    echo '<p><strong>Recomendación:</strong> ' . $row["recomendacion"] . '</p>';
                    echo '</div>';
                }
            } else {
                echo "No hay recomendaciones para mostrar.";
            }

            // Cerrar la conexion
            $conn->close();
            ?>
        </section>
    </main>
</body>
</html>
