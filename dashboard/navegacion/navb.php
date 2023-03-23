<?php
session_start();
if(!isset($_SESSION["user_id"])){
	$mensaje = "Sessión no iniciada";
	header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Administracion</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="navegacion/register.php">Crear Nuevo Usuario</a>
                </li>
                <li class="nav-item" >
                <a class="nav-link active" aria-current="page" href="../dashboard/log_out.php">Cerrar sesión</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
</body>
</html>

