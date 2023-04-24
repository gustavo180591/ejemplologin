<?php
session_start();

if (isset($_SESSION['usuario'])) {
  header('Location: index.php');
  exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Iniciar sesión</title>
</head>
<body>
  <h1>Iniciar sesión</h1>
  <form action="validar_login.php" method="POST">
    <label for="email">Correo electrónico:</label>
    <input type="email" name="email" required><br><br>
    <label for="contrasena">Contraseña:</label>
    <input type="password" name="contrasena" required><br><br>
    <input type="submit" value="Iniciar sesión">
  </form>
  <p>¿No tienes una cuenta? <a href="registrar.php">Regístrate</a></p>
</body>
</html>