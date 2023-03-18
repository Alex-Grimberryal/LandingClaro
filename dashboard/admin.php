<!DOCTYPE html>
<html>
<head>
	<title>Ventana de visualizacion</title>
	<meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="img/database-icon-B.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
		<h2>Bienvenido Administrador</h2>
		<p>Registro de datos acumulado</p>            
		<table class="table">
			<thead>
				<tr>
					<th>Id</th>
					<th>Número</th>
					<th>E-mail</th>
					<th>Opción Seleccionada</th>
					<th>Indicaciones extras</th>
				</tr>
			</thead>
			<tbody>
				<?php require '../dashboard/visualizacion.php'; ?>
			</tbody>
		</table>
	</div>
</body>
</html>
