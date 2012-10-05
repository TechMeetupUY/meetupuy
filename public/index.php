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
                    <div class="span10 offset1" style="text-align:center;">
                        <p>
                            <img src="/img/tech-meetup-logo-big.png">
                        </p>
                        <h1>Bienvenidos a la primer conferencia para desarrolladores en Uruguay.</h1>

<!-- <p><a href="#" class="btn btn-primary btn-action">Get Started Now</a></p>  -->
                    </div>
                    <!--
                    <div class="span7">
                      <iframe class="video" src="http://player.vimeo.com/video/38498748?title=0&amp;byline=0&amp;portrait=0&amp;color=38e8ae" width="500" height="281"></iframe>
                    </div>
                    -->
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
                        <p>Sábado, 3 de Noviembre de 2012</p>
                        <p>Inicio 9:00am</p>
                    </div>
                    <div class="span3 bouncy">
                        <div class="icon_wrapper">
                            <i class="icon-money"></i>
                        </div>
                        <h2>Cuánto</h2>
                        <p>Precio único $U 400.-</p>
                    </div>
                </div>
                <hr class="dashed">
                <div class="row">
                    <div class="span12">
                        <h2>Algunos de los temas que trataremos:</h2>
                    </div>
                </div>
                <div class="row sponsors">
                    <div class="span4">
                        <div class="lista-temas">
                            <ul class="unstyled plans">
                                <li >
                                    <div class="name">
                                        <h3>Proceso de desarrollo</h3>
                                    </div>
                                </li>
                                <li class="tema">Trabajo en equipo / scrum / agile</li>
                                <li class="tema">Integración continua</li>
                                <li class="tema">Review</li>
                                <li class="tema">Continuous delivery</li>
                                <li class="tema">Testing / QA</li>
                            </ul>
                        </div>
                    </div>

                    <div class="span4">
                        <div class="lista-temas">
                            <ul class="unstyled plans">
                                <li>
                                    <div class="name">
                                        <h3>Infraestructura y producción</h3>
                                    </div>
                                </li>
                                <li class="tema">Monitoreo</li>
                                <li class="tema">Escalamiento y redundancia</li>
                                <li class="tema">Control de cambios / versionamiento</li>
                                <li class="tema">Deployment</li>
                            </ul>
                        </div>
                    </div>

                    <div class="span4">
                        <div class="lista-temas">
                            <ul class="unstyled plans">
                                <li>
                                    <div class="name">
                                        <h3>Mesas de discusión</h3>
                                    </div>
                                </li>
                                <li class="tema">Trabajo remoto</li>
                                <li class="tema">Experiencias reales de todo lo anterior junto!</li>
                            </ul>
                        </div>
                    </div>
                </div>

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
                        <a class="thumbnail" href="/sponsors">
                            <img alt="image" src="http://placehold.it/300x100&text=Apoyá!!">
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="span12">
                        <hr class="dashed">
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
