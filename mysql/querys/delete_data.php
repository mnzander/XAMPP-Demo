<?php

// Incluir config de la conexión
require_once ("../config.php");

// ID del usuario a eliminar
$id_user = 3;

//Consulta DELETE
$sql = "DELETE FROM usuarios WHERE id = $id_user";

//Ejecutar consulta
if ($conn->query($sql) === TRUE) {
    echo "Usuario eliminado correctamente";
} else {
    echo "No se pudo eliminar el usuario: " . $conn->error;
}

//Cerrar conexión
$conn->close();

?>