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
    <script src="./js/form1.js"></script>
  
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

            <form action=""  id="frmData1">
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Correo electrónico:</label>
                      <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="nombre@eejemplo.com">
                    </div>
                    <div class="form-group">
                            <label for="txtNameUser">Nombre:</label>
                            <input name="nameUser" type="text" class="form-control" id="txtNameUser" placeholder="Escriba aquí el nombre">
                          </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Seleccionar campo:</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="option" >
                        <option selected disabled >Por favor seleccione una opción</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>                
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Notas:</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="notes" ></textarea>
                    </div>
                    <div class="form-group">
                            <label for="formGroupExampleInput">Texto corto 1:</label>
                            <input name="text1" type="text" class="form-control" id="formGroupExampleInput" placeholder="Escriba aquí el texto 1">
                          </div>
                          <div class="form-group">
                            <label for="formGroupExampleInput2">Texto corto 2:</label>
                            <input name="text2" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Escriba aquí el texto 2">
                          </div>
                          <input class="btn btn-outline-primary" type="submit" value="Enviar">
                  </form>

                  
    </div>

    
</body>
</html>