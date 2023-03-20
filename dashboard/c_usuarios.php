<?php
// Incluye el archivo de conexión a la base de datos
require '../conexion/db.php';

// Inicia la sesión
session_start();

// Verifica si el usuario ya está conectado
if (isset($_SESSION['usuario'])) {
    header("Location: admin.php");
    exit;
}

// Verifica si se envió el formulario
if (isset($_POST['email']) && isset($_POST['password'])) {
    // Obtiene los valores del formulario
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Verifica si el usuario existe en la base de datos
    $query = "SELECT * FROM datos_principales.users WHERE email = :email";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($resultado) {
        // Obtiene los datos del usuario
        $email = $resultado['email'];
        $hash = $resultado['password'];

        // Verifica si la contraseña es correcta
        if (password_verify($password, $hash)) {
            // Guarda el usuario en la sesión y redirige al usuario a la página principal
            $_SESSION['usuario'] = $email;
            header("Location: admin.php");
            exit;
        } else {
            // La contraseña es incorrecta
            $error = "Contraseña incorrecta";
        }
    } else {
        // El usuario no existe
        $error = "Usuario no encontrado";
    }
}
?>