<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="src/public/img/claro-logo.ico" />
    <link rel="stylesheet" href="src/public/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Registro</title>
</head>
<body>
    <?php require 'src/views/template/navbar.php';?>
    <div class="si">
        <div class="container position-relative">
                    <div class="row justify-content">
                        <div class="col-xl-6">
                            <div class="text-center text-black">
                                <h1 class="display-2 text-white" style="font-size: 50px;">Bienvenido a la<br>Familia Claro!</h1>
                                <form class="form-subscribe" id="contactForm" method="post" action="src/conexion/guardado.php">
                                    <div class="container px-5">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="e3" name="dni" data-sb-validations="required"></input>
                                                <label for="e3">Ingresa tu DNI </label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="e" name="email" type="email"/>
                                                <label for="e">Ingrese Correo Electrónico</label>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-floating mb-3">
                                                        <select class="form-select" id="e2" name="lstOp" aria-label="New Field 2">
                                                            <option disabled select>Seleccione interés</option>
                                                            <option value="1">Celulares</option>
                                                            <option value="2">Internet</option>
                                                            <option value="3">Promociones</option>
                                                            <option value="4">Portabilidad</option>
                                                        </select>
                                                        <label for="e2">Escoge la opción sobre la que deseas información</label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" id="e" name="numb" />
                                                        <label for="e">Ingrese Numero Telefonico</label>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="d-grid">
                                                <button class="btn btn-danger btn-lg" name="enviar" type="submit">Enviar informacion</button>
                                            </div>
                                    
                                        
                                    </div>
                                    
                            </form>  

                            </div>
                        </div>
                    </div>
                </div>
    </div>
            <section class="features-icons bg-light text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                                <div class="features-icons-icon d-flex"><i class="bi-phone m-auto text-danger"></i></div>
                                <h3>Modelos Actuales</h3>
                                <p class="lead mb-0">Contamos con los modelos de celulares mas actuales del mercado! Incliyendo marcas reconocidas como Samsung, Apple, Xiaomi, entre otros.</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                                <div class="features-icons-icon d-flex"><i class="bi-wifi m-auto text-danger"></i></div>
                                <h3>Velocidad de Internet INCREIBLE</h3>
                                <p class="lead mb-0">Tenemos la actual 5G que te permite navegar en internet a velocidades de LOCURA.</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                                <div class="features-icons-icon d-flex"><i class="bi-map m-auto text-danger"></i></div>
                                <h3>Cobertura Nacional</h3>
                                <p class="lead mb-0">Contamos con varias sucursales a nivel nacional, ¡Que esperas, UNETE A CLARO!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    
        <section class="call-to-action text-white text-center" id="signup">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <h2 class="display-6">Aún no te decides, te envíamos nuestras promociones, Animate!</h2>
                        <form class="a" id="contactFormFooter" method="post" action="conexion/guardado_aux.php">                            
                            <div class="row">
                                    <div class="col-lg-6 ">
                                        <div class="form-floating mb-3">
                                            <input class="form-control form-control-lg" id="ea" name="email_au" type="email" />
                                            <label for="ea" class="text-black"> Ingrese Correo Electrónico</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="e" name="numb" />
                                            <label for="e" class="text-black">Ingrese Numero Telefonico</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mx-auto" >
                                        <button class="btn btn-danger btn-lg" id="submitButton" type="submit">Enviar</button>
                                    </div>
                                
                            </div>                                
                        </form>
                    </div>
                </div>
            </div>
        </section>
    
        
<?php require 'src/views/template/footer.php';?>

</body>
</html>