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
                        <h1>La Agenda!!!</h1>
                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="span6 offset3">
                        <a class="thumbnail" >
                            <img src="/img/meetup_uy_charlas.jpg">
                        </a>
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