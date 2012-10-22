<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once 'include/head_meta.inc.php'; ?>
    </head>

    <body>

        <?php require_once 'include/navbar.inc.php'; ?>

        <div id="header">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <h1>Estos son los temas que trataremos:</h1>
                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">

                <div class="row">
                    <div class="span9">
                        <div class="accordion" id="accordion2">
                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="" href="#collapseCI">
                                        <i class="icon-chevron-right"></i> Continuous Improvement - o cómo poner los robots de tu lado.
                                    </a>
                                </div>
                                <div id="collapseCI" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <p>
                                            <a href="http://inconcertcc.com/" target="_blank">inConcert</a> es una empresa de plaza que produce software de telecomunicaciones. Nuestro último producto es el Social Desktop o "<strong>i6</strong>".
                                        </p>
                                        <p>
                                            i6 está compuesto por varios servicios (17) y una larga lista de proyectos internos (30+).
                                        </p>
                                        <p>
                                            La cantidad interacciones entre la funcionalidad de cada uno de estos módulos y las formas de configurarlos para comprobar calidad, performance, etc nos llevaron a que el equipo implementara un par de "técnicas" interesantes:
                                        <ul>
                                            <li>Integración Continua</li>
                                            <li>(y luego) Entrega continua.</li>
                                        </ul>
                                        </p>
                                        <p>
                                            La intención de la charla es introducir la problemática y los mecanismos que utilizamos para simplificar el desarrollo, la configuración de sistemas de prueba y de producción y la infraestructura que le da soporte a estas técnicas.
                                        </p>
                                        <p>
                                            Vamos a hablar de los problemas que implementar estas técnicas trae y como se solucionan de la misma manera que se solucionan los problemas de desplegar la aplicación a producción: automatización, integración y entrega continuas.
                                        </p>
                                        <p>
                                            Finalmente vamos a presentar una pequeña demo de como usamos herramientas para automatizar la creación de un pequeño cluster de Jenkins - un server de integración continua.
                                        </p>
                                        <p>
                                            Todo el material usado para la demo va a estar disponible para que los asistentes puedan investigar a partir de donde los dejamos en la charla.
                                        </p>
                                        <p>
                                        <ul class="thumbnails">
                                            <li class="span1">
                                                <a class="thumbnail" data-toggle="modal" href="#silva">
                                                    <img src="/img/oradores/fede_silva.jpg">
                                                </a>
                                            </li>
                                            <li class="span1">
                                                <a class="thumbnail" data-toggle="modal" href="#moreno">
                                                    <img src="/img/oradores/sebastian_moreno.jpg">
                                                </a>
                                            </li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="" href="#collapseDDP">
                                        <i class="icon-chevron-right"></i> Design driven process - Proceso de innovación
                                    </a>
                                </div>
                                <div id="collapseDDP" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <p></p>
                                        <p>
                                        <ul class="thumbnails">
                                            <li class="span1">
                                                <a class="thumbnail" data-toggle="modal" href="#camargo">
                                                    <img src="/img/oradores/gabriel_camargo.jpg">
                                                </a>
                                            </li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="" href="#collapseAgile">
                                        <i class="icon-chevron-right"></i> Sr. Pedro Fullstack, a sus órdenes. [Agile / Scrum]
                                    </a>
                                </div>
                                <div id="collapseAgile" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <p>
                                            Cuando uno comienza un desafío propio debe estar preparado para abordar la heterogeneidad de muchas labores, pero aporta, debe ser capaz de reaccionar a tiempo de los cambios que tiene el contexto en el cual desarrollo su emprendimiento, te quiero contar algunas técnicas de Scrum y Agile que te pueden dar una mano en eso, por eso, te presento al Sr. Pedro Fullstack, él te va contar como aprendió que lo mas importante es adaptarse rápidamente.
                                        </p>
                                        <p>
                                            Pretendo hacer una breve descripción de técnicas que puedan ayudar en la preventa, venta y desarrollo de un producto usando agile y scrum, valiéndome de una historia vivida por Pedro Fullstack.
                                        </p>
                                        <p>
                                        <ul class="thumbnails">
                                            <li class="span1">
                                                <a class="thumbnail" data-toggle="modal" href="#ledesma">
                                                    <img src="/img/oradores/ledesma_square.jpg">
                                                </a>
                                            </li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="" href="#collapseMono">
                                        <i class="icon-chevron-right"></i> Desarrollo mobile con Mono.
                                    </a>
                                </div>
                                <div id="collapseMono" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <p>La experiencia de Paganza desarrollando una app nativa para iOS y Android usando <a href="http://www.mono-project.com/" target="_blank">Mono</a>.</p><p>Hablaremos de que es Mono y tecnologias asociadas como <a href="http://xamarin.com/monotouch" target="_blank">MonoTouch</a> y Mono for Android. Cómo es desarrollar con estas herramientas, problemas encontrados y posibles caminos a seguir.</p>
                                        <p>
                                        <ul class="thumbnails">
                                            <li class="span1">
                                                <a class="thumbnail" data-toggle="modal" href="#martinez">
                                                    <img src="/img/oradores/maximo_martinez.jpg">
                                                </a>
                                            </li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="" href="#collapseVagrant">
                                        <i class="icon-chevron-right"></i> Deploy de aplicaciones con Vagrant.
                                    </a>
                                </div>
                                <div id="collapseVagrant" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <p></p>
                                        <p>
                                        <ul class="thumbnails">
                                            <li class="span1">
                                                <a class="thumbnail" data-toggle="modal" href="#ipar">
                                                    <img src="/img/oradores/fernando_ipar.jpg">
                                                </a>
                                            </li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="" href="#collapseHtml5">
                                        <i class="icon-chevron-right"></i> Mobile / HTML5.
                                    </a>
                                </div>
                                <div id="collapseHtml5" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <p></p>
                                        <p>
                                        <ul class="thumbnails">
                                            <li class="span1">
                                                <a class="thumbnail" data-toggle="modal" href="#firtman">
                                                    <img src="/img/oradores/maximiliano_firtman.jpg">
                                                </a>
                                            </li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="" href="#collapseReview">
                                        <i class="icon-chevron-right"></i> CI + Review
                                    </a>
                                </div>
                                <div id="collapseReview" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <p></p>
                                        <p>
                                        <ul class="thumbnails">
                                            <li class="span1">
                                                <a class="thumbnail" data-toggle="modal" href="#gomez">
                                                    <img src="/img/oradores/adrian.jpg">
                                                </a>
                                            </li>
                                            <li class="span1">
                                                <a class="thumbnail" data-toggle="modal" href="#zas">
                                                    <img src="/img/oradores/gian.jpg">
                                                </a>
                                            </li>
                                            <li class="span1">
                                                <a class="thumbnail" data-toggle="modal" href="#arreche">
                                                    <img src="/img/oradores/gonzalo.jpg">
                                                </a>
                                            </li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="" href="#collapseKinect">
                                        <i class="icon-chevron-right"></i> Desarrollo de aplicaciones con Kinect, ventajas y limitaciones.
                                    </a>
                                </div>
                                <div id="collapseKinect" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <p></p>
                                        <p>
                                        <ul class="thumbnails">
                                            <li class="span1">
                                                <a class="thumbnail" data-toggle="modal" href="#rivera">
                                                    <img src="/img/oradores/rodrigo_rivera.png">
                                                </a>
                                            </li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>En los intervalos hablaremos de mucha <big>Tecnología</big> y se hará mucho <big>Networking</big>... tendremos <big>sorpresas</big> en todas las instancias, no te lo podes perder - <a href="/convocatoria"><strong>Registrate aquí!</strong></a></p>
                    </div>
                    <div class="span3">
                        <a class="thumbnail" >
                            <img src="/img/meetup_uy_charlas.jpg">
                        </a>
                        <p style="text-align: center;"><small>El órden de las charlas se dará a conocer en el momento de la acreditación.</small></p>
                    </div>
                </div>



            </div>
        </div>

        <?php require_once 'include/footer.inc.php'; ?>
        <?php require_once("include/oradores_modals.inc.php"); ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
        <script src="js/bootstrap.js"></script>
        <script>
            $(window).load(function() {
                $("#totop").click(function () {
                    $("body, html").animate({
                        scrollTop: 0
                    }, 300);
                    return false;
                });
            });
        </script>

    </body>
</html>