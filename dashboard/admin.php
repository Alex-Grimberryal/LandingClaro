<?php 
@session_start();
if(!isset($_SESSION["user"])){
	$mensaje = "Sessión no iniciada";
	header("location: login.php?mens=$mensaje");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ventana de visualizacion</title>
	<meta charset="utf-8">
    <!-- <link rel="icon" type="image/x-icon" href="img/database-icon-B.ico"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" /> 

</head>
<body>
	<?php require '../dashboard/navegacion/navb.php'; ?>
    <div class="container">
		<h2>Bienvenido Administrador</h2>
		<p>Registro de datos acumulado</p>            
		<table class="table" id="myTable">
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
	<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
	<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
	<script>
        $(document).ready( function () {
    		$('#myTable').DataTable( {
				dom: 'Bfrtip',
				buttons: [
					'excel'
				]
			} );
		} );
    </script>

</body>
</html>
