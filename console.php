<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>novalore</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/font-awesome.min.css" type="text/css" rel="stylesheet" />

    <link rel="shortcut icon" href="images/flogo.png">
    <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
    <link href="style.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
</head>

<body>
<?php include 'components/header.php'; ?>
    <!--container-fluid fix-->

    <div class="clearfix"></div>
    <div class="container-fluid console"></div>

    <div class="container-fluid console4 text-center">
        <div class="inner">
            <h2>UNPARALLELED CONTROL</h2>
            <p>The DUALSHOCK 4 wireless controller has been updated with a new look and feel, including a more visible, colourful light bar to put even more of the game into your hands. It’s the most ergonomic, intuitive PlayStation controller we’ve ever
                designed.
            </p>
            <img src="images/consoles.png" class="mt-3">
        </div>
    </div>


    <div class="clearfix"></div>

    <div class="clearfix"></div>
    <div class="container-fluid console1">
        <div class="inner">
            <div class="cn1">
                <h2>TAKE ON THE WORLD WITH PLAYSTATION PlUS</h2>
                <p>Forge allegiances, settle scores and play with friends and rivals online in your favourite game’s online modes - exclusively with PlayStation Plus.</p>
                <a href="cart.php"> <button class="btn" type="submit">  BUY NOW</button> </a>

            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="container-fluid console5">
        <div class="inner">
            <h2>PLAY. REDESIGNED.</h2>
            <p>A sleeker, smaller PS4, delivering awesome gaming power that’s always for the players.</p>
            <image class="gif" src="images/VIDEO.GIF" autoplay loop></image>
        </div>
    </div>

    <div class="clearfix"></div>
    <div class="container-fluid console2">
        <div class="inner">
            <div class="c1"><img src="images/console.png"></div>
            <div class="cn2">
                <h2>THE NEW LOOK, SLIMMER PS4</h2>
                <span>. Experience incredibly vivid, vibrant</span>
                <p> colours with breathtaking HDR visuals.</p>
                <span>. 30% slimmer, 16% lighter than the</span>
                <p>original PS4 model.</p>
                <span>. Store your games, apps, screenshots and</span>
                <p> videos with 500GB and 1TB options.</p>
                <span>. All the greatest TV, movies and more </span>
                <p>from your favourite entertainment apps.</p>
            </div>

        </div>
    </div>



    <div class="clearfix"></div>

    <div class="container-fluid console3">
        <div class="inner">
            <h2>STAY UP TO DATE</h2>
            <p>Be first to read the latest PlayStation news,<br> always know about the biggest PlayStation<br> Store sales and stay in the know about the <br>freshest game announcements by signing<br> up for email updates.
            </p>
         <a href="cart.php">   <button class="btn" type="submit">Register now</button></a>

        </div>
    </div>
    <div class="clearfix"></div>


    <?php include 'components/footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script>
        // The plugin code
        (function($) {
            $.fn.parallax = function(options) {
                var $$ = $(this);
                offset = $$.offset();
                var defaults = {
                    'start': 0,
                    'stop': offset.top + $$.height(),
                    'coeff': 0.95
                };
                var opts = $.extend(defaults, options);
                return this.each(function() {
                    $(window).bind('scroll', function() {
                        windowTop = $(window).scrollTop();
                        if ((windowTop >= opts.start) && (windowTop <= opts.stop)) {
                            newCoord = windowTop * opts.coeff;
                            $$.css({
                                'background-position': '0 ' + newCoord + 'px'
                            });
                        }
                    });
                });
            };
        })(jQuery);

        // call the plugin
        $('.console').parallax({
            'coeff': -0.35
        });
        $('.console1').parallax({
            'coeff': -0.04
        });
        $('.console2').parallax({
            'coeff': -0.02
        });
        $('.console4').parallax({
            'coeff': -0.05
        });
    </script>
</body>

</html>