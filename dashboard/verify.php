<?php
	session_start();
	$_SESSION["user"]=null;
	$_SESSION["pass"]=null;
	require_once("model_registro.php");
	$usuing=$_POST["email"];
	$claing=$_POST["password"];
	$consultas=new Registro_datos();
	$filas=$consultas->buscar_usuario($usuing);
	foreach ($filas as $fila) 
	{
		$usuenc=$fila["usuario"];
		$claenc=$fila["password"];
	}
	if(($usuing==$usuenc) && ($claing==$claenc))
//   if(($usuing==$usuenc) && ($claing == md5($claeno)))
	{
		$_SESSION["user"]=$usuenc;
		$_SESSION["pass"]=$claenc;

		header("location: admin.php");
	}
	else
	{
		$mensaje="Usuario o Clave Incorrectos...";
		header("location: login.php?mens=$mensaje");
	}
?>