<html>

<head>
  <title>Problema</title>
</head>

<body>

  <?php
  session_start();
  echo "hola";
  echo $_SESSION['idUsuario'];
  $conexion = mysqli_connect("localhost", "daniel", "daniel1", "Baches") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "SELECT `nombre`,`usuario`,`correo` FROM `usuarios`
   WHERE idUsuario ='$_SESSION[idUsuario]'") or
    die("Problemas en el select:" . mysqli_error($conexion));

  while ($reg = mysqli_fetch_array($registros)) {
    echo "Codigo:" . $reg['nombre'] . "<br>";
    echo "Nombre:" . $reg['usuario'] . "<br>";

  }

  mysqli_close($conexion);
  ?>

</body>

</html>