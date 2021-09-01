<?php

if (!isset($_GET['id'])) {
  exit();
}

$codigo=$_GET['id'];

require 'modelo/conexion.php';
$consulta = $db->prepare("DELETE FROM alumno WHERE id_alumno = ?");
$resultado=$consulta->execute([$codigo]);

if ($resultado===true) {
  header('Location: index.php');
}else {
  echo "Error";
}
 ?>
