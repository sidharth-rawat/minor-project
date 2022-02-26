<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>novalore</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/font-awesome.min.css" type="text/css" rel="stylesheet" />

    <link rel="shortcut icon" href="images/flogo.png">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
    <link href="style.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
</head>

<body>
<?php include 'components/header.php'; ?>

    <div class="clearfix"></div>
    <div class="container-fluid novalore"></div>

    <div class="clearfix"></div>
    <div class="container-fluid novalore2">
        <div class="inner">
            <h2>BARE METAL GAME HOSTING<br> IN HALIFAX, NS</h2>
            <p>Low Latency for the East Coast<br> Your server your rules. Freedom to customize.<br> Our control panel allows 1 click modpack installs<br> and simple plugin management.<br> Order now!</p>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="container-fluid novalore3">
        <div class="inner">
            <h2>MORE GAMES COMING SOON!</h2>
            <p>
                We’re working on a list of about 30 games – mostly steam games that should be available in the near future.<br>Contact us if you’d like your multiplayer server hosted in Atlantic Canada and we’ll expedite the process!</p>
        </div>
    </div>

    <div class="clearfix"></div>
    <div class="container-fluid novalore4">
        <div class="inner">
            <h2>THE ATLANTIC CLOUD!</h2>
            <p>Tired of dealing with New York or Toronto servers? We were.</p>
        </div>
    </div>
    <?php include 'components/footer.php'; ?>
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
        $('.novalore').parallax({
            'coeff': -0.35
        });
        $('.novalore2').parallax({
            'coeff': -0.30
        });
        $('.novalore3').parallax({
            'coeff': -0.02
        });
        $('.novalore4').parallax({
            'coeff': -0.07
        });
    </script>
</body>

</html>