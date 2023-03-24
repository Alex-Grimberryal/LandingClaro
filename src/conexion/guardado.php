<?php

require "../controller/db.php";	

    $dni = $_POST['dni'];
    $url = "https://dniruc.apisperu.com/api/v1/dni/$dni";
    $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6Inpha3Jlc3QxMzVAZ21haWwuY29tIn0.1tJfo4igS1km8gj05FJjlXuLBAtRw9lkCzUaCyYYIM4";
    
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => $url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer ".$token
      )
    ));
    
    $response = curl_exec($curl);
    
    if($response === false){
      echo 'Curl error: ' . curl_error($curl);
    }
    else {
      $data = json_decode($response, true);
      var_dump($data);
    }
    
    curl_close($curl);

try {      
    $dni = $_POST['dni'];
    $email = $_POST['email'];
    $lstOp = $_POST['lstOp'];
    $numb = $_POST['numb'];

    $apellido = $data["apellidoPaterno"]. " ". $data["apellidoMaterno"];
    $nombre = $data["nombres"];

    echo $apellido;
    echo $nombre;


    $stmt = $con->prepare("INSERT INTO dprincipales (email, lstOp, dni, numb, apellido, nombre) VALUES (:email, :lstOp, :dni, :numb, :apellido, :nombre)");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':lstOp', $lstOp);
    $stmt->bindParam(':dni', $dni);
    $stmt->bindParam(':numb', $numb);
    $stmt->bindParam(':apellido', $apellido);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->execute();

   
    header("Location: confirmacion.php");
    exit();
} catch(PDOException $e) {
    
    echo "Error: " . $e->getMessage();
}
?>