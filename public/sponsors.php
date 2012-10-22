<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once("head_meta.php"); ?>
    </head>

    <body>

        <?php require_once("navbar.php"); ?>

        <div id="header">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <h1>¿Querés apoyar la conferencia?</h1>
                    </div>
                </div>
            </div>
        </div>

        <div id="content">
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

                    <div class="span6 offset3">
                        <div class="product-plan">
                            <ul class="unstyled plans">
                                <li>
                                    <div class="name">
                                        <h3>Deploy</h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="price">
                                        <h3>U$S 500 <small>+ imp.</small></h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="feature">
                                        <h4><i class="icon-user"></i> 4 Entradas a la conferencia</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="feature">
                                        <h4><i class="icon-star"></i> Logo en la web.</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="feature">
                                        <h4><i class="icon-eye-open"></i> Un roll-up banner en el hall mientras dure la conferencia.*</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="feature">
                                        <h4><i class="icon-envelope"></i> Oportunidad de envío de correo a asistentes (que lo permitan).</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="feature">
                                        <h4><i class="icon-volume-up"></i> Menciones durante la conferencia.</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="action">
                                        <a href="mailto:info@meetup.uy?subject=MeetupUy Apoyo - Deploy" class="btn btn-primary btn-action">Seleccionar</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <p><small>* El roll-up banner lo proporcionará el sponsor.</small></p>
                    </div>

                </div>

                <?php
                include './include/sponsors.inc.php';
                ?>
            </div>
        </div>

        <?php require_once("footer.php"); ?>

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