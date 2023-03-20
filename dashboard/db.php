<?php
	Class Conexion{
		public function get_conexion()
		{
			$servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "datos_principales"; 

   
			$conexion=new PDO("mysql:host=$servername;dbname=$dbname;charset=UTF8",$username,$password);
			return $conexion;
		}
		public function get_desconexion()
		{
			$conexion=null;
			return $conexion;
		}
	}
?>