<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Montacargas Acuña</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./styles.css">
</head>
<body>

<nav class="navbar is-white is-fixed-top">
<div class="navbar-brand">
<a class="navbar-item" href="index.php">
  <img src="images/logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
</a>
<div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
  <span></span>
  <span></span>
  <span></span>
</div>
</div>

<div id="navbarExampleTransparentExample" class="navbar-menu">
<div class="navbar-start">
  <a class="navbar-item" href="index.php">
    Inicio
  </a>
  
  <a class="navbar-item" href="servicios.php">
    Servicios
  </a>
  <a class="navbar-item" href="distribuidores.php">
    Distribuidores
  </a>
  <a class="navbar-item" href="implementos.php">
    Implementos
  </a>
  <a class="navbar-item" href="refacciones.php">
    Refacciones
  </a> 
  <a class="navbar-item" href="rentas.php">
        Rentas
      </a>
  <a class="navbar-item" href="nosotros.php">
    Nosotros
  </a>
  <a class="navbar-item is-active" href="contacto.php">
    Contacto
  </a>

</div>

<div class="navbar-end">
  <div class="navbar-item">
    <div class="field is-grouped">
      <p class="control">
        <a class="button is-link" target="_blank" href="https://www.facebook.com/MontacargasAcuna" data-social-network="Facebook" >
          <span class="icon">
            <i class="fa fa-facebook"></i>
          </span>
          <span>
            Facebook
          </span>
        </a>
      </p>
    </div>
  </div>
</div>
</div>
</nav>

<section class="section">
<br>
<div class="container">
    <h2 class="title">Contacto</h2>
    <div class="columns is-multiline">
        <div class="column is-8">
            <div class="field">
                <label class="label">Email</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Email">
                </div>
            </div>

            <div class="field">
                <label class="label">Mensaje</label>
                <div class="control">
                    <textarea class="textarea" placeholder="Escriba su mensaje"></textarea>
                </div>
            </div>

            <div class="control">
                <button class="button is-link">Enviar</button>
            </div>
        </div>
        <div class="column is-4">
            <b>Teléfonos</b> <br>
            <span>(222) 8 88 11 56</span> <br>
            <span>(222) 8 88 13 93</span>
            <br> <br>

            <b>Correos</b> <br><br>
            <span><b>Venta de refacciones:</b> refacciones@montacargasacuna.com.mx</span><br>
            <span><b>Servicio técnico:</b> servicio@montacargasacuna.com.mx</span><br> 
            <span><b>Gerencia:</b> <br> antonio@montacargasacuna.com.mx</span><br>
            <br> <br>

            <b>Dirección</b> <br>
            <span>Calle. Derby No 84 Col. Nueva Alemania, Cuautlancingo Puebla C.P. 72713</span>
        </div>
        
        <div class="column is-12">
            
        </div>
    </div>
</div>
</section>

<div id="map"></div>
<?php include 'footer.php'; ?>


<script>
document.addEventListener('DOMContentLoaded', function () {

// Get all "navbar-burger" elements
var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

// Check if there are any navbar burgers
if ($navbarBurgers.length > 0) {

// Add a click event on each of them
$navbarBurgers.forEach(function ($el) {
  $el.addEventListener('click', function () {

    // Get the target from the "data-target" attribute
    var target = $el.dataset.target;
    var $target = document.getElementById(target);

    // Toggle the class on both the "navbar-burger" and the "navbar-menu"
    $el.classList.toggle('is-active');
    $target.classList.toggle('is-active');

  });
});
}

});
</script>

<script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 19.1092848, lng: -98.2427525},
          zoom: 17
        });

        marker = new google.maps.Marker({
          position: {lat: 19.109011, lng: -98.241792},
          map: map
        });
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAiuF9lHSW8V46fuBkYyEPRLQ-FrL6_oDg&callback=initMap"
    async defer></script>
<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
</body>
</html>