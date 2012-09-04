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
		    <h1>Contacto</h1>
		  </div>
		</div>
	  </div>
	</div>

	<div id="content">
	  <div class="container">			
	    <div class="row">
		  <div class="span5">
            <h2><i class="icon-envelope"></i> Email Us</h2>		  
	    	<fieldset>
			  <div class="control-group">
			    <div class="controls">
				  <input class="span5" type="text" placeholder="Your Full Name">
				</div>
			    <div class="controls">
				  <input class="span5" type="text" placeholder="Your Email">
				</div>			
			    <div class="controls">
				  <input class="span5" type="text" placeholder="Message Subject">
				</div>
				<div class="controls">
				  <textarea class="span5" id="textarea" rows="6" placeholder="Your Message"></textarea>
			    </div>
			  <button class="btn btn-primary">Send Message</button>
			  </div>	
		    </fieldset>
		  </div>
		  <div class="span7">
		    <div class="row">
		      <div class="span3">
		        <h2><i class="icon-map-marker"></i> Dónde</h2>
		        <address>
		          Torre de las Telecomunicaciones
		          <br>
		          Av. Rondeau y Guatemala
		          <br>
		          Montevideo, UY
				</address>
		      </div>
		      <div class="span4">
		      	<h2><i class="icon-calendar"></i> Cuándo</h2>
		      	<p>
		      		3 de Noviembre de 2012
		      	</p>
		      </div>
		    </div>	
		    <div class="row">
		    	<div class="span7">
		    		<iframe width="500" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=es-419&amp;geocode=&amp;q=Torre+de+las+Telecomunicaciones,+Montevideo,+Uruguay&amp;aq=0&amp;oq=Torre+de+las+Telecomunicaciones,+M+Uruguay&amp;sll=-34.092758,-54.494162&amp;sspn=0.041155,0.077162&amp;ie=UTF8&amp;hq=&amp;hnear=Auditorio+Torre+de+las+Telecomunicaciones,+Guatemala+1075,+Montevideo+11800,+Uruguay&amp;t=m&amp;ll=-34.892126,-56.194382&amp;spn=0.016192,0.046263&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=es-419&amp;geocode=&amp;q=Torre+de+las+Telecomunicaciones,+Montevideo,+Uruguay&amp;aq=0&amp;oq=Torre+de+las+Telecomunicaciones,+M+Uruguay&amp;sll=-34.092758,-54.494162&amp;sspn=0.041155,0.077162&amp;ie=UTF8&amp;hq=&amp;hnear=Auditorio+Torre+de+las+Telecomunicaciones,+Guatemala+1075,+Montevideo+11800,+Uruguay&amp;t=m&amp;ll=-34.892126,-56.194382&amp;spn=0.016192,0.046263&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">Ver mapa más grande</a></small>
		    	</div>
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