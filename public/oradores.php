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
		    <h1>Nuestros oradores</h1>
		  </div>
		</div>
	  </div>
	</div>

	<div id="content">
	  <div class="container">			
	    <div class="row">
		  <div class="span4">
			<a class="thumbnail" href="">
			  <img alt="image" src="http://placehold.it/300x150">
			</a>		
			<h2 class="sub">Enrique Baliño</h2>
			<p>Enrique Baliño es Socio fundador de <a href="http://www.xn-consultores.com/">Xn Consultores</a>. Como consultor de la firma, diseña y facilita la implementación de soluciones de desarrollo ejecutivo y cambio organizacional basado en Indagación Apreciativa. <span class="icon-plus" data-original-title=""></span></p>
		  </div>
		  <div class="span4">
			<a class="thumbnail" href="">
			  <img alt="image" src="http://placehold.it/300x150">
			</a>
			<h2 class="sub">Gabriel Ledesma</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent arcu massa, consequat nec venenatis vel, vehicula in felis. Donec dapibus tortor consequat turpis fringilla rutrum. <span class="icon-plus" data-original-title=""></span></p>
		  </div>
		  <div class="span4">
			<a class="thumbnail" href="">
			  <img alt="image" src="http://placehold.it/300x150">
			</a>
			<h2 class="sub">One Great Feature</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent arcu massa, consequat nec venenatis vel, vehicula in felis. Donec dapibus tortor consequat turpis fringilla rutrum. <span class="icon-plus" data-original-title=""></span></p>
		  </div>		  
		</div>
		<!--
		<hr class="dashed">
	    <div class="row">
		  <div class="span4">
			<a class="thumbnail" href="">
			  <img alt="image" src="http://placehold.it/300x150">
			</a>		
			<h2 class="sub">One Great Feature</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent arcu massa, consequat nec venenatis vel, vehicula in felis. Donec dapibus tortor consequat turpis fringilla rutrum. <span class="icon-plus" data-original-title=""></span></p>
		  </div>
		  <div class="span4">
			<a class="thumbnail" href="">
			  <img alt="image" src="http://placehold.it/300x150">
			</a>
			<h2 class="sub">One Great Feature</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent arcu massa, consequat nec venenatis vel, vehicula in felis. Donec dapibus tortor consequat turpis fringilla rutrum. <span class="icon-plus" data-original-title=""></span></p>
		  </div>
		  <div class="span4">
			<a class="thumbnail" href="">
			  <img alt="image" src="http://placehold.it/300x150">
			</a>
			<h2 class="sub">One Great Feature</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent arcu massa, consequat nec venenatis vel, vehicula in felis. Donec dapibus tortor consequat turpis fringilla rutrum. <span class="icon-plus" data-original-title=""></span></p>
		  </div>		  
		</div>
	-->
	    <div class="row">
		  <div class="span12">
		    <div class="callout well">
			  <h2>¿Tenés algo para contar?</h2>
			  <p>No importa quién seas o si trabajás solo y de tu casa, <br/>¡nos importa lo que te apasiona y lo que tenés para enseñar!</p>
			  <a href="/convocatoria" class="btn btn-primary btn-action">Inscribite como orador <i class="icon-arrow-right"></i></a>		  
			</div>
		  </div>		  
		</div>				
	  </div>
	</div>

	<?php require_once("footer.php"); ?>
    <?php require_once("modals.php"); ?>

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