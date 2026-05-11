<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fittech360";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect and sanitize form data
$nomyape = mysqli_real_escape_string($conn, $_POST['nomyape']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$direccion = mysqli_real_escape_string($conn, $_POST['direccion']);

// Insert data into database
$sql = "INSERT INTO t_asistencia (nomyape, email, direccion) 
        VALUES ('$nomyape', '$email', '$direccion')";
if ($conn->query($sql) === TRUE) {
    echo "Articulo comprado.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>