CREATE DATABASE IF NOT EXISTS dataforce;
USE dataforce;

CREATE TABLE IF NOT EXISTS clientes (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    direccion TEXT NOT NULL
);

CREATE TABLE if not exists recomendaciones (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    recomendacion TEXT NOT NULL
);

CREATE TABLE admins (
    usuario VARCHAR(50) NOT NULL,
    contrasena VARCHAR(50) NOT NULL
);