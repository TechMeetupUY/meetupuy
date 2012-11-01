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
                        <h1>Ell@s están registrados, ¿y vos?</h1>
                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="span10 offset1">
                        <ul class="thumbnails">
                            <?php
                            $sql = "SELECT twitter_handle, avatar_url, email FROM asistentes ORDER BY nombre ASC;";
                            $results = $asistentesTbl->fetchAll();
                            $results = $results->toArray();
                            shuffle($results);
                            foreach ($results as $result):
                                ?>
                                <li class="span2">
                                    <?php if ($result['twitter_handle'] != '') { ?>
                                        <a class="thumbnail" href="<?php if ($result['twitter_handle']) { echo 'http://twitter.com/' . $result['twitter_handle'];} ?>" target="_blank"  data-placement="top" title="<?php echo $result['nombre'] ?>">
                                            <img width="73px" src="<?php echo str_replace("_normal","_bigger", $result['avatar_url']); ?>">
                                        </a>
                                        <?php } else {
                                            $default_img_src= "http://meetup.uy/img/avatar".rand(1,6).".png";
                                            //No tienen twitter, veamos si podemos traernos el gravatar
                                            $email = strtolower( md5($result['email']) );
                                            $img_src = "http://www.gravatar.com/avatar/".$email."?s=73&d=".urlencode($default_img_src);
                                            ?>
                                        <a class="thumbnail" href="#" data-placement="top" rel="tooltip" title="<?php echo $result['nombre'] ?>">
                                            <img width="73px" src="<?php echo $img_src;?>" alt="<?php echo $result['nombre'] ?>" >
                                        </a>
                                <?php } ?>
                                </li>
<?php endforeach ?>
                        </ul>

                    </div>
                </div>
                <hr class="dashed">
                <?php require_once 'include/registrate_row.inc.php' ?>


            </div>
        </div>
        <?php require_once 'include/footer.inc.php'; ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
        <script src="js/bootstrap.js"></script>
        <script src="/js/script.js"></script>
        <script type="text/javascript">
            $(window).load(function() {
                $('a.thumbnail').tooltip();
            });
        </script>
    </body>
</html>
