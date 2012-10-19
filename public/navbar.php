<?php
/**
 * Header
 */
$pagina = $_SERVER["REQUEST_URI"];
?>
<div class="github-fork-ribbon-wrapper right">
    <div class="github-fork-ribbon">
        <a href="convocatoria">Registrate</a>
    </div>
</div>

<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="/">
            <img src="/img/tech-meetup-logo-small.png" height="70px" alt=TECHmeetup>
          </a>
          <ul class="nav pull-right" style="margin-top:20px;">
            <!--
            <li class="active"><a href="/">Inicio</a></li>
            -->
            <li class="<?php if($pagina=='/oradores'){ echo 'active'; }; ?>"><a href="oradores">Oradores</a></li>
            <li class="<?php if($pagina=='/agenda'){ echo 'active'; }; ?>"><a href="agenda">Agenda</a></li>
            <li class="<?php if($pagina=='/convocatoria'){ echo 'active'; }; ?>"><a href="convocatoria"><strong>Registro</strong></a></li>
            <li class="<?php if($pagina=='/sponsors'){ echo 'active'; }; ?>"><a href="sponsors">Auspicio</a></li>
            <!--<li><a href="inscripcion">Inscripción</a></li>-->
            <li class="<?php if($pagina=='/contact'){ echo 'active'; }; ?>"><a href="contact">Contacto</a></li>
            <li class="<?php if($pagina=='/organizacion'){ echo 'active'; }; ?>"><a href="organizacion">Organizan</a></li>
          </ul>
        </div>
      </div>
    </div>
