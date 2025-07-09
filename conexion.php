<?php
$host = "sql205.infinityfree.com";
$usuario = "if0_38938648";
$contrasena = "NDQQYbADzqbTj3U";
$base_de_datos = "if0_38938648_omar";

$conexion = new mysqli($host, $usuario, $contrasena, $base_de_datos);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>