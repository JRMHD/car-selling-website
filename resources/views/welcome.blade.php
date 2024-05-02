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
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="images\ndochwhite.png" alt="NdochCars & Imports Logo" class="navbar-logo" />
            </a>
            <style>
                .navbar-logo {
                    max-height: 130px;
                    /* Adjust as needed */
                    width: auto;
                }
            </style>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a href="{{ url('/') }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('about') }}" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('services') }}" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('car') }}" class="nav-link">Cars</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('contact') }}" class="nav-link">Contact</a>
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
                <div class="col-lg-8 ftco-animate">
                    <div class="text w-100 text-center mb-md-5 pb-md-5">
                        <h1 class="mb-4">Find Your Dream Car at Ndoch Cars & Imports</h1>
                        <p style="font-size: 20px">
                            Ndoch Cars & Imports is your one-stop destination for all types
                            of vehicles in Kenya, including new and imported cars. Browse
                            our extensive inventory in Nairobi and drive away with your
                            perfect vehicle today.
                        </p>
                        <a href="https://vimeo.com/45830194"
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
                            <form action="#" class="request-form ftco-animate bg-primary">
                                <h2>Find Your Dream Car</h2>
                                <div class="form-group">
                                    <label for="car-make" class="label">Car Make</label>
                                    <input type="text" class="form-control" id="car-make"
                                        placeholder="e.g., Toyota, BMW, Honda" />
                                </div>
                                <div class="form-group">
                                    <label for="car-model" class="label">Car Model</label>
                                    <input type="text" class="form-control" id="car-model"
                                        placeholder="e.g., Corolla, X5, Civic" />
                                </div>
                                <div class="form-group">
                                    <label for="max-price" class="label">Maximum Price</label>
                                    <input type="number" class="form-control" id="max-price"
                                        placeholder="Maximum Price in KES" />
                                </div>
                                <div class="form-group">
                                    <label for="min-year" class="label">Minimum Year</label>
                                    <input type="number" class="form-control" id="min-year"
                                        placeholder="Minimum Year" />
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Find Your Car Now"
                                        class="btn btn-secondary py-3 px-4" />
                                </div>
                            </form>
                        </div>
                        <div class="col-md-8 d-flex align-items-center">
                            <div class="services-wrap rounded-right w-100">
                                <h3 class="heading-section mb-4">
                                    Discover the Perfect Car for You
                                </h3>
                                <div class="row d-flex mb-4">
                                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
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
                                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
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
                                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
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
                                    <a href="#" class="btn btn-primary py-3 px-4">Browse Our Inventory</a>
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
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">What we offer</span>
                    <h2 class="mb-2">Feeatured Vehicles</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel-car owl-carousel">
                        <div class="item">
                            <div class="car-wrap rounded ftco-animate">
                                <div class="img rounded d-flex align-items-end"
                                    style="background-image: url(images/car-1.jpg)"></div>
                                <div class="text">
                                    <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                                    <div class="d-flex mb-3">
                                        <span class="cat">Cheverolet</span>
                                        <p class="price ml-auto">$500 <span>/day</span></p>
                                    </div>
                                    <p class="d-flex mb-0 d-block">
                                        <a href="#" class="btn btn-primary py-2 mr-1">Book now</a>
                                        <a href="#" class="btn btn-secondary py-2 ml-1">Details</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="car-wrap rounded ftco-animate">
                                <div class="img rounded d-flex align-items-end"
                                    style="background-image: url(images/car-2.jpg)"></div>
                                <div class="text">
                                    <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                                    <div class="d-flex mb-3">
                                        <span class="cat">Cheverolet</span>
                                        <p class="price ml-auto">$500 <span>/day</span></p>
                                    </div>
                                    <p class="d-flex mb-0 d-block">
                                        <a href="#" class="btn btn-primary py-2 mr-1">Book now</a>
                                        <a href="#" class="btn btn-secondary py-2 ml-1">Details</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="car-wrap rounded ftco-animate">
                                <div class="img rounded d-flex align-items-end"
                                    style="background-image: url(images/car-3.jpg)"></div>
                                <div class="text">
                                    <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                                    <div class="d-flex mb-3">
                                        <span class="cat">Cheverolet</span>
                                        <p class="price ml-auto">$500 <span>/day</span></p>
                                    </div>
                                    <p class="d-flex mb-0 d-block">
                                        <a href="#" class="btn btn-primary py-2 mr-1">Book now</a>
                                        <a href="#" class="btn btn-secondary py-2 ml-1">Details</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="car-wrap rounded ftco-animate">
                                <div class="img rounded d-flex align-items-end"
                                    style="background-image: url(images/car-4.jpg)"></div>
                                <div class="text">
                                    <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                                    <div class="d-flex mb-3">
                                        <span class="cat">Cheverolet</span>
                                        <p class="price ml-auto">$500 <span>/day</span></p>
                                    </div>
                                    <p class="d-flex mb-0 d-block">
                                        <a href="#" class="btn btn-primary py-2 mr-1">Book now</a>
                                        <a href="#" class="btn btn-secondary py-2 ml-1">Details</a>
                                    </p>
                                </div>
                            </div>
                        </div>
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
                    <a href="#" class="btn btn-primary btn-lg">Become a Seller</a>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Testimonial</span>
                    <h2 class="mb-3">Happy Clients</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap rounded text-center py-4 pb-5">
                                <div class="user-img mb-2" style="background-image: url(images/person_1.jpg)"></div>
                                <div class="text pt-4">
                                    <p class="mb-4">
                                        I am very pleased with the quality of service provided by
                                        Ndoch Cars & Imports. The process of buying my car was
                                        smooth and hassle-free.
                                    </p>
                                    <p class="name">Wanjiku Kimani</p>
                                    <span class="position">Nairobi, Kenya</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap rounded text-center py-4 pb-5">
                                <div class="user-img mb-2" style="background-image: url(images/person_2.jpg)"></div>
                                <div class="text pt-4">
                                    <p class="mb-4">
                                        I would like to thank Ndoch Cars & Imports for helping me
                                        find the perfect car for my needs. The customer service
                                        was exceptional.
                                    </p>
                                    <p class="name">Ochieng Odhiambo</p>
                                    <span class="position">Kisumu, Kenya</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap rounded text-center py-4 pb-5">
                                <div class="user-img mb-2" style="background-image: url(images/person_3.jpg)"></div>
                                <div class="text pt-4">
                                    <p class="mb-4">
                                        Ndoch Cars & Imports exceeded my expectations. They helped
                                        me find the perfect car within my budget. Highly
                                        recommended!
                                    </p>
                                    <p class="name">Chebet Rotich</p>
                                    <span class="position">Eldoret, Kenya</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap rounded text-center py-4 pb-5">
                                <div class="user-img mb-2" style="background-image: url(images/akinyi.jpg)"></div>
                                <div class="text pt-4">
                                    <p class="mb-4">
                                        I had a great experience buying a car from Ndoch Cars &
                                        Imports. The staff was friendly and knowledgeable.
                                    </p>
                                    <p class="name">Akinyi Wambui</p>
                                    <span class="position">Nakuru, Kenya</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap rounded text-center py-4 pb-5">
                                <div class="user-img mb-2" style="background-image: url(images/person_4.jpg)"></div>
                                <div class="text pt-4">
                                    <p class="mb-4">
                                        Ndoch Cars & Imports made the car buying process simple
                                        and stress-free. I'm very satisfied with my purchase.
                                    </p>
                                    <p class="name">Wambui Mwangi</p>
                                    <span class="position">Thika, Kenya</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
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
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
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
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
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
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
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