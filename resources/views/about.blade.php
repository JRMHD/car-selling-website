<!DOCTYPE html>
<html lang="en">

<head>
    <title>About Ndoch Cars & Imports | Quality Used Cars in Kenya</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description"
        content="Learn more about Ndoch Cars & Imports, your trusted source for high-quality used cars in Kenya. Discover our commitment to exceptional service and customer satisfaction." />
    <meta name="keywords"
        content="Ndoch Cars, used cars, car dealer, Kenya, Nairobi, quality assurance, competitive pricing" />
    <link rel="icon" href="images/ndoch-logo.ico" type="image/x-icon" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" />
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css" />
    <link rel="stylesheet" href="css/animate.css" />

    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />

    <link rel="stylesheet" href="css/aos.css" />

    <link rel="stylesheet" href="css/ionicons.min.css" />

    <link rel="stylesheet" href="css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="css/jquery.timepicker.css" />

    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/icomoon.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar"
        style="height: 70px;">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="images\ndochwhite.png" alt="NdochCars & Imports Logo"
                    style="max-height: 100px; width: auto;" />
            </a>
            <style>
                .navbar-logo {
                    max-height: 50px;
                    /* Adjust as needed */
                    width: auto;
                }
            </style>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation"
                style="height: 30px; padding: 5px;">
                <span class="oi oi-menu" style="font-size: 20px;">Menu</span>
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link" style="font-size: 14px;">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a href="{{ url('about') }}" class="nav-link" style="font-size: 14px;">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('services') }}" class="nav-link" style="font-size: 14px;">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('car') }}" class="nav-link" style="font-size: 14px;">Cars</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('contact') }}" class="nav-link" style="font-size: 14px;">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg')"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs">
                        <span class="mr-2"><a href="{{ url('/') }}">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span>
                        <span>About us <i class="ion-ios-arrow-forward"></i></span>
                    </p>
                    <h1 class="mb-3 bread">About Us</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-about">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center"
                    style="background-image: url(images/about.jpg)"></div>
                <div class="col-md-6 wrap-about ftco-animate">
                    <div class="heading-section heading-section-white pl-md-5">
                        <span class="subheading">About Us</span>
                        <h2 class="mb-4">Welcome to Ndoch Cars & Imports</h2>
                        <p>
                            At Ndoch Cars & Imports, we are passionate about connecting
                            people with their dream cars. Our mission is to provide a
                            seamless car buying experience, ensuring customer satisfaction
                            every step of the way.
                        </p>
                        <p>
                            With a commitment to quality and excellence, we offer a diverse
                            range of vehicles to suit every need and budget. Whether you're
                            looking for a sleek sedan, a rugged SUV, or a powerful pickup
                            truck, we've got you covered.
                        </p>
                        <p>
                            Experience the convenience of browsing our extensive inventory
                            online, and let our knowledgeable team assist you in finding the
                            perfect vehicle. Your journey to owning your dream car starts
                            here at Ndoch Cars & Imports.
                        </p>
                        <p>
                            <a href="{{ url('car') }}" class="btn btn-primary py-3 px-4">Search Vehicles</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-intro" style="background-image: url(images/bg_3.jpg)">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-6 heading-section heading-section-white ftco-animate">
                    <h2 class="mb-3">Join Our Team and Start Selling Cars Today!</h2>
                    <p>
                        We're looking for passionate individuals who want to earn with us
                        by selling quality cars. Join our network of sellers and start
                        making money.
                    </p>
                    <a href="{{ url('sellwithus') }}" class="btn btn-primary btn-lg">Become a Seller</a>
                </div>
            </div>
        </div>
    </section>

    @include('footer')

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
