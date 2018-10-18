<?php
  
  require('conexion.php');
  sleep(1);


  $idNombre =  utf8_decode($_POST['idName']);  
  $idValor =  utf8_decode($_POST['idVal']);  
  $tabla =  utf8_decode($_POST['table']);
  
  

  mysqli_query($mysqli,"DELETE FROM $tabla WHERE $idNombre = '$idValor' ") or die ("Problemas al actualizar elementos a la BD".mysqli_error($mysqli));
     
  //cerrar conexion
     mysqli_close($mysqli);
		$errors = array();

?>
