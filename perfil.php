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
    
<?php
    if(!isset ($_GET['p'])){

    } ?>

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
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Ingresar
                        </button>

                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Ya tenes cuenta? Ingresa</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Ingresar</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                            <div id="emailHelp" class="form-text">¿Aun no tienes cuenta?</div>
                                
                                <button type="button" class="btn btn-primary">Registrate</button>
                            </div>
                            </div>
                        </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
      <div class="container mt-4 mb-4 p-3 d-flex justify-content-center rounded-4">
        <div class="card p-4">
        <button type="button" class="btn btn-primary" id="liveToastBtn">Notificaciones</button>

            <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                <img src="..." class="rounded me-2" alt="...">
                <strong class="me-auto">Bootstrap</strong>
                <small>11 mins ago</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                Hello, world! This is a toast message.
                </div>
            </div>
            </div>



            <div class=" image d-flex flex-column justify-content-center align-items-center">
                
                <div>
                    <img class="pfp" style="width: 100px;" src="img/pfp/default_pfp_Mesa de trabajo 1.png"/>
                </div>

                <span class="name mt-3">Nombre de usuario</span>
                <span class="name mt-3">Area: Diseño Multimedial</span>
                <br>
                <div class="btn-group">
                    <input class="btn btn-primary mx-1 rounded" type="button" value="Mis punlicaciones">
                    <input class="btn btn-primary mx-1 rounded" type="button" value="Publicaciones que te gustaron">
                    <a href="editarperfil.html"><input class="btn btn-primary mx-1 rounded" type="button" value="Editar perfil"></a>
                </div>
                <div class=" px-2 rounded mt-4 date ">
                    <h3>Publicaciones que te gustaron:</h3>


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
                                                <!--
                                                <?php 
                    if(isset($_SESSION['id_usuario'])){
                        $id_usuario = $_SESSION['id_usuario'];
                        $c_like = "SELECT * FROM likes WHERE id_publicacion = ?? AND id_usuario = $id_usuario";
                        $rta_like = mysqli_query($cnx, $c_like);
                        $col_like = mysqli_fetch_assoc($rta_like);
                        if($col_like == false){
                    ?>
                                                -->
            
                                                <div class="likes">
                                                    <a href="templates/likear.php?l=1&p=<?php echo $p; ?>"> <img src="img/like.png" alt=""></a>
            
                                                <!--
                                                <?php
                                                }else{}
                                                ?>
                                                -->
                                                    <a href="templates/likear.php?l=2&p="><img src="img/liken't.png" alt=""></a>
                                                </div>
            
                                                <!--
                                                <?php
                                                }
                                                ?>
                                                -->
            
                                               
                                                
                                                
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
                    
                </div>
            </div>
        </div>
    </div>



    <script>
        const toastTrigger = document.getElementById('liveToastBtn')
        const toastLiveExample = document.getElementById('liveToast')
        if (toastTrigger) {
          toastTrigger.addEventListener('click', () => {
            const toast = new bootstrap.Toast(toastLiveExample)
        
            toast.show()
          })
        }</script>
        
</body>