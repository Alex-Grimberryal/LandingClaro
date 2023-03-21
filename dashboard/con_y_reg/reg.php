<?php

require 'dashboard/db.php';

$usuario = $_POST['textName'];
$email = $_POST['email'];
$password = password_hash($_POST['inputPassword6'], PASSWORD_DEFAULT);



try {
    $sql = "INSERT INTO users (usuario, email, password) VALUES (:usuario, :email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':usuario', $usuario);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
        header("Location: ../navegacion/reg_ex.php ");
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>