<?php

require_once ("../config.php");

// Insertar datos

$sql = "INSERT INTO usuarios (nombre, edad, email) VALUES ('Persona 4', 28, 'p4@example.com')"; //Consulta

if ($conn->query($sql) === TRUE) {
    echo "Nuevo registro insertado correctamente";
} else {
    echo "Error al insertar el registro: " . $conn->error;
}

// Cerrar la conexión
$conn->close();

?>