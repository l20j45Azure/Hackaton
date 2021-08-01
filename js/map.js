function mapLoad() {
        var latitude = 0;
        var longitude = 0;
        var output = document.getElementById('map');

        if (navigator.geolocation) {

        } else {
            output.innerHTML = "<p>Tu navegador no soporta Geolocalizacion</p>";
        }


        //Obtenemos latitud y longitud
        function localizacion(posicion) {


            latitude = posicion.coords.latitude;
            longitude = posicion.coords.longitude;
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

            L.marker([latitude, longitude]).addTo(mymap)
                .bindPopup(mensaje);

            var popup = L.popup();

            L.circle([latitude, longitude], 100, {
                color: 'red',
                fillColor: '#f03',
                fillOpacity: 0.5
            }).addTo(mymap).bindPopup("Probable zona");



            function onMapClick(e) {
                popup
                    .setLatLng(e.latlng)
                    .setContent("You clicked the map at " + e.latlng.toString())
                    .openOn(mymap);
            }

            mymap.on('click', onMapClick);
        }

        function error() {
            output.innerHTML = "<p>No se pudo obtener tu ubicación</p>";

        }

        navigator.geolocation.getCurrentPosition(localizacion, error);


}