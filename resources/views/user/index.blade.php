<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css">

<!-- JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<section
    style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f8f9fa; padding: 40px 0;">
    <div class="container-fluid" style="max-width: 1200px; margin: 0 auto;">
        <div class="row justify-content-center mb-4">
            <div class="col-lg-10 col-md-12">
                <div class="search-filter-section"
                    style="background-color: #fff; border-radius: 10px; padding: 20px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); display: flex; flex-wrap: wrap; justify-content: center; align-items: center;">
                    <div class="search-section" style="flex-basis: 60%; margin-right: 20px;">
                        <h4 class="mb-3" style="color: #333; font-size: 20px; font-weight: bold;">Search Vehicle</h4>
                        <div class="input-group">
                            <input type="text" class="form-control" id="searchInput"
                                placeholder="Simply write the vehicle name and press the search button (i.e. demio or vitz)"
                                style="border-radius: 20px 0 0 20px; border-right: none; padding: 10px 15px; font-size: 16px; border: 1px solid #ccc;">
                            <div class="input-group-append">
                                <button class="btn btn-primary" id="searchButton"
                                    style="border-radius: 0 20px 20px 0; background-color: #007bff; border-color: #007bff; transition: background-color 0.3s, border-color 0.3s; font-size: 16px; font-weight: bold;">Search</button>
                            </div>
                        </div>
                    </div>
                    <div class="filter-section">
                        <div class="filter-header">
                            <h3>Filter Vehicles</h3>
                            <button class="btn btn-primary" id="filterButton">Filter Vehicles</button>
                        </div>
                        <div class="filter-body" style="display: none;">
                            <div class="filter-item">
                                <h4 class="mb-3">Price</h4>
                                <select class="form-control" id="priceFilter">
                                    <option value="">All</option>
                                    <option value="0-500,000">0 - 500K</option>
                                    <option value="500,000-1,000,000">500K - 1M</option>
                                    <option value="1,000,000-2,000,000">1M - 2M</option>
                                    <option value="2,000,000-3,000,000">2M - 3M</option>
                                    <option value="3,000,000-5,000,000">3M - 5M</option>
                                    <option value="5,000,000-10,000,000">5M - 10M</option>
                                    <option value="10,000,000-999,999,999">Above 10M</option>
                                </select>
                            </div>
                            <div class="filter-item">
                                <h4 class="mb-3">Car Make</h4>
                                <select class="form-control" id="makeFilter">
                                    <option value="">All</option>
                                </select>
                            </div>
                            <div class="filter-item">
                                <h4 class="mb-3">Car Model</h4>
                                <select class="form-control" id="modelFilter">
                                    <option value="">All</option>
                                </select>
                            </div>
                            <div class="filter-item">
                                <h4 class="mb-3">Year of Manufacture</h4>
                                <div style="display: flex; align-items: center;">
                                    <input type="number" class="form-control" id="yearMin" placeholder="Min"
                                        style="border-radius: 20px 0 0 20px; border-right: none; padding: 10px 15px; font-size: 16px; border: 1px solid #ccc; flex: 1;">
                                    <span style="padding: 0 10px;">-</span>
                                    <input type="number" class="form-control" id="yearMax" placeholder="Max"
                                        style="border-radius: 0 20px 20px 0; padding: 10px 15px; font-size: 16px; border: 1px solid #ccc; flex: 1;">
                                </div>
                            </div>
                            <div class="filter-item">
                                <h4 class="mb-3">Condition</h4>
                                <select class="form-control" id="conditionFilter">
                                    <option value="">All</option>
                                    <option value="Foreign Used">Foreign Used</option>
                                    <option value="Local Used">Local Used</option>
                                    <option value="Brand New">Brand New</option>
                                </select>
                            </div>
                            <div class="filter-item">
                                <h4 class="mb-3">Color</h4>
                                <select class="form-control" id="colorFilter">
                                    <option value="">Any</option>
                                    <option value="Black">Black</option>
                                    <option value="Blue">Blue</option>
                                    <option value="Gray">Gray</option>
                                    <option value="Silver">Silver</option>
                                    <option value="White">White</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <style>
                        .filter-section {
                            background-color: #f8f9fa;
                            border-radius: 8px;
                            padding: 20px;
                            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                        }

                        .filter-header {
                            display: flex;
                            justify-content: space-between;
                            align-items: center;
                            margin-bottom: 20px;
                        }

                        .filter-body {
                            display: grid;
                            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                            gap: 20px;
                        }

                        .filter-item {
                            background-color: #fff;
                            border-radius: 8px;
                            padding: 20px;
                            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                        }

                        .form-control {
                            border-radius: 20px;
                            padding: 10px 15px;
                            font-size: 16px;
                            border: 1px solid #ccc;
                        }

                        .btn-primary {
                            background-color: #007bff;
                            border-color: #007bff;
                            color: #fff;
                            transition: background-color 0.3s, border-color 0.3s;
                            font-size: 16px;
                            padding: 8px 16px;
                            border-radius: 20px;
                        }

                        .btn-primary:hover {
                            background-color: #0069d9;
                            border-color: #0062cc;
                        }
                    </style>






                </div>
            </div>
        </div>
    </div>
    <div class="row" style="display: flex; flex-wrap: wrap; justify-content: space-between;" id="vehiclesList">
        @forelse ($posts as $post)
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4 vehicle-item">
                <div class="card h-100 vehicle-card"
                    style="border: none; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 15px;">
                    @if (is_array($post->image) && count($post->image) > 0)
                        <div id="carouselExampleIndicators{{ $post->id }}" class="carousel slide" data-ride="false">
                            <ol class="carousel-indicators">
                                @foreach ($post->image as $key => $image)
                                    <li data-target="#carouselExampleIndicators{{ $post->id }}"
                                        data-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}">
                                    </li>
                                @endforeach
                            </ol>
                            <div class="carousel-inner">
                                @foreach ($post->image as $key => $image)
                                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }} vehicle-carousel-item">
                                        <a href="{{ asset('storage/' . $image) }}"
                                            data-fancybox="vehicle-gallery-{{ $post->id }}">
                                            <img src="{{ asset('storage/' . $image) }}" class="d-block w-100 rounded"
                                                style="object-fit: cover; border-radius: 15px;"
                                                alt="{{ $post->name }}">
                                        </a>

                                    </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators{{ $post->id }}"
                                role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators{{ $post->id }}"
                                role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    @else
                        <img src="{{ asset('storage/placeholder.jpg') }}" class="card-img-top rounded"
                            style="max-height: 200px; object-fit: cover; border-radius: 15px;"
                            alt="{{ $post->name }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title mb-2" style="color: black; font-weight: bold;">{{ $post->name }}
                        </h5>
                        <p class="card-text mb-1"><strong>Model:</strong> {{ $post->model }}</p>
                        <p><strong>Price:</strong> <span
                                style="color: green; font-weight: bold;">{{ $post->price }}</span></p>
                        <p class="card-text mb-2"><strong>Status:</strong> <span
                                style="color: {{ $post->status === 'Sold' ? 'red' : 'blue' }}; font-weight: bold;">{{ $post->status }}</span>
                        </p>
                        <p><strong>Condition:</strong> {{ $post->condition }}</p>
                        <button class="btn btn-primary view-details-btn"
                            style="background-color: #007bff; border-color: #007bff; color: black; transition: background-color 0.3s, border-color 0.3s; font-size: 16px;">View
                            All Details</button>
                    </div>
                    <div class="vehicle-details" style="display: none; padding: 20px;">
                        <p><strong>Transmission:</strong> {{ $post->transmission }}</p>
                        <p><strong>Drive:</strong> {{ $post->drive }}</p>
                        <p><strong>Engine Number:</strong> {{ $post->engine_type }}</p>
                        <p><strong>Chessis/Frame Number:</strong> {{ $post->chessis }}</p>
                        <p><strong>Rating(CC):</strong> {{ $post->engine_size }}</p>
                        <p><strong>Fuel Type:</strong> {{ $post->fuel }}</p>
                        <p><strong>Year of Manufacture:</strong> {{ $post->year }}</p>
                        <p><strong>Color:</strong> {{ $post->color }}</p>
                        <p><strong>Doors:</strong> {{ $post->doors }}</p>
                        <p><strong>Number of passengers:</strong> {{ $post->seats }}</p>
                        <p><strong>Body Type:</strong> {{ $post->body_type }}</p>
                        <p><strong>Mileage:</strong> {{ $post->mileage }}</p>
                        <div class="d-flex justify-content-between">
                            <a href="https://wa.me/254714428171?text=I'm%20interested%20in%20{{ urlencode($post->name) }}"
                                class="btn btn-success btn-sm whatsapp-btn" style="border-radius: 20px;">
                                <i class="fab fa-whatsapp mr-2"></i> <span>Enquire Via WhatsApp</span>
                            </a>
                            <a href="tel:+254714428171" class="btn btn-dark btn-sm call-btn"
                                style="border-radius: 20px;">
                                <i class="fas fa-phone-alt mr-2"></i> <span>Call to Book</span>
                            </a>
                        </div>

                        <style>
                            .whatsapp-btn:hover {
                                background-color: #1e9c52;
                            }

                            .call-btn:hover {
                                background-color: #1a1a1a;
                            }
                        </style>

                    </div>
                </div>
            </div>
        @empty
            <div class="col-md-12 text-center">
                <p style="font-size: 18px; color: #555;">No posts available. Contact us for more information at <a
                        href="tel:0741874561">0741874561</a> or <a
                        href="mailto:ndochcars@gmail.com">ndochcars@gmail.com</a>.</p>
                <a href="/" class="btn btn-primary">Go Home</a>
            </div>
        @endforelse
    </div>
    </div>
