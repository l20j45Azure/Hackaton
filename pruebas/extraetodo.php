<html>

<head>
  <title>Problema</title>
</head>

<body>

  <?php
  $conexion = mysqli_connect("localhost", "daniel", "daniel1", "Baches") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select latitud,longitud,fecha,hora
                        from reportes") or
    die("Problemas en el select:" . mysqli_error($conexion));

  while ($reg = mysqli_fetch_array($registros)) {
    echo $reg['latitud'];
    echo$reg['longitud'];
    echo$reg['fecha'];

  }

  mysqli_close($conexion);
  ?>

</body>

</html>