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
		    <h1>Registrate!</h1>
		  </div>
		</div>
	  </div>
	</div>

	<div id="content">
	  <div class="container">
	    <div class="row">
		  <div class="span12">
			<p>
				<strong>techMeetup.uy</strong> es el primer evento que expone la capacidad de las últimas tecnologías a la comunidad de desarrollo uruguaya en sus diversas especialidades.
			</p>
			<p>
				El evento busca ser un día de actualización profesional y encuentro para todos, el formato del evento serán 7 charlas cortas con oradores nacionales e invitados de la región más algunas sorpresas.
			</p>
			<p>
				Año a año tendremos actores relevantes en las últimas tecnologías para desarrolladores en una jornada integral de charlas cortas, actividades y reclutamiento profesional. Queremos acortar las distancias entre lo que somos y lo que queremos ser a nivel profesional y podés ser parte de ello.
			</p>
			<p>
				Para recibir más información del evento, seguinos en <a href="http://twitter.com/meetupUY">Twitter</a> o dejanos tu <a href="mailto:info@meetup.uy">mail</a>.
			</p>
		  </div>
          <?php if(false) { ?>
	  	  <div class="span5">
	  	  	<?php require_once 'cuadro_speakers.php'; ?>
	  	  </div>
           <?php } ?>
		</div>
<hr class="dashed">

        <div class="row">
		  <div class="span12">
			<h2 class="txt-middle">Llena este formulario para inscribirte.</h2>
		  </div>
		</div>
		<?php
				if(isset($_GET['beca'])){
				?>
		<div class="row">
		  <div class="span6 offset3 alert alert-info">
				<p align="center"><strong><big>¿Querés una beca?</big></strong> <br/>Completa todos tus datos en el siguiente formulario, al final podes indicar que querés la beca. Luego que lo hagas te contactaremos.</p>

		  </div>
		</div>
		<?php
				}
			?>

	    <div class="row">
		  <div class="span12 txt-middle">
		  <iframe src='https://eventioz.com.ar/events/meetupuy/registrations/new?iframe=' width='600' height='1800' allowTransparency='false' frameborder='0' scrolling='yes' style='width:600;height:1800;border:none'></iframe>

		  </div>
		</div>
	  </div>
	</div>

    <?php require_once("footer.php"); ?>
    <?php require_once("modals.php"); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
    <script src="js/bootstrap.js"></script>
	<script src="/js/script.js"></script>

  </body>
</html>