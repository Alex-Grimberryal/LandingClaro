<?php
	session_start();
	$_SESSION["emai"]=null;
	$_SESSION["passwor"]=null;
	require_once("model_registro.php");
	$usuing=$_POST["email"];
	$claing=$_POST["password"];
	$consultas=new Registro_datos();
	$filas=$consultas->buscar_usuario($usuing);
	foreach ($filas as $fila) 
	{
		$usuenc=$fila["email"];
		
		$claenc=$fila["password"];
	}
	if(($usuing==$usuenc) && (password_verify($claing,$claenc)))
	{
		$_SESSION["emai"]=$usuenc;
		$_SESSION["passwor"]=$claenc;

		// header("location: admin.php");
	}
	else
	{
		$mensaje="Usuario o Clave Incorrectos...";
		header("location: login.php?mens=$mensaje");
	}
?>