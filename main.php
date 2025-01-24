<main>
    <?php 
    require_once("mysql/config.php"); //Añadir configuración de conexión a la BBDD

    $sql = "SELECT id, nombre, edad, email FROM usuarios"; //Consulta
    $result = $conn->query($sql); //Añadimos en una variable los resultados de la consulta

    if ($result->num_rows > 0) { //Si los resultados tienen mas de 0 filas
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Email</th>
                </tr>";

        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["nombre"] . "</td>
                    <td>" . $row["edad"] . "</td>
                    <td>" . $row["email"] . "</td>
                </tr>";
        }

        echo "</table>";
    } else {
        echo "No hay usuarios registrados";
    }

    $conn->close();
    ?>
</main>
