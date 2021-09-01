<?php

$contraseña='';  //Ajustar los parametros
$usuario='root';
$nombre_db='nota';


try {
  $db= new PDO('mysql:host=localhost;dbname='.$nombre_db,$usuario,$contraseña); //Forma de conectarse
                                                                              //mediante PDO


} catch (Exception $e) {
      echo "Error de conexion:". $e->getMessage(); //Si sale mal imprime esto
}





 ?>
