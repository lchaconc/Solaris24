<?php
   require('conexion.php');
   sleep(1);


	 $correo = utf8_decode($_POST['email']);
   $nombre = utf8_decode($_POST['nameUser']);
   $opcion = utf8_decode($_POST['option']);
   $notas = utf8_decode($_POST['notes']);
   $texto1 = utf8_decode($_POST['text1']);
   $texto2 = utf8_decode($_POST['text2']);

  
 // $mysqli->set_charset('utf8');
    mysqli_query($mysqli,"INSERT INTO datos (correo, nombre, opcion, notas, texto1, texto2) VALUES ('$correo','$nombre','$opcion','$notas', '$texto1', '$texto2'  )") or die ("Problemas al añadir elementos a la BD".mysqli_error($mysqli));
    $errors = array();
    
    //TODO cerrar conexion
    mysqli_close($mysqli);
?>

