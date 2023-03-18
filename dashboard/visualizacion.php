<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "datos_principales";
					
$conn = new mysqli($servername, $username, $password, $dbname);
					
					if ($conn->connect_error) {
						die("Conexión fallida: " . $conn->connect_error);
					}
					
					
					$sql = "SELECT id, numb, email, lstOp, texto FROM dprincipales";
					$result = $conn->query($sql);
					
					
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
							echo "<tr>";
							echo "<td>" . $row["id"] . "</td>";
							echo "<td>" . $row["numb"] . "</td>";
							echo "<td>" . $row["email"] . "</td>";
							echo "<td>" . $row["lstOp"] . "</td>";
							echo "<td>" . $row["texto"] . "</td>";
							echo "</tr>";
						}
					} else {
						echo "<tr><td colspan='5'>No hay datos disponibles</td></tr>";
					}
					
					
					$conn->close();
				?>