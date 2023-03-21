<!DOCTYPE html>
<html>
<head>
	<title>Registro exitoso</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="container-success">
					<h2>¡Registro exitoso!</h2>
					<p>Tu cuenta ha sido creada con éxito.</p>
					<p>Estás siendo redirigido al panel de administración en <span id="countdown">30</span> segundos. Si no eres redirigido automáticamente, haz clic en el siguiente enlace: <a href="../dashboard/admin">Ir al panel de administración</a></p>
				</div>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script>
		var timeLeft = 30;
		var countdown = setInterval(function(){
			timeLeft--;
			$("#countdown").text(timeLeft);
			if(timeLeft == 0){
				clearInterval(countdown);
				window.location.href = "../admin.php";
			}
		}, 1000);
	</script>

</body>
</html>