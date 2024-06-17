<link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

<form action="{{ route('posts.index') }}" method="GET"
    class="d-flex flex-wrap justify-content-center bg-light p-5 rounded-lg shadow-lg">
    <div class="form-group mx-4 mb-4">
        <label for="name" class="form-label fw-bold">Make</label>
        <select name="name" id="name" class="form-control form-control-lg">
            <option value="">Select Make</option>
        </select>
    </div>

    <div class="form-group mx-4 mb-4">
        <label for="model" class="form-label fw-bold">Model</label>
        <select name="model" id="model" class="form-control form-control-lg">
            <option value="">Select Model</option>
        </select>
    </div>


    <div class="form-group mx-4 mb-4">
        <label for="start_year" class="form-label fw-bold">Year of Manufacture (Min)</label>
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
        <label for="end_year" class="form-label fw-bold">Year of Manufacture (Max)</label>
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
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        background-color: #ffffff;
        border-radius: 15px;
        padding: 20px;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
        gap: 20px;
    }

    .form-group {
        flex: 1;
        min-width: 200px;
    }

    .form-label {
        font-weight: bold;
        margin-bottom: 5px;
        font-size: 1.1em;
    }

    .form-select,
    .form-control {
        height: 50px;
        border-radius: 10px;
        border: 1px solid #ced4da;
        padding: 0 15px;
        font-size: 1em;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .form-select:focus,
    .form-control:focus {
        border-color: #80bdff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.25);
    }

    .btn-primary {
        background-color: #007bff !important;
        border: none;
        padding: 10px 20px;
        font-weight: bold;
        border-radius: 10px;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3 !important;
        transform: translateY(-2px);
    }

    /* Media Queries for Responsiveness */
    @media (max-width: 768px) {
        .filter-form {
            flex-direction: column;
        }

        .form-group {
            width: 100%;
        }
    }
</style>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const data = {
            "Audi": ["A3", "A4", "A5", "A6", "A7", "A8", "Q3", "Q5", "Q7", "Q8", "R8", "TT", "e-tron",
                "RS3", "RS5",
                "RS7", "S4", "S6", "S8", "SQ5", "SQ7"
            ],
            "BMW": ["2 Series", "3 Series", "4 Series", "5 Series", "6 Series", "7 Series", "8 Series",
                "i3", "i8",
                "M3", "M4", "X1", "X2", "X3", "X4", "X5", "X6", "X7", "Z4"
            ],
            "Chevrolet": ["Blazer", "Bolt", "Camaro", "Colorado", "Corvette", "Equinox", "Express",
                "Impala", "Malibu",
                "Silverado", "Sonic", "Spark", "Suburban", "Tahoe", "Traverse", "Trax", "Volt"
            ],
            "Daihatsu": ["Ayla", "Bego", "Copen", "Cuore", "Gran Max", "Hijet", "Luxio", "Materia", "Move",
                "Sirion",
                "Taft", "Tanto", "Terios", "Xenia", "YRV"
            ],
            "Dodge": ["Avenger", "Caliber", "Challenger", "Charger", "Dakota", "Dart", "Durango",
                "Grand Caravan",
                "Journey", "Nitro", "Ram", "Viper"
            ],
            "Ford": ["Bronco", "EcoSport", "Edge", "Escape", "Expedition", "Explorer", "F-150", "F-250",
                "F-350",
                "F-450", "F-650", "F-750", "Fiesta", "Flex", "Focus", "Fusion", "Mustang", "Ranger",
                "Taurus",
                "Transit"
            ],
            "Honda": ["Accord", "Accord Hybrid", "Civic", "Civic Si", "Civic Type R", "Clarity", "CR-V",
                "Fit", "HR-V",
                "Insight", "Odyssey", "Passport", "Pilot", "Ridgeline"
            ],

            "Honda Fit Shuttle": ["15X", "Hybrid", "Hybrid Smart Selection", "Hybrid Navi Selection"],


            "Hyundai": ["Accent", "Elantra", "Elantra GT", "Entourage", "Equus", "Genesis", "Ioniq", "Kona",
                "Nexo",
                "Palisade", "Santa Cruz", "Santa Fe", "Sonata", "Tucson", "Veloster", "Venue",
                "Veracruz"
            ],
            "Isuzu": ["Ascender", "Axiom", "D-Max", "F-Series", "Hombre", "i-Series", "MU-X", "N-Series",
                "Oasis",
                "Rodeo", "Trooper", "VehiCross"
            ],
            "Jaguar": ["E-Pace", "F-Pace", "F-Type", "I-Pace", "S-Type", "XE", "XF", "XJ", "XK", "X-Type"],
            "Jeep": ["Cherokee", "Commander", "Comanche", "Compass", "Gladiator", "Grand Cherokee",
                "Liberty",
                "Patriot", "Renegade", "Wrangler"
            ],
            "Land Rover": ["Defender", "Discovery", "Evoque", "Freelander", "LR2", "LR4", "Range Rover",
                "Range Rover Sport", "Velar"
            ],
            "Lexus": ["CT", "ES", "GS", "GX", "HS", "IS", "LC", "LFA", "LS", "LX", "NX", "RC", "RX", "SC"],
            "Mazda": ["Atenza", "Axela", "BT-50", "Capella", "CX3", "CX30", "CX5", "CX50", "CX9",
                "Demio",
                "Lantis", "Mazda2", "Mazda3", "Mazda5", "Mazda6", "Millenia", "MPV", "MX-5 Miata",
                "MX-6",
                "Premacy", "Reverie", "Tribute", "Xedos"
            ],
            "Mercedes Benz": ["A-Class", "AMG GT", "AMG GT 4-Door Coupe", "C-Class", "CLA", "CLS",
                "E-Class", "G-Class",
                "GLA", "GLC", "GLE", "GLS", "Metris", "S-Class", "SL", "SLC", "Sprinter"
            ],
            "Mitsubishi": ["3000GT", "Diamante", "Eclipse Cross", "Endeavor", "Galant", "i-MiEV", "Lancer",
                "Mirage",
                "Montero", "Montero Sport", "Outlander", "Pajero", "Raider", "Triton"
            ],
            "Nissan": ["370Z", "Altima", "Armada", "Bluebird", "Caravan", "Dualis", "Frontier", "GT-R",
                "Juke", "Kicks",
                "Leaf", "March", "Maxima", "Murano", "Navara", "Note", "NV", "Pathfinder", "Patrol",
                "Qashqai",
                "Rogue", "Rogue Sport", "Sentra", "Serena", "Skyline", "Sunny", "Sylphy", "Teana",
                "Titan",
                "Titan XD", "Urvan", "Versa", "Wingroad", "X-Trail"
            ],
            "Peugeot": ["1007", "2008", "207", "208", "3008", "308", "407", "5008", "508", "607", "807",
                "Expert",
                "RCZ", "Traveller"
            ],
            "Porsche": ["718 (Boxster, Cayman)", "911", "Boxster", "Cayenne", "Cayenne Coupe", "Cayman",
                "Macan",
                "Panamera", "Taycan"
            ],
            "Rolls-Royce": ["Cullinan", "Dawn", "Ghost", "Phantom", "Silver Seraph", "Silver Shadow",
                "Wraith"
            ],
            "Rover": ["25", "45", "75", "400", "600", "800", "Defender", "Discovery", "Freelander",
                "Range Rover"
            ],
            "Subaru": ["Ascent", "Baja", "BRZ", "Crosstrek", "Forester", "Impreza", "Legacy", "Outback",
                "Tribeca",
                "WRX", "XV Crosstrek"
            ],
            "Suzuki": ["Aerio", "Baleno", "Ciaz", "Dzire", "Ertiga", "Forenza", "Grand Vitara", "Jimny",
                "Kizashi",
                "Reno", "Swift", "Verona", "Vitara", "XL7"
            ],
            "Tata": ["Altroz", "Aria", "Harrier", "Hexa", "Indica", "Indigo", "Nano", "Nexon", "Safari",
                "Sierra",
                "Sumo", "Tiago", "Tigor", "Xenon"
            ],
            "Toyota": ["4Runner", "86", "Allion", "Alphard", "Avalon", "Axio", "Belta", "C-HR", "Camry",
                "Crown",
                "Estima", "Fielder", "FJ Cruiser", "Fortuner", "Harrier", "Hiace", "Hilux",
                "Highlander", "Ipsum",
                "Land Cruiser", "Mark X", "Mirai", "Noah", "Premio", "Prado", "Prius", "Probox", "RAV4",
                "Ractis",
                "Rush",
                "Sequoia", "Sienna", "Succeed", "Supra", "Tacoma", "Tundra", "Venza", "Vitz", "Voxy",
                "Wish",
                "Yaris"
            ],
            "Volkswagen": ["Arteon", "Atlas", "Beetle", "CC", "Eos", "Golf", "Jetta", "Passat", "Phaeton",
                "Rabbit",
                "Routan", "Tiguan", "Touareg"
            ],
            "Volvo": ["C30", "C70", "S40", "S60", "S90", "V40", "V50", "V60", "V90", "XC40", "XC60", "XC90"]
        };

        const nameSelect = document.getElementById('name');
        const modelSelect = document.getElementById('model');

        // Populate name select options
        for (const name in data) {
            const option = document.createElement('option');
            option.value = name;
            option.textContent = name;
            nameSelect.appendChild(option);
        }

        // Event listener for name select
        nameSelect.addEventListener('change', function() {
            const selectedName = this.value;
            modelSelect.innerHTML = '<option value="">Select Model</option>'; // Reset model options

            if (selectedName) {
                const models = data[selectedName];
                models.forEach(model => {
                    const option = document.createElement('option');
                    option.value = model;
                    option.textContent = model;
                    modelSelect.appendChild(option);
                });
            }
        });

        // Set selected values if available
        const selectedName = "{{ request('name') }}";
        const selectedModel = "{{ request('model') }}";
        if (selectedName) {
            nameSelect.value = selectedName;
            const models = data[selectedName];
            models.forEach(model => {
                const option = document.createElement('option');
                option.value = model;
                option.textContent = model;
                modelSelect.appendChild(option);
            });
            modelSelect.value = selectedModel;
        }
    });
</script>
