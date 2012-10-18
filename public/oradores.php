<!DOCTYPE html>
<html lang="es">
    <head>
        <?php require_once("head_meta.php"); ?>
    </head>

    <body>

        <?php require_once("navbar.php"); ?>

        <div id="header">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <h1>Algunos de nuestros oradores:</h1>
                    </div>
                </div>
            </div>
        </div>

        <div id="content" class="lista-oradores">
            <div class="container">
                <div class="row">

                    <div class="span4">
                        <div class="thumbnail">
                            <a data-toggle="modal" href="#ledesmaModal"><img alt="image" src="/img/oradores/ledesma_square.jpg"></a>
                        </div>
                        <h2 class="sub">Gabriel Ledesma <a data-toggle="modal" href="#ledesmaModal"><span class="icon-plus" data-original-title="Leer más"></a></span></h2>
                    </div>
                    <div class="span4">
                        <div class="thumbnail">
                            <a data-toggle="modal" href="#balinoModal"><img alt="image" src="/img/oradores/enriqueb_square.jpg"></a>
                        </div>
                        <h2 class="sub">Enrique Baliño <a data-toggle="modal" href="#balinoModal"><span class="icon-plus" data-original-title="Leer más"></span></a></h2>
                    </div>
                    <div class="span4">
                        <div class="thumbnail">
                            <a data-toggle="modal" href="#silvaModal"><img alt="image" src="/img/oradores/fede_silva.jpg"></a>
                        </div>
                        <h2 class="sub">Fede Silva <a data-toggle="modal" href="#silvaModal"><span class="icon-plus" data-original-title="Leer más"></a></span></h2>
                    </div>
                </div>

                <hr class="dashed">

                <div class="row">
                    <div class="span4">
                        <div class="thumbnail badge-inside">
                            <a data-toggle="modal" href="#morenoModal"><img alt="image" src="/img/oradores/sebastian_moreno.jpg"></a>
                        </div>
                        <h2 class="sub">Sebastián Moreno <a data-toggle="modal" href="#morenoModal"><span class="icon-plus" data-original-title="Leer más"></a></h2>
                    </div>
                    <div class="span4">
                        <div class="thumbnail badge-inside">
                            <!--<span class="badge green">Beta</span> -->
                            <a data-toggle="modal" href="#martinezModal"><img alt="image" src="/img/oradores/maximo_martinez.jpg"></a>
                        </div>
                        <h2 class="sub">Máximo Martinez <a data-toggle="modal" href="#martinezModal"><span class="icon-plus" data-original-title="Leer más"></a></h2>
                    </div>
                    <div class="span4">
                        <div class="thumbnail badge-inside">
                            <span class="badge orange">Invitado</span>
                            <a data-toggle="modal" href="#firtmanModal"><img alt="image" src="/img/oradores/maximiliano_firtman.jpg"></a>
                        </div>
                        <h2 class="sub">Maximiliano Firtman <a data-toggle="modal" href="#firtmanModal"><span class="icon-plus" data-original-title="Leer más"></a></h2>
                    </div>
                </div>
                <hr class="dashed">
                <div class="row">
                    <div class="span4">
                        <div class="thumbnail">
                            <a data-toggle="modal" href="#iparModal"><img alt="image" src="/img/oradores/fernando_ipar.jpg"></a>
                        </div>
                        <h2 class="sub">Fernando Ipar <a data-toggle="modal" href="#iparModal"><span class="icon-plus" data-original-title="Leer más"></a></h2>
                    </div>
                    <div class="span4">
                        <div class="thumbnail">
                            <a data-toggle="modal" href="#gomezModal"><img alt="image" src="/img/oradores/adrian.jpg"></a>
                        </div>
                        <h2 class="sub">Adrian Gomez <a data-toggle="modal" href="#gomezModal"><span class="icon-plus" data-original-title="Leer más"></a></h2>
                    </div>
                    <div class="span4">
                        <div class="thumbnail">
                            <a data-toggle="modal" href="#zasModal"><img alt="image" src="/img/oradores/gian.jpg"></a>
                        </div>
                        <h2 class="sub">Gianfranco Zas <a data-toggle="modal" href="#zasModal"><span class="icon-plus" data-original-title="Leer más"></a></h2>
                    </div>
                </div>
                <hr class="dashed">
                <div class="row">
                    <div class="span4">
                        <div class="thumbnail">
                            <a data-toggle="modal" href="#arrecheModal"><img alt="image" src="/img/oradores/gonzalo.jpg"></a>
                        </div>
                        <h2 class="sub">Gonzalo Arreche <a data-toggle="modal" href="#arrecheModal"><span class="icon-plus" data-original-title="Leer más"></a></h2>
                    </div>

                    <div class="span4">
                        <div class="thumbnail">
                            <a data-toggle="modal" href="#riveraModal"><img alt="image" src="/img/oradores/rodrigo_rivera.png"></a>
                        </div>
                        <h2 class="sub">Rodrigo Rivera <a data-toggle="modal" href="#riveraModal"><span class="icon-plus" data-original-title="Leer más"></a></h2>
                    </div>

                    <div class="span4">
                        <div class="thumbnail">
                            <a data-toggle="modal" href="#camargoModal"><img alt="image" src="/img/oradores/gabriel_camargo.jpg"></a>
                        </div>
                        <h2 class="sub">Gabriel Camargo <a data-toggle="modal" href="#camargoModal"><span class="icon-plus" data-original-title="Leer más"></a></h2>
                    </div>
                </div>
                <!--
                        <div class="row">
                          <div class="span4">
                            <div class="thumbnail">
                              <img alt="image" src="http://placehold.it/300x300&text=:)">
                            </div>
                            <h2 class="sub">Tu nombre!!!</h2>
                          </div>
                        </div>
                -->
                <?php if (false) { ?>
                    <div class="row">
                        <div class="span12">
                            <?php require_once 'cuadro_speakers.php'; ?>
                        </div>
                    </div>
                <?php } ?>
                <hr class="dashed">

                <?php include 'registrate_row.php' ?>

                <hr class="dashed">
                <div class="row">
                    <div class="span12">
                        <p style="text-align: center;">* Oradores confirmados hasta el momento, la organización se reserva el derecho de cambiar las charlas en cualquier momento.</p>
                    </div>
                </div>
            </div>
        </div>

        <?php require_once("footer.php"); ?>
        <?php require_once("oradores_modals.php"); ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
        <script src="/js/bootstrap.js"></script>
        <script src="/js/script.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                var hashes = window.location.href.split("#");
                $('#'+hashes[1]+'Modal').modal();
            });
        </script>
    </body>
</html>