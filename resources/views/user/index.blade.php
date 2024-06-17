<!-- Include jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
<!-- CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css">

<!-- JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<form action="{{ route('posts.index') }}" method="GET"
    class="d-flex justify-content-center align-items-center my-4 p-3 bg-light rounded shadow">
    <input class="form-control form-control-lg me-2" type="search" name="query" placeholder="Search vehicles"
        value="{{ $query ?? '' }}" aria-label="Search">
    <button class="btn btn-primary btn-lg" type="submit">Search</button>
</form>

<div class="container mt-5">
    <!-- Button to toggle filters -->
    <style>
        .filter-button {
            margin-right: 20px;
        }
    </style>

    <div class="d-flex justify-content-center align-items-center mb-4">
        <button id="filterButton" class="btn btn-primary btn-lg filter-button">
            <i class="fas fa-filter"></i> Filter Vehicles
        </button>
        <a href="{{ route('posts.index') }}" class="btn btn-outline-danger btn-lg">
            <i class="fas fa-times"></i> Clear Filters
        </a>
    </div>

    <!-- Filter section -->
    <div id="filterSection" class="filter-section p-3 bg-light rounded shadow">
        @include('filters')
    </div>
</div>
<style>
    .filter-section {
        display: none;
        margin-top: 20px;
    }
</style>


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
                                            style="object-fit: cover; border-radius: 15px;" alt="{{ $post->name }}">
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
                        style="max-height: 200px; object-fit: cover; border-radius: 15px;" alt="{{ $post->name }}">
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
                    {{-- <p><strong>Engine Number:</strong> {{ $post->engine_type }}</p>
                        <p><strong>Chessis/Frame Number:</strong> {{ $post->chessis }}</p> --}}
                    <p><strong>Engine Size(CC):</strong> {{ $post->engine_size }}</p>
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
                        <a href="tel:+254714428171" class="btn btn-dark btn-sm call-btn" style="border-radius: 20px;">
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
    document.addEventListener('DOMContentLoaded', function() {
        Fancybox.bind('[data-fancybox]', {
            Image: {
                zoom: false, // Disable initial zoom for a better user experience
                click: false, // Disable clicking to close (use the close button instead)
                wheel: "slide", // Use mouse wheel to slide between images
            },
            Thumbs: {
                autoStart: true, // Automatically show thumbnails
            },
            Carousel: {
                infinite: true, // Enable infinite scrolling in the carousel
            },
        });
    });
    document.querySelectorAll('.view-details-btn').forEach(function(btn) {
        btn.addEventListener('click', function() {
            const vehicleDetails = this.closest('.vehicle-card').querySelector('.vehicle-details');
            vehicleDetails.style.display = vehicleDetails.style.display === 'none' ? 'block' : 'none';
        });
    });
</script>


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
    $(document).ready(function() {
        $('#filterButton').click(function() {
            $('#filterSection').slideToggle();
        });
    });
</script>
