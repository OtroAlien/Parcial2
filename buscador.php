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
    ?>

    <script>
        alert("Perfecto! Ya te registraste capo")
        window.location = "index.php";
    </script>

    <?php
    }else if(isset($_GET['e']) && $_GET['e'] == 3){
        ?>

    <script>
        alert("Ya hay un usuario registrado con esas credenciales")
        window.location = "registro.php";
    </script>

    <?php
    }
    ?>
            </div>
        </div>
    </nav>
    <?php
        if(!isset($_GET['p'])){
    ?>
    <!--buscador-->
    <div class="posteos mt-3 p-4 mb-5 container mb80">
        <aside>
            <form action="buscador.php" class="mb-3 form-inline d-flex justify-content-end">
                <input type="text" name="palabra" placeholder="Buscar" class="form-control form-control-sm" id="">
                <input type="submit" value="buscar" class="btn btn-info btn-sm rounded">
            </form>
        </aside>
        <form action="buscador.php" class="btn-group rounded">
                <select name="area" class="dropdown ">
                    <button class="btn btn-secondary dropdown-toggle rounded" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Filtros
                    </button>
                    <ul class="dropdown-menu">
                        <li><option type="button" value=0> Todas </option></li>
                            <?php 
                            $consulta_areas = "SELECT * FROM areas";
                            $resultados_areas = mysqli_query($cnx, $consulta_areas);
                            while ($cols_areas = mysqli_fetch_assoc($resultados_areas)){
                            ?>
                        <li><option type="button" value=<?php echo $cols_areas['id_area'];?>>
                        <?php echo $cols_areas['area']?> </option></li>
                    <?php
                    }
                    ?>
                    </ul>
                </select>
            <input type="submit" value="filtrar" class="btn btn-info btn-sm rounded">
        </form>
    </div>
    <?php
    }else{
    ?>
    <!--boton volver-->
    <div class="mt-3 container mb80">
        <div class=""><a class="btn btn-primary rounded" href="buscador.php"><-</a>
        </div>
    </div>

    <?php
    }
    ?>

    <!--
        Para el buscador:
        -->

    <?php
    if(isset($_GET['palabra'])){

            $palabra = $_GET['palabra'];

            $consulta = "SELECT * FROM publicaciones INNER JOIN areas ON publicaciones.id_area = areas.id_area WHERE areas.area LIKE '%$palabra%' OR publicaciones.titulo LIKE '%$palabra%' OR publicaciones.contenido LIKE '%$palabra%'";

            $resultado = mysqli_query($cnx, $consulta);
            $cant_resultados = mysqli_num_rows($resultado);

            if($cant_resultados == 0){
                echo "<p>No hay resultados para $palabra </p>";
            }
        }else{
            $consulta = "SELECT * FROM publicaciones";
            $resultado = mysqli_query($cnx, $consulta);
        }

        ?>
    <?php
        if( isset($_GET['area'])){
            $area = $_GET['area'];
            if($area == 0){
            $area="%";
            }else{
            $el_area = mysqli_query($cnx,"SELECT * FROM areas WHERE id_area=$area");
            $titulo = mysqli_fetch_assoc($el_area);

            echo "<p class='col-12'> Publicaciones de ". $titulo['area']."</p>";
            }
            $consulta = "SELECT * FROM publicaciones INNER JOIN areas ON publicaciones.id_area = areas.id_area WHERE publicaciones.id_area LIKE '$area'";
            $resultado = mysqli_query($cnx, $consulta);
        }else{
            $consulta = "SELECT * FROM publicaciones";
            $resultado = mysqli_query($cnx, $consulta);
        }
    ?>

    <!--
        Para otras cosas:
        -->


    <div class="lista_posteos">

        <?php 
        if(!isset($_GET['p'])){
        ?>

        <!--maestro-->
        <?php
        while ($columnas = mysqli_fetch_assoc($resultado)){
        ?>
        <div class="post m-3">
            <div class="posteos container mb80">
                <div class="page-timeline">
                    <div class="vtimeline-point">
                        <div class="vtimeline-icon">
                            <i class="fa fa-image"></i>
                        </div>
                        <div class="vtimeline-block p-4">
                                    <?php 
                                        $post_id_comment=$columnas['id_publicacion'];
                                        $post_id=$columnas['id_usuario'];
                                        $consulta_nombres = "SELECT publicaciones.id_usuario, usuarios.id_usuario, usuarios.nombre, usuarios.apellido, usuarios.id_foto FROM publicaciones, usuarios WHERE usuarios.id_usuario = $post_id";
                                        $respuesta_nombres = mysqli_query($cnx, $consulta_nombres);
                                        ($nombre = mysqli_fetch_assoc($respuesta_nombres));
                                        $fecha_base=$columnas["fecha"];
                                        $fecha_cortada = explode("-", $fecha_base);
                                        $fecha_cortada_dia = $fecha_cortada[2];
                                        $fecha_cortada_dia_restado = substr($fecha_cortada_dia, 0, 2);
                                        $fecha_invertida =  $fecha_cortada_dia_restado . "/" . $fecha_cortada[1] . "/" . $fecha_cortada[0];
                                        $consulta_imagenes = "SELECT * FROM imagenes, detalle_imagenes WHERE imagenes.id_imagen = detalle_imagenes.id_imagen AND detalle_imagenes.id_publicacion=$post_id_comment";
                                        $respuesta_imagenes = mysqli_query($cnx, $consulta_imagenes);
                                        $imagen = mysqli_fetch_assoc($respuesta_imagenes);
                                        $consulta_pfp ="SELECT * FROM fotos_perfil WHERE id_usuario=$post_id";
                                        $respuesta_pfp = mysqli_query($cnx,$consulta_pfp);
                                        $pfp = mysqli_fetch_assoc($respuesta_pfp);
                                        if($pfp == false){
                                            $pfp_final = "default_pfp.png";
                                        }else{
                                            $pfp_final = $pfp['contenido_pfp'];
                                        }
                                    ?> 
                            <ul class="post-meta list-inline">
                                <li class="list-inline-item">
                                    <i class="fa fa-user-circle-o"></i> <a href="buscador.php?p=<?php echo $columnas['id_publicacion']; ?>"><img class="pfp"
                                            style="width: 50px;" src="img/pfp/<?php echo $pfp_final?>" alt="<?php echo $pfp_final?>"></a>
                                </li>     
                                <li class="list-inline-item">
                                    <i class="fa fa-user-circle-o"></i> <a class="post_info"
                                        href="#">
                                        <?php
                                    echo $nombre['nombre'];
                                ?> 

                                <?php
                                    echo $nombre['apellido'];
                                ?>
                                </a>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fa fa-calendar-o"></i>
                                    <p class="post_info"><?php echo $fecha_invertida; ?></p>
                                </li>
                            </ul>
                            <a class="text-decoration-none text-reset" href="buscador.php?p=<?php echo $columnas['id_publicacion']; ?>">
                            <h3>
                                <?php
                                    echo $columnas['titulo'];
                                ?>
                            </h3>
                            </a>
                            <a href="buscador.php?p=<?php echo $columnas['id_publicacion']; ?>"><img src="img/posts/<?php echo $imagen['contenido_img'] ?>" alt="<?php echo $imagen['contenido_img'] ?>"
                                    class="img-fluid mb20"></a>
                            <p>
                            <?php
                            echo $columnas['contenido'];
                            ?>
                            </p><br>

                            <?php
                            $consulta_comentarios = "SELECT * from comentarios INNER JOIN publicaciones
                            ON comentarios.id_publicacion = publicaciones.id_publicacion
                            INNER JOIN usuarios ON comentarios.id_usuario = usuarios.id_usuario
                            WHERE comentarios.id_publicacion = $post_id_comment ORDER BY comentarios.fecha_comentario DESC";

                            $respuesta_comentarios = mysqli_query($cnx, $consulta_comentarios);
                            while($col_comentario = mysqli_fetch_assoc($respuesta_comentarios)){
                                $fecha_base_comment=$col_comentario["fecha_comentario"];
                                $fecha_cortada_comment = explode("-", $fecha_base_comment);
                                $fecha_cortada_comment_dia = $fecha_cortada_comment[2];
                                $fecha_cortada_comment_dia_restado = substr($fecha_cortada_comment_dia, 0, 2);
                                $fecha_invertida_comment =  $fecha_cortada_comment_dia_restado . "/" . $fecha_cortada_comment[1] . "/" . $fecha_cortada_comment[0];
                                $consulta_pfp_comment ="SELECT * FROM fotos_perfil WHERE id_usuario=$col_comentario[id_usuario]";
                                $respuesta_pfp_comment = mysqli_query($cnx,$consulta_pfp_comment);
                                $pfp_comment = mysqli_fetch_assoc($respuesta_pfp_comment);
                                if($pfp_comment == false){
                                            $pfp_comment_final = "default_pfp.png";
                                        }else{
                                            $pfp_comment_final = $pfp_comment['contenido_pfp'];
                                        }
                            ?>
                            <div class="comentario p-4">
                                <ul class="post-meta list-inline">
                                    <li class="list-inline-item">
                                        <i class="fa fa-user-circle-o"></i> <a href="#"><img class="pfp"
                                            style="width: 50px;" src="img/pfp/<?php echo $pfp_comment_final?>" alt="<?php echo $pfp_comment_final?>"></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fa fa-user-circle-o"></i> <a class="post_info"
                                            href="#"><?php echo $col_comentario['nombre']; ?> <?php echo $col_comentario['apellido'];?></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fa fa-calendar-o"></i>
                                        <p class="post_info" href="#"><?php echo $fecha_invertida_comment?></p>
                                    </li>
                                    <p class="comentario"><?php echo $col_comentario["contenido_comentario"]?></p>
                                </ul>
                            </div>
                            <?php
                            }
                            ?>
                            <div class="text-center"><a class="btn btn-primary rounded text-center" href="buscador.php?p=<?php echo $columnas['id_publicacion']; ?>">Ver mas</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
        <?php
        }
        ?>

        <?php 
        }else{
        ?>

        <!--detalle-->

        <div class="post m-3">
                    <?php   
                    $id = $_GET ['p'];
                    $cons_detalle = "SELECT publicaciones.id_publicacion, publicaciones.id_area, publicaciones.fecha, publicaciones.contenido, publicaciones.titulo, publicaciones.id_usuario, usuarios.id_usuario, usuarios.nombre, usuarios.apellido, usuarios.id_foto FROM publicaciones, usuarios WHERE publicaciones.id_usuario = usuarios.id_usuario AND publicaciones.id_publicacion = $id";
                    $resultado_detalle = mysqli_query($cnx, $cons_detalle);
                    $detalle = mysqli_fetch_assoc($resultado_detalle);
                    $fecha_base=$detalle["fecha"];
                    $id_pfp = $detalle["id_usuario"];
                    $fecha_cortada = explode("-", $fecha_base);
                    $fecha_cortada_dia = $fecha_cortada[2];
                    $fecha_cortada_dia_restado = substr($fecha_cortada_dia, 0, 2);
                    $fecha_invertida =  $fecha_cortada_dia_restado . "/" . $fecha_cortada[1] . "/" . $fecha_cortada[0];
                    $consulta_imagenes = "SELECT * FROM imagenes, detalle_imagenes WHERE imagenes.id_imagen = detalle_imagenes.id_imagen AND detalle_imagenes.id_publicacion=$id";
                    $respuesta_imagenes = mysqli_query($cnx, $consulta_imagenes);
                    $imagen = mysqli_fetch_assoc($respuesta_imagenes);
                    $consulta_pfp ="SELECT * FROM fotos_perfil WHERE id_usuario=$id_pfp";
                    $respuesta_pfp = mysqli_query($cnx,$consulta_pfp);
                    $pfp = mysqli_fetch_assoc($respuesta_pfp);
                        if($pfp == false){
                            $pfp_final = "default_pfp.png";
                        }else{
                            $pfp_final = $pfp['contenido_pfp'];
                        }
                    ?>
                    <!--no funciona!!!(no se porque ayuda)-->
                    <?php
                    if($detalle == false){
                        header("Location: buscador.php");
                        exit;
                    }
                    ?>
            <!--esto si funciona-->
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
                                            style="width: 50px;" src="img/pfp/<?php echo $pfp_final?>" alt="<?php echo $pfp_final?>"></a>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fa fa-user-circle-o"></i> 
                                    <a class="post_info" href="#"><?php echo $detalle['nombre']; ?> <?php echo $detalle['apellido'];?>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fa fa-calendar-o"></i>
                                    <p class="post_info" href="#"><?php echo $fecha_invertida; ?></p>
                                </li>
                            </ul>
                            <h2 class="text-decoration-none text-reset" href="#">
                                <h3>
                                <?php
                                    echo $detalle['titulo'];
                                ?>
                                </h3>
                            </h2>
                            <a href="#"><img src="img/posts/<?php echo $imagen['contenido_img'] ?>" alt="<?php echo $imagen['contenido_img'] ?>"
                                    class="img-fluid mb20"></a>
                            <p>
                            <?php
                            echo $detalle['contenido'];
                            ?>
                            </p>
                            <div>
                            <?php
                                if(isset($_SESSION['id_usuario'])){ 
                                    $id_usuario=$_SESSION['id_usuario'];
                                    $c_like = "SELECT * FROM likes WHERE id_publicacion = $id AND id_usuario= $id_usuario";
                                    $rta_like = mysqli_query($cnx, $c_like);
                                    $col_like = mysqli_fetch_assoc($rta_like);
                                    if($col_like == false){
                                        
                                    
                            ?>
                                <a href="templates/likear.php?l=1&p=<?php echo $id; ?>"><img width="40rem" height="40rem" src="img/likenot.png" alt="corazon negro"></a>
                                <?php
                                    }else{
                                ?>
                                <a href="templates/likear.php?l=2&p=<?php echo $id; ?>"><img width="40rem" height="40rem" src="img/like.png" alt="corazon"></a>
                                <?php
                                    }
                                ?>
                            </div>
                            <?php
                                }
                            ?>
                            <div class="mb-3">

                                <form action="templates/comentar.php" method="post">
                                    <textarea name="comentario" class="form-control" id="exampleFormControlTextarea1" cols="30" rows="5"
                                    placeholder="Deja tu comentario aquí"></textarea>
                                    <input type="hidden" name="id_publicacion" value="<?php echo $id ?>">
                                    <button type="submit">Enviar</button>
                                </form>
                            </div>
                            <?php
                            $consulta_comentarios = "SELECT * from comentarios INNER JOIN publicaciones
                            ON comentarios.id_publicacion = publicaciones.id_publicacion
                            INNER JOIN usuarios ON comentarios.id_usuario = usuarios.id_usuario
                            WHERE comentarios.id_publicacion = $id ORDER BY comentarios.fecha_comentario DESC";

                            $respuesta_comentarios = mysqli_query($cnx, $consulta_comentarios);
                            while($col_comentario = mysqli_fetch_assoc($respuesta_comentarios)){
                                $fecha_base_comment=$col_comentario["fecha_comentario"];
                                $fecha_cortada_comment = explode("-", $fecha_base_comment);
                                $fecha_cortada_comment_dia = $fecha_cortada_comment[2];
                                $fecha_cortada_comment_dia_restado = substr($fecha_cortada_comment_dia, 0, 2);
                                $fecha_invertida_comment =  $fecha_cortada_comment_dia_restado . "/" . $fecha_cortada_comment[1] . "/" . $fecha_cortada_comment[0];
                                $consulta_pfp_comment ="SELECT * FROM fotos_perfil WHERE id_usuario=$col_comentario[id_usuario]";
                                $respuesta_pfp_comment = mysqli_query($cnx,$consulta_pfp_comment);
                                $pfp_comment = mysqli_fetch_assoc($respuesta_pfp_comment);
                                if($pfp_comment == false){
                                    $pfp_comment_final = "default_pfp.png";
                                }else{
                                    $pfp_comment_final = $pfp_comment['contenido_pfp'];
                                }
                            ?>
                            <div class="comentario p-4">
                                <ul class="post-meta list-inline">
                                    <li class="list-inline-item">
                                        <i class="fa fa-user-circle-o"></i> <a href="#"><img class="pfp"
                                                style="width: 50px;" src="img/pfp/<?php echo $pfp_comment_final?>" alt="<?php echo $pfp_comment_final?>" alt=""></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fa fa-user-circle-o"></i> <a class="post_info"
                                            href="#"><?php echo $col_comentario["nombre"]. " " .$col_comentario["apellido"]?></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fa fa-calendar-o"></i>
                                        <p class="post_info" href="#"><?php echo $fecha_invertida_comment?></p>
                                    </li>
                                    <p class="comentario"><?php echo $col_comentario["contenido_comentario"]?></p>
                                </ul>
                            </div>
                            <?php
                                }
                            ?>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <?php 
        }
        ?>

        <div>
            <div class="m-4">
                <br>
            </div>
            <div class="m-4">
                <br>
            </div>
            <div class="m-4">
                <br>
            </div>
            <div class="m-4">
                <br>
            </div>
            <div class="m-4">
                <br>
            </div>
        </div>

        <footer class="mt-n200px">
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