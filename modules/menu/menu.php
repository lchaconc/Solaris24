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
</script>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mod 01</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
   
<link rel="shortcut icon" href="../../assets/ico/creative.png" type="image/png">  

<link rel="stylesheet" href="../../vendor/bootstrap-4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="../../css/master.css">


<script src="../../vendor/jquery-3.3.1/jquery-3.3.1.min.js"></script>
<script src="../../vendor/bootstrap-4.1/js/bootstrap.min.js"></script>
<script src="../../vendor/alertify/alertify.min.js"></script>

<script src="../../script/model.js"></script>
<script src="../../script/view.js"></script>
<script src="./js/menu.js"></script>
 
</head>
<body>


    <div class="jumbotron">
        Título
    </div>

    <div class="container">
        <div class="row">
            <div class="col-6">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe vero a porro, fugiat reiciendis, aliquam, similique dolorem modi quisquam earum dignissimos ipsa hic dolorum sapiente consequuntur corrupti non soluta repellendus?
            </div>
            <div class="col-6">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit velit corrupti nobis reprehenderit omnis incidunt natus adipisci molestias cumque iusto saepe magnam et expedita facilis non recusandae, voluptatibus praesentium eaque?
            </div>
        </div>
    </div>

    
</body>
</html>