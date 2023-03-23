<?php

require "../../../controller/db.php";	


$usuario = $_POST['textName'];
$email = $_POST['email'];
$password = password_hash($_POST['inputPassword6'], PASSWORD_DEFAULT);

$sql = "INSERT INTO users (usuario, email, password) VALUES (:usuario, :email, :password)";
$stmt = $con->prepare($sql);
$stmt->bindParam(':usuario', $usuario);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password);
$stmt->execute();
header("Location: ../../template/navegacion/reg_ex.php ");


// try {
// } catch(PDOException $e) {
//     echo "Error: " . $e->getMessage();
// }

// $con = null;
?>