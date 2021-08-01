<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BachApp</title>
    <link rel="shortcut icon" href="img/BachApp.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/map.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
</head>
<body onload="findMe();" >
    <section class="container map">
        <h1 class="map__title">CONSULTAR MAPA</h1>
        <div id="map"></div>
        <div id="mapid" class="map__area"></div>
    </section>



    <?php
  $conexion = mysqli_connect("localhost", "daniel", "daniel1", "Baches") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select latitud,longitud,fecha,hora
                        from reportes") or
    die("Problemas en el select:" . mysqli_error($conexion));

    ?>
    <script>
        function findMe() {
            var latitude = 21.852503 ;
            var longitude = -102.261558;
            var output = document.getElementById('map');

            if (navigator.geolocation) {

            } else {
                output.innerHTML = "<p>Tu navegador no soporta Geolocalizacion</p>";
            }


            //Obtenemos latitud y longitud
                var mensaje = "esta es tu casa"

                var mymap = L.map('mapid').setView([latitude, longitude], 15);

                L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                    maxZoom: 18,
                    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
                        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                    id: 'mapbox/streets-v11',
                    tileSize: 512,
                    zoomOffset: -1
                }).addTo(mymap);


<?php
  while ($reg = mysqli_fetch_array($registros)) {
 
?>


                L.marker([<?php echo $reg['latitud'];  ?>  , <?php echo $reg['longitud'];  ?>]).addTo(mymap)
                    .bindPopup("<?php echo "fecha de reporte:".$reg['fecha']."<br>"."hora de reporte: ".$reg['hora']; ?>");




                var popup = L.popup();

                L.circle([<?php echo $reg['latitud'];  ?>  , <?php echo $reg['longitud'];  ?>], 100, {
                    color: 'red',
                    fillColor: '#f03',
                    fillOpacity: 0.5
                }).addTo(mymap).bindPopup("Probable zona");

                <?php
  }
?>
                
                function onMapClick(e) {
                    popup
                        .setLatLng(e.latlng)
                        .setContent("You clicked the map at " + e.latlng.toString())
                        .openOn(mymap);
                
                mymap.on('click', onMapClick);
            }
   
        
            var f = new Date();

            document.registro.latitud.value = latitude;
            document.registro.longitud.value = longitude;
            document.registro.fecha.value = f.getFullYear() + "-" + (f.getMonth() +1) + "-" + f.getDate();
            document.registro.hora.value = f.getHours() + ":" + f.getMinutes() + ":" + f.getSeconds();
           

        }
    </script>
</body>
</html>
