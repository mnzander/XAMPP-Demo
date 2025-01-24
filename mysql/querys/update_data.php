<?php

// Añadir config de la conexión
require_once ("../config.php");

// ID del usuario que queremos actualizar
$id_user = 3;
$new_name = "Persona 3";
$new_email = "p3@example.com";

// Consulta
$sql = "UPDATE usuarios SET nombre = '$new_name', email = '$new_email' WHERE id = $id_user";

// Ejecutar consulta
if ($conn->query($sql) === TRUE) {
    echo "Información actualizada correctamente";
} else {
    echo "Error al actualizar la información: " . $conn->error;
}

// Cerrar conexión
$conn->close();

?>