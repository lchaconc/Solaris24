<?php
     require('conexion.php');
     sleep(1);


   
   $titulo = utf8_decode($_POST['titleFile']);
   $descripcion = utf8_decode($_POST['descFile']);
   $tipo = $_POST['typeFile'];

    echo $tipo;
   $archivo  = basename($_FILES['objFile']['name'], ".pdf");
   echo $archivo;

  

   $directorio = "../archivos_media/".$tipo."/";

  $archivo = preg_replace("/[^A-Za-z0-9_-]/", "", $archivo).$tipo;
   if(move_uploaded_file($_FILES['objFile']['tmp_name'], $directorio.$archivo)) {
   $urlArchivo = "../".$directorio.$archivo;
}

 
    mysqli_query($mysqli,"INSERT INTO archivos (titulo, urlArchivo, descripcion, tipo ) VALUES ('$titulo','$urlArchivo', '$descripcion', '$tipo' )") or die ("Problemas al añadir elementos a la BD".mysqli_error($mysqli));
    $errors = array();
    
    mysqli_close($mysqli);

    
?>
