<?php
session_start();
require 'conexion.php';

$email = $_POST['email'];
$contrasena = $_POST['contrasena'];

$query = "SELECT * FROM usuarios WHERE email = '$email'";
$resultado = mysqli_query($conexion, $query);

if (mysqli_num_rows($resultado) > 0) {
  $usuario = mysqli_fetch_assoc($resultado);

  if (password_verify($contrasena, $usuario['contrasena'])) {
    $_SESSION['usuario'] = $usuario['id'];
    header('Location: index.php');
    exit;
  } else {
    echo "Contraseña incorrecta";
  }
} else {
  echo "Correo electrónico no registrado";
}
?>
