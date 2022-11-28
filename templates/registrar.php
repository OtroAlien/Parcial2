<?php
session_start();
require "conexion.php";

$nombre = mysqli_real_escape_string($cnx, $_POST['nombre']);
$apellido = mysqli_real_escape_string($cnx, $_POST['apellido']);
$clave = mysqli_real_escape_string($cnx, $_POST['clave']);
$user = mysqli_real_escape_string($cnx, $_POST['user']);
$email = mysqli_real_escape_string($cnx, $_POST['email']);
$id_nivel = 3;

$consulta = "SELECT * FROM usuarios WHERE email = '$email'";

$fila = mysqli_query($cnx, $consulta);

$columnas = mysqli_fetch_assoc( $fila );

if($columnas == false){
    $consulta_alta = "INSERT INTO usuarios (nombre, apellido, clave, user, id_nivel, email) VALUES ('$nombre', '$apellido', '$clave', '$user', $id_nivel, '$email')";
    mysqli_query($cnx, $consulta_alta);
    header("Location: ../index.php?e=2");
}else{

    header("Location: ../index.php?e=3");
}


mysqli_close($cnx);

?>