<?php

session_start();
require 'modelo/conexion.php';
$usuario = $_POST['txtUsu'];
$contraseña = $_POST['txtPass'];


$consulta = $db->prepare("SELECT * FROM t_usuario WHERE nombre_usu = ? and password_usu = ?");

$consulta->execute([$usuario,$contraseña]);
$datos = $consulta->fetch(PDO::FETCH_OBJ);
//print_r($datos);

if ($datos === FALSE) {
  header('Location: login.php');
}elseif ($consulta->rowCount() == 1) {
   $_SESSION['nombre'] = $datos->nombre_usu;
   header('Location: index.php');
}

 ?>
