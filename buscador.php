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
    <link rel="shortcut icon" href="img/logo.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>
    <div class="pattern"></div>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-md">
            <a class="navbar-brand logo" href="index.html"><img src="img/logo-jorge.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-md-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Publicaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-primary" href="#">Ingresar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="posteos mt-3 p-4 mb-5 container mb80">
        <aside>
            <form action="buscador.html" class="mb-3 form-inline d-flex justify-content-end">
                <input type="text" name="palabra" placeholder="Buscar" class="form-control form-control-sm" id="">
                <input type="submit" value="buscar" class="btn btn-info btn-sm">
            </form>
        </aside>
        <div class="btn-group">
            <input class="btn btn-primary mx-1 rounded" type="button" value="filtro popular 1">
            <input class="btn btn-primary mx-1 rounded" type="button" value="filtro popular 1">
            <div class="dropdown ">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Dropdown button
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
    </div>

    
        <!--
        Para el buscador:
        -->

        <?php
    if(isset($_GET['palabra'])){
            $palabra = $_GET['palabra'];
            echo '<h3>Resultados $palabra </h3>';

            $consulta = "SELECT id_publicacion, id_area, fecha, id_like, contenido, titulo, id_usuario foto FROM publicaciones INNER JOIN areas ON publicaciones.id_areas = areas.id_area WHERE areas.area LIKE '%$palabra%' OR publicaciones.titulo LIKE %$palabra%' OR publicaciones.contenido LIKE %$palabra%'";
        }

        ?>
        
        <!--
        Para otras cosas:
        -->

      <?php 
      $consulta = "SELECT id_publicacion, id_area, fecha, id_like, contenido, titulo, id_usuario foto FROM publicaciones";
      $respuesta = mysqli_query($cnx, $consulta);
      while ($columnas = mysqli_fetch_assoc($respuesta)){}
      ?>

        <div class="lista_posteos">
            <div class="post m-3">
                <a href="#">
                    <div class="posteos container mb80">
                        <div class="page-timeline">
                            <div class="vtimeline-point">
                                <div class="vtimeline-icon">
                                    <i class="fa fa-image"></i>
                                </div>
                                <div class="vtimeline-block p-4">
                                    <ul class="post-meta list-inline">
                                        <li class="list-inline-item">
                                            <i class="fa fa-user-circle-o"></i> <a href="#"><img class="pfp"
                                                    style="width: 50px;" src="img/pfp/default_pfp_Mesa de trabajo 1.png"
                                                    alt=""></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-user-circle-o"></i> <a class="post_info"
                                                href="#">Autor/Profesional</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-calendar-o"></i>
                                            <p class="post_info" href="#">Publicó</p>
                                        </li>
                                    </ul>
                                    <a href="#">
                                        <h3>Titulo</h3>
                                    </a>
                                    <a href="#"><img src="https://via.placeholder.com/700x400" alt=""
                                            class="img-fluid mb20"></a>
                                    <p>
                                        Contenido de la publicacion... Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit.
                                        Curabitur in iaculis ex. Etiam volutpat laoreet urna. Morbi ut tortor nec nulla
                                        commodo
                                        malesuada sit amet vel lacus. Fusce eget efficitur libero. Morbi dapibus porta
                                        quam laoreet
                                        placerat.
                                    </p><br>


        <?php 
        if(isset($_SESSION['id_usuario'])){
            $id_usuario = $_SESSION['id_usuario'];
            $c_like = "SELECT * FROM likes WHERE id_publicacion = ?? AND id_usuario = $id_usuario";
            $rta_like = mysqli_query($cnx, $c_like);
            $col_like = mysqli_fetch_assoc($rta_like);
            if($col_like == false){
        ?>

                                    <div class="likes">
                                        <a href="templates/likear.php?l=1&p=<?php echo $p; ?>"> <img src="img/like.png" alt=""></a>

                                    <?php
                                    }else{}
                                    ?>
                                        <a href="templates/likear.php?l=2&p="><img src="img/liken't.png" alt=""></a>
                                    </div>


                                    <?php
                                    }
                                    ?>

                                    
                                    
                                    <br>
                                    <div class="comentario p-4">
                                        <ul class="post-meta list-inline">
                                            <li class="list-inline-item">
                                                <i class="fa fa-user-circle-o"></i> <a href="#"><img class="pfp"
                                                        style="width: 50px;"
                                                        src="img/pfp/default_pfp_Mesa de trabajo 1.png" alt=""></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fa fa-user-circle-o"></i> <a class="post_info"
                                                    href="#">Autor/Profesional</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fa fa-calendar-o"></i>
                                                <p class="post_info" href="#">Comentó:</p>
                                            </li>
                                            <p class="comentario">Lorem ipsum dolor sit amet consectetur, adipisicing
                                                elit. Velit dignissimos ratione sequi
                                                laboriosam quaerat eos ea nesciunt quis, quidem aliquid maiores eligendi
                                                id, veritatis
                                                itaque saepe! Voluptas, impedit.</p>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                </a>
            </div>
        </div>
        <footer>
            <div class="container">
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
                            <a href="https://www.instagram.com/oltra22.art/"
                                class="text-color-dark text-decoration-none">
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