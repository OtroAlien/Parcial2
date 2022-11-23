<?php
session_start();
session_destroy();

/* Abrimos sesión para destruirla y luego navegamos al index (este documento está dentro de templates por lo tanto, salimos de esa carpeta con ../ y luego abrimos index.php) */

header("Location: ../index.php");
?>