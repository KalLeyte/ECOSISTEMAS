<?php
try {

$bd = new mysqli('localhost','root','','proyectoeco');
//conexion para hosting
//$bd = new mysqli('fdb34.awardspace.net','3952111_proyectoeco','warriors7','3952111_proyectoeco');

$bd->set_charset("utf8");

} catch (\Exception $e) {
  // aqui va el codigo :v
  echo $e->getMessage;
  exit;
}

// ping a la base de datos para comprobar conexion
//if ($bd->ping()) {
  //echo "espere un momento por favor";
//} else {
  //echo $bd->connect_error;
//}
