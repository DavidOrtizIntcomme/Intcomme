<!DOCTYPE html>
<html lang="es"> 

    <?php require_once "componentes/head.php"; ?>

    <body>

        <?php require_once "componentes/menu.php"; ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-1 text-white animated slideInDown">Contacto</h1>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">CONTÁCTANOS</h4>
                <h1 class="display-5 mb-4">Si tiene alguna consulta, no dude en contactarnos</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex flex-column justify-content-between h-100">
                        <div class="bg-light d-flex align-items-center w-100 p-4 mb-4">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark" style="width: 55px; height: 55px;">
                                <i class="fa fa-map-marker-alt text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Ubicación </p>
                                <a class="mb-0 h3" href="https://maps.app.goo.gl/zST3MKcPSSrscLY66" target="_blank">Intcomme Logistics</a>
                            </div>
                        </div>
                        <div class="bg-light d-flex align-items-center w-100 p-4 mb-4">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark" style="width: 55px; height: 55px;">
                                <i class="fa fa-phone-alt text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Llámanos ahora</p>
                                <a class="h3 mb-0" href="tel:3316007289" target="_blank">(33) 1600 7289</a>
                            </div>
                        </div>
                        <div class="bg-light d-flex align-items-center w-100 p-4">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark" style="width: 55px; height: 55px;">
                                <i class="fa fa-envelope-open text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Escríbenos ahora</p>
                                <a class="mb-0 text-5454cd" href="mailto:contacto@intcomme.com" target="_blank">contacto@intcomme.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Nombre</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Correo electrónico </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                    <label for="message">Mensaje</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Google Map Start -->
    <div class="container-xxl py-5 px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="d-block mx-auto w-75">
        <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3730.8415004004687!2d-103.4300780264788!3d20.757217380824997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428af575aebda4d%3A0xc29d83c24a594436!2sIntcomme%20Logistics%20S.A%20de%20C.V.!5e0!3m2!1ses!2smx!4v1707510442472!5m2!1ses!2smx" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
    </div>
    <!-- Google Map End -->


    <?php require_once "componentes/footer.php"; ?>

    </body>

    <?php require_once "componentes/scripts-js.php"; ?>

</html>