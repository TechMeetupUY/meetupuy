<!DOCTYPE html>
<html lang="es">
  <head>
  	<?php require_once("head_meta.php"); ?>
  </head>

  <body>
    <div class="github-fork-ribbon-wrapper right">
        <div class="github-fork-ribbon">
            <a href="#">Beta</a>
        </div>
    </div>
    <?php require_once("navbar.php"); ?>

	<div id="header">
	  <div class="container">
	    <div class="row">
		  <div class="span12">
		    <h1>Nuestros oradores</h1>
		  </div>
		</div>
	  </div>
	</div>

	<div id="content" class="lista-oradores">
	  <div class="container">
	    <div class="row">

		  <div class="span4">
			<div class="thumbnail">
			  <img alt="image" src="/img/oradores/ledesma_square.jpg">
			</div>
			<h2 class="sub">Gabriel Ledesma <a data-toggle="modal" href="#ledesmaModal"><span class="icon-plus" data-original-title="Leer más"></a></span></h2>
            <!-- <p>Peregrinus</p> -->
		  </div>
		  <div class="span4">
			<div class="thumbnail">
			  <img alt="image" src="/img/oradores/enriqueb_square.jpg">
			</div>
			<h2 class="sub">Enrique Baliño <a data-toggle="modal" href="#balinioModal"><span class="icon-plus" data-original-title="Leer más"></span></a></h2>
            <!-- <p>Xn Consultores</p> -->
		  </div>
		  <div class="span4">
			<div class="thumbnail">
			  <img alt="image" src="/img/oradores/fede_silva.jpg">
			</div>
			<h2 class="sub">Fede Silva <a data-toggle="modal" href="#silvaModal"><span class="icon-plus" data-original-title="Leer más"></a></span></h2>
            <!-- <p>inConcert</p> -->
		  </div>
		</div>

		<hr class="dashed">

		<div class="row">
		    <div class="span4">
				<div class="thumbnail badge-inside">
                  <!--<span class="badge blue">Alpha</span>-->
				  <img alt="image" src="/img/oradores/sebastian_moreno.jpg">
				</div>
				<h2 class="sub">Sebastián Moreno <a data-toggle="modal" href="#morenoModal"><span class="icon-plus" data-original-title="Leer más"></a></h2>
                <!-- <p>inConcert</p> -->
		 	</div>
		    <div class="span4">
				<div class="thumbnail badge-inside">
                    <!--<span class="badge green">Beta</span> -->
                    <img alt="image" src="/img/oradores/nicolas_sanguinetti.jpg">
				</div>
				<h2 class="sub">Nicolás Sanguinetti <a data-toggle="modal" href="#sanguinettiModal"><span class="icon-plus" data-original-title="Leer más"></a></h2>
                <!-- <p>Github</p> -->
		 	</div>
		 	<div class="span4">
				<div class="thumbnail badge-inside">
                    <span class="badge orange">Invitado</span>
                    <img alt="image" src="/img/oradores/maximiliano_firtman.jpg">
				</div>
				<h2 class="sub">Maximiliano Firtman <a data-toggle="modal" href="#firtmanModal"><span class="icon-plus" data-original-title="Leer más"></a></h2>
                <!-- <p>ITMaster, O'Reilly</p> -->
		 	</div>
		</div>
		<hr class="dashed">
		<div class="row">
			<div class="span4">
				<div class="thumbnail">
				  <img alt="image" src="/img/oradores/fernando_ipar.jpg">
				</div>
				<h2 class="sub">Fernando Ipar <a data-toggle="modal" href="#iparModal"><span class="icon-plus" data-original-title="Leer más"></a></h2>
                <!-- <p>Percona</p> -->
		 	</div>

		  <div class="span4">
			<div class="thumbnail">
			  <img alt="image" src="http://placehold.it/300x300&text=:)">
			</div>
			<h2 class="sub">Tu nombre!!!</h2>
			<p>
				Todos tienen la oportunidad de presentarse por igual, porque entendemos que sin ideas nuevas no hay desarrollo. <a href="/registro_orador">Registrate como orador</a> y te tendremos en cuenta en la selección.
			</p>
		  </div>
		</div>

	    <div class="row">
		  <div class="span12">
		  	<?php require_once 'cuadro_speakers.php'; ?>
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

  </body>
</html>