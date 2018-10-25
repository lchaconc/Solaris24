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
	var grupo = '<?php echo$_SESSION['usuario']['grupo'];?>' 
	console.log(grupo);
	var tmp = grupo.split(",");
	console.log(tmp );
	console.log(tmp[0] );
	
</script>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mod 01</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
   
<link rel="shortcut icon" href="../../assets/ico/creative.png" type="image/png">  
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

<link rel="stylesheet" href="../../vendor/bootstrap-4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="../../vendor/alertify/css/alertify.min.css">
<link rel="stylesheet" href="../../vendor/alertify/css/themes/default.min.css">
<link rel="stylesheet" href="../../css/master.css">


<script src="../../vendor/jquery-3.3.1/jquery-3.3.1.min.js"></script>
<script src="../../vendor/bootstrap-4.1/js/bootstrap.min.js"></script>
<script src="../../vendor/alertify/alertify.min.js"></script>

<script src="../../script/model.js"></script>
<script src="../../script/view.js"></script>
<script src="../../script/main.js"></script>

<script src="./js/menu.js"></script>
 
</head>
<body>


    <div class="jumbotron">
        <h1>Solaris 24 - Menú Principal</h1>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-4">
                <span class="spn-ico" > <i class="fas fa-user"></i> Usuario:  </span> <span id="spnTipoUsuario"></span>                  
            </div>
            <div class="col-4 text-center">
                <span  id="icoCloseSession" class="spn-ico lnk-ico" > <i class="fas fa-sign-out-alt"></i> Cerrar Sesión </span>                  
            </div>          

            <div class="col-4 text-right">                
                <span class="spn-ico"> <i class="fas fa-info-circle"></i> Nombre: </span> <span id="spnNombre"></span>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-6">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe vero a porro, fugiat reiciendis, aliquam, similique dolorem modi quisquam earum dignissimos ipsa hic dolorum sapiente consequuntur corrupti non soluta repellendus?
            </div>
            <div class="col-6">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit velit corrupti nobis reprehenderit omnis incidunt natus adipisci molestias cumque iusto saepe magnam et expedita facilis non recusandae, voluptatibus praesentium eaque?
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-6">
                <button type="button" id="btnIrMod01" class="btn btn-info  btn-lg btn-block">
                <i class="fab fa-wpforms"></i> Formulario 1
                </button>
            </div>

            <div class="col-6">
            <button type="button" id="btnIrMod02" class="btn btn-info  btn-lg btn-block">
            <i class="fas fa-table"></i> Tabla 1
                </button>
            </div>
        </div>
    <br>
        <div class="row">
            <div class="col-6">
                <button type="button" id="btnGoMedia" class="btn btn-info  btn-lg btn-block">
                <i class="fas fa-file-upload"></i> Multimedia
                </button>
            </div>

            <div class="col-6">
            <button type="button" id="btnGoups" class="btn btn-info  btn-lg btn-block">
            <i class="fas fa-users"></i> Grupos
            </button>
            </div>
        </div>

        <br>

                <div class="row">
            <div class="col-6">
                <button type="button" id="btnXXX" class="btn btn-info  btn-lg btn-block">
                <i class="fas fa-file-upload"></i> Libre
                </button>
            </div>

            <div class="col-6">
            <button type="button" id="btnGoHelp" class="btn btn-info  btn-lg btn-block">
                <i class="far fa-life-ring"></i> Ayuda
            </button>
            </div>
        </div>



    </div>

    
</body>
</html>