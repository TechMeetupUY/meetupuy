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
		    <h1>Organización</h1>
		  </div>
		</div>
	  </div>
	</div>

	<div id="content">
	  <div class="container">			

        <div class="row">
		  <div class="span12">
			<h2 class="txt-middle">El equipo</h2>
		    <hr class="dashed">				
		  </div>  
		</div>		
	    <div class="row">
		  <div class="span9 offset2">
		  <ul class="thumbnails">
		    <li class="span3">
			  <div class="team thumbnail">			  
                <img alt="" src="/img/organizacion/martin_loy.jpg">	
				<div class="caption">
					<h4>Martín Loy</h4>
					<span>Guruhub</span>
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
                <img alt="" src="http://placehold.it/220x220&text=:)">	
				<div class="caption">
					<h4>Ignacio Nin</h4>
					<span>Percona</span>
					<ul class="unstyled">
					  <li>
					    <a class="twitter" href="http://twitter.com/NachexNachex"><i class="icon-twitter-sign"></i></a>
					  </li>					  
					</ul>
				</div>
			  </div> 
			</li>
		    <li class="span3">
			  <div class="team thumbnail">			  
                <img alt="" src="/img/organizacion/diego_sapriza.jpg">	
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
	<script src="/js/script.js"></script>
	
  </body>
</html>