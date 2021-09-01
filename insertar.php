<?php

if (!isset($_POST['oculto'])) {
  exit();
}

require 'modelo/conexion.php';
$paterno = $_POST['txtPaterno'];
$materno = $_POST['txtMaterno'];
$nombre = $_POST['txtNombre'];
$parcial = $_POST['txtParcial'];
$final = $_POST['txtFinal'];

$consulta = $db->prepare("INSERT INTO alumno(ap_paterno,ap_materno,nombre,ex_parcial,ex_final) VALUES (?,?,?,?,?);");
$resultado = $consulta->execute([$paterno,$materno,$nombre,$parcial,$final]); //Prepared Statement

if ($resultado == TRUE) {
  //echo "Insertado correctamente";
  header('Location: index.php');
}else{
  echo "Error";
}

 ?>
