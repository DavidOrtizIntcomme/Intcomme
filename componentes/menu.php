<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border position-relative text-5454cd" style="width: 6rem; height: 6rem;" role="status"></div>
    <img class="position-absolute top-50 start-50 translate-middle" src="img/logo-icono.png" height="40" alt="Icon">
</div>
<!-- Spinner End -->


<!-- Topbar Start -->
<div class="container-fluid bg-dark p-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center py-3 me-3">
                <a class="text-body px-2" href="tel:3316007289" target="_blank"><i class="fa fa-phone-alt me-2"></i>(33) 1600 7289</a>
                <a class="text-body px-2" href="mailto:contacto@intcomme.com" target="_blank"><i class="fa fa-envelope-open me-2"></i>contacto@intcomme.com</a>
            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center">
                <a class="btn btn-sm-square btn-outline-body me-1" href="https://www.facebook.com/Intcomme-824596157725162/" target="_blank"><i class="fab fa-facebook-f"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <a href="index" class="navbar-brand ms-4 ms-lg-0">
        <h1 class="text-primary m-0"><img class="me-3" src="img/logo.png" alt="Icon" height="70"></h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto px-4 py-2 p-lg-0 ">
            <?php
                switch (basename($_SERVER['PHP_SELF'])) {
                    case "contacto.php":
                        ?>
                            <a href="index" class="nav-item nav-link text-5454cd">Inicio</a>
                            <a href="nuestra-empresa" class="nav-item nav-link text-5454cd">Nuestra Empresa</a>
                            <a href="servicios" class="nav-item nav-link text-5454cd">Servicios</a>
                            <a href="contacto" class="nav-item nav-link text-5454cd active">Contacto</a>
                        <?php 
                    break;
                    case "servicios.php":
                        ?>
                            <a href="index" class="nav-item nav-link text-5454cd">Inicio</a>
                            <a href="nuestra-empresa" class="nav-item nav-link text-5454cd">Nuestra Empresa</a>
                            <a href="servicios" class="nav-item nav-link text-5454cd active">Servicios</a>
                            <a href="contacto" class="nav-item nav-link text-5454cd">Contacto</a>
                        <?php 
                    break;
                    case "nuestra-empresa.php":
                        ?>
                            <a href="index" class="nav-item nav-link text-5454cd">Inicio</a>
                            <a href="nuestra-empresa" class="nav-item nav-link text-5454cd active">Nuestra Empresa</a>
                            <a href="servicios" class="nav-item nav-link text-5454cd">Servicios</a>
                            <a href="contacto" class="nav-item nav-link text-5454cd">Contacto</a>
                        <?php 
                    break;
                    default:
                        ?>
                            <a href="index" class="nav-item nav-link text-5454cd active">Inicio</a>
                            <a href="nuestra-empresa" class="nav-item nav-link text-5454cd">Nuestra Empresa</a>
                            <a href="servicios" class="nav-item nav-link text-5454cd">Servicios</a>
                            <a href="contacto" class="nav-item nav-link text-5454cd">Contacto</a>
                        <?php 
                    break;
                }
            ?>
        </div>
    </div>
</nav>
<!-- Navbar End -->