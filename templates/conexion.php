<?php
// Guardamos en una variable el recurso de conexión que devuelve la función...

$cnx = mysqli_connect("localhost", "root", "", "base_productos") or die("No se pudo conectar");

// Codificamos las respuesta que se produzcan en formato utf8 para mostrarlas en la web.

mysqli_set_charset($cnx, "utf8");
?>