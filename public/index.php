<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Meetup.uy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Evan Clemente">
    <link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.css" >
	<link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <?php require_once("navbar.php"); ?>
	
	<div id="landing">
	  <div class="container">  
	    <div class="row">
		  <div class="span10 offset1" style="text-align:center;">
		    <h1>Bienvenidos a la primer conferencia para desarrolladores en Uruguay.</h1>	
			<p>tech.Meetup.uy es el primer evento que expone la capacidad de las últimas tecnologías a la comunidad de desarrollo uruguaya en sus diversas especialidades.</p>
			<p>El evento busca ser un día de actualización profesional y encuentro para todos, el formato del evento serán 7 charlas cortas con oradores nacionales e invitados de la región más algunas sorpresas.</p>
		    <p><a href="#" class="btn btn-primary btn-action">Get Started Now</a></p>  
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
		  <div class="span12">
			<h2>Great features of your product or service</h2>
		    <hr class="dashed">				
		  </div>  
		</div>  
	    <div class="row">
		  <div class="span4 bouncy">
		    <div class="icon_wrapper">
		      <i class="icon-th-large"></i>
		    </div>
			<h2>Modern and Minimalistic</h2>
			<p>Bounce was built on the awesome Twitter Bootstrap so you have easy access to all of its features.</p>	
		  </div>
		  <div class="span4 bouncy">
		    <div class="icon_wrapper">
		      <i class="icon-flag"></i>
		    </div>
			<h2>Awesome Typography</h2>
			<p>Bounce uses free open-source fonts from Fontspring as well as the iconic Font Awesome.</p>	
		  </div>
		  <div class="span4 bouncy">
		    <div class="icon_wrapper">
		      <i class="icon-plane"></i>
		    </div>
			<h2>Launch Ready</h2>
			<p>Bounce comes with several pages, giving you a head start on creating a unique design.</p>	
		  </div>		  
		</div>
		<hr class="dashed">				
	    <div class="row">
		  <div class="span4">
			<a class="thumbnail" href="">
			  <img alt="image" src="http://placehold.it/300x200">
			</a>		
			<h2>Image #1</h2>
			<p>Optional subtext to help better explain the image above can go here.</p>
		  </div>
		  <div class="span4">
			<a class="thumbnail" href="">
			  <img alt="image" src="http://placehold.it/300x200">
			</a>
			<h2>Image #2</h2>
			<p>Optional subtext to help better explain the image above can go here.</p>
		  </div>
		  <div class="span4">
			<a class="thumbnail" href="">
			  <img alt="image" src="http://placehold.it/300x200">
			</a>
			<h2>Image #3</h2>
			<p>Optional subtext to help better explain the image above can go here.</p>
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