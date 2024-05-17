<link rel="stylesheet" href="{{ asset('vendor/ekko-lightbox/ekko-lightbox.css') }}">
<script src="{{ asset('vendor/ekko-lightbox/ekko-lightbox.min.js') }}"></script>
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
                    <div class="filter-section"
                        style="flex-basis: 40%; display: flex; flex-wrap: wrap; justify-content: space-between;">


                        <div style="margin-right: 20px; margin-bottom: 10px;">
                            <h4 class="mb-3" style="color: #333; font-size: 16px; font-weight: bold;">Price</h4>
                            <select class="form-control" id="priceFilter"
                                style="border-radius: 20px; padding: 10px 15px; font-size: 16px; border: 1px solid #ccc;">
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
                        <div style="margin-right: 20px; margin-bottom: 10px;">
                            <h4 class="mb-3" style="color: #333; font-size: 16px; font-weight: bold;">Car Make</h4>
                            <select class="form-control" id="makeFilter"
                                style="border-radius: 20px; padding: 10px 15px; font-size: 16px; border: 1px solid #ccc;">
                                <option value="">All</option>
                                <option value="Toyota">Toyota</option>
                                <option value="Nissan">Nissan</option>
                                <option value="Mazda">Mazda</option>
                                <option value="Subaru">Subaru</option>
                                <option value="Mercedes Benz">Mercedes Benz</option>
                                <option value="Audi">Audi</option>
                                <option value="BMW">BMW</option>
                                <option value="Chevrolet">Chevrolet</option>
                                <option value="Daihatsu">Daihatsu</option>
                                <option value="Dodge">Dodge</option>
                                <option value="Ford">Ford</option>
                                <option value="Honda">Honda</option>
                                <option value="Hyundai">Hyundai</option>
                                <option value="Isuzu">Isuzu</option>
                                <option value="Jaguar">Jaguar</option>
                                <option value="Jeep">Jeep</option>
                                <option value="Land Rover">Land Rover</option>
                                <option value="Lexus">Lexus</option>
                                <option value="Mitsubishi">Mitsubishi</option>
                                <option value="Peugeot">Peugeot</option>
                                <option value="Porsche">Porsche</option>
                                <option value="Rolls Royce">Rolls Royce</option>
                                <option value="Rover">Rover</option>
                                <option value="Suzuki">Suzuki</option>
                                <option value="Tata">Tata</option>
                                <option value="Volkswagen">Volkswagen</option>
                                <option value="Volvo">Volvo</option>
                                <option value="">Other Make</option>
                            </select>
                        </div>
                        <div style="margin-right: 20px; margin-bottom: 10px;">
                            <h4 class="mb-3" style="color: #333; font-size: 16px; font-weight: bold;">Car Model</h4>
                            <select class="form-control" id="modelFilter"
                                style="border-radius: 20px; padding: 10px 15px; font-size: 16px; border: 1px solid #ccc;">
                                <option value="">All</option>
                                <option value="Golf">Golf</option>
                                <option value="passat">passat</option>
                                <option value="polo">polo</option>
                                <option value="Tiguan">Tiguan</option>
                                <option value="Toureg">Toureg</option>
                                <option value="amarok">amarok</option>
                                <option value="Arteon">Arteon</option>
                                <option value="Beetle">Beetle</option>
                                <option value="Bora">Bora</option>
                                <option value="citi">citi</option>
                                <option value="E-Golf">E-Golf</option>
                                <option value="Golf alltrack">Golf alltrack</option>
                                <option value="Golf GTI">Golf GTI</option>
                                <option value="Golf R">Golf R</option>
                                <option value="Golf Variant">Golf Variant</option>
                                <option value="Jetta">Jetta</option>
                                <option value="Sharan">Sharan</option>
                                <option value="Touran">Touran</option>
                                <option value="Transporter">Transporter</option>
                                <option value="">Other Model</option>
                            </select>
                        </div>
                        <div style="margin-right: 20px; margin-bottom: 10px;">
                            <h4 class="mb-3" style="color: #333; font-size: 16px; font-weight: bold;">Year of
                                Manufacture</h4>
                            <div style="display: flex; align-items: center;">
                                <input type="number" class="form-control" id="yearMin" placeholder="Min"
                                    style="border-radius: 20px 0 0 20px; border-right: none; padding: 10px 15px; font-size: 16px; border: 1px solid #ccc; flex: 1;">
                                <span style="padding: 0 10px;">-</span>
                                <input type="number" class="form-control" id="yearMax" placeholder="Max"
                                    style="border-radius: 0 20px 20px 0; padding: 10px 15px; font-size: 16px; border: 1px solid #ccc; flex: 1;">
                            </div>
                        </div>
                        <div style="margin-right: 20px; margin-bottom: 10px;">
                            <h4 class="mb-3" style="color: #333; font-size: 16px; font-weight: bold;">Condition</h4>
                            <select class="form-control" id="conditionFilter"
                                style="border-radius: 20px; padding: 10px 15px; font-size: 16px; border: 1px solid #ccc;">
                                <option value="">All</option>
                                <option value="Foreign Used">Foreign Used</option>
                                <option value="Local Used">Local Used</option>
                                <option value="Brand New">Brand New</option>
                            </select>
                        </div>
                        <div style="margin-right: 20px; margin-bottom: 10px;">
                            <h4 class="mb-3" style="color: #333; font-size: 16px; font-weight: bold;">Color</h4>
                            <select class="form-control" id="colorFilter"
                                style="border-radius: 20px; padding: 10px 15px; font-size: 16px; border: 1px solid #ccc;">
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
            </div>
        </div>
        <div class="row" style="display: flex; flex-wrap: wrap; justify-content: space-between;"
            id="vehiclesList">
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
                                            data-slide-to="{{ $key }}"
                                            class="{{ $key == 0 ? 'active' : '' }}"></li>
                                    @endforeach
                                </ol>
                                <div class="carousel-inner">
                                    @foreach ($post->image as $key => $image)
                                        <div
                                            class="carousel-item {{ $key == 0 ? 'active' : '' }} vehicle-carousel-item">
                                            <a href="{{ asset('storage/' . $image) }}" data-toggle="lightbox"
                                                data-gallery="vehicle-gallery-{{ $post->id }}">
                                                <img src="{{ asset('storage/' . $image) }}"
                                                    class="d-block w-100 rounded"
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
                if (priceFilter.value) {
                    const [minPrice, maxPrice] = priceFilter.value.split('-');
                    const price = parseInt(item.querySelector('.card-text span').textContent.replace(
                        /[^0-9]/g, ''));
                    if (price < minPrice || price > maxPrice) {
                        showItem = false;
                    }
                }

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
