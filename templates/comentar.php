<?php
session_start();
require "conexion.php";

$id_usuario = $_SESSION['id_usuario'];
$id_publicacion = $_POST['id_publicacion'];
$comentario = $_POST['comentario'];
$fecha = date("Y-m-d");

$consulta = "INSERT INTO comentarios (id_usuario, id_publicacion, contenido_comentario, fecha_comentario) VALUES ($id_usuario, $id_publicacion, '$comentario', '$fecha' )";
mysqli_query($cnx, $consulta);
header("Location: ../buscador.php?p=$id_publicacion");
mysqli_close($cnx);


?>