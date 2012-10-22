<?php

require_once '../library/twitter.class.php';

if(!is_readable('../config/twitter.conf.php')){
    die('Por favor configurar Twitter, copiar ../config/twitter.conf.ori.php en ../config/twitter.conf.php y cambiar los valores');
}
require_once '../config/twitter.conf.php';

$twitter = new Twitter;
$twitter = new Twitter($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);

$results = $twitter->request('lists/members', array('slug'=>$twitterList, 'owner_screen_name'=>$twitterUser), 'GET');

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
                    <?php foreach ($results->users as $result): ?>
                        <li class="span1">
                            <a class="thumbnail" href="http://twitter.com/<?php echo $result->screen_name ?>" target="_blank">
                            <img src="<?php echo $result->profile_image_url; ?>" alt="<?php echo $result->screen_name ?>">

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
