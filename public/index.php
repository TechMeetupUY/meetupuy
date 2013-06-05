<?php
    Header("Location:/v2013");
    exit();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <?php require_once'include/head_meta.inc.php'; ?>
    </head>

    <body>
        <?php require_once 'include/navbar.inc.php'; ?>
        <div id="landing">
            <div class="container">
                <div class="row-fluid">
                    <div class="span8 offset2" style="text-align:center;">
                        <h1>conferencia para y por desarrolladores.</h1>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span8 offset2" style="text-align:center;">
                        <!--
                        <p>
                            <img src="/img/tech-meetup-logo-big.png">
                        </p>
                        -->
                        <br>
                        <div id="myCarousel" class="carousel slide">
                            <div class="carousel-inner">
                                <?php
                                for ($i = 1; $i <= 14; $i++) {
                                    $active = '';
                                    if ($i == 1) {
                                        $active = 'active';
                                    }
                                    echo '<div class="' . $active . ' item"><a href="/v2012"><img alt="" src="/img/2012_presentacion/tm2012-' . sprintf('%02d', $i) . '.jpg"></a></div>';
                                }
                                ?>
                            </div>
                            <a class="carousel-control left" href="#myCarousel" data-slide="prev"><i class="icon-chevron-left"></i></a>
                            <a class="carousel-control right" href="#myCarousel" data-slide="next"><i class="icon-chevron-right"></i></a>
                        </div>
                        <br>
                        <a class="btn btn-primary btn-action" href="/v2012">Resúmen de la edición v2012</a>
                    </div>

                </div>

            </div>
        </div>

        <div id="content" class="txt-middle">
            <div class="container">
                <div class="row-fluid">
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
                <hr class="dashed">
                <div class="row">
                    <div class="span6">
                        <a class="twitter-timeline" href="https://twitter.com/meetupUY" data-widget-id="264473265169375232">Tweets por @meetupUY</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

                    </div>
                    <div class="span6">
                        <a class="twitter-timeline" href="https://twitter.com/search?q=%23meetupUY" data-widget-id="264470233258008576">Tweets sobre "#meetupUY"</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


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

    <?php require_once 'include/js.inc.php'; ?>

</body>
</html>
