<?php

session_start();
if (isset($_SESSION['nombre'])) {
  header('Location: index.php');
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilos.css">
    <title>Iniciar Sesion</title>
  </head>
  <body>
    <form class="" action="loginProceso.php" method="post">
      <label for="">Usuario:  </label>
      <input type="text" name="txtUsu" value="">
      <br>
      <label for="">Password: </label>
      <input type="password" name="txtPass" value="">
      <br>
      <br>
      <input type="submit" name="" value="Iniciar Sesion">
    </form>
    <div>
      <p>Usuario:roy / Contraseña:123</p>
    </div>
  </body>
</html>
