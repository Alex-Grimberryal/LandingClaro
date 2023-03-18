<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "datos_principales";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   
} catch(PDOException $e) {
    
    echo "Error: " . $e->getMessage();
}
?>