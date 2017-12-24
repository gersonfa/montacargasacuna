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
  <a class="navbar-item is-active" href="rentas.php">
    Rentas
  </a>
  <a class="navbar-item" href="nosotros.php">
    Nosotros
  </a>
  <a class="navbar-item" href="contacto.php">
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

<section class="section" style="margin-top: 2em;">
    <dic class="container">
        <div class="columns">
          <div class="column is-4">

          <h2 class="title">Rentas</h2>
              <ul>
                  <li>Montacargas 2, 2.5 a 3 Toneladas GAS Y ELÉCTRICO</li>
                  <li>Montacargas 4 toneladas  GAS</li>
                  <li>Montacargas 5 a 6 toneladas  GAS</li>
                  <li>Montacargas 7 toneladas  GAS</li> 
                  <li>Montacargas 10 toneladas DIESEL </li>
                  <li>Montacargas 16 toneladas DIESEL</li>
              </ul>
          </div>
          <div class="column is-8">
              <div class="columns is-multiline">
                <div class="column is-6">
              <img src="./images/rentas/renta1.jpeg" alt="">
              <h3>2.5 Toneladas</h3>
                </div>

                <div class="column is-6">
              <img src="./images/rentas/renta2.jpeg" alt="">
              <h3>2.5 Toneladas</h3>
                </div>

                <div class="column is-6">
              <img src="./images/rentas/10ton.png" alt="">
              <h3>10 Toneladas</h3>
                </div>

                <div class="column is-6">
              <img src="./images/rentas/IMG_0153.JPG" alt="">
              <h3>16 Toneladas</h3>
                </div>

              </div>
          </div>
        </div>
    </dic>
</section>

<style>
  li {
    margin-top: 2em;
  }

  img {
    border-radius: 5px;
  }
</style>


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
</body>
</html>