</section>

<div class="d-flex justify-content-center mt-4">
    {{ $posts->links() }}
</div>





<script>
    Fancybox.bind('[data-fancybox]', {
        infinite: false,
    });
</script>



<script>
    const filterButton = document.getElementById('filterButton');
    const filterBody = document.querySelector('.filter-body');

    filterButton.addEventListener('click', () => {
        filterBody.style.display = filterBody.style.display === 'none' ? 'grid' : 'none';
    });

    // Add your existing JavaScript code for populating car makes and models, and filtering vehicles


    const carMakeModels = {
        "Toyota": ["Camry", "Corolla", "RAV4", "Highlander", "Tacoma", "Tundra", "Prius", "Sienna", "4Runner",
            "Sequoia", "Avalon", "C-HR", "86", "Yaris", "Venza", "Mirai", "Supra", "Land Cruiser", "Axio",
            "Allion", "Belta", "Wish", "Fielder", "Vitz", "Mark X", "Crown", "Prado", "FJ Cruiser", "Fortuner",
            "Rush", "Hilux", "Hiace", "Probox", "Succeed", "Premio", "Ipsum", "Harrier", "Alphard", "Voxy",
            "Noah", "Estima"
        ],
        "Nissan": ["Altima", "Rogue", "Sentra", "Maxima", "Murano", "Pathfinder", "Frontier", "Versa", "Titan",
            "Leaf", "Armada", "Kicks", "370Z", "GT-R", "NV", "Rogue Sport", "Titan XD", "Qashqai", "Juke",
            "X-Trail", "Navara", "Serena", "Urvan", "Caravan", "Note", "March", "Tiida", "Sunny", "Teana",
            "Sylphy", "Wingroad", "Bluebird", "Dualis", "Patrol", "Skyline"
        ],
        "Mazda": ["Mazda3", "CX-5", "CX-9", "Mazda6", "Miata", "CX-30", "CX-50", "CX-3", "Mazda5", "Mazda2",
            "MX-5 Miata", "Atenza", "Axela", "Demio", "Premacy", "Tribute", "BT-50", "MPV", "MX-6", "Millenia",
            "Xedos", "Lantis", "Capella", "Reverie"
        ],

        "Subaru": ["Outback", "Forester", "Crosstrek", "Impreza", "Ascent", "WRX", "BRZ", "Legacy", "Tribeca",
            "Baja", "XV Crosstrek"
        ],
        "Mercedes Benz": ["C-Class", "E-Class", "S-Class", "GLC", "GLE", "GLS", "A-Class", "CLA", "CLS", "AMG GT",
            "G-Class", "GLA", "SL", "SLC", "Metris", "Sprinter", "AMG GT 4-Door Coupe"
        ],
        "Audi": ["A4", "A6", "Q5", "Q7", "A3", "A8", "R8", "TT", "Q3", "e-tron", "A5", "A7", "Q8", "SQ5", "SQ7",
            "RS3", "RS5", "RS7", "S4", "S6", "S8"
        ],
        "BMW": ["3 Series", "5 Series", "X5", "X3", "X7", "X1", "M3", "M4", "i3", "i8", "2 Series", "4 Series",
            "6 Series", "7 Series", "8 Series", "X2", "X4", "X6", "Z4"
        ],
        "Chevrolet": ["Silverado", "Equinox", "Traverse", "Malibu", "Camaro", "Corvette", "Tahoe", "Suburban",
            "Colorado", "Blazer", "Trax", "Bolt", "Spark", "Impala", "Express", "Sonic", "Volt"
        ],
        "Daihatsu": ["Copen", "Cuore", "Bego", "Hijet", "Taft", "Terios", "Xenia", "Ayla", "Gran Max", "Luxio",
            "Sirion", "Materia", "YRV", "Move", "Tanto"
        ],
        "Dodge": ["Charger", "Challenger", "Durango", "Journey", "Grand Caravan", "Dart", "Viper", "Nitro",
            "Avenger", "Caliber", "Dakota", "Ram"
        ],
        "Ford": ["F-150", "Escape", "Explorer", "Mustang", "Ranger", "Expedition", "Transit", "Bronco", "Edge",
            "EcoSport", "Fusion", "Taurus", "Fiesta", "Focus", "Flex", "F-250", "F-350", "F-450", "F-650",
            "F-750"
        ],
        "Honda": ["Civic", "Accord", "CR-V", "Pilot", "Odyssey", "Ridgeline", "HR-V", "Insight", "Clarity", "Fit",
            "Passport", "Civic Type R", "Civic Si", "Accord Hybrid"
        ],
        "Hyundai": ["Sonata", "Elantra", "Tucson", "Santa Fe", "Kona", "Palisade", "Veloster", "Ioniq", "Accent",
            "Venue", "Nexo", "Elantra GT", "Entourage", "Equus", "Genesis", "Santa Cruz", "Veracruz"
        ],
        "Isuzu": ["D-Max", "MU-X", "N-Series", "F-Series", "Trooper", "Ascender", "Axiom", "Hombre", "i-Series",
            "Oasis", "Rodeo", "VehiCross"
        ],
        "Jaguar": ["F-Type", "XE", "XF", "XJ", "E-Pace", "F-Pace", "I-Pace", "XK", "X-Type", "S-Type"],
        "Jeep": ["Wrangler", "Grand Cherokee", "Cherokee", "Compass", "Renegade", "Gladiator", "Liberty", "Patriot",
            "Commander", "Comanche"
        ],
        "Land Rover": ["Range Rover", "Range Rover Sport", "Discovery", "Defender", "Evoque", "Velar", "LR4", "LR2",
            "Freelander"
        ],
        "Lexus": ["RX", "ES", "IS", "NX", "LX", "GX", "LC", "LS", "CT", "RC", "GS", "HS", "SC", "LFA"],
        "Mitsubishi": ["Outlander", "Eclipse Cross", "Mirage", "Montero", "Pajero", "Triton", "Lancer", "i-MiEV",
            "Galant", "Diamante", "3000GT", "Montero Sport", "Raider", "Endeavor"
        ],
        "Peugeot": ["308", "3008", "5008", "208", "2008", "508", "Expert", "Traveller", "207", "407", "607", "807",
            "1007", "RCZ"
        ],
        "Porsche": ["911", "Cayenne", "Macan", "Panamera", "Taycan", "718 (Boxster, Cayman)", "Boxster", "Cayman",
            "Cayenne Coupe"
        ],
        "Rolls-Royce": ["Phantom", "Ghost", "Wraith", "Cullinan", "Dawn", "Corniche", "Silver Seraph",
            "Silver Shadow"
        ],
        "Rover": ["Discovery", "Range Rover", "Defender", "Freelander", "75", "600", "800", "25", "45", "400"],
        "Suzuki": ["Swift", "Vitara", "Jimny", "Baleno", "Ertiga", "Dzire", "Ciaz", "Grand Vitara", "Kizashi",
            "Reno", "Aerio", "Forenza", "Verona", "XL7"
        ],
        "Tata": ["Nexon", "Harrier", "Safari", "Altroz", "Tigor", "Tiago", "Hexa", "Aria", "Indigo", "Indica",
            "Nano", "Sumo", "Sierra", "Xenon"
        ],
        "Volkswagen": ["Golf", "Jetta", "Passat", "Tiguan", "Atlas", "Arteon", "Beetle", "Touareg", "CC", "Eos",
            "Phaeton", "Routan", "Rabbit", "Touareg"
        ],
        "Volvo": ["XC90", "XC60", "XC40", "S90", "V90", "S60", "V60", "V50", "S40", "C30", "C70"]
    };
    const makeFilter = document.getElementById("makeFilter");
    const modelFilter = document.getElementById("modelFilter");

    // Populate car makes
    Object.keys(carMakeModels).forEach(make => {
        const option = document.createElement("option");
        option.value = make;
        option.text = make;
        makeFilter.add(option);
    });

    makeFilter.addEventListener("change", () => {
        const selectedMake = makeFilter.value;
        modelFilter.innerHTML = "<option value=''>All</option>";

        if (selectedMake) {
            const models = carMakeModels[selectedMake];
            models.forEach(model => {
                const option = document.createElement("option");
                option.value = model;
                option.text = model;
                modelFilter.add(option);
            });
        }
    });
