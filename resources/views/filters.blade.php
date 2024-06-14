<link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

<form action="{{ route('posts.index') }}" method="GET"
    class="d-flex flex-wrap justify-content-center bg-light p-5 rounded-lg shadow-lg">
    {{-- <div class="form-group mx-4 mb-4">
        <label for="make" class="form-label fw-bold">Car Make</label>
        <select name="make" id="make" class="form-select form-select-lg">
            <option value="">All</option>
            @foreach ($carMakes as $make)
                <option value="{{ $make }}" {{ $make == request('make') ? 'selected' : '' }}>
                    {{ $make }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group mx-4 mb-4">
        <label for="model" class="form-label fw-bold">Car Model</label>
        <select name="model" id="model" class="form-select form-select-lg">
            <option value="">All</option>
            @foreach ($carModels as $model)
                <option value="{{ $model }}" {{ $model == request('model') ? 'selected' : '' }}>
                    {{ $model }}
                </option>
            @endforeach
        </select>
    </div> --}}

    <div class="form-group mx-4 mb-4">
        <label for="start_year" class="form-label fw-bold">Year of Manufacture (From)</label>
        <select name="start_year" id="start_year" class="form-select form-select-lg">
            <option value="">Any</option>
            @for ($year = date('Y'); $year >= 1900; $year--)
                <option value="{{ $year }}" {{ $year == request('start_year') ? 'selected' : '' }}>
                    {{ $year }}
                </option>
            @endfor
        </select>
    </div>

    <div class="form-group mx-4 mb-4">
        <label for="end_year" class="form-label fw-bold">Year of Manufacture (To)</label>
        <select name="end_year" id="end_year" class="form-select form-select-lg">
            <option value="">Any</option>
            @for ($year = date('Y'); $year >= 1900; $year--)
                <option value="{{ $year }}" {{ $year == request('end_year') ? 'selected' : '' }}>
                    {{ $year }}
                </option>
            @endfor
        </select>
    </div>

    <div class="form-group mx-4 mb-4">
        <label for="condition" class="form-label fw-bold">Condition</label>
        <select name="condition" id="condition" class="form-select form-select-lg">
            <option value="">All</option>
            <option value="Foreign Used" {{ request('condition') == 'Foreign Used' ? 'selected' : '' }}>Foreign Used
            </option>
            <option value="Local Used" {{ request('condition') == 'Local Used' ? 'selected' : '' }}>Local Used</option>
            <option value="Brand New" {{ request('condition') == 'Brand New' ? 'selected' : '' }}>Brand New</option>
        </select>
    </div>

    <div class="form-group mx-4 mb-4">
        <label for="color" class="form-label fw-bold">Color</label>
        <select name="color" id="color" class="form-select form-select-lg">
            <option value="">All</option>
            <option value="Red" {{ request('color') == 'Red' ? 'selected' : '' }}>Red</option>
            <option value="Blue" {{ request('color') == 'Blue' ? 'selected' : '' }}>Blue</option>
            <option value="Green" {{ request('color') == 'Green' ? 'selected' : '' }}>Green</option>
            <option value="Black" {{ request('color') == 'Black' ? 'selected' : '' }}>Black</option>
            <option value="White" {{ request('color') == 'White' ? 'selected' : '' }}>White</option>
            <option value="Silver" {{ request('color') == 'Silver' ? 'selected' : '' }}>Silver</option>
            <option value="Gray" {{ request('color') == 'Gray' ? 'selected' : '' }}>Gray</option>
            <option value="Yellow" {{ request('color') == 'Yellow' ? 'selected' : '' }}>Yellow</option>
            <option value="Brown" {{ request('color') == 'Brown' ? 'selected' : '' }}>Brown</option>
            <option value="Orange" {{ request('color') == 'Orange' ? 'selected' : '' }}>Orange</option>
        </select>
    </div>


    <div class="form-group mx-4 mb-4">
        <label for="price_range" class="form-label fw-bold">Price Range</label>
        <select name="price_range" id="price_range" class="form-select form-select-lg">
            <option value="">All</option>
            <option value="0-500000" {{ request('price_range') == '0-500000' ? 'selected' : '' }}>KES 0 - 500K</option>
            <option value="500000-1000000" {{ request('price_range') == '500000-1000000' ? 'selected' : '' }}>KES 500K
                - 1M</option>
            <option value="1000000-2000000" {{ request('price_range') == '1000000-2000000' ? 'selected' : '' }}>KES 1M
                - 2M</option>
            <option value="2000000-3000000" {{ request('price_range') == '2000000-3000000' ? 'selected' : '' }}>KES 2M
                - 3M</option>
            <option value="3000000-5000000" {{ request('price_range') == '3000000-5000000' ? 'selected' : '' }}>KES 3M
                - 5M</option>
            <option value="5000000-10000000" {{ request('price_range') == '5000000-10000000' ? 'selected' : '' }}>KES
                5M - 10M</option>
            <option value="10000000-999999999" {{ request('price_range') == '10000000-999999999' ? 'selected' : '' }}>
                Above KES 10M</option>
        </select>
    </div>

    <div class="form-group mx-4 mb-4">
        <button type="submit" class="btn btn-primary btn-lg mt-4">Apply Filters</button>
    </div>
</form>
<style>
    /* General Form Styling */
    .filter-form {
        background-color: #f8f9fa;
        /* Light background for better contrast */
        border-radius: 15px;
        /* Softer rounded corners */
        padding: 25px;
        /* Increased padding for more space */
        box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1);
        /* Subtle box shadow */
    }

    .form-label {
        font-weight: bold;
        margin-bottom: 5px;
    }

    .form-select {
        height: 50px;
    }

    .btn-primary {
        background-color: #007bff !important;
        /* Use Bootstrap's primary color */
        border: none;
        padding: 10px 20px;
        font-weight: bold;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        /* Add subtle shadow to the button */
        transition: background-color 0.3s ease;
        /* Smooth transition on hover */
    }

    .btn-primary:hover {
        background-color: #0056b3 !important;
    }

    /* Media Queries for Responsiveness */
    @media (max-width: 768px) {

        /* Adjustments for tablets and smaller screens */
        .filter-form {
            padding: 15px;
        }

        .form-group {
            margin-bottom: 10px;
        }

        .form-select {
            height: 40px;
        }

        .btn-primary {
            padding: 8px 15px;
        }
    }

    @media (max-width: 576px) {

        /* Adjustments for mobile phones */
        .filter-form {
            grid-template-columns: 1fr;
            /* One column on mobile */
        }
    }
</style>
