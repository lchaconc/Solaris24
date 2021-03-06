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
    var correo = '<?php echo$_SESSION['usuario']['correo'];?>' 

      //console.log(user);
      //console.log(nombre);
      //console.log(correo);


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
    <script src="./js/groups.js"></script>
  
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


        <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Administrar mis grupos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Estudiantes por grupos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Utlitarios</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <br>
      
      <div class="row">
          <div class="col-6">
            <button type="button" class="btn btn-primary btn-lg"  id="btnAbrirModal"  >
            <i class="fas fa-plus-circle"></i> Crear Grupo
            </button>
          </div>
          <div class="col-6">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, et culpa voluptate natus, doloribus enim minus qui laborum facere architecto ea voluptatem? Adipisci quos commodi sed voluptate iste. Fugiat, repudiandae!
          </div>
      </div>

      <div class="row">
          <div id="visor" class="col-12">

          <table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th class="text-center" scope="col">Ver estudiantes</th>
      <th class="text-center" scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td> Yellow Aliens </td>
      <td class="text-center" >  <i class="fas fa-eye"></i>  </td>
      <td class="text-center" > <i class="far fa-trash-alt"></i> </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Crazzy Chikens</td>
      <td class="text-center" > <i class="fas fa-eye"></i>  </td>
      <td class="text-center" > <i class="far fa-trash-alt"></i> </td>
    </tr>
    <tr>
   
    <th scope="row">2</th>
    <td> Intrepid Ducks </td>
      <td class="text-center" > <i class="fas fa-eye"></i> </td>
      <td class="text-center" > <i class="far fa-trash-alt"></i> </td>
    </tr>
  </tbody>
</table>

          </div>
      </div>




    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <br>
      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum cum quos quia incidunt ratione? Ad, tempora magni fuga, quae eum nihil facere culpa voluptas fugiat modi, ea a perferendis! Possimus!
    </div>
    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
    <br>
      defrfr
    </div>
</div>    



      
    </div>



<!-- Modal -->
<div class="modal fade" id="mdlCreateGroup" tabindex="-1" role="dialog" aria-labelledby="mdlCreateGroupLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="mdlCreateGroupLabel">Crear Grupo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row">
        <div class="col-12">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Nombre del grupo:</span>
            </div>
            <input type="text" class="form-control" placeholder="Escriba aquí el nombre del gurpo" aria-label="Username" aria-describedby="basic-addon1">
          </div>
        </div>        
      </div>
      <br>

        <div class="row">

    <div class="col-6">
    <div class="input-group mb-3">
          <input type="text" id="txtNombreParticipante" class="form-control" placeholder="Nombre del estudainte a buscar" aria-label="Recipient's username" aria-describedby="button-addon2">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
    </div>
    <div class="col-6"></div>



    
        </div>
      </div>

      <div class="row">
        <div class="col-6">
        <table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Agregar</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td><i class="fas fa-arrow-alt-circle-right"></i></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td><i class="fas fa-arrow-alt-circle-right"></i></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td><i class="fas fa-arrow-alt-circle-right"></i></td>
    </tr>
  </tbody>
</table>
        </div>
        <div class="col-6">
        <table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
        </div>
      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>


    
</body>
</html>