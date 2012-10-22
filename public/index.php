<!DOCTYPE html>
<html lang="es">
    <head>
        <?php require_once("head_meta.php"); ?>
    </head>

    <body>
        <?php require_once("navbar.php"); ?>
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
                            <br>Inicio 9:00am</p>
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
                <?php include 'registrate_row.php' ?>
                <hr class="dashed">
                <?php include './include/sponsors.inc.php'; ?>
                <div class="row">
                    <div class="span12">
                        <hr class="dashed">
                    </div>
                </div>
                <?php include './include/apoyan.inc.php'; ?>
            </div>
        </div>
    </div>
    <?php require_once("footer.php"); ?>
    <?php require_once("modals.php"); ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
    <script src="/js/bootstrap.js"></script>
    <script src="/js/script.js"></script>

</body>
</html>
