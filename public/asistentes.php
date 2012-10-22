<?php

require_once 'include/sqlite_asistentes.inc.php';

$title = "Asistentes";
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php require_once 'include/head_meta.inc.php'; ?>
  </head>

  <body>

    <?php require_once 'include/navbar.inc.php'; ?>

	<div id="header">
	  <div class="container">
	    <div class="row">
		  <div class="span12">
		    <h1>¿Vos vas? ellos si:</h1>
		  </div>
		</div>
	  </div>
	</div>

	<div id="content">
	  <div class="container">
          <div class="row">
              <div class="span8 offset2">
                  <ul class="thumbnails">
                    <?php

                    $sql = "SELECT * FROM asistentes ORDER BY RANDOM();";
                    $results = $asistentesTbl->fetchAll();
                    foreach ($results as $result): ?>
                        <li class="span1">
                            <a class="thumbnail" href="<?php if($result->twitter_handle) { echo 'http://twitter.com/'.$result->twitter_handle; } ?>" target="_blank">
                            <img width="48px" src="<?php echo $result->avatar_url; ?>" alt="<?php echo $result->nombre ?>" title="<?php echo $result->nombre ?>">
                            </a>
                        </li>
                    <?php endforeach ?>
                    </ul>

              </div>
          </div>
	  </div>
	</div>

    <?php require_once 'include/footer.inc.php'; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
    <script src="js/bootstrap.js"></script>
	<script src="/js/script.js"></script>

  </body>
</html>
