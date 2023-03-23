<?php  

    session_start();

	require "../../controller/db.php";	

    if(!empty($_POST['email']) && !empty($_POST['password'])){

        $records = $con->prepare('SELECT * FROM users WHERE email = :email');
        $records->bindParam(':email', $_POST['email']);
        $records->execute();

        $results = $records->fetch(PDO::FETCH_ASSOC);

        $message = '';

        if(count($results) > 0 && password_verify($_POST['password'], $results['password'])){
            $_SESSION['user_id'] = $results['id'];
            $_SESSION['user_name'] = $results['usuario'];
            header("Location: admin.php");
        } else{
            $message = "Lo siento no existes";
        }

    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Iniciar sesión</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    <div class="card mx-auto mt-5" style="width: 18rem;">
        <div class="card-header">
            <h1 class="text-center">Iniciar sesión</h1>
        </div>
        <div class="card-body">
            <?php if (!empty($message)): ?>
                <div class="alert alert-danger"><?php echo $message; ?></div>
            <?php endif ?>
            <form method="post" action="login.php">
                <div class="form-floating mb-3">
                    <input type="text" name="email" id="email" class="form-control text-end">
                    <label for="email">E-mail</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="password" id="password" class="form-control text-end">
                    <label for="password">Contraseña</label>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>