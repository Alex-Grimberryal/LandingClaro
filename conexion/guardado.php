<?php

require '../dashboard/db.php';

try {      
    $email = $_POST['email'];
    $lstOp = $_POST['lstOp'];
    $texto = $_POST['texto'];
    $numb = $_POST['numb'];


    $stmt = $con->prepare("INSERT INTO dprincipales (email, lstOp, texto, numb) VALUES (:email, :lstOp, :texto, :numb)");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':lstOp', $lstOp);
    $stmt->bindParam(':texto', $texto);
    $stmt->bindParam(':numb', $numb);
    $stmt->execute();

   
    header("Location: confirmacion.php");
    exit();
} catch(PDOException $e) {
    
    echo "Error: " . $e->getMessage();
}
?>