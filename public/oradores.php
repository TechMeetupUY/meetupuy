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
			<div class="thumbnail">
			  <img alt="image" src="/img/oradores/enriqueb_square.jpg">
			</div>		
			<h2 class="sub">Enrique Baliño</h2>
			<p>
				Enrique Baliño es Socio fundador de <a href="http://www.xn-consultores.com/">Xn Consultores</a>. Como consultor de la firma, diseña y facilita la implementación de soluciones de 
				desarrollo ejecutivo y cambio organizacional basado en Indagación Apreciativa. 
				<a data-toggle="modal" href="#balinioModal"><span class="icon-plus" data-original-title="Leer más"></span></a>
			</p>
		  </div>
		  <div class="span4">
			<div class="thumbnail">
			  <img alt="image" src="/img/oradores/ledesma_square.jpg">
			</div>
			<h2 class="sub">Gabriel Ledesma</h2>
			<p>
				Gabriel es egresado de la Universidad ORT, tiene más de 15 años de experiencia en la industria del desarrollo de software. De los cuáles 11 los dedicó a la gestión de proyectos en 
				importantes empresas de plaza. 
				<a data-toggle="modal" href="#ledesmaModal"><span class="icon-plus" data-original-title="Leer más"></a></span>
			</p>
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