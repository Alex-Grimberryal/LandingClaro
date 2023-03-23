<?php

require '../dashboard/db.php';

try {
    $email = $_POST['email'];
    $numb = $_POST['numb'];


    $stmt = $con->prepare("INSERT INTO dprincipales (email, numb) VALUES (:email, :numb)");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':numb', $numb);
    $stmt->execute();

   
    header("Location: confirmacion.php");
    exit();
} catch(PDOException $e) {
    
    echo "Error: " . $e->getMessage();
}
?>