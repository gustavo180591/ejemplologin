<?php
session_start();
require 'conexion.php';

if (!isset($_SESSION['usuario'])) {
  header('Location: login.php');
  exit;
}

$query = "SELECT * FROM usuarios WHERE id = '{$_SESSION['usuario']}'";
$resultado = mysqli_query($conexion, $query);
$usuario = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bienvenido, <?php echo $usuario['nombre']; ?></title>
</head>
<body>
  <h1>Bienvenido, <?php echo $usuario['nombre']; ?></h1>
  <p>¡Has iniciado sesión correctamente!</p>
  <p><a href="cerrar_sesion.php">Cerrar sesión</a></p>
</body>
</html>
