<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "datos_principales"; 

		try {
			$con=new PDO("mysql:host=$servername;dbname=$dbname;",$username,$password);
		} catch (PDOException $e) {
			die('No sirves p'. $e->getMessage());
		}

?>