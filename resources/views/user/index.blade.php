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
                        <div class="filter-header" style="display: flex; align-items: center; gap: 1rem;">
                            <h3 style="margin: 0;"> Advanced search</h3>
                            <button class="btn btn-primary" id="filterButton">Filter Vehicles</button>
                            <button class="btn btn-danger" id="clearFiltersButton"
                                style="background-color: #dc3545; border-color: #dc3545; color: #fff; border-radius: 20px; padding: 8px 16px; font-size: 16px; margin-left: 10px;">
                                Clear Filters <span
                                    style="font-weight: bold; font-size: 20px; line-height: 1; margin-left: 5px;">×</span>
                            </button>

                            <!-- New button added -->
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

                    <script>
                        // Function to clear all filters
                        function clearFilters() {
                            document.getElementById("priceFilter").value = "";
                            document.getElementById("makeFilter").value = "";
                            document.getElementById("modelFilter").value = "";
                            document.getElementById("yearMin").value = "";
                            document.getElementById("yearMax").value = "";
                            document.getElementById("conditionFilter").value = "";
                            document.getElementById("colorFilter").value = "";
                            document.getElementById("sortOption").value = "";
                            document.getElementById("sortOption").value = "";
                            document.getElementById("searchInput").value = "";

                            // Code to reset any other filter elements
                            // Implement your code to reset any other filter elements here

                            // After resetting filters, reapply filter function
                            filterVehicles(); // Assuming you have a function to filter vehicles already defined
                        }

                        // Event listener for clear filters button
                        document.getElementById("clearFiltersButton").addEventListener("click", clearFilters);
                    </script>


                    <style>
                        .filter-section {
                            background-color: #ffffff;
                            border-radius: 12px;
                            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                            padding: 15px;
                        }

                        .filter-header {
                            display: flex;
                            justify-content: space-between;
                            align-items: center;
                            margin-bottom: 10px;
                        }

                        .filter-body {
                            display: flex;
                            flex-wrap: wrap;
                            gap: 15px;
                        }

                        .filter-item {
                            background-color: #f0f0f0;
                            border-radius: 12px;
                            padding: 12px;
                            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                            flex: 1;
                        }

                        .form-control {
                            border: 1px solid #ced4da;
                            border-radius: 8px;
                            padding: 8px;
                            font-size: 14px;
                            width: 100%;
                        }

                        .btn-primary {
                            background-color: #007bff;
                            border: 1px solid #007bff;
                            color: #fff;
                            padding: 8px 16px;
                            border-radius: 8px;
                            cursor: pointer;
                            transition: background-color 0.3s, border-color 0.3s;
                        }

                        .btn-primary:hover {
                            background-color: #0056b3;
                        }
                    </style>






                </div>
            </div>
        </div>
    </div>
    <div class="sort-section">
        <label for="sortOption">Sort By:</label>
        <select id="sortOption">
            <option value="">Default</option>
            <option value="year-desc">Year - New to Old</option>
            <option value="year-asc">Year - Old to New</option>
            <option value="price-asc">Price - Low to High</option>
            <option value="price-desc">Price - High to Low</option>
        </select>
    </div>
    <div class="row" style="display: flex; flex-wrap: wrap; justify-content: space-between;" id="vehiclesList">
        @forelse ($posts as $post)
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4 vehicle-item">
                <div class="card h-100 vehicle-card"
                    style="border: none; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 15px;">
                    @if (is_array($post->image) && count($post->image) > 0)
                        <div id="carouselExampleIndicators{{ $post->id }}" class="carousel slide"
                            data-ride="false">
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


<!-- Add this code inside the `filterVehicles` function after the existing code -->


<style>
    .sort-section {
        display: flex;
        align-items: center;
        margin-bottom: 1rem;
    }

    .sort-section label {
        margin-right: 0.5rem;
        font-weight: bold;
    }

    .sort-section select {
        padding: 0.5rem;
        border-radius: 0.25rem;
        border: 1px solid #ccc;
    }
</style>

