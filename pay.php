<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Novalore games</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="images/flogo.png">
    <link href="css/font-awesome.min.css" type="text/css" rel="stylesheet" />
    <link href="style.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
</head>

<body>
    <?php include 'components/header.php'; ?>
    <div class="section5 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <nav aria-label="breadcrumb" class="ead">
                        <ol class="breadcrumb bg-dark">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="upcoming.php">Gaming</a></li>
                            <li class="breadcrumb-item"><a href="cart.php">Cart</a></li>
                            <li class="breadcrumb-item active " aria-current="page">Payment</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-8">
                    <div class="payment ">
                        <form>
                            <h2>Payment Order</h2>
                            <div class="form-group form-check mt-3 mb-3">

                                <label class="form-check-label text-white p-0" for="exampleCheck1"><i class="fa fa-credit-card-alt" aria-hidden="true"></i> Credit and Debit Cards</label>


                            </div>
                            <hr>

                            <div class="col-md-12 p-0">
                                <div class="col-md-12 p-0">
                                    <label for="" class="text-white mt-3 mb-3">Crad Number </label>
                                    <input type="text" maxlength="16" pattern="\d{16}" title="Please enter exactly 16 digits" / placeholder="">
                                </div>

                                <label for="" class="text-white mt-3 mb-3">Expiration Date </label>
                                <select name="day">
                                    <option value="01">1</option>
                                    <option value="02">2</option>
                                    <option value="03">3</option>
                                    <option value="04">4</option>
                                    <option value="05">5</option>
                                    <option value="06">6</option>
                                    <option value="07">7</option>
                                    <option value="08">8</option>
                                    <option value="09">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>
                                <select name="year">
                                    <option value="2030">2030</option>
                                    <option value="2029">2029</option>
                                    <option value="2028">2028</option>
                                    <option value="2027">2027</option>
                                    <option value="2026">2026</option>
                                    <option value="2025">2025</option>
                                    <option value="2024">2024</option>
                                    <option value="2023">2023</option>
                                    <option value="2022">2022</option>
                                    <option value="2021">2021</option>
                                </select>
                            </div>

                            <label for="" class="text-white my-3 mb-3">CVV </label>
                            <input type="text" maxlength="3" class="cvv" class="cvv" pattern="\d{3}" title="Please enter exactly 3 digits" />
                            <br>
                            <hr>
                        </form>
                    </div>
                    <div class="order-detail">
                        <h2 class="mb-4">Shopper Details</h2>
                        <form action="" class="">
                            <label for="#" class="text-white mr-3">Full Name</label><input type="text"><br><br>


                            <label for="#" class="text-white mr-3">E-mail Address</label><input type="email">

                        </form>
                        <hr class="bg-white">
                    </div>
                    <div class="proceed">

                     <a href="index.php">  <button type="button" class="btn">PROCEED</button> <button type="button" class="btn btn-1 ml-3">CANCEL</button></a> 
                    </div>
                </div>
                <div class="col-md-4">

                </div>
            </div>
        </div>


    </div>
    <?php include 'components/footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('a[href^="#"]').on('click', function(e) {
                e.preventDefault();

                var target = this.hash;
                var $target = $(target);

                $('html, body').stop().animate({
                    'scrollTop': $target.offset().top
                }, 1500, 'swing', function() {
                    window.location.hash = target;
                });
            });
        });
    </script>

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
        $('.banner').parallax({
            'coeff': -0.35
        });
    </script>
</body>

</html>