<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "datos_principales";
$conn = mysqli_connect($host, $username, $password, $database);


if (!$conn) {
    die("Error al conectarse a la base de datos: " . mysqli_connect_error());
}

$numb = $_POST['numb'];
$email = $_POST['email_au'];


$sql = "INSERT INTO dprincipales (email, numb) VALUES ('$email','$numb')";

if (mysqli_query($conn, $sql)) {
    header("Location: confirmacion.php");
} else {
    echo "Error al guardar los datos: " . mysqli_error($conn);
}


mysqli_close($conn);

?>