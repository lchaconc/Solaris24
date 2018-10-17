<?php
  session_start(); 

  if (isset($_SESSION['usuario'])) {
        // TODO: establecer que se implementa en caso de estar en siesión
      } else {
          header('Location: ../../');
  }
?>

<script type="text/javascript">
    var user = '<?php echo$_SESSION['usuario']['tipo'];?>' 
    var nombre = '<?php echo$_SESSION['usuario']['nombre'];?>'            
</script>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Solaris24</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="shortcut icon" href="../../assets/ico/creative.png" type="image/png">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="../../vendor/bootstrap-4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../vendor/alertify/css/alertify.min.css">
    <link rel="stylesheet" href="../../vendor/alertify/css/themes/default.min.css">
    <link rel="stylesheet" href="../../css/master.css">
    

    <script src="../../vendor/jquery-3.3.1/jquery-3.3.1.min.js"></script>
    <script src="../../vendor/alertify/alertify.min.js"></script>
    <script src="../../vendor/bootstrap-4.1/js/bootstrap.min.js"></script>

    <script src="../../script/model.js"></script>
    <script src="../../script/view.js"></script>
    <script src="../../script/main.js"></script>
    <script src="./js/table1.js"></script>
  
</head>
<body>


    <div class="jumbotron">
       <h1>Solaris 24 - Módulo Formulario 1</h1>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-4">
                <span class="spn-ico"> <i class="fas fa-user"></i> Usuario:  </span> <span id="spnTipoUsuario"></span>                  
            </div>
            <div class="col-4 text-center">
                  <span class="spn-ico lnk-ico" id="spnHome"> <i class="fas fa-home"></i> Ir a Inicio </span>
            </div>
            <div class="col-4 text-right">                
                <span class="spn-ico" > <i class="fas fa-info-circle"></i> Nombre: </span> <span id="spnNombre"></span>
            </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-12">
            <h2>Tabla de datos</h2>
          </div>
        </div>
        <br>
        <div class="row">
            <div class="col-10 offset-1">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta labore cupiditate provident non delectus, voluptate illum tempora architecto quas modi, tempore rem assumenda! Eum facere in porro, commodi cumque minima.      
            </div>
        </div>

          
                  
    </div>

    
</body>
</html>