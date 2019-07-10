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
  <a class="navbar-item is-active" href="implementos.php">
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

<section class="section">
<br>
    <div class="container">
        <h2 class="title">Implementos</h2>
        <h3 class="subtitle">Contamos con una amplía gama de Aditamentos, Horquillas y Accesorios para Montacargas. 
        Somos distribuidores de la marca KAUP y Cascade.</h3>
        <div class="columns">
            <div class="column is-4">
                <div class="content">
                <h4>KAUP</h4>
                    <ul>
                        <li>Aditamentos telescópicos</li>
                        <li>Estabilizadores de carga</li>
                        <li>Horquillas telescópicas</li>
                        <li>Pinzas par balas y celulosa</li>
                        <li>Pinzas rotativas para bobinas</li>
                        <li>Pinzas para balas 2T413</li>
                        <li>Pinzas para electrodomésticos</li>
                        <li>Pinzas para ladrillos y bloques</li>
                        <li>Posicionadores de horquillas T160</li>
                    </ul>

                    <h4>Cascade</h4>
                    <ul>
                        <li>Desplazadores laterales</li>
                        <li>Posicionadores de horquillas</li>
                        <li>Pinzas para bobinas de papel</li>
                        <li>Empujadores/Recogedores</li>
                        <li>Pinzas para Cajas de Cartón</li>
                        <li>Manipuladores de cargas múltiples</li>
                        <li>Cargadora por capas Layer Picker</li>
                        <li>Pesaje móvil</li>
                    </ul>
                </div>
            </div>
            <div class="column is-8">
                <img class="img-center" src="images/kaup_logo.jpg" alt="">
                <br>
                <img class="img-center" src="images/kaup_implemento.jpg" alt="">
            </div>
        </div>

    <br><br>
        <div class="columns">
          <div class="column is-3">
            <img src="images/cascade/Sideshifter-55F-SSS_800x600.png" alt="" class="img-center">
          </div>
          <div class="column is-3">
          <img src="images/cascade/ForkPositioner_K-Series.png" alt="" class="img-center">
          </div>
          <div class="column is-3">
            <img src="images/cascade/PRC_MainLineup.png" alt="" class="img-center">
          </div>
          <div class="column is-3">
          <img src="images/cascade/Rotator_65G.png" alt="" class="img-center">
          </div>
        </div>
    </div>
</section>
    
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