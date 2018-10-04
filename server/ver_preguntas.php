<?php
$variable= $_GET["valor"];
$materia="";
switch ($variable) {
    case "espanol":
        $materia= "Español";
        break;
    case "quimica":
        $materia= "Química";
        break;
    case "biologia":
        $materia= "Biología";
        break;
    case "ingles":
        $materia= "Inglés";
        break;
    case "frances":
        $materia= "Francés";
        break;
    case "biologia":
        $materia= "Biología";
        break;
    case "estudios":
        $materia= "Estudios Sociales";
        break;
    case "civica":
        $materia= "Cívica";
        break;
}
?>
<head>
  <link rel="stylesheet" href="../../vendor/bootstrap-4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../css/master.css">
  <script src="../../vendor/jquery-3.3.1/jquery-3.3.1.min.js" charset="utf-8"></script>
  <script src="../../vendor/bootstrap-4.1/js/bootstrap.min.js" charset="utf-8"></script>
<?php  echo "<TITLE>Mostrar preguntas agregadas a $materia</TITLE>"?>
</head>

<body>
<div >
  <div class="jumbotron">
<h1>Preguntas agregadas a prueba de <?php echo $materia?> </h1>
</div>
<div class="container">
    <div class="row">
<div class="col">
<?php
include('conectar.php');
    $mysqli = conectarDB();
    $query=mysqli_query($mysqli, "SELECT * from $variable ORDER BY id");
    $i = 0;
    if (mysqli_num_rows($query)>0) {
      foreach (($query) as $row){$i++ ?>
      <span><b> Pregunta: <?php echo $i ?></b></span>
       <a href="modificarItem.php?materia=<?php echo $variable?>&item=<?php echo utf8_encode($row['id'])?>">   <img style="height:32px" src=../../img/icons8-editar-archivo-50.png></a>
    	<p>Consigna: <?php echo utf8_encode($row['consigna'])?></p>
      <p>Imagen: <?php echo $row['img'] ?></p>
        <p> Pregunta: <?php echo utf8_encode($row['pregunta']) ?></p>
        <p> Opción 1: <?php echo utf8_encode($row['opc1']) ?></p>
        <p> Opción 2: <?php echo utf8_encode($row['opc2']) ?></p>
        <p> Opción 3: <?php echo utf8_encode($row['opc3']) ?></p>
        <p> Opción 4: <?php echo utf8_encode($row['opc4']) ?></p>
        <p> Opción correcta: Opción <?php echo utf8_encode($row['correcta']) ?></p>
         <p> Justificación: <?php echo utf8_encode($row['justificacion']) ?></p>
         <p> Justificación (Imagen): <?php echo utf8_encode($row['justificacionImagen']) ?></p>

        <hr style="color: #0056b2;" />
    <?php
    	}
      }
      else {
        echo "<h2>No se han agregado preguntas de $materia</h2>";
      }
?>
</div>
</div>
</div>
<a href="../index.html">Regresar</a>
</div>
</body>

</html>
