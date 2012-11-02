<!DOCTYPE html>
<html lang="es">
    <head>
        <?php require_once'include/head_meta.inc.php'; ?>
    </head>

    <body>
        <?php require_once 'include/navbar.inc.php'; ?>
        <div id="landing">
            <div class="container">
                <div class="row">
                    <div class="span8 offset2" style="text-align:center;">
                        <p>
                            <img src="/img/tech-meetup-logo-big.png">
                        </p>
                        <h1>conferencia para y por desarrolladores, Bienvenidos.</h1>
                    </div>

                </div>
            </div>
        </div>

        <div id="content" class="txt-middle">
            <div class="container">
                <div class="row">
                    <div class="span3 bouncy">
                        <div class="icon_wrapper">
                            <i class="icon-user"></i>
                        </div>
                        <h2>Audiencia</h2>
                        <p>Todos aquellos interesados en las últimas tecnologías del mundo de desarrolladores.</p>
                    </div>
                    <div class="span3 bouncy">
                        <div class="icon_wrapper">
                            <i class="icon-map-marker"></i>
                        </div>
                        <h2>Dónde</h2>
                        <p>Torre de las Telecomunicaciones
                            <br>
                            Av. Rondeau y Guatemala
                            <br>
                            Montevideo, UY</p>
                    </div>
                    <div class="span3 bouncy">
                        <div class="icon_wrapper">
                            <i class="icon-calendar"></i>
                        </div>
                        <h2>Cuándo</h2>
                        <p>Sábado, 3 de Noviembre de 2012
                            <br>Inicio 9:00am<br/>
                            Fin 7:15pm</p>
                    </div>
                    <div class="span3 bouncy">
                        <div class="icon_wrapper">
                            <i class="icon-money"></i>
                        </div>
                        <h2>Cuánto</h2>
                        <p>Precio único $U 400.-
                            <br>Red Pagos - Colectivo No: 34264<br>paypal: pagos@meetup.uy</p>
                    </div>
                </div>
                <?php require_once 'include/registrate_row.inc.php' ?>
                <hr class="dashed">
                <?php require_once 'include/sponsors.inc.php'; ?>
                <hr class="dashed">
                <?php require_once 'include/apoyan.inc.php'; ?>
                <hr class="dashed">
                <div class="row">
                    <div class="span12">
                        <strong>Declarado de Interés del Área de Innovación, <br>Ciencia y Tecnología para el Desarrollo.</strong>
                    </div>
                </div>
                <div class="row apoyan" style="padding-top: 10px;">
                    <div class="span4 offset4">
                        <ul class="thumbnails">
                            <li class="span2">
                                <a class="thumbnail" href="http://mec.gub.uy/?ref=meetup.uy" target="_blank">
                                    <img alt="" src="/img/apoyan/mec.png">
                                </a>
                            </li>
                            <li class="span2">
                                <a class="thumbnail" href="http://www.dicyt.gub.uy/dcc/inicio/?ref=meetup.uy" target="_blank">
                                    <img alt="" src="/img/apoyan/dicyt.png">
                                </a>
                            </li>
                        </ul>
                         <a href="/docs/mec.pdf" target="_blank"><small>decreto</small></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php require_once 'include/footer.inc.php'; ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
    <script src="/js/bootstrap.js"></script>
    <script src="/js/script.js"></script>

</body>
</html>
