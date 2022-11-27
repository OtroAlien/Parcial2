<?php
include "templates/conexion.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JorgeMultimedia</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/logo-jorge.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>
    <div class="pattern"></div>

    <section id="contacto mt-0 pt-0">
        <div class="contacto mt-0 pt-0">
            <div class="container py-4">
                <div class="row">
                    <div class="col-12 col-md-10 col-lg-8 mx-auto">
                        <div class="col-12 mb-2">
                            <h2 class=text-center>Registrate<h2>
                        </div>
                        <form>

                            <div class="container">
                                <div class="row">
                                    <div class="col m-auto pl-5">
                                        <img class="pfp" style="width: 135px;" src="img/pfp/default_pfp_Mesa de trabajo 1.png" alt="">
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Foto de perfil</label>
                                            <input class="form-control" type="file" id="formFile">
                                        </div>
                                    </div>
                                </div>
                            </div>


                          
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" aria-describedby="nombre" required>
                            </div>
                            <div class="mb-3">
                                <label for="apellido" class="form-label">Apellido</label>
                                <input type="text" class="form-control" id="apellido" aria-describedby="apellido"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" aria-describedby="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="clave" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="clave" aria-describedby="clave" required>
                            </div>
                            <div class="mb-3">
                                <label for="clave" class="form-label">Ingrese su contraseña nuevamente</label>
                                <input type="password" class="form-control" id="clave" aria-describedby="clave" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>