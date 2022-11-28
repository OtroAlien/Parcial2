<?php
session_start();
require "conexion.php";
$like = $_GET['l'];
$id_publicacion = $_GET['p'];
$id_usuario = $_SESSION['id_usuario'];

if($like == 1){
    $consulta = "INSERT INTO likes (id_usuario, id_publicacion) VALUES ($id_usuario, $id_publicacion)";
    mysqli_query($cnx, $consulta);
}else{
    $consulta = "DELETE FROM likes WHERE id_publicacion = $id_publicacion AND id_usuario = $id_usuario";
    mysqli_query($cnx, $consulta);
}
header("Location: ../buscador.php?p=$id_publicacion");
mysqli_close($cnx);
?>