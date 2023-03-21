<?php
	session_start();
	session_destroy();
	$mensaje="Ha Cerrado Sesión Satisfactoriamente...";
	header("location: ../index.php");
?>