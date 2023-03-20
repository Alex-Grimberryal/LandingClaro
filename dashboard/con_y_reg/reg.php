<?php
//Establecer la conexión con la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "datos_principales";

$conn = new mysqli($servername, $username, $password, $dbname);

//Comprobar si la conexión se ha establecido correctamente
if ($conn->connect_error) {
    die("La conexión ha fallado: " . $conn->connect_error);
}

//Recuperar los datos del formulario
$usuario = $_POST['textName'];
$email = $_POST['email'];
$password = password_hash($_POST['inputPassword6'], PASSWORD_DEFAULT);

//Insertar los datos en la tabla "users"
$sql = "INSERT INTO users (usuario, email, password)
VALUES ('$usuario', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    header("Location: ../navegacion/reg_ex.php ");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>