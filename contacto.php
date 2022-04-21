<?php include 'header.php'; ?>

<section class="section">
    <div class="container">
        <h2 class="title is-1 has-text-centered">CONTACTO</h2>
        <br><br>

        <div class="columns is-multiline">
            <div class="column is-12">
                <h2 class="title is-3 has-text-centered title-marked">NUESTROS DATOS</h2>
            </div>

            <div class="column is-6">
                <div class="columns">
                    <div class="column is-2">
                        <img style="width: 80%; margin-top: 20px;" class="img-center"
                            src="images/iconos/Hnet.com-image (7) (1).png" alt="">
                    </div>
                    <div class="column is-8">
                        <b>Teléfonos</b> <br>
                        <ul>
                            <li>(222) 8 88 11 56</li>
                            <li>(222) 8 88 13 93</li>
                            <li>(222) 750 66 85</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="column is-6">
                <div class="columns">
                    <div class="column is-2">
                        <img style="width: 80%; margin-top: 20px;" class="img-center"
                            src="images/iconos/Hnet.com-image (6) (1).png" alt="">
                    </div>
                    <div class="column is-8">
                        <b>Horario</b> <br>
                        <ul>
                            <li>Lunes a Viernes - 9am - 6pm</li>
                            <li>Sábado - 9am - 2pm</li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="column is-6">
                <div class="columns">
                    <div class="column is-2">
                        <img style="width: 80%; margin-top: 20px;" class="img-center"
                            src="images/iconos/Hnet.com-image (5) (1).png" alt="">
                    </div>
                    <div class="column is-8">
                        <b>Correos</b> <br>
                        <ul>
                            <li>Venta de refacciones: <br>
                                refacciones@montacargasacuna.com.mx</li>
                            <li>Servicio técnico: <br>
                                servicio@montacargasacuna.com.mx</li>
                            <li>Gerencia: <br>
                                antonio@montacargasacuna.com.mx</li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="column is-6">
                <div class="columns">
                    <div class="column is-2">
                        <img style="width: 80%; margin-top: 20px;" class="img-center"
                            src="images/iconos/Hnet.com-image (8) (1).png" alt="">
                    </div>
                    <div class="column is-8">
                        <b>Dirección</b> <br>
                        <ul>
                            <li>Calle. Derby No 84 Col. Nueva Alemania, Cuautlancingo Puebla C.P. 72713</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="column is-10 is-offset-1">
                <div id="map"></div>
            </div>


            <div class="column is-10 is-offset-1">
                <h2 class="title is-5" style="border-bottom: 2px solid #ff6d37; margin-top: 20px;">Envianos un mensaje
                </h2>
                <div class="columns is-multiline">

                    <div class="column is-6">
                        <div class="field">
                            <div class="control">
                                <input class="input" type="text" placeholder="Nombre">
                            </div>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="field">
                            <div class="control">
                                <input class="input" type="text" placeholder="Correo Electrónico">
                            </div>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="control">
                            <input class="input" type="text" placeholder="Empresa">
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="control">
                            <input class="input" type="text" placeholder="Teléfono">
                        </div>
                    </div>

                    <div class="column is-12">
                        <div class="field">
                            <div class="control">
                                <textarea class="textarea" placeholder="Escriba su mensaje"></textarea>
                            </div>
                        </div>

                        <div class="control">
                            <button class="button is-link">Enviar</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'footer.php'; ?>




<script>
var map;

function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {
            lat: 19.1092848,
            lng: -98.2427525
        },
        zoom: 17
    });

    marker = new google.maps.Marker({
        position: {
            lat: 19.109011,
            lng: -98.241792
        },
        map: map
    });
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAiuF9lHSW8V46fuBkYyEPRLQ-FrL6_oDg&callback=initMap" async
    defer></script>
<style>
/* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
#map {
    height: 600px;
    margin-top: 50px;
}

/* Optional: Makes the sample page fill the window. */
html,
body {
    height: 100%;
    margin: 0;
    padding: 0;
}

input,
textarea {
    background-color: #fcdad0 !important;
}
</style>