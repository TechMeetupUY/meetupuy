<?php
/**
 * Header
 */
$pagina = $_SERVER["REQUEST_URI"];
?>
<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="/">
            <img src="/img/tech-meetup-logo-small.png" height="40px">
          </a>
          <ul class="nav pull-right">
            <!--
            <li class="active"><a href="/">Inicio</a></li>
          -->
            <li class="<?php if($pagina=='/oradores'){ echo 'active'; }; ?>"><a href="oradores">Oradores</a></li>
            <li class="<?php if($pagina=='/convocatoria'){ echo 'active'; }; ?>"><a href="convocatoria">Convocatoria</a></li>
            <!--<li><a href="inscripcion">Inscripción</a></li>-->
            
            <!--
            <li><a href="agenda">Agenda</a></li>
			<li><a href="alt.html">Alt. Home</a></li>
            <li><a href="about.html">About</a></li>
			<li><a href="features.html">Features</a></li>
			<li><a href="pricing.html">Pricing</a></li>
			<li><a data-toggle="modal" href="#joinModal">Register</a></li>
			<li><a data-toggle="modal" href="#loginModal">Login</a></li>
-->
            <li class="<?php if($pagina=='/contact'){ echo 'active'; }; ?>"><a href="contact">Contacto</a></li>
            <li class="<?php if($pagina=='/organizacion'){ echo 'active'; }; ?>"><a href="organizacion">Organización</a></li>
          </ul>
        </div>
      </div>
    </div>	