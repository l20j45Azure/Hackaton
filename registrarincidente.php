<html>
<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
session_start();
$latitude = $_REQUEST['latitud'];
$longitude = $_REQUEST['longitud'];
$foto = $_REQUEST['foto'];
$fecha = $_REQUEST['fecha'];
$hora = $_REQUEST['hora'];
$idusuario = $_SESSION['idUsuario'];


  $conexion = mysqli_connect("localhost", "daniel", "daniel1", "Baches") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "INSERT INTO `reportes`(`idUsuario`, `latitud`, `longitud`, `foto`, `fecha`, `hora`) 
  VALUES ('$idusuario','$latitude','$longitude','$foto','$fecha','$hora')")



    or die("Problemas en el insert" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "<script type='text/javascript'>alert('Usuario dado de alta');</script>";
  echo "hola";


  header( "refresh:0;url=menu.php" ); 


  ?>
</body>

</html>