<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Cart</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <link rel="shortcut icon" href="images/flogo.png">
    <link href="css/font-awesome.min.css" type="text/css" rel="stylesheet" />
    <link href="style.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>

<body>
    <?php include 'components/header.php'; ?>
    <div class="section5 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <nav aria-label="breadcrumb" class="ead">
                        <ol class="breadcrumb bg-dark">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="upcoming.php">Game</a></li>
                            <li class="breadcrumb-item active "  aria-current="page">Cart</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-8">

                   
                    <form action="" class="cart-form">
                        <h3>Contact Information </h3>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email or Phone Number">
                        <div class="form-group form-check mt-1 mb-3">
                            <input type="checkbox" id="exampleCheck1">
                            <label class="form-check-label text-white p-0" for="exampleCheck1">Email me with news and offers</label>
                        </div>
                        <h3>Shopping Address</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class=" form-control mb-3" placeholder="First Name(optional)">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class=" form-control  mb-3" placeholder="Last Name">
                            </div>
                            <div class="col-md-12">
                                <input type="text" class=" form-control  mb-3" placeholder="  Address">
                            </div>
                            <div class="col-md-12">
                                <input type="text" class=" form-control  mb-3" placeholder="  Appartment">
                            </div>
                            <div class="col-md-12">
                                <input type="text" class=" form-control  mb-3" placeholder="  City  ">
                            </div>
                            <div class="col-md-4">
                                <select id="country" name="country" class="form-control mb-3">
                                    <option value="Afganistan">India</option>


                                </select>
                            </div>
                            <div class="col-md-4">

                                <select name="state" id="state" class="form-control mb-3">
                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Chandigarh">Chandigarh</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                    <option value="Daman and Diu">Daman and Diu</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Lakshadweep">Lakshadweep</option>
                                    <option value="Puducherry">Puducherry</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Haryana">Haryana</option>
                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                    <option value="Jharkhand">Jharkhand</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Kerala">Kerala</option>
                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Manipur">Manipur</option>
                                    <option value="Meghalaya">Meghalaya</option>
                                    <option value="Mizoram">Mizoram</option>
                                    <option value="Nagaland">Nagaland</option>
                                    <option value="Odisha">Odisha</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Sikkim">Sikkim</option>
                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                    <option value="Telangana">Telangana</option>
                                    <option value="Tripura">Tripura</option>
                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                    <option value="Uttarakhand">Uttarakhand</option>
                                    <option value="West Bengal">West Bengal</option>
                                </select>

                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control mb-3" placeholder="PIN Code">
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control mb-3" placeholder="  Phone">
                            </div>
                            <div class="col-md-12">
                                <div class="form-group form-check">
                                    <input type="checkbox" id="exampleCheck2">
                                    <label class="form-check-label text-white p-0" for="exampleCheck2"> Save this information for next time</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <div class="right-cart">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="product">
                                    <h3 class="text-center text-white">Order</h3>
                                    <ul>
                                        <li><span><a href="fifa.php">FIFA 18</a></span><b>₹1990.00</b></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <a href="pay.php" class="btn view text-uppercase w-100"><b>PROCEED TO PAY</b></a>
                    </div>
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
                }, 900, 'swing', function() {
                    window.location.hash = target;
                });
            });
        });
    </script>

</body>

</html>