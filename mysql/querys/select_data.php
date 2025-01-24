<?php

require_once ("../config.php");

//Consultar los datos
$sql = "SELECT id, nombre, edad, email FROM usuarios"; //Consulta
$result = $conn->query($sql); //Ejecuta la consulta

if ($result->num_rows > 0) { //Si el resultado de la consulta es mayor a 0 filas.
    //Mostrar los datos
    while($row = $result->fetch_assoc()) { //Devuelve una fila de resultados de la consulta en forma de array asociativo --> OJO: 'while' recorre cada fila.
        echo "ID: " . $row["id"]. " - Nombre: " . $row["nombre"]. " - Edad: " . $row["edad"]. " - Email: " . $row["email"]. "<br>";
    }

} else {
    echo "0 resultados";
}

// Cerrar la conexión
$conn->close();

?>