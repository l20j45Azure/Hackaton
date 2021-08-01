<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BachApp</title>
    <link rel="shortcut icon" href="BachApp.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/menu.css">
</head>
<body>

<?php
session_start();
?>

    <main class="container menu">
        <h1 class="menu__title">MENÚ</h1>

    <?php
    echo "<section class='menu__subtitle2'>";
    echo "Hola ". $_SESSION['usuario'];
    echo "</section>";
    ?>
        <section class="menu__subtitle">
            <a href="perfil.php" class="menu__option">Ver perfil</a>
        </section>
        <section class="menu__subtitle">
            <a href="crearreporte.php" class="menu__option">Crear reporte</a>
        </section>
        <section class="menu__subtitle">
            <a href="map.php" class="menu__option">Consultar mapa</a>
        </section>
        <section class="menu__subtitle">
            <a href="#" class="menu__option">Salir</a>
        </section>
    </main>
</body>
</html>