</script>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const priceFilter = document.getElementById('priceFilter');
        const makeFilter = document.getElementById('makeFilter');
        const modelFilter = document.getElementById('modelFilter');
        const yearMinInput = document.getElementById('yearMin');
        const yearMaxInput = document.getElementById('yearMax');
        const conditionFilter = document.getElementById('conditionFilter');
        const colorFilter = document.getElementById('colorFilter');
        const vehicleItems = document.querySelectorAll('.vehicle-item');

        // Function to show/hide vehicle items based on filters
        function filterVehicles() {
            vehicleItems.forEach(function(item) {
                let showItem = true;

                // Filter by price
                function parsePrice(priceString) {
                    // Remove any non-numeric characters and convert to number
                    const numericPrice = parseFloat(priceString.replace(/[^0-9.-]+/g, ""));
                    return isNaN(numericPrice) ? 0 : numericPrice;
                }

                const priceFilter = document.getElementById("priceFilter");
                const vehiclesList = document.getElementById("vehiclesList");

                priceFilter.addEventListener("change", () => {
                    const selectedPriceRange = priceFilter.value;
                    const vehicleItems = vehiclesList.getElementsByClassName("vehicle-item");

                    for (let i = 0; i < vehicleItems.length; i++) {
                        const vehicleItem = vehicleItems[i];
                        const priceElement = vehicleItem.querySelector(".card-text span");
                        const priceString = priceElement ? priceElement.textContent.trim() : "";
                        const price = parsePrice(priceString);

                        let shouldShow = true;
                        switch (selectedPriceRange) {
                            case "0-500,000":
                                shouldShow = price >= 0 && price <= 500000;
                                break;
                            case "500,000-1,000,000":
                                shouldShow = price >= 500000 && price <= 1000000;
                                break;
                            case "1,000,000-2,000,000":
                                shouldShow = price >= 1000000 && price <= 2000000;
                                break;
                            case "2,000,000-3,000,000":
                                shouldShow = price >= 2000000 && price <= 3000000;
                                break;
                            case "3,000,000-5,000,000":
                                shouldShow = price >= 3000000 && price <= 5000000;
                                break;
                            case "5,000,000-10,000,000":
                                shouldShow = price >= 5000000 && price <= 10000000;
                                break;
                            case "10,000,000-999,999,999":
                                shouldShow = price >= 10000000;
                                break;
                            default:
                                shouldShow = true;
                        }

                        vehicleItem.style.display = shouldShow ? "block" : "none";
                    }
                });

                // Filter by make
                if (makeFilter.value && makeFilter.value !== 'All') {
                    if (item.querySelector('.card-title').textContent.toLowerCase().indexOf(makeFilter
                            .value.toLowerCase()) === -1) {
                        showItem = false;
                    }
                }

                // Filter by model
                if (modelFilter.value && modelFilter.value !== 'All') {
                    if (item.querySelector('.card-text').textContent.toLowerCase().indexOf(modelFilter
                            .value.toLowerCase()) === -1) {
                        showItem = false;
                    }
                }

                // Filter by year of manufacture
                if (yearMinInput.value && yearMaxInput.value) {
                    const yearMin = parseInt(yearMinInput.value);
                    const yearMax = parseInt(yearMaxInput.value);
                    const year = parseInt(item.querySelector('.vehicle-details p:nth-child(7)')
                        .textContent.split(':')[1]);
                    if (year < yearMin || year > yearMax) {
                        showItem = false;
                    }
                }

                // Filter by condition
                if (conditionFilter.value && conditionFilter.value !== 'All') {
                    if (item.querySelector('.vehicle-details p:nth-child(10)').textContent.split(':')[1]
                        .trim() !== conditionFilter.value) {
                        showItem = false;
                    }
                }

                // Filter by color
                if (colorFilter.value && colorFilter.value !== 'Any') {
                    if (item.querySelector('.vehicle-details p:nth-child(9)').textContent.split(':')[1]
                        .trim() !== colorFilter.value) {
                        showItem = false;
                    }
                }

                // Show/hide the item based on filters
                item.style.display = showItem ? 'block' : 'none';
            });
        }

        // Add event listeners to all filters
        priceFilter.addEventListener('change', filterVehicles);
        makeFilter.addEventListener('change', filterVehicles);
        modelFilter.addEventListener('change', filterVehicles);
        yearMinInput.addEventListener('change', filterVehicles);
        yearMaxInput.addEventListener('change', filterVehicles);
        conditionFilter.addEventListener('change', filterVehicles);
        colorFilter.addEventListener('change', filterVehicles);

        // Initial filtering when the page loads
        filterVehicles();
    });






    document.querySelectorAll('.view-details-btn').forEach(function(btn) {
        btn.addEventListener('click', function() {
            const vehicleDetails = this.closest('.vehicle-card').querySelector('.vehicle-details');
            vehicleDetails.style.display = vehicleDetails.style.display === 'none' ? 'block' : 'none';
        });
    });

    const searchInput = document.getElementById('searchInput');
    const searchButton = document.getElementById('searchButton');
    const priceFilter = document.getElementById('priceFilter');
    const vehiclesList = document.getElementById('vehiclesList');

    searchButton.addEventListener('click', filterVehicles);
    priceFilter.addEventListener('change', filterVehicles);

    function filterVehicles() {
        const searchTerm = searchInput.value.toLowerCase();
        const selectedPrice = priceFilter.value;

        const vehicleItems = vehiclesList.querySelectorAll('.vehicle-item');
        let noMatch = true;

        vehicleItems.forEach(function(item) {
            const vehicleName = item.querySelector('.card-title').textContent.toLowerCase();
            const vehiclePrice = parseInt(item.querySelector('.card-text strong + span').textContent.replace(
                /[^0-9]/g, ''));

            let matchSearch = true;
            let matchPrice = true;

            if (searchTerm) {
                matchSearch = vehicleName.includes(searchTerm);
            }

            if (selectedPrice) {
                const [minPrice, maxPrice] = selectedPrice.split('-');
                matchPrice = vehiclePrice >= parseInt(minPrice) && vehiclePrice <= parseInt(maxPrice);
            }

            if (matchSearch && matchPrice) {
                item.style.display = 'block';
                noMatch = false;
            } else {
                item.style.display = 'none';
            }
        });

        if (noMatch) {
            const noMatchMessage = document.createElement('div');
            noMatchMessage.classList.add('col-md-12', 'text-center');
            noMatchMessage.innerHTML =
                '<p style="font-size: 18px; color: #555;">No vehicles found matching your search or filter criteria.</p>';
            vehiclesList.appendChild(noMatchMessage);
        } else {
            const existingMessage = vehiclesList.querySelector('.col-md-12.text-center');
            if (existingMessage) {
                existingMessage.remove();
            }
        }
    }
</script>
