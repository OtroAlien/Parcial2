<?php
session_start();
require "templates/conexion.php";
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

    

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-md">
            <a class="navbar-brand logo" href="index.php"><img src="img/logo-jorge.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-md-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="buscador.php">Publicaciones</a>
                    </li>
                
                <?php
    if(!isset ($_SESSION['nombre'])){
        ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Contacto</a>
                    </li>
                </ul>
                <button type="button" class="btn btn-primary mx-3 rounded" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    Ingresar
                </button>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Ya tenes cuenta? Ingresa</h1>
                                <button type="button" class="btn-close rounded" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="templates/login.php" method="post" enctype="application/x-www-form-urlencoded">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" name="clave">
                                    </div>
                                    <button type="submit" class="btn btn-primary rounded">Ingresar</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <div id="emailHelp" class="form-text">¿Aun no tienes cuenta?</div>

                                <a href="registro.php"><button type="button"
                                        class="btn btn-primary rounded">Registrate</button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
    }else{
    ?>
                <div class="collapse navbar-collapse justify-content-md-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="perfil.php">Mi perfil</a>
                        </li>
                    </ul>
                </div>
                <a href="templates/cerrar.php">
                    <button type="button" class="btn btn-primary mx-3 rounded" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        Cerrar Sesion
                    </button>
                </a>
                <?php
    }
    ?>

    <?php
    if (isset($_GET['e']) && $_GET['e'] == 1){
    ?>

    <script>
        alert("Usuario o contraseña incorrectos")
        window.location = "index.php";
    </script>

    <?php
    }else if(isset($_GET['e']) && $_GET['e'] == 2){
        include "templates/registro.php";

    }
    ?>
            </div>
        </div>
    </nav>

    <div id="slideImagenes" class="carousel slide container" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#slideImagenes" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#slideImagenes" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#slideImagenes" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/carousel-1.jpg" class="d-block w-100" alt="carousel1">
            </div>
            <div class="carousel-item">
                <img src="img/carousel-2.jpg" class="d-block w-100" alt="carousel2">
            </div>
            <div class="carousel-item">
                <img src="img/carousel-3.jpg" class="d-block w-100" alt="carousel3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#slideImagenes" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#slideImagenes" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <section class="jorge mb-0 pb-0">
        <div class="container p-2 mt-2 mb-0 pb-0">
            <div class="col-12 p-3 mb-1 text-center">
                <h1>Jorge Multimedia</h1>
            </div>
            <div class="row">
                <div class="col-12 col-xs-3 col-md-6 col-lg-6">
                    <img src="img/jorge.png" alt="img 800px nr 1" width="600" height="700" class="img-fluid">
                </div>
                <div class="col-12 col-xs-3 col-md-6 col-lg-6">
                    <div>
                        <p>Hola! Mi nombre es Jorge y esto es Jorge Multimedia, una empresa que fundé en 1997 para que
                            el
                            mundo vuelva a ser un lugar mágico y divertido, bueno ya no sé que mas escribir. Viva el
                            amor!
                        </p>
                    </div>
                    <h2>Tendencias</h2>
                    <a class="text-decoration-none text-reset tendencias" href="">
                        <div class="row">
                            <div class="">
                                <div class="card" >
                                    <img src="img/post_placeholder.jpg" class="card-img-top" alt="tendencias">
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make up
                                            the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>


    <section id="contacto mt-0 pt-0">
        <div class="contacto mt-0 pt-0">
            <div class="container py-4">
                <div class="row">
                    <div class="col-12 col-md-10 col-lg-8 mx-auto">
                        <div class="col-12 mb-2">
                            <h2 class=text-center>Contactanos<h2>
                        </div>
                        <form>
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
                                <label for="mensaje" class="form-label">Mensaje</label>
                                <textarea class="form-control" id="mensaje" rows="3" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary rounded">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div id="contacto" class="container">
            <div class="row">
                <div class="col">
                    <div class="seguime">
                        <p class="text-center py-3">Redes sociales<p>
                    </div>
                </div>
            </div>
            <div class="row">
                <ul class="list-inline d-flex flex-row justify-content-center">
                    <li class="list-inline-item">
                        <a href="https://twitter.com/oltra22" class="text-color-dark text-decoration-none"><i
                                style="color: #754c57;" class="bi bi-twitter fs-2"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.instagram.com/oltra22.art/" class="text-color-dark text-decoration-none">
                            <i style="color: #754c57;" class="bi bi-instagram fs-2"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.facebook.com/oltra22" class="color-dark text-decoration-none"><i
                                style="color: #754c57;" class="bi bi-facebook fs-2 text-color-dark"></i></a>
                    </li>
                </ul>
            </div>
            <div class=copy>
                <div class="text-center font-weight-bold py-3">© 2022 Copyright: <br>
                    Ciro Gonzalez - Bruno Ramos - Florencia Sueiro
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
</body>

</html>