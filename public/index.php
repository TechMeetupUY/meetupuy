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
                <!--
                <div class="row">
                    <div class="span12">
                        <div class="callout well">
                            <p>
                                <a class="btn btn-primary btn-success btn-large" href="/convocatoria">
                                    Ya queda poco, registrate ahora.
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </p>
                            <p>Pagá tu entrada en Red Pagos Colectivo No: 34264</p>
                        </div>
                    </div>
                </div>
                -->
                <?php
                include 'registrate_row.php'
                ?>


                <hr class="dashed">
                <div class="row">
                    <div class="span12">
                        <h2>Sponsors</h2>
                    </div>
                </div>
                <div class="row sponsors">
                    <div class="span4">
                        <a class="thumbnail" href="http://guruhub.com.uy/?ref=meetup.uy" target="_blank">
                            <img alt="image" src="/img/sponsors/guruhub.png">
                        </a>
                    </div>
                    <div class="span4">
                        <a class="thumbnail" href="http://centra.com.uy/?ref=meetup.uy" target="_blank">
                            <img alt="image" src="/img/sponsors/centra.jpg">
                        </a>
                    </div>
                    <div class="span4">
                        <a class="thumbnail" href="http://www.moove-it.com/?ref=meetup.uy" target="_blank">
                            <img alt="image" src="/img/sponsors/moove-it.png">
                        </a>
                    </div>
                </div>
                <div class="row sponsors">
                    <div class="span4">
                        <a class="thumbnail" href="http://case-inc.com/?ref=meetup.uy" target="_blank">
                            <img alt="image" src="/img/sponsors/case.png">
                        </a>
                    </div>
                    <div class="span4">
                        <a class="thumbnail" href="http://d11.com.uy/?ref=meetup.uy" target="_blank">
                            <img alt="image" src="/img/sponsors/d11.png">
                        </a>
                    </div>
                    <div class="span4">
                        <a class="thumbnail" href="http://userboss.com/?ref=meetup.uy" target="_blank">
                            <img alt="image" src="/img/sponsors/userboss.jpg">
                        </a>
                    </div>
                </div>
                <div class="row sponsors">
                    <div class="span4">
                        <a class="thumbnail" href="http://newcontext.com/?ref=meetup.uy" target="_blank">
                            <img alt="image" src="/img/sponsors/new-context.png">
                        </a>
                    </div>
                    <div class="span4">
                        <a class="thumbnail" href="http://www.pyxisportal.com/?ref=meetup.uy" target="_blank">
                            <img alt="image" src="/img/sponsors/pyxis.png">
                        </a>
                    </div>
                    <div class="span4">
                        <a class="thumbnail" href="http://farm.co/?ref=meetup.uy" target="_blank">
                            <img alt="image" src="/img/sponsors/farmco.jpg">
                        </a>
                    </div>
                </div>
                <div class="row sponsors">
                    <div class="span4">
                        <a class="thumbnail" href="http://www.anii.org.uy/web/?ref=meetup.uy" target="_blank">
                            <img alt="image" src="/img/sponsors/anii.png">
                        </a>
                    </div>
                    <div class="span4">
                        <a class="thumbnail" href="http://uruit.com/?ref=meetup.uy" target="_blank">
                            <img alt="image" src="/img/sponsors/uruit.png">
                        </a>
                    </div>
                    <div class="span4">
                        <a class="thumbnail" href="http://percona.com/?ref=meetup.uy" target="_blank">
                            <img alt="image" src="/img/sponsors/percona.jpg">
                        </a>
                    </div>
                </div>
                <div class="row sponsors">
                    <div class="span4">
                        <a class="thumbnail" href="http://ingsw.com/?ref=meetup.uy" target="_blank">
                            <img alt="image" src="/img/sponsors/ingsw.png">
                        </a>
                    </div>
                    <div class="span4">
                        <a class="thumbnail" href="http://www.wyeworks.com/?ref=meetup.uy" target="_blank">
                            <img alt="image" src="/img/sponsors/wyeworks.png">
                        </a>
                    </div>
                    <div class="span4">
                        <a class="thumbnail" href="/sponsors">
                            <img alt="image" src="/img/sponsors/apoya.gif">
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="span12">
                        <hr class="dashed">
                    </div>
                </div>
                <div class="row">
                    <div class="span12">
                        <h2>Apoyan</h2>
                    </div>
                </div>
                <div class="row apoyan" style="padding-top: 10px;">
                    <div class="span10 offset1">
                        <ul class="thumbnails">
                            <li class="span2">
                                <a class="thumbnail" href="http://cuti.org.uy/?ref=meetup.uy" target="_blank">
                                    <img alt="" src="/img/apoyan/cuti.png">
                                </a>
                            </li>
                            <li class="span2">
                                <a class="thumbnail" href="http://latu21.latu.org.uy/ingenio/" target="_blank">
                                    <img alt="" src="/img/apoyan/ingenio.png">
                                </a>
                            </li>
                            <li class="span2">
                                <a class="thumbnail" href="http://montevideovalley.com/?ref=meetup.uy" target="_blank">
                                    <img alt="" src="/img/apoyan/montevideovalley.png">
                                </a>
                            </li>
                            <li class="span2">
                                <a class="thumbnail" href="http://playavalley.com/?ref=meetup.uy" target="_blank">
                                    <img alt="" src="/img/apoyan/playavalley.png">
                                </a>
                            </li>
                            <li class="span2">
                                <a class="thumbnail" href="http://aje.org.uy/?ref=meetup.uy" target="_blank">
                                    <img alt="" src="/img/apoyan/aje.png">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
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
