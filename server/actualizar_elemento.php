 <?php
		require('conexion.php');
		sleep(1);

		$id_datos = utf8_decode($_POST['id_data']);
		$correo = utf8_decode($_POST['email']);
		$nombre = utf8_decode($_POST['nameUser']);
		$opcion = utf8_decode($_POST['option']);
		$notas = utf8_decode($_POST['notes']);
		$texto1 = utf8_decode($_POST['text1']);
		$texto2 = utf8_decode($_POST['text2']);

		if (mysqli_connect_errno()) {
				echo "Error de conexion \n";
				//print ("mal");
				exit();
			}
	else{
		echo "Preparando para almacenar \n";
		mysqli_query($mysqli,"UPDATE datos SET `correo`='$correo',`nombre`='$nombre',`opcion`='$opcion',`notas`='$notas',`texto1`='$texto1',`texto2`='$texto2' WHERE `id_datos` = $id_datos") or die ("Problemas al añadir elementos a la BD".mysqli_error($mysqli));
		echo "Instrución ejecutada \n";
	}

?>