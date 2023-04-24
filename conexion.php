<?php

$host = 'localhost';
$usuario = 'root';
$contrasena = '';
$base_datos = 'ejemplo_login';

$conexion = mysqli_connect($host, $usuario, $contrasena, $base_datos);

if (!$conexion) {
  die('Error al conectar con la base de datos: ' . mysqli_connect_error());
}

?>