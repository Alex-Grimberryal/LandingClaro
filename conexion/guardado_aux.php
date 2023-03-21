<?php

require 'dashboard/db.php';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $email = $_POST['email'];
    $numb = $_POST['numb'];


    $stmt = $conn->prepare("INSERT INTO dprincipales (email, numb) VALUES (:email, :numb)");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':numb', $numb);
    $stmt->execute();

   
    header("Location: confirmacion.php");
    exit();
} catch(PDOException $e) {
    
    echo "Error: " . $e->getMessage();
}
?>