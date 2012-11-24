<?php
    $title = "Apoyan";
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <?php require_once 'include/head_meta.inc.php'; ?>
    </head>

    <body>

        <?php require_once 'include/navbar.inc.php'; ?>

        <div id="header">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <h1>edición v2012</h1>
                    </div>
                </div>
            </div>
        </div>

        <div id="content" class="resumen">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <p>
                            Queremos crear una <strong>conferencia de primera</strong> accesible a la mayor cantidad de desarrolladores posible.
                            Su apoyo ayudará a pagar los costos locativos y operativos de la misma.
                            Para hacerlo simple creamos el siguiente paquete. Si tenés alguna idea u otra forma de apoyar mandanos
                            un <a href="mailto:info@meetup.uy">correo</a>, tenemos flexibilidad y podemos trabajar con ustedes para diseñar
                            un paquete adecuado.
                        </p>
                    </div>
                </div>

                <div class="row">

                    <div class="span4">
                        <div class="product-plan resumen">
                            <ul class="unstyled plans">
                                <li>
                                    <div class="feature">
                                       <h3>3/11/2012</h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="feature">
                                        <h4>cuándo</h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="span4">
                        <div class="product-plan resumen">
                            <ul class="unstyled plans">
                                <li>
                                    <div class="feature">
                                       <h3 style="font-size: 30px;">Torre Telecom. Antel</h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="feature">
                                        <h4>dónde</h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="span4">
                        <div class="product-plan resumen">
                            <ul class="unstyled plans">
                                <li>
                                    <div class="feature">
                                       <h3>#meetupUY</h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="feature">
                                        <h4>hashtag</h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="row resumen">

                    <div class="span4">
                        <div class="product-plan resumen">
                            <ul class="unstyled plans">
                                <li>
                                    <div class="feature">
                                       <h3 class="corto">245</h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="feature">
                                        <h4>asistentes</h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="span4">
                        <div class="product-plan resumen">
                            <ul class="unstyled plans">
                                <li>
                                    <div class="feature">
                                       <h3 class="corto">30+</h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="feature">
                                        <h4>becas</h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="span4">
                        <div class="product-plan resumen">
                            <ul class="unstyled plans">
                                <li>
                                    <div class="feature">
                                       <h3 class="corto">10+</h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="feature">
                                        <h4>tecnologías</h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="row resumen">

                    <div class="span4">
                        <div class="product-plan resumen">
                            <ul class="unstyled plans">
                                <li>
                                    <div class="feature">
                                       <h3 class="corto">12</h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="feature">
                                        <h4>oradores</h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="span4">
                        <div class="product-plan resumen">
                            <ul class="unstyled plans">
                                <li>
                                    <div class="feature">
                                       <h3 class="corto">9</h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="feature">
                                        <h4>tracks</h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="span4">
                        <div class="product-plan resumen">
                            <ul class="unstyled plans">
                                <li>
                                    <div class="feature">
                                       <h3 class="corto">20</h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="feature">
                                        <h4>sponsors</h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>


            </div>
        </div>

        <?php require_once 'include/footer.inc.php'; ?>

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