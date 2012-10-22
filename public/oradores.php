<?php
    $title = "Oradores";
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <?php require_once("include/head_meta.inc.php"); ?>
    </head>

    <body>

        <?php require_once("include/navbar.inc.php"); ?>

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
                        <a data-toggle="modal" href="#ledesma" class="thumbnail"><img alt="image" src="/img/oradores/ledesma_square.jpg"></a>
                        <h2 class="sub">Gabriel Ledesma <a data-toggle="modal" href="#ledesma"><span class="icon-plus" data-original-title="Leer más"></a></span></h2>
                    </div>
                    <div class="span4">
                        <a class="thumbnail" data-toggle="modal" href="#balino"><img alt="image" src="/img/oradores/enriqueb_square.jpg"></a>
                        <h2 class="sub">Enrique Baliño <a data-toggle="modal" href="#balino"><span class="icon-plus" data-original-title="Leer más"></span></a></h2>
                    </div>
                    <div class="span4">
                        <a class="thumbnail" data-toggle="modal" href="#silva"><img alt="image" src="/img/oradores/fede_silva.jpg"></a>
                        <h2 class="sub">Fede Silva <a data-toggle="modal" href="#silva"><span class="icon-plus" data-original-title="Leer más"></a></span></h2>
                    </div>
                </div>

                <hr class="dashed">

                <div class="row">
                    <div class="span4">
                        <a class="thumbnail" data-toggle="modal" href="#moreno"><img alt="image" src="/img/oradores/sebastian_moreno.jpg"></a>
                        <h2 class="sub">Sebastián Moreno <a data-toggle="modal" href="#moreno"><span class="icon-plus" data-original-title="Leer más"></a></h2>
                    </div>
                    <div class="span4">

                            <a class="thumbnail" data-toggle="modal" href="#martinez"><img alt="image" src="/img/oradores/maximo_martinez.jpg"></a>

                        <h2 class="sub">Máximo Martinez <a data-toggle="modal" href="#martinez"><span class="icon-plus" data-original-title="Leer más"></a></h2>
                    </div>
                    <div class="span4 badge-inside">
                            <span class="badge orange">Invitado</span>
                            <a class="thumbnail"  data-toggle="modal" href="#firtman"><img alt="image" src="/img/oradores/maximiliano_firtman.jpg"></a>
                        <h2 class="sub">Maximiliano Firtman <a data-toggle="modal" href="#firtman"><span class="icon-plus" data-original-title="Leer más"></a></h2>
                    </div>
                </div>
                <hr class="dashed">
                <div class="row">
                    <div class="span4">
                            <a class="thumbnail" data-toggle="modal" href="#ipar"><img alt="image" src="/img/oradores/fernando_ipar.jpg"></a>
                        <h2 class="sub">Fernando Ipar <a data-toggle="modal" href="#ipar"><span class="icon-plus" data-original-title="Leer más"></a></h2>
                    </div>
                    <div class="span4">
                            <a class="thumbnail" data-toggle="modal" href="#gomez"><img alt="image" src="/img/oradores/adrian.jpg"></a>
                        <h2 class="sub">Adrian Gomez <a data-toggle="modal" href="#gomez"><span class="icon-plus" data-original-title="Leer más"></a></h2>
                    </div>
                    <div class="span4">
                            <a class="thumbnail" data-toggle="modal" href="#zas"><img alt="image" src="/img/oradores/gian.jpg"></a>
                        <h2 class="sub">Gianfranco Zas <a data-toggle="modal" href="#zas"><span class="icon-plus" data-original-title="Leer más"></a></h2>
                    </div>
                </div>
                <hr class="dashed">
                <div class="row">
                    <div class="span4">
                        <a class="thumbnail" data-toggle="modal" href="#arreche"><img alt="image" src="/img/oradores/gonzalo.jpg"></a>
                        <h2 class="sub">Gonzalo Arreche <a data-toggle="modal" href="#arreche"><span class="icon-plus" data-original-title="Leer más"></a></h2>
                    </div>

                    <div class="span4">
                        <a class="thumbnail" data-toggle="modal" href="#rivera"><img alt="image" src="/img/oradores/rodrigo_rivera.png"></a>
                        <h2 class="sub">Rodrigo Rivera <a data-toggle="modal" href="#rivera"><span class="icon-plus" data-original-title="Leer más"></a></h2>
                    </div>

                    <div class="span4">

                            <a class="thumbnail" data-toggle="modal" href="#camargo"><img alt="image" src="/img/oradores/gabriel_camargo.jpg"></a>
                        <h2 class="sub">Gabriel Camargo <a data-toggle="modal" href="#camargo"><span class="icon-plus" data-original-title="Leer más"></a></h2>
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
                            <?php require_once 'include/cuadro_speakers.inc.php'; ?>
                        </div>
                    </div>
                <?php } ?>
                <hr class="dashed">

                <?php require_once 'include/registrate_row.inc.php' ?>

                <hr class="dashed">
                <div class="row">
                    <div class="span12">
                        <p style="text-align: center;">* Oradores confirmados hasta el momento, la organización se reserva el derecho de cambiar las charlas en cualquier momento.</p>
                    </div>
                </div>
            </div>
        </div>

        <?php require_once 'include/footer.inc.php'; ?>
        <?php require_once 'include/oradores_modals.inc.php'; ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
        <script src="/js/bootstrap.js"></script>
        <script src="/js/script.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                var hashes = window.location.href.split("#");
                $('#'+hashes[1]).modal();

                $('a[data-toggle="modal"]').click(function(){
                    window.location = $(this).attr('href');
                });
                $('.modal').on('hidden', function () {
                    window.location = '';
                })
            });
        </script>
    </body>
</html>