<?php
session_start();
if (!isset($_GET['id'])) {  //Si no existe id vuelveme al index
  header('Location: index.php');
}

if (!isset($_SESSION['nombre'])) {
  header('Location: login.php');
}elseif (isset($_SESSION['nombre'])) {
  require 'modelo/conexion.php';

  $id = $_GET['id']; //Para el url
  $consulta=$db->prepare("SELECT * FROM alumno WHERE id_alumno = ?"); //Preparamos la consulta select y ocultamos el id
  $consulta->execute([$id]); //Lo executamos
  $persona = $consulta->fetch(PDO::FETCH_OBJ); //Seleccionamos el dato de una consulta y lo guardamos en persona
}else {
  echo "Error en el sistema";
}


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilos.css">
    <title>Editar Alumno</title>
  </head>
  <body>
    <h3>Editar Alumno:</h3>
    <form class="" action="editarProceso.php" method="post">
      <table>
        <tr>
          <td>Apellido Paterno: </td>
          <td><input type="text" name="txt2Paterno" value="<?php echo $persona->ap_paterno ?>"></td>
          <?php //imprimimos el valor de la persona y queda al principio para editar ?>
        </tr>
        <tr>
          <td>Apellido Materno: </td>
          <td><input type="text" name="txt2Materno" value="<?php echo $persona->ap_materno ?>"></td>
        </tr>
        <tr>
          <td>Nombre: </td>
          <td><input type="text" name="txt2Nombre" value="<?php echo $persona->nombre ?>"></td>
        </tr>
        <tr>
          <td>Examen Parcial: </td>
          <td><input type="text" name="txt2Parcial" value="<?php echo $persona->ex_parcial ?>"></td>
        </tr>
        <tr>
          <td>Examen Final: </td>
          <td><input type="text" name="txt2Final" value="<?php echo $persona->ex_final ?>"></td>
        </tr>
        <tr>
          <input type="hidden" name="oculto">
          <input type="hidden" name="id2" value="<?php echo $persona->id_alumno ?>">

          <td colspan="2"><input type="submit" name="2enviar" value="Editar Alumno"></td>
        </tr>
      </table>
    </form>
  </body>
</html>
