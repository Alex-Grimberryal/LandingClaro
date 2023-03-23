<?php

	require "db.php";	

	$sql = "SELECT id, numb, email, lstOp, texto FROM dprincipales";
	$results = $con->prepare($sql);

	$results->execute();

	$records = $results->fetchAll();

	foreach($records as $res)
      {
        echo "<tr>";
        echo "<td>".$res["id"]."</td>";
        echo "<td>".$res["numb"]."</td>";
        echo "<td>".$res["email"]."</td>";
        $no = $res["lstOp"];
		if ($no === 1) {
			echo "<td>Celulares</td>";;
		}elseif ($no === 2) {
			echo "<td>Internet</td>";
		}elseif ($no === 3) {
			echo "<td>Promociones</td>";
		}else{
			echo "<td>Portabilidad</td>";
		}
			
        echo "<td>".$res["texto"]."</td>";
        echo "</tr>";
      }   
?>