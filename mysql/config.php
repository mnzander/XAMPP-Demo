<?php 
// Config de la conexión

$server = "localhost";
$user = "root";
$password = "";
$database = "prueba";

// Crear la conexión

$conn = new mysqli($server, $user, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

echo "<script>console.log('Conexión realizada a la base de datos')</script> "

?>