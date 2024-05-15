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
                    <div class="filter-section" style="flex-basis: 40%;">
                        <h4 class="mb-3" style="color: #333; font-size: 20px; font-weight: bold;">Filter by Budget
                        </h4>
                        <select class="form-control" id="priceFilter"
                            style="border-radius: 20px; padding: 10px 15px; font-size: 16px; border: 1px solid #ccc;">
                            <option value="">All</option>
                            <option value="0-500000">0 - 500K</option>
                            <option value="500000-1000000">500K - 1M</option>
                            <option value="1000000-2000000">1M - 2M</option>
                            <option value="2000000-3000000">2M - 3M</option>
                            <option value="3000000-5000000">3M - 5M</option>
                            <option value="5000000-10000000">5M - 10M</option>
                            <option value="10000000-999999999">Above 10M</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="display: flex; flex-wrap: wrap; justify-content: space-between;" id="vehiclesList">
            @forelse ($posts as $post)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4 vehicle-item">
                    <div class="card h-100 vehicle-card"
                        style="border: none; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">

                        <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->name }}"
                            style="max-height: 200px; object-fit: cover; border-radius: 10px;">
                        <div class="card-body">
                            <h5 class="card-title mb-2" style="color: black; font-weight: bold;">{{ $post->name }}
                            </h5>
                            <p class="card-text mb-1"><strong>Model:</strong> {{ $post->model }}</p>
                            <p><strong>Price:</strong> <span
                                    style="color: green; font-weight: bold;">{{ $post->price }}</span></p>
                            <p class="card-text mb-2"><strong>Status:</strong>
                                <span
                                    style="color: {{ $post->status === 'Sold' ? 'red' : 'blue' }}; font-weight: bold;">
                                    {{ $post->status }}
                                </span>
                            </p>

                            <button class="btn btn-primary view-details-btn"
                                style="background-color: #007bff; border-color: #007bff; color: black; transition: background-color 0.3s, border-color 0.3s; font-size: 16px;">View
                                All Details</button>
                        </div>
                        <div class="vehicle-details" style="display: none; padding: 20px;">
                            <p><strong>Transmission:</strong> {{ $post->transmission }}</p>
                            <p><strong>Drive:</strong> {{ $post->drive }}</p>
                            <p><strong>Engine Number:</strong> {{ $post->engine_type }}</p>
                            <p><strong>Chessis/Frame Number
                                    :</strong> {{ $post->chessis }}</p>
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