<script>
    const sortOption = document.getElementById('sortOption');

    sortOption.addEventListener('change', function() {
        const vehicleItems = Array.from(vehiclesList.querySelectorAll('.vehicle-item'));
        const sortValue = this.value;

        if (sortValue) {
            const [sortBy, sortOrder] = sortValue.split('-');

            vehicleItems.sort((a, b) => {
                const aValue = sortBy === 'year' ?
                    parseInt(a.querySelector('.vehicle-details p:nth-child(7)').textContent.split(':')[
                        1]) :
                    parseInt(a.querySelector('.card-text strong + span').textContent.replace(/[^0-9]/g,
                        ''));

                const bValue = sortBy === 'year' ?
                    parseInt(b.querySelector('.vehicle-details p:nth-child(7)').textContent.split(':')[
                        1]) :
                    parseInt(b.querySelector('.card-text strong + span').textContent.replace(/[^0-9]/g,
                        ''));

                if (aValue < bValue) {
                    return sortOrder === 'asc' ? -1 : 1;
                }
                if (aValue > bValue) {
                    return sortOrder === 'asc' ? 1 : -1;
                }
                return 0;
            });
        }

        vehicleItems.forEach(item => vehiclesList.appendChild(item));
    });
</script>


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
        "Audi": ["A3", "A4", "A5", "A6", "A7", "A8", "Q3", "Q5", "Q7", "Q8", "R8", "TT", "e-tron", "RS3", "RS5",
            "RS7", "S4", "S6", "S8", "SQ5", "SQ7"
        ],
        "BMW": ["2 Series", "3 Series", "4 Series", "5 Series", "6 Series", "7 Series", "8 Series", "i3", "i8",
            "M3", "M4", "X1", "X2", "X3", "X4", "X5", "X6", "X7", "Z4"
        ],
        "Chevrolet": ["Blazer", "Bolt", "Camaro", "Colorado", "Corvette", "Equinox", "Express", "Impala", "Malibu",
            "Silverado", "Sonic", "Spark", "Suburban", "Tahoe", "Traverse", "Trax", "Volt"
        ],
        "Daihatsu": ["Ayla", "Bego", "Copen", "Cuore", "Gran Max", "Hijet", "Luxio", "Materia", "Move", "Sirion",
            "Taft", "Tanto", "Terios", "Xenia", "YRV"
        ],
        "Dodge": ["Avenger", "Caliber", "Challenger", "Charger", "Dakota", "Dart", "Durango", "Grand Caravan",
            "Journey", "Nitro", "Ram", "Viper"
        ],
        "Ford": ["Bronco", "EcoSport", "Edge", "Escape", "Expedition", "Explorer", "F-150", "F-250", "F-350",
            "F-450", "F-650", "F-750", "Fiesta", "Flex", "Focus", "Fusion", "Mustang", "Ranger", "Taurus",
            "Transit"
        ],
        "Honda": ["Accord", "Accord Hybrid", "Civic", "Civic Si", "Civic Type R", "Clarity", "CR-V", "Fit", "HR-V",
            "Insight", "Odyssey", "Passport", "Pilot", "Ridgeline"
        ],
        "Hyundai": ["Accent", "Elantra", "Elantra GT", "Entourage", "Equus", "Genesis", "Ioniq", "Kona", "Nexo",
            "Palisade", "Santa Cruz", "Santa Fe", "Sonata", "Tucson", "Veloster", "Venue", "Veracruz"
        ],
        "Isuzu": ["Ascender", "Axiom", "D-Max", "F-Series", "Hombre", "i-Series", "MU-X", "N-Series", "Oasis",
            "Rodeo", "Trooper", "VehiCross"
        ],
        "Jaguar": ["E-Pace", "F-Pace", "F-Type", "I-Pace", "S-Type", "XE", "XF", "XJ", "XK", "X-Type"],
        "Jeep": ["Cherokee", "Commander", "Comanche", "Compass", "Gladiator", "Grand Cherokee", "Liberty",
            "Patriot", "Renegade", "Wrangler"
        ],
        "Land Rover": ["Defender", "Discovery", "Evoque", "Freelander", "LR2", "LR4", "Range Rover",
            "Range Rover Sport", "Velar"
        ],
        "Lexus": ["CT", "ES", "GS", "GX", "HS", "IS", "LC", "LFA", "LS", "LX", "NX", "RC", "RX", "SC"],
        "Mazda": ["Atenza", "Axela", "BT-50", "Capella", "CX-3", "CX-30", "CX-5", "CX-50", "CX-9", "Demio",
            "Lantis", "Mazda2", "Mazda3", "Mazda5", "Mazda6", "Millenia", "MPV", "MX-5 Miata", "MX-6",
            "Premacy", "Reverie", "Tribute", "Xedos"
        ],
        "Mercedes Benz": ["A-Class", "AMG GT", "AMG GT 4-Door Coupe", "C-Class", "CLA", "CLS", "E-Class", "G-Class",
            "GLA", "GLC", "GLE", "GLS", "Metris", "S-Class", "SL", "SLC", "Sprinter"
        ],
        "Mitsubishi": ["3000GT", "Diamante", "Eclipse Cross", "Endeavor", "Galant", "i-MiEV", "Lancer", "Mirage",
            "Montero", "Montero Sport", "Outlander", "Pajero", "Raider", "Triton"
        ],
        "Nissan": ["370Z", "Altima", "Armada", "Bluebird", "Caravan", "Dualis", "Frontier", "GT-R", "Juke", "Kicks",
            "Leaf", "March", "Maxima", "Murano", "Navara", "Note", "NV", "Pathfinder", "Patrol", "Qashqai",
            "Rogue", "Rogue Sport", "Sentra", "Serena", "Skyline", "Sunny", "Sylphy", "Teana", "Titan",
            "Titan XD", "Urvan", "Versa", "Wingroad", "X-Trail"
        ],
        "Peugeot": ["1007", "2008", "207", "208", "3008", "308", "407", "5008", "508", "607", "807", "Expert",
            "RCZ", "Traveller"
        ],
        "Porsche": ["718 (Boxster, Cayman)", "911", "Boxster", "Cayenne", "Cayenne Coupe", "Cayman", "Macan",
            "Panamera", "Taycan"
        ],
        "Rolls-Royce": ["Cullinan", "Dawn", "Ghost", "Phantom", "Silver Seraph", "Silver Shadow", "Wraith"],
        "Rover": ["25", "45", "75", "400", "600", "800", "Defender", "Discovery", "Freelander", "Range Rover"],
        "Subaru": ["Ascent", "Baja", "BRZ", "Crosstrek", "Forester", "Impreza", "Legacy", "Outback", "Tribeca",
            "WRX", "XV Crosstrek"
        ],
        "Suzuki": ["Aerio", "Baleno", "Ciaz", "Dzire", "Ertiga", "Forenza", "Grand Vitara", "Jimny", "Kizashi",
            "Reno", "Swift", "Verona", "Vitara", "XL7"
        ],
        "Tata": ["Altroz", "Aria", "Harrier", "Hexa", "Indica", "Indigo", "Nano", "Nexon", "Safari", "Sierra",
            "Sumo", "Tiago", "Tigor", "Xenon"
        ],
        "Toyota": ["4Runner", "86", "Allion", "Alphard", "Avalon", "Axio", "Belta", "C-HR", "Camry", "Crown",
            "Estima", "Fielder", "FJ Cruiser", "Fortuner", "Harrier", "Hiace", "Hilux", "Highlander", "Ipsum",
            "Land Cruiser", "Mark X", "Mirai", "Noah", "Premio", "Prado", "Prius", "Probox", "RAV4", "Rush",
            "Sequoia", "Sienna", "Succeed", "Supra", "Tacoma", "Tundra", "Venza", "Vitz", "Voxy", "Wish",
            "Yaris"
        ],
        "Volkswagen": ["Arteon", "Atlas", "Beetle", "CC", "Eos", "Golf", "Jetta", "Passat", "Phaeton", "Rabbit",
            "Routan", "Tiguan", "Touareg"
        ],
        "Volvo": ["C30", "C70", "S40", "S60", "S90", "V40", "V50", "V60", "V90", "XC40", "XC60", "XC90"]
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
