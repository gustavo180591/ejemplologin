<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registro de usuario</title>
</head>
<body>
  <h1>Registro de usuario</h1>
  <form action="guardar_usuario.php" method="POST">
    <label for="nombre">Nombre completo:</label>
    <input type="text" name="nombre" required><br><br>
    <label for="email">Correo electrónico:</label>
    <input type="email" name="email" required><br><br>
    <label for="contrasena">Contraseña:</label>
    <input type="password" name="contrasena" required><br><br>
    <input type="submit" value="Registrarse">
  </form>
  <p>¿Ya tienes una cuenta? <a href="login.php">Inicia sesión</a></p>
</body>
</html>
