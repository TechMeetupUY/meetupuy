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
	  		<div class="span8 offset2			">
	  			<p>techMeetup es el primer evento que expone la capacidad de las últimas tecnologías a la comunidad de desarrollo uruguaya en sus diversas especialidades.
	  			<br>
	  			El evento busca ser un día de actualización profesional y encuentro para todos, el formato del evento serán 7 charlas cortas con oradores nacionales e invitados de la región más algunas sorpresas.
	  			</p>
	  		</div>
	  	</row>
	    <div class="row">
		  <div class="span12">
		    <hr class="dashed">				
		  </div>  
		</div>  
	    <div class="row">
		  <div class="span4 bouncy">
		    <div class="icon_wrapper">
		      <i class="icon-user"></i>
		    </div>
			<h2>Audiencia</h2>
			<p>techMeetup es para todos aquellos interesados en las últimas tecnologías del mundo de desarrolladores.</p>	
		  </div>
		  <div class="span4 bouncy">
		    <div class="icon_wrapper">
		      <i class="icon-map-marker"></i>
		    </div>
			<h2>Dónde</h2>
			<p>Auditorio de la Torre de las Comunicaciones. Guatemala y Avda. Rondeau. Montevideo, UY</p>	
		  </div>
		  <div class="span4 bouncy">
		    <div class="icon_wrapper">
		      <i class="icon-calendar"></i>
		    </div>
			<h2>Cuándo</h2>
			<p>Sábado, 3 de Noviembre de 2012.</p>	
		  </div>		  
		</div>
		<hr class="dashed">			
			
		<div class="row">
			<div class="span12">
				<h2>Sponsors</h2>
			</div>
		</div>	
	    <div class="row">
		  <div class="span4">
			<a class="thumbnail" href="">
			  <img alt="image" src="http://placehold.it/300x100">
			</a>		
		  </div>
		  <div class="span4">
			<a class="thumbnail" href="">
			  <img alt="image" src="http://placehold.it/300x100">
			</a>
		  </div>
		  <div class="span4">
			<a class="thumbnail" href="">
			  <img alt="image" src="http://placehold.it/300x100">
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