<?php
$mysqli=new mysqli('localhost','logan','Logan123*','solaris24');
if ($mysqli->connect_error) {
  echo "Error al conectarse con My SQL debido al error".$mysqli->connect_error;
}
	
 ?>
