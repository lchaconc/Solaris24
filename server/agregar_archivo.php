<?php
     require('conexion.php');
     sleep(1);


   
   $titulo = utf8_decode($_POST['titleFile']);
   $descripcion = utf8_decode($_POST['descFile']);
   $correo = utf8_decode($_POST['correo']);
   $nombre = utf8_decode($_POST['nombre']);
   $tipo = $_POST['typeFile'];

    echo $tipo;
    
   //$archivo  = basename($_FILES['objFile']['name']);
   $archivo  = $_FILES['objFile']['name'];
   echo $archivo;

  

   $directorio = "../archivos_media/".$tipo."/";

  

    //$archivo = preg_replace("/[^A-Za-z0-9_-]/", "", $archivo);
    
    $archivo = str_replace(' ', '', $archivo);
    
  

   if(move_uploaded_file($_FILES['objFile']['tmp_name'], $directorio.$archivo)) {
   $urlArchivo = "../".$directorio.$archivo;
}

 
    mysqli_query($mysqli,"INSERT INTO archivos (titulo, urlArchivo, descripcion, tipo, correo, nombre ) VALUES ('$titulo','$urlArchivo', '$descripcion', '$tipo', '$correo', '$nombre' )") or die ("Problemas al añadir elementos a la BD".mysqli_error($mysqli));
    $errors = array();
    
    mysqli_close($mysqli);

    
?>
