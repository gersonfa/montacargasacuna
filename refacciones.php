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
  <a class="navbar-item is-active" href="refacciones.php">
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


<div class="section">
    <br>
    <div class="container">
        <h2 class="title">Refacciones</h2>
        <p>Montacargas Acuña distribuye únicamente refacciones de la mejor calidad para montacargas y 
        plataformas de elevación, además ofrecemos el soporte
        necesario para su instalación y mantenimiento.</p>
        <p>Compartimos el mismo sentido de urgencia y nuestro compromiso es resolver a la brevedad la adquisición de 
        sus refacciones.</p>
        <p>Si no tenemos el producto, lo encontramos por usted. Nuestras refacciones son garantizadas.</p>
        <p>Ponemos a su disposición <a href="./contacto.php">nuestros contactos</a> para atender con gusto su cotización.</p>
        <br><br>
        <div class="columns is-multiline">
            <div class="column is-3">
                <img src="./images/refacciones/1.png" alt="">
            </div>
            <div class="column is-3">
                <img src="./images/refacciones/2.png" alt="">
            </div>
            <div class="column is-3">
                <img src="./images/refacciones/3.png" alt="">
            </div>
            <div class="column is-3">
                <img src="./images/refacciones/4.png" alt="">
            </div>
            <div class="column is-3">
                <img src="./images/refacciones/5.png" alt="">
            </div>
            <div class="column is-3">
                <img src="./images/refacciones/6.png" alt="">
            </div>
            <div class="column is-3">
                <img src="./images/refacciones/7.png" alt="">
            </div>
            <div class="column is-3">
                <img src="./images/refacciones/8.png" alt="">
            </div>
            <div class="column is-3">
                <img src="./images/refacciones/9.png" alt="">
            </div>
            <div class="column is-3">
                <img src="./images/refacciones/10.png" alt="">
            </div>
            <div class="column is-3">
                <img src="./images/refacciones/11.png" alt="">
            </div>
            <div class="column is-3">
                <img src="./images/refacciones/12.png" alt="">
            </div>
            <div class="column is-3">
                <img src="./images/refacciones/13.png" alt="">
            </div>
            <div class="column is-3">
                <img src="./images/refacciones/14.png" alt="">
            </div>
            <div class="column is-3">
                <img src="./images/refacciones/15.png" alt="">
            </div>
            <div class="column is-3">
                <img src="./images/refacciones/16.png" alt="">
            </div>
            <div class="column is-3">
                <img src="./images/refacciones/17.png" alt="">
            </div>
            <div class="column is-3">
                <img src="./images/refacciones/18.png" alt="">
            </div>
            <div class="column is-3">
                <img src="./images/refacciones/19.png" alt="">
            </div>
            <div class="column is-3">
                <img src="./images/refacciones/20.png" alt="">
            </div>
            <div class="column is-3">
                <img src="./images/refacciones/21.png" alt="">
            </div>
            <div class="column is-3">
                <img src="./images/refacciones/22.png" alt="">
            </div>
            <div class="column is-3">
                <img src="./images/refacciones/23.png" alt="">
            </div>
            <div class="column is-3">
                <img src="./images/refacciones/24.png" alt="">
            </div>
            <div class="column is-3">
                <img src="./images/refacciones/25.png" alt="">
            </div>
        </div>
    </div>
</div>
    

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