<?php
session_start();
if (!isset($_SESSION['nombre'])) {
  header('Location: login.php');
}elseif (isset($_SESSION['nombre'])) {
  require 'modelo/conexion.php';
  $consulta=$db->query("SELECT * FROM alumno");
  $alumnos = $consulta->fetchAll(PDO::FETCH_OBJ); //devuelve un objeto anónimo con nombres de propiedades que se corresponden a los nombres de las columnas devueltas en el conjunto de resultados.
  //print_r($alumnos);
}else {
  echo "Error en el sistema";
}


 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://kit.fontawesome.com/a04b95e6db.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos.css">
    <title>LISTA DE ALUMNOS</title>
  </head>
  <body>
    <h1>Bienvenido: <?php echo $_SESSION['nombre']; ?></h1> <?php //Uiliza el nombre del usuario que esta guardado en el session ?>
    <a href="cerrar.php"><i class="fas fa-window-close"></i></a> <?php //Cierra sesion desde el archivo cerrar.php ?>
    <h3>LISTA DE ALUMNOS</h3>
    <table class="filaprincipal">
      <tr>
        <td>Codigo</td>
        <td>Apellido Paterno</td>
        <td>Apellido Materno</td>
        <td>Nombre</td>
        <td>Parcial</td>
        <td>Final</td>
        <td>Promedio</td>
        <td>Editar</td>
        <td>Eliminar</td>
      </tr>

<?php
foreach ($alumnos as $dato) {
?>

  <tr>
    <td><?php echo $dato->id_alumno; ?></td>
    <td><?php echo $dato->ap_paterno; ?></td>  <!--Con el metodo foreach hacemos bucles con la informacion de los alumnos-->
    <td><?php echo $dato->ap_materno; ?></td>
    <td><?php echo $dato->nombre; ?></td>    <!--Utilizando el dato y su fila -->
    <td><?php echo $dato->ex_parcial; ?></td>
    <td><?php echo $dato->ex_final; ?></td>  <!--Se utilizan cada vez que se inserta nuevos datos -->
    <td><?php echo ($dato->ex_final+ $dato->ex_parcial)/2; ?></td> <!--Forma de promediar los examenes -->
    <td><a href="editar.php?id=<?php echo $dato->id_alumno ?>"><i class="fas fa-pencil-alt"></i></a></td> <?php //Permite editarlo mediante el id del usuario ?>
    <td><a href="eliminar.php?id=<?php echo $dato->id_alumno ?>"><i class="fas fa-trash-alt"></i></a></td>
  </tr>

  <?php }?>
    </table>

    <!--Inicio insert-->



<hr>
<h3>Ingresar alumnos</h3>
<form class="insertar" action="insertar.php" method="post">
  <table class="insertar1">
  <tr>
    <td>Apellido Paterno: </td>
    <td><input type="text" name="txtPaterno"><br /></td>
  </tr>
  <tr>
    <td>Apellido Materno: </td>
    <td><input type="text" name="txtMaterno"><br /></td>
  </tr>
  <tr>
    <td>Nombre: </td>
    <td><input type="text" name="txtNombre"><br /></td>
  </tr>
  <tr>
    <td>Nota Parcial: </td>
    <td><input type="text" name="txtParcial"><br /></td>
  </tr>
  <tr>
    <td>Nota Final: </td>
    <td><input type="text" name="txtFinal"><br /></td>
  </tr>
  <input type="hidden" name="oculto" value="1">
  <br />
  <tr>
    <td><input type="reset" name=""></td>
    <td><input type="submit" name="envia"></td>
  </tr>
</form>

</table>
    <!--Fin insert-->

  </body>
</html>
