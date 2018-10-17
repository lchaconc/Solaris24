<?php
function conectarDB(){

        $servidor = "localhost";
        $usuario = "logan";
        $password = "Logan123*";
        $bd = "solaris24";

    $conexion = mysqli_connect($servidor, $usuario, $password,$bd);

        if($conexion){
            echo "";
        }else{
            echo 'Ha sucedido un error inexperado en la conexion de la base de datos
';
        }

    return $conexion;
}
?>
