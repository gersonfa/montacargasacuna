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
  <a class="navbar-item is-active" href="servicios.php">
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
        
        <div class="columns is-multiline">
                <div class="column is-6">
                <h1 class="title">Servicios</h1>
                    <div class="content">
                        <ul>
                            <li>Renta y Venta de Montacargas Nuevos y Usados </li>
                            <li>Refacciones de todas las Marcas.</li>
                            <li>Servicio de Montacargas Combustión y Eléctricos.</li>
                            <li>Mantenimiento Preventivo y Correctivo</li>
                            <li>Detección de Necesidades de Capacitación </li>
                            <li>Curso para Operadores </li>
                            <li>Venta y Servicio de Baterías Industriales </li>
                            <li>Grúas de Plataforma hasta 20 Tons.</li>
                        </ul>
                    </div>
                </div>
                <div class="column is-6">
                    <img class="img-center" src="images/smenor.PNG" alt="">
                    <br>
                    <img class="img-center" src="images/smayor.PNG" alt="">
                </div>
                <div class="column is-6">
                    <br>
                    <img class="img-center" style="border-radius: 10px" src="./images/IMG_20171129_085434.jpg" alt="">
                </div>
                <div class="column is-6">
                    <br>
                    <div class="content">
                        <h2 class="subtitle">Otros servicios</h2>
                        <ul>
                            <li>Transporte de grúa de plataforma</li>
                            <li>Renta de Montacargas (CAP de 2 a 16 tons.) por día, mes y año. </li>
                            <li>Maniobras con o sin operador </li>
                            <li>Operadores de montacargas </li>
                            <li>Cursos de capacitación para operadores registrados ante la secretaria del trabajo</li>
                        </ul>
                    </div>
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