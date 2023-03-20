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
    <div style="display: flex;">
        <div class="container" style="padding: 10% 10% 10% 10%;">
            <h1 class="text-center">
                Registro de nuevo usuario
            </h1>
            <form method="post" action="../con_y_reg/reg.php">
                <div class="mb-3">
                    <label for="textName" class="form-label">Nombre de Usuario</label>
                    <input type="text" class="form-control"  id="textName" aria-describedby="emailHelp" name="textName">
                    <div id="emailHelp" class="form-text">Registra tu nombre (solo un nombre basta).</div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Dirección de correo electrónico</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                    <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
                </div>
                <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label">Contraseña</label>
                </div>
                    <div class="col-auto">
                        <input type="password" id="inputPassword6" name="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                    </div>
                    <div class="col-auto">
                        <span id="passwordHelpInline" class="form-text">
                        Debe tener entre 8 y 20 caracteres.
                        </span>
                    </div>
                </div>
                <div class="d-grid gap-2 mx-auto" style="margin-top: 5%;">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
            </form>
        </div>

        <div class="container" style="padding: 10% 10% 10% 10%;"> 
            <img src="../../img/registro.png" alt="">
        </div>
    </div>
</body>
</html>