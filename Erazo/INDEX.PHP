<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellidos = htmlspecialchars($_POST['apellidos']);
    $correo = htmlspecialchars($_POST['correo']);
    $edad = htmlspecialchars($_POST['edad']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $mensaje = htmlspecialchars($_POST['mensaje']);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "angel";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }
    $sql = "INSERT INTO contacto (nombre, apellidos, correo, edad, telefono, mensaje)
            VALUES ('$nombre', '$apellidos', '$correo', '$edad', '$telefono', '$mensaje')";

    if ($conn->query($sql) === TRUE) {
        echo "Enviado exitosamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
