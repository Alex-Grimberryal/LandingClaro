<?php
session_start();

require '../conexion/db.php';

// Establecer la conexión con la base de datos


if (empty($_POST['email']) || empty($_POST['usuario']) || empty($_POST['password'])) {
    $error = "" ;
    $consulta = "SELECT * FROM users where email = :email, usuario = :usuario, password = :password";
    
    $resultado = $conn->prepare($consulta);

    $resultado->bindParam(':email', $email);
    $resultado->bindParam(':usuario', $usuario);
    $resultado->bindParam(':password', $password);
    $rows = $resultado->execute();
    // header("Location: login.php");

    // $error = "No Hay";

    echo $rows;
}else {
    $error = "Si Hay";
    header("Location: admin.php");
}

// echo($rows);

// Verificar si el usuario ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $usuario = mysqli_real_escape_string($conexion, $_POST['usuario']);
    // $email = mysqli_real_escape_string($conexion, $_POST['email']);
    // $password = mysqli_real_escape_string($conexion, $_POST['password']);

    // Consulta SQL para verificar si el usuario y la contraseña son correctos

    // Verificar si se ha encontrado un usuario
    // if (mysqli_num_rows($resultado) == 1) {
    //     $row = mysqli_fetch_assoc($resultado);
    //     $_SESSION['id_usuario'] = $row['id_usuario'];
    //     $_SESSION['nombre'] = $row['nombre'];
    //     $_SESSION['email'] = $row['email'];
    //     header("Location: ../dashboard/admin.php");
    //     exit();
    // } else {
    //     $error = "El usuario o la contraseña son incorrectos.";
    // }
}

// mysqli_close($conexion);
?>