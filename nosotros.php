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
  <a class="navbar-item is-active" href="nosotros.php">
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

<br><br>
<div class="section" id="nosotros">
        <div class="container">
            <div class="columns is-multiline">
                <div class="column is-6">
                <br>
                <br>
                <br>
                    <h2 class="title">Nosotros</h2>
                    <p>Montacargas Acuña, empresa líder en el ramo de montacargas y manejo de materiales con mas de 
                    20 años en el mercado. Es un orgullo para nosotros poner a su alcance productos y servicios de la 
                    más alta calidad y soporte técnico.</p>
                </div>
                <div class="column is-6">
                    <img class="img-center" src="./images/taller.jpg" style="border-radius: 10px; max-height: 450px;" alt="">
                </div>
                <div class="column is-6">
                    <div class="content">
                        <h2 class="subtitle">Misión</h2>
                        <ul>
                            <li>Somos una empresa dedicada a la venta, renta y servicio para equipo de manejo de carga.</li>
                            <li>Ser una empresa socialmente responsable con el medio ambiente.</li>
                            <li>Alcanzar la satisfacción del cliente mediante una alta calidad en el servicio, cumpliendo con nuestras metas en tiempo, y utilizando las refacciones de la más alta calidad.</li>
                        </ul>
                    </div>
                </div>
                <div class="column is-6">
                    <div class="content">
                        <h2 class="subtitle">Visión</h2>
                        <ul>
                            <li>Ser una empresa líder en la venta, renta y servicio en equipos para manejo de carga</li>
                            <li>Dar a conocer las marcas que distribuimos  y posicionarlas en el mercado</li>
                            <li>Ofrecer a nuestros clientes un servicio de mantenimiento de alta calidad.</li>
                            <li>Darle confianza al cliente de que somos la mejor opción en venta, renta y servicio de montacargas.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="section">
        <div class="container">
            <h2 class="title">Instalaciones</h2>
            <div class="columns is-multiline">
                <div class="column is-3">
                    <img src="http://via.placeholder.com/350x200" alt="">
                </div>
                <div class="column is-3">
                    <img src="http://via.placeholder.com/350x200" alt="">
                </div>
                <div class="column is-3">
                    <img src="http://via.placeholder.com/350x200" alt="">
                </div>
                <div class="column is-3">
                    <img src="http://via.placeholder.com/350x200" alt="">
                </div>
            </div>
        </div>
    </div> -->
    
    <div class="section">
        <div class="container">
            <h2 class="title">Clientes</h2>
            <p>
            Reconocemos en nuestros clientes, un elemento vital en el desarrollo de nuestras actividades ya que es un 
            imperativo esencial de nuestra compañía ayudar al éxito económico y la viabilidad futura de nuestros clientes.
            </p>
            <div class="level">
                <div class="level-item">
                    <img src="./clients/37da304.jpg" alt="" class"img-center">
                </div>
                <div class="level-item">
                <img src="./clients/psw.png" alt="" style="width:80%;">
                </div>
                <div class="level-item">
                    <img src="./clients/customLogo.jpg" alt="" >
                </div>
                <div class="level-item">
                    <img src="./clients/ferri.jpg" alt="">
                </div>
                </div>
                <div class="level">
                <div class="level-item">
                    <img src="./clients/iaclogo.gif" alt="">
                </div>
                <div class="level-item">
                    <img src="./clients/interceramic.png" alt="">
                </div>
                <div class="level-item">
                    <img src="./clients/International_Paper.png" alt="">
                </div>
                <div class="level-item">
                    <img src="./clients/agr.png" alt="">
                </div>
            </div>

           <!--  <img src="./clients/soyamigo.png" style="display:block; margin:auto; margin-top: 1em; border-radius: 10px;" alt=""> -->
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