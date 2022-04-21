<head>
    <title>Montacargas Acuña</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="./css/carousel.min.css">
</head>


<div class="level" style="padding-top: 45px;">
    <div class="level-item has-text-centered">
        <a href="index.php"><img src="images/logo.png" alt="Montacargas Acuña" width="400"></a>
    </div>
</div>

<nav class="level is-mobile main-menu">
    <div class="level-item has-text-centered">
        <div>
            <a class="navbar-item" href="nosotros.php">Nosotros</a>
        </div>
    </div>
    <div class="level-item has-text-centered">
        <div>
            <a class="navbar-item" href="productos.php">Productos</a>
        </div>
    </div>
    <div class="level-item has-text-centered">
        <div>
            <a class="navbar-item" href="contacto.php">Contacto</a>
        </div>
    </div>
    <div class="level-item has-text-centered">
        <div>
            <a class="navbar-item" href="rentas.php">Renta y venta</a>
        </div>
    </div>
    <div class="level-item has-text-centered">
        <div>
            <a class="navbar-item" href="servicios.php">Servicios</a>
        </div>
    </div>
    <div class="level-item has-text-centered">
        <div>
            <div class="dropdown navbar-item">
                <div class="dropdown-trigger">
                    <button class="button btn-menu" aria-haspopup="true" aria-controls="dropdown-menu">
                        <span>Implementos y Refacciones</span>
                    </button>
                </div>
                <div class="dropdown-menu" id="dropdown-menu" role="menu">
                    <div class="dropdown-content">
                        <a href="implementos.php" class="dropdown-item">
                            Implementos
                        </a>
                        <a href="refacciones.php" class="dropdown-item">
                            Refacciones
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</nav>

<style>
.navbar-item {
    background-color: blue;
    color: white;
    text-transform: uppercase;
    border-radius: 10px;
}

.main-menu {
    padding-top: 20px;
    padding-bottom: 20px;
    border-top: 3px solid #ff6d37;
    border-bottom: 3px solid #ff6d37;
}

.btn-menu {
    background-color: blue;
    box-shadow: none;
    color: white;
    padding: 0;
    border: none;
    height: auto;
}

.btn-menu:hover {
    color: white;
}

.btn-menu.is-active {
    color: white;
}

/* #dropdown-menu {
    background-color: blue;
    color: white;
} */

.button.is-active,
.button:active,
.button.is-focused,
.button:focus {
    border-color: #4a4a4a;
    color: white !important;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {

    // Get all "navbar-burger" elements
    var $dropdown = document.querySelector('.dropdown')


    $dropdown.addEventListener('click', function() {

        // Toggle the class on both the "navbar-burger" and the "navbar-menu"
        $dropdown.classList.toggle('is-active');
        //$target.classList.toggle('is-active');

    });


});
</script>