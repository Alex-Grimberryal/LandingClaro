<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "datos_principales";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    $email = $_POST['email'];
    $lstOp = $_POST['lstOp'];
    $texto = $_POST['texto'];


    $stmt = $conn->prepare("INSERT INTO dprincipales (email, lstOp, texto) VALUES (:email, :lstOp, :texto)");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':lstOp', $lstOp);
    $stmt->bindParam(':texto', $texto);
    $stmt->execute();

   
    header("Location: confirmacion.php");
    exit();
} catch(PDOException $e) {
    
    echo "Error: " . $e->getMessage();
}
?>