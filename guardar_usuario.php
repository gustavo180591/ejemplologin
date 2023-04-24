<?php
// Conexión a la base de datos
$conexion = mysqli_connect('localhost', 'root', '', 'ejemplo_login');

// Comprobamos si se ha enviado el formulario de registro
if (isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['contrasena'])) {
  // Obtenemos los datos del formulario
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $contrasena = $_POST['contrasena'];

  // Encriptamos la contraseña con hash y salt
  $contrasena_encriptada = password_hash($contrasena, PASSWORD_DEFAULT);

  // Insertamos los datos en la base de datos
  $consulta = "INSERT INTO usuarios (nombre, email, contrasena) VALUES ('$nombre', '$email', '$contrasena_encriptada')";
  mysqli_query($conexion, $consulta);

  // Redireccionamos al usuario a la página de inicio de sesión
  header('Location: login.php');
  exit;
}
?>