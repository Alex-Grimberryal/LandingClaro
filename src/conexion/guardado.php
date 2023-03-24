<?php

require "../controller/db.php";	


try {      
    $email = $_POST['email'];
    $lstOp = $_POST['lstOp'];
    $dni = $_POST['dni'];
    $numb = $_POST['numb'];


    $stmt = $con->prepare("INSERT INTO dprincipales (email, lstOp, dni, numb) VALUES (:email, :lstOp, :dni, :numb)");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':lstOp', $lstOp);
    $stmt->bindParam(':dni', $dni);
    $stmt->bindParam(':numb', $numb);
    $stmt->execute();

   
    header("Location: confirmacion.php");
    exit();
} catch(PDOException $e) {
    
    echo "Error: " . $e->getMessage();
}
?>