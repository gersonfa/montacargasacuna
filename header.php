<head>
    <title>Montacargas Acuña</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="./css/carousel.min.css">
</head>

<nav class="navbar is-white is-fixed-top">
  <div class="navbar-brand">
    <a class="navbar-item">
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
      <a class="navbar-item is-active" href="index.php">
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
      <a class="navbar-item" href="contacto.php">
        Contacto
      </a>
      <!-- <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link" href="/documentation/overview/start/">
          Docs
        </a>
        <div class="navbar-dropdown is-boxed">
          <a class="navbar-item" href="/documentation/overview/start/">
            Overview
          </a>
          <a class="navbar-item" href="https://bulma.io/documentation/modifiers/syntax/">
            Modifiers
          </a>
          <a class="navbar-item" href="https://bulma.io/documentation/columns/basics/">
            Columns
          </a>
          <a class="navbar-item" href="https://bulma.io/documentation/layout/container/">
            Layout
          </a>
          <a class="navbar-item" href="https://bulma.io/documentation/form/general/">
            Form
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item" href="https://bulma.io/documentation/elements/box/">
            Elements
          </a>
          <a class="navbar-item is-active" href="https://bulma.io/documentation/components/breadcrumb/">
            Components
          </a>
        </div>
      </div> -->

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