<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "datos_principales";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La conexión ha fallado: " . $conn->connect_error);
}

$usuario = $_POST['textName'];
$email = $_POST['email'];
$password = password_hash($_POST['inputPassword6'], PASSWORD_DEFAULT);

$sql = "INSERT INTO users (usuario, email, password)
VALUES ('$usuario', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    header("Location: ../navegacion/reg_ex.php ");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>