<!DOCTYPE html>
<html lang="en">
<?php
//include("{{URL::to('connect.php')}}");  //include connection file
error_reporting(0);  // using to hide undefine undex errors
session_start(); //start temp session until logout/browser closed


?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{URL::to('Frontend/#')}}">
    <title>Food2Go</title>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('Frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('Frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('Frontend/css/animsition.min.css')}}" rel="stylesheet">
    <link href="{{asset('Frontend/css/animate.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('Frontend/css/style.css')}}" rel="stylesheet"> </head>

<body class="home">
    <div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
        <!--header starts-->
        <header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                    <a class="navbar-brand" href="index.php"> <img class="img-rounded" src="{{asset('Frontend/images/f2g.png')}}" alt=""> </a>
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="restaurants.php">Restaurants <span class="sr-only"></span></a> </li>


							<?php
						if(empty($_SESSION["user_id"])) // if user is not login
							{
								echo '<li class="nav-item"><a href="login.php" class="nav-link active">login</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link active">signup</a> </li>';
							}
						else
							{
									//if user is login

									echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">your orders</a> </li>';
									echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">logout</a> </li>';
							}

						?>

                        </ul>

                    </div>
                </div>
            </nav>
            <!-- /.navbar -->
        </header>

        {{-- home page content starts --}}
        <!-- banner part starts -->
        @yield('banner_part')
        <!-- banner part ends -->
        <!-- Popular block starts -->
            @yield('populer')
        <!-- Popular block ends -->
        <!-- How it works block starts -->
            @yield('How-it-works')
        <!-- How it works block ends -->
        <!-- Featured restaurants starts -->
            @yield('Food_categories')
        <!-- Featured restaurants ends -->
        {{-- app section starts-- --}}
            @yield('app-section')
        {{-- app section ends --}}
        {{-- home page content ends --}}


        <!-- start: FOOTER -->
        <footer class="footer">
            <div class="container">
                <!-- top footer statrs -->
                <div class="row top-footer">
                    <div class="col-xs-12 col-sm-3 footer-logo-block color-gray">
                        <a href="#"> <img src="{{asset('Frontend/images/f2g.png')}}" alt="Footer logo"> </a>
                        <span>Eat quality food without any fear!!!! </span>
                    </div>
                    <div class="col-xs-12 col-sm-2 about color-gray">
                        <h5>About Us</h5>
                        <ul>
                            <li><a href="#">About us</a> </li>
                            <li><a href="#">History</a> </li>
                            <li><a href="#">Our Team</a> </li>
                            <li><a href="#">We are hiring</a> </li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-2 how-it-works-links color-gray">
                        <h5>How it Works</h5>
                        <ul>
                            <li><a href="#">Log in to the website</a> </li>
                            <li><a href="#">Enter your location</a> </li>
                            <li><a href="#">Choose meal</a> </li>
                            <li><a href="#">Select payment method</a> </li>
                            <li><a href="#">Wait for delivery</a> </li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-2 pages color-gray">
                        <h5>Pages</h5>
                        <ul>
                            <li><a href="#">Search results page</a> </li>
                            <li><a href="#">User Sign Up Page</a> </li>
                            <li><a href="#">Pricing page</a> </li>
                            <li><a href="#">Make order</a> </li>
                            <li><a href="#">Add to cart</a> </li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-3 popular-locations color-gray">
                        <h5>Popular locations</h5>
                        <ul>
                            <li><a href="#">Colombo</a> </li>
                            <li><a href="#">Kurunegala</a> </li>
                            <li><a href="#">Kuliyapitiya</a> </li>
                            <li><a href="#">Kandy</a> </li>
                            <li><a href="#">Narammala</a> </li>
                            <li><a href="#">Awissawella</a> </li>
                            <li><a href="#">Dambadeniya</a> </li>
                            <li><a href="#">Wariyapola</a> </li>
                            <li><a href="#">Anuradhapura</a> </li>
                            <li><a href="#">Navala</a> </li>
                            <li><a href="#">Kandhana</a> </li>
                        </ul>
                    </div>
                </div>
                <!-- top footer ends -->
                <!-- bottom footer statrs -->
                <div class="bottom-footer">
                    <div class="row">
                        <div class="col-xs-12 col-sm-3 payment-options color-gray">
                            <h5>Payment Options</h5>
                            <ul>
                                <li>
                                    <a href="#"> <img src="{{asset('Frontend/images/paypal.png')}}" alt="Paypal"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="{{asset('Frontend/images/mastercard.png')}}" alt="Mastercard"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="{{asset('Frontend/images/maestro.png')}}" alt="Maestro"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="{{asset('Frontend/images/stripe.png')}}" alt="Stripe"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="{{asset('Frontend/images/bitcoin.png')}}" alt="Bitcoin"> </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-4 address color-gray">
                            <h5>Address</h5>
                            <p>19, City Gardence(60/5), 3rd Lane, Negombo RD, Kurunegala</p>
                            <h5>Phone: <a href="tel:+94773398664">0773398664</a></h5> </div>
                        <div class="col-xs-12 col-sm-5 additional-info color-gray">
                            <h5>Addition informations</h5>
                            <p>Sign in with our website for free and get many quality foods with many attractive offers!!!</p>
                        </div>
                    </div>
                </div>
                <!-- bottom footer ends -->
            </div>
        </footer>
        <!-- end:Footer -->
    </div>
    <!--/end:Site wrapper -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="{{asset('Frontend/js/jquery.min.js')}}"></script>
    <script src="{{asset('Frontend/js/tether.min.js')}}"></script>
    <script src="{{asset('Frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('Frontend/js/animsition.min.js')}}"></script>
    <script src="{{asset('Frontend/js/bootstrap-slider.min.js')}}"></script>
    <script src="{{asset('Frontend/js/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('Frontend/js/headroom.js')}}"></script>
    <script src="{{asset('Frontend/js/foodpicky.min.js')}}"></script>
</body>

</html>
