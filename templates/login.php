<?php
session_start();
require "conexion.php";

$email = $_POST['email'];
$clave = $_POST['clave'];

$consulta = "SELECT * FROM usuarios WHERE email = '$email' AND clave = '$clave'";

$fila = mysqli_query($cnx, $consulta);

$columnas = mysqli_fetch_assoc( $fila );

if($columnas == false){
    header("Location: ../index.php?e=1");
}else{

    $_SESSION['id_usuario'] = $columnas['id_usuario'];
    $_SESSION['user'] = $columnas['user'];
    $_SESSION['nombre'] = $columnas['nombre'];
    $_SESSION['apellido'] = $columnas['apellido'];
    $_SESSION['id_nivel'] = $columnas['id_nivel'];
    $_SESSION['email'] = $columnas['email'];
    $_SESSION['id_foto'] = $columnas['id_foto'];
    
    header("Location: ../index.php");
}


mysqli_close($cnx);

?>