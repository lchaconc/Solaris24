<?php

// verifica si la peticiòn es de tipo AJAX
  if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])== 'xmlhttprequest'    ) {
    require('conexion.php');
    sleep(1);
    //creaciòn de la sesiòn:
    session_start();

    // Especifica que tipo de carcateres va a escapar
    $mysqli->set_charset('utf8');

    //real escape es para filtrar los carcateres que van a etrar a la consulta SQL para evita SQL inyection

    $usuario = $mysqli->real_escape_string( $_POST['txtEmail']);
    $pas = $mysqli->real_escape_string( $_POST['txtPassword']);
 

    /*
    echo $usuario; 
    echo $pas; 
    */

      if ($nueva_consulta = $mysqli->prepare("Select nombre,tipo From usuarios Where usuario = ? AND password = ?")) {
        $nueva_consulta->bind_param('ss', $usuario, $pas);
        $nueva_consulta->execute();
        $resultado = $nueva_consulta->get_result();
        //echo $resultado->num_rows;  Filas encontradas
        if ($resultado->num_rows == 1) {
          
              $datos = $resultado->fetch_assoc();
              $_SESSION['usuario'] = $datos;
              echo json_encode(array('error'=>false,'tipo'=>$datos['tipo'], 'nombre'=>$datos['nombre']));
        }else {
              echo json_encode(array('error'=>true));
        }
        $nueva_consulta->close();
      }
  }
$mysqli->close();
 ?>
