<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-around my-5">
            <div class="col-lg-4">
                <div class="card my-5">
                    <div class="card-header">
                        <h1 class="text-center card-title">Crear nuevo usuario</h1>
                    </div>
                    <div class="card-body">
                        <form method="post" action="../../dashboard/con_y_reg/reg.php">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control"  id="textName" aria-describedby="emailHelp" name="textName">
                                <label for="textName" class="form-label">Nombre de Usuario</label>
                                <div id="emailHelp" class="form-text text-info">*Registra tu nombre (solo un nombre basta).</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                                <label for="email" class="form-label">Dirección de correo electrónico</label>
                                <div id="emailHelp" class="form-text text-info">*No compartiremos su E-mail con nadie</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" id="inputPassword6" name="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">                    
                                <label for="inputPassword6" class="form-label">Contraseña</label>
                                <div id="emailHelp" class="form-text text-info">*Debe tener entre 8 y 20 caracteres</div>
                            </div>                
                            <div class="mx-auto d-grid my-2">
                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="container"> 
                    <img src="../../../public/img/registro.png" alt="">
                </div>
            </div>
        </div>
    </div>
</body>
</html>