<?php
     require('conexion.php');
     sleep(1);


   
   $titulo = utf8_decode($_POST['titleFile']);
   $descripcion = utf8_decode($_POST['descFile']);
   $archivo  = basename($_FILES['objFile']['name'], ".pdf");


   echo $archivo;
   $directorio = "../../files_media/";

  $archivo = preg_replace("/[^A-Za-z0-9_-]/", "", $archivo).".pdf";
   if(move_uploaded_file($_FILES['archivo']['tmp_name'], $directorio.$archivo)) {
   $urlArchivo = $directorio.$archivo;
}
/*
$urlArchivo = $directorio.$archivo;*/
 
    mysqli_query($mysqli,"INSERT INTO archivos (titulo, url, descripcion ) VALUES ('$titulo','$urlArchivo', '$descripcion' )") or die ("Problemas al añadir elementos a la BD".mysqli_error($mysqli));
    $errors = array();
    
    mysqli_close($mysqli);
?>
