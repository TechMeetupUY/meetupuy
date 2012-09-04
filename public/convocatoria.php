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
		    <h1>Convocatoria</h1>
		  </div>
		</div>
	  </div>
	</div>

	<div id="content">
	  <div class="container">			
	    <div class="row">
		  <div class="span6">	
			<h2>Our Mission</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent arcu massa, consequat nec venenatis vel, vehicula in felis. Donec dapibus tortor consequat turpis fringilla rutrum. Nulla porta turpis massa. Vivamus facilisis pretium mauris, ac varius augue posuere eget. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		  </div>
		  <div class="span6">	
			<h2>Header</h2>
			<p>Cras vehicula orci mauris, sed porta tellus. Phasellus id odio eget elit convallis placerat sit amet sodales quam. Mauris sit amet diam vel ligula bibendum porta eu a magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent arcu massa, consequat nec venenatis vel, vehicula in felis. Donec dapibus tortor consequat turpis fringilla rutrum.</p>
		  </div>		  
		</div>
	    <div class="row">
		  <div class="span4">	
			<h2>Span4</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent arcu massa, consequat nec venenatis vel, vehicula in felis. Donec dapibus tortor consequat turpis fringilla rutrum.</p>
		  </div>
		  <div class="span8">	
			<h2>Span8</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent arcu massa, consequat nec venenatis vel, vehicula in felis. Donec dapibus tortor consequat turpis fringilla rutrum.</p>
		  </div>		  
		</div>
        <div class="row">
		  <div class="span12">
			<h2 class="txt-middle">¿Quiénes somos?</h2>
		    <hr class="dashed">				
		  </div>  
		</div>		
	    <div class="row">
		  <div class="span12">
		  <ul class="thumbnails">
		    <li class="span3">
			  <div class="team thumbnail">			  
                <img alt="" src="http://placehold.it/220x180">	
				<div class="caption">
					<h4>Ignacio Nin</h4>
					<span>Percona</span>
					<ul class="unstyled">
					  <li>
					    <a class="twitter" href="http://twitter.com/nachexnachex"><i class="icon-twitter-sign"></i></a>
					  </li>					  
					</ul>
				</div>
			  </div> 
			</li>  
		    <li class="span3">
			  <div class="team thumbnail">			  
                <img alt="" src="http://placehold.it/220x180">	
				<div class="caption">
					<h4>Martín Loy</h4>
					<span>GuruHub</span>
					<ul class="unstyled">
					  <li>
					    <a class="twitter" href="http://twitter.com/MartinLoy"><i class="icon-twitter-sign"></i></a>
					  </li>					  
					</ul>
				</div>
			  </div> 
			</li>
		    <li class="span3">
			  <div class="team thumbnail">			  
                <img alt="" src="http://placehold.it/220x180">	
				<div class="caption">
					<h4>Diego Sapriza</h4>
					<span>Centra</span>
					<ul class="unstyled">
					  <li>
					    <a class="twitter" href="http://twitter.com/AV4TAr"><i class="icon-twitter-sign"></i></a>
					  </li>					  
					</ul>
				</div>
			  </div> 
			</li>

		    <li class="span3">
			  <div class="team thumbnail">			  
                <img alt="" src="http://placehold.it/220x180">	
				<div class="caption">
					<h4>John Smith</h4>
					<span>Founder</span>
					<ul class="unstyled">
					  <li>
					    <a class="facebook" href=""><i class="icon-facebook-sign"></i></a>
					  </li>
					  <li>
					    <a class="twitter" href=""><i class="icon-twitter-sign"></i></a>
					  </li>					  
					</ul>
				</div>
			  </div> 
			</li>			
		  </ul>
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