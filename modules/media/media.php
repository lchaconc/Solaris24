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
    <script src="./js/media.js"></script>
  
</head>
<body>


    <div class="jumbotron">
       <h1>Solaris 24 - Módulo Multimedia</h1>
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
        <div class="alert alert-primary" role="alert">
            <button id="btnSubir" class="btn btn-light"> <i class="fas fa-upload"></i> Subir archivo</button>
        </div>
        <br>
        <div class="row" id="visor" > </div>

        </div>        
    </div>



<!-- Modal -->
<div class="modal fade" id="modalFile" tabindex="-1" role="dialog" aria-labelledby="modalFileLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalFileLabel">Seleccione el tipo de archivo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>
            <img class="png-ico  btn-file" src="./assets/ico/pdf.png" alt="pdf">
            <img class="png-ico btn-file" src="./assets/ico/speaker.png" alt="pdf">
            <img class="png-ico btn-file" src="./assets/ico/camera.png" alt="pdf">
            <img class="png-ico btn-file" src="./assets/ico/link.png" alt="pdf">
        </div>
        <div class="item-hide div-icons-fille" >
        <br>
            <h6> Descripción del archivo: </h6>
                <div class="form-group">                  
                  <input type="text" class="form-control" id="txtTitle" placeholder="Escriba aquí el nombre.">
                </div>

                 <div class="form-group">                  
                  <input type="text" class="form-control" id="txtDesc" placeholder="Escriba aquí la descripción.">
                </div>

                 <h6> Archivo: </h6>

                <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">Subir</span>
                </div>
               
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="inputfile">
                  <label class="custom-file-label" id="lblInputFile" for="inputfile">Seleccione el archivo</label>
                </div>
              </div>
        </div>


      </div>
      <div class="modal-footer">
       
      </div>
    </div>
  </div>
</div>

    
</body>
</html>