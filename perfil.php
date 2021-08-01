<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BachApp</title>
    <link rel="shortcut icon" href="img/BachApp.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/perfil.css">
<?php
session_start();
?>
</head>
<body>

<?php


  $conexion = mysqli_connect("localhost", "daniel", "daniel1", "Baches") or
  die("Problemas con la conexión");

$registros = mysqli_query($conexion, "SELECT `nombre`,`usuario`,`correo` FROM `usuarios`
 WHERE idUsuario ='$_SESSION[idUsuario]'") or
  die("Problemas en el select:" . mysqli_error($conexion));

  while ($reg = mysqli_fetch_array($registros)) {
 
?>

    <main class="container perfil">
        <h1 class="perfil__title">PERFIL</h1>
        <label for="name" class="perfil__label">Nombre</label>
            <input type="text" name="name" id="name" class="perfil__input" placeholder=<?php echo $reg['nombre']?> >
            <br>
            <label for="user" class="perfil__label">Usuario</label>
                <input type="text" name="user" id="user" class="perfil__input" placeholder=<?php echo $reg['usuario']?>>
            <br> 
        <label for="email" class="perfil__label">Correo</label>
            <input type="text" name="email" id="email" class="perfil__input" placeholder=<?php echo $reg['correo']?>>
        <br>

        <a href="menu.php" class="perfil__label"> Regresar</a>

    </main>

    <?php
 }

 mysqli_close($conexion);
 ?>
    ?>
</body>
</html>