<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $matricula = $_POST["a"];
    $contraseña = $_POST["b"];
    $correo = $_POST["c"];


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


echo "matricula: " . $matricula . "<br>";
echo "Email: " . $correo . "<br>";
echo "contraseña: " . $contraseña;


// Consulta SQL para insertar datos en la tabla
$sql = "INSERT INTO registros VALUES ('$matricula', '$contraseña', '$correo')";

if ($conn->query($sql) === TRUE) {
    echo "Los datos se insertaron correctamente.";
} else {
    echo "Error al insertar datos: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();


}
?>
























