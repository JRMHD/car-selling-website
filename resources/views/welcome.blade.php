<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ndoch Cars & Imports - Buy and Sell Cars in Nairobi, Kenya</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description"
        content="Ndoch Cars & Imports is a leading car dealership in Nairobi, Kenya, offering a wide selection of high-quality used cars at competitive prices. Browse our inventory and find your dream car today." />
    <meta name="keywords"
        content="Ndoch Cars, used cars, car dealership, Nairobi, Kenya, quality assurance, competitive pricing, buy cars, sell cars" />
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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation"
                style="height: 30px; padding: 5px;">
                <span class="oi oi-menu" style="font-size: 20px;"></span>
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a href="{{ url('/') }}" class="nav-link" style="font-size: 14px;">Home</a>
                    </li>
                    <li class="nav-item">
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

    <div class="hero-wrap ftco-degree-bg" style="background-image: url('images/bg_1.jpg')"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
                <div class="col-lg-8 ">
                    <div class="text w-100 text-center mb-md-5 pb-md-5">
                        <h1 class="mb-4">Find Your Dream Car at Ndoch Cars & Imports</h1>
                        <p style="font-size: 20px">
                            Ndoch Cars & Imports is your one-stop destination for all types
                            of vehicles in Kenya, including new and imported cars. Browse
                            our extensive inventory in Nairobi and drive away with your
                            perfect vehicle today.
                        </p>
                        <a href="https://www.youtube.com/watch?v=O_5goaab_1Q"
                            class="icon-wrap popup-vimeo d-flex align-items-center mt-4 justify-content-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="ion-ios-play"></span>
                            </div>
                            <div class="heading-title ml-5">
                                <span>Watch Our Showroom Tour</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-no-pt bg-light">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-12 featured-top">
                    <div class="row no-gutters">
                        <div class="col-md-4 d-flex align-items-center">
                            <form class="request-form  bg-primary">
                                @csrf
                                <h2>Search Vehicle</h2>
                                <div class="form-group">
                                    <label for="car-make" class="label">Car Make</label>
                                    <input type="text" class="form-control" id="car-make" name="car_make"
                                        placeholder="e.g., Toyota, BMW, Honda" />
                                </div>
                                <div class="form-group">
                                    <label for="car-model" class="label">Car Model</label>
                                    <input type="text" class="form-control" id="car-model" name="car_model"
                                        placeholder="e.g., Corolla, X5, Civic" />
                                </div>
                                <div class="form-group">
                                    <label for="max-price" class="label">Maximum Price</label>
                                    <input type="number" class="form-control" id="max-price" name="max_price"
                                        placeholder="Maximum Price in KES" />
                                </div>
                                <div class="form-group">
                                    <label for="min-year" class="label">Minimum Year</label>
                                    <input type="number" class="form-control" id="min-year" name="min_year"
                                        placeholder="Minimum Year" />
                                </div>


                                <div class="form-group">
                                    <input type="submit" value="Search" class="btn btn-secondary py-3 px-4" />
                                </div>
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                            </form>



                        </div>
                        <div class="col-md-8 d-flex align-items-center">
                            <div class="services-wrap rounded-right w-100">
                                <h3 class="heading-section mb-4">
                                    Discover the Perfect Car for You
                                </h3>
                                <div class="row d-flex mb-4">
                                    <div class="col-md-4 d-flex align-self-stretch ">
                                        <div class="services w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center">
                                                <i class="fas fa-car"></i>
                                            </div>
                                            <div class="text w-100">
                                                <h3 class="heading mb-2">Wide Selection of Cars</h3>
                                                <p>
                                                    Explore our diverse range of cars from top
                                                    manufacturers.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex align-self-stretch ">
                                        <div class="services w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center">
                                                <i class="fas fa-dollar-sign"></i>
                                            </div>
                                            <div class="text w-100">
                                                <h3 class="heading mb-2">Great Prices</h3>
                                                <p>Find competitive prices that fit your budget.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex align-self-stretch ">
                                        <div class="services w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center">
                                                <i class="fas fa-handshake"></i>
                                            </div>
                                            <div class="text w-100">
                                                <h3 class="heading mb-2">Quality Assurance</h3>
                                                <p>
                                                    Buy with confidence knowing each car undergoes
                                                    rigorous quality checks.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <a href="{{ url('car') }}" class="btn btn-primary py-3 px-4">Browse Our
                                        Inventory</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="ftco-section ftco-no-pt bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center  mb-5">
                    <span class="subheading">What we offer</span>
                    <h2 class="mb-2">Feeatured Vehicles</h2>
                </div>
            </div>


            @include('user.index', ['posts' => $posts])


        </div>
    </section>

    <section class="ftco-section ftco-intro" style="background-image: url(images/bg_3.jpg)">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-6 heading-section heading-section-white ">
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



    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section  text-center">
                    <span class="subheading">Why Choose Ndoch Cars & Imports</span>
                    <h2 class="mb-4">Exceptional Quality and Value</h2>
                    <p>
                        At Ndoch Cars & Imports, we are committed to providing our
                        customers with an unparalleled car buying experience. From our
                        extensive selection of meticulously inspected vehicles to our
                        transparent pricing and exceptional customer service, we strive to
                        exceed your expectations every step of the way.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 d-flex align-self-stretch ">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center mb-3">
                            <span class="flaticon-quality"><i class="fas fa-check-circle"></i></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Quality Assurance</h3>
                            <p>
                                We take pride in offering only the highest quality vehicles
                                that have undergone rigorous inspections and meet our
                                stringent standards.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch ">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center mb-3">
                            <span class="flaticon-deal"><i class="fas fa-tag"></i></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Competitive Pricing</h3>
                            <p>
                                Our commitment to transparency ensures you receive the best
                                value for your money, with fair and competitive pricing on
                                every vehicle.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch ">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center mb-3">
                            <span class="flaticon-customer-service"><i class="fas fa-user-friends"></i></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Exceptional Service</h3>
                            <p>
                                Our knowledgeable and friendly staff are dedicated to
                                providing you with a personalized and hassle-free car buying
                                experience.
                            </p>
                        </div>
                    </div>
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
