<html>
<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php

$nombre = $_REQUEST['name'];
$usuario = $_REQUEST['user'];
$contrasenia = $_REQUEST['password'];
$mail = $_REQUEST['email'];



  $conexion = mysqli_connect("localhost", "daniel", "daniel1", "Baches") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "INSERT INTO `usuarios`(`nombre`, `usuario`, `correo`, `contrasenia`) VALUES ('$nombre','$usuario','$mail','$contrasenia')")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "<script type='text/javascript'>alert('Usuario dado de alta');</script>";
  echo "hola";


  header( "refresh:0;url=index.html" ); 


  ?>
</body>

</html>