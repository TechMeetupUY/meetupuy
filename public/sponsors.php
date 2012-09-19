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
		    <h1>¡Estamos buscando sponsors!</h1>
		  </div>
		</div>
	  </div>
	</div>

	<div id="content">
	  <div class="container">			
	    <div class="row">
		  <div class="span4">
            <div class="product-plan">
			  <ul class="unstyled plans">
			    <li>
				  <div class="name">
				    <h3>Bronce</h3>
                  </div>				
				</li>
			    <li>
				  <div class="price">
				    <h3>U$S 500 <small></small></h3>
                  </div>				
				</li>				
			    <li>
				  <div class="feature">
				    <h4><i class="icon-star"></i> Descripción y logo (160x160) en la web.</h4>
                  </div>				
				</li>			
			    <li>
				  <div class="feature">
				    <h4><i class="icon-user-md"></i> Un roll-up banner en el hall mientras dure la conferencia.</h4>
                  </div>				
				</li>
			    
			    <li>
				  <div class="action">
				    <button class="btn btn-primary btn-action">Order Now</button>
                  </div>				
				</li>				
			  </ul>
			</div>  
		  </div>
		  <div class="span4">
            <div class="product-plan">
			  <ul class="unstyled plans">
			    <li>
				  <div class="name">
				    <h3>Plata</h3>
                  </div>				
				</li>
			    <li>
				  <div class="price">
				    <h3>U$S 1.000 <small></small></h3>
                  </div>				
				</li>				
			    <li>
				  <div class="feature">
				    <h4><i class="icon-user"></i> 5 Entradas a la conferencia</h4>
                  </div>				
				</li>
			    <li>
				  <div class="feature">
				    <h4><i class="icon-star"></i> Descripción y logo (160x160) en la web.</h4>
                  </div>				
				</li>			
			    <li>
				  <div class="feature">
				    <h4><i class="icon-user-md"></i> Un roll-up banner en el hall mientras dure la conferencia.</h4>
                  </div>				
				</li>
			    <li>
				  <div class="feature">
				    <h4><i class="icon-envelope"></i> Oportunidad de envío de correo a asistentes (que lo permitan).</h4>
                  </div>				
				</li>
			    <li>
				  <div class="feature">
				    <h4><i class="icon-volume-up"></i> Menciones durante la conferencia.</h4>
                  </div>				
				</li>
			    <li>
				  <div class="action">
				    <button class="btn btn-primary btn-action">Order Now</button>
                  </div>				
				</li>				
			  </ul>
			</div>  
		  </div>
		  <div class="span4">
            <div class="product-plan">
			  <ul class="unstyled plans">
			    <li>
				  <div class="name">
				    <h3>Oro</h3>
                  </div>				
				</li>
			    <li>
				  <div class="price">
				    <h3>U$S 2.500 <small></small></h3>
                  </div>				
				</li>				
			    <li>
				  <div class="feature">
				    <h4><i class="icon-user"></i> 10 Entradas a la conferencia</h4>
                  </div>				
				</li>
			    <li>
				  <div class="feature">
				    <h4><i class="icon-star"></i> Descripción y logo (200x200) en la web.</h4>
                  </div>				
				</li>			
			    <li>
				  <div class="feature">
				    <h4><i class="icon-user-md"></i> Un roll-up banner en el hall mientras dure la conferencia.</h4>
                  </div>				
				</li>
				<li>
				  <div class="feature">
				    <h4><i class="icon-envelope"></i> Oportunidad de envío de correo a asistentes (que lo permitan).</h4>
                  </div>				
				</li>
			    <li>
				  <div class="feature">
				    <h4><i class="icon-volume-up"></i> Menciones durante la conferencia.</h4>
                  </div>				
				</li>
				<li>
				  <div class="feature">
				    <h4><i class="icon-folder-close"></i> Acceso a la Base de Datos de asistentes (que lo permitan).</h4>
                  </div>				
				</li>
			    <li>
				  <div class="action">
				    <button class="btn btn-primary btn-action">Order Now</button>
                  </div>				
				</li>				
			  </ul>
			</div>  
		  </div>  
		</div>		
	  </div>
	</div>

	<?php require_once("footer.php"); ?>	

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