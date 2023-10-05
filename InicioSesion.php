<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $contraseña = $_POST["pass"];



    // Conexión a la base de datos (reemplaza con tus propias credenciales)
    $servername = "localhost";
    $username = "brandon";
    $password = "12345";
    $database = "prueba";

    $conn = new mysqli($servername, $username, $password, $database);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("La conexión a la base de datos falló: " . $conn->connect_error);
    }

    // Consulta SQL para verificar el usuario y la contraseña
    $sql = "SELECT * FROM registros WHERE matricula = '$nombre' AND pass = '$contraseña'";
    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        // Usuario y contraseña coinciden en la base de datos
        echo "Inicio de sesión exitoso. Bienvenido, $nombre!";
    } else {
        // Usuario o contraseña incorrectos
        echo "Inicio de sesión fallido. Verifica tus credenciales.";
    }

    // Cerrar la conexión a la base de datos
    $conn->close();


}
?>
