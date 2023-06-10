<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <style>
        /* Estilos CSS */

        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 0;
            margin: 0;
        }

        .header {
            background-color: #333;
            padding: 10px;
            text-align: center;
        }

        .header a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            margin-right: 10px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 6px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* Resto de estilos */

        h1 {
            color: #333;
            font-size: 36px;
            margin-bottom: 20px;
            text-align: center;
        }

        p {
            color: #666;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input[type="text"],
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
            transition: border-color 0.3s;
        }

        .form-group input[type="text"]:focus,
        .form-group textarea:focus {
            border-color: #4CAF50;
            outline: none;
        }

        .form-group textarea {
            height: 120px;
        }

        .btn {
            display: inline-block;
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="header">
        <a href="index.html">Inicio</a>
        <a href="servicios.php">Servicios</a>
        <a href="sobre_nosotros.html">Sobre Nosotros</a>
    </div>

    <div class="container">
        <h1>Contacto</h1>

        <p>Si tienes alguna recomendacion o consulta, por favor, completa el siguiente formulario:</p>

        <form action="guardar_recomendacion.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="recomendacion">Recomendacion:</label>
                <textarea id="recomendacion" name="recomendacion" required></textarea>
            </div>

            <button type="submit" class="btn">Enviar</button>
        </form>
    </div>
</body>
</html>
