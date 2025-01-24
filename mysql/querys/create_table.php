<?php

require_once ("../config.php");

// Crear la tabla

$sql = "CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    edad INT NOT NULL,
    email VARCHAR(100) NOT NULL
)"; //Consulta

// Ejecuta la consulta con: $conn->query(sql). Esto devuelve un boolean en base a su resultado

if ($conn->query($sql) === TRUE) { 
    echo "Tabla 'usuarios' creada o ya existe";
} else {
    echo "Error creando la tabla: " . $conn->error;
}

// Cerrar la conexión
$conn->close();

?>