<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell Your Vehicle - Ndoch Cars & Imports</title>
    <link rel="icon" href="images/ndoch-logo.ico" type="image/x-icon" />
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333333;
            text-align: center;
            margin-bottom: 30px;
            font-size: 2.5rem;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        form {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            color: #333333;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        button[type="submit"] {
            background-color: #2196F3;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #0D8BF2;
        }

        .intro {
            text-align: center;
            margin-bottom: 30px;
            font-size: 1.2rem;
            line-height: 1.5;
        }
    </style>

</head>

<body>
    <div class="container">
        <h1>Sell Your Vehicle</h1>
        <p class="intro">At Ndoch Cars & Imports, we understand the importance of a seamless and professional process
            when it comes to selling your vehicle. Our team of experts is dedicated to providing you with a hassle-free
            experience, ensuring that you receive the best value for your vehicle. Fill out the form below with accurate
            details, and one of our specialists will be in touch with you shortly.</p>
        <form action="{{ route('form-data.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="vehicle-name">Vehicle Name</label>
                <input type="text" id="vehicle-name" name="vehicle_name" value="{{ old('vehicle_name') }}" required>
            </div>
            <div class="form-group">
                <label for="model">Model</label>
                <input type="text" id="model" name="model" value="{{ old('model') }}" required>
            </div>
            <div class="form-group">
                <label for="transmission">Transmission</label>
                <select id="transmission" name="transmission" required>
                    <option value="">Select Transmission</option>
                    <option value="automatic" {{ old('transmission') == 'automatic' ? 'selected' : '' }}>Automatic
                    </option>
                    <option value="manual" {{ old('transmission') == 'manual' ? 'selected' : '' }}>Manual</option>
                </select>
            </div>
            <div class="form-group">
                <label for="drive">Drive</label>
                <select id="drive" name="drive" required>
                    <option value="">Select Drive</option>
                    <option value="fwd" {{ old('drive') == 'fwd' ? 'selected' : '' }}>Front-Wheel Drive (FWD)
                    </option>
                    <option value="rwd" {{ old('drive') == 'rwd' ? 'selected' : '' }}>Rear-Wheel Drive (RWD)</option>
                    <option value="awd" {{ old('drive') == 'awd' ? 'selected' : '' }}>All-Wheel Drive (AWD)</option>
                </select>
            </div>
            <div class="form-group">
                <label for="engine-type">Engine Type</label>
                <input type="text" id="engine-type" name="engine_type" value="{{ old('engine_type') }}" required>
            </div>
            <div class="form-group">
                <label for="engine-size">Engine Size</label>
                <input type="text" id="engine-size" name="engine_size" value="{{ old('engine_size') }}" required>
            </div>
            <div class="form-group">
                <label for="fuel">Fuel</label>
                <select id="fuel" name="fuel" required>
                    <option value="">Select Fuel</option>
                    <option value="gasoline" {{ old('fuel') == 'gasoline' ? 'selected' : '' }}>Gasoline</option>
                    <option value="diesel" {{ old('fuel') == 'diesel' ? 'selected' : '' }}>Diesel</option>
                    <option value="electric" {{ old('fuel') == 'electric' ? 'selected' : '' }}>Electric</option>
                    <option value="hybrid" {{ old('fuel') == 'hybrid' ? 'selected' : '' }}>Hybrid</option>
                </select>
            </div>
            <div class="form-group">
                <label for="year">Year</label>
                <input type="text" id="year" name="year" value="{{ old('year') }}" required>
            </div>
            <div class="form-group">
                <label for="color">Color</label>
                <input type="text" id="color" name="color" value="{{ old('color') }}" required>
            </div>
            <div class="form-group">
                <label for="door">Door</label>
                <select id="door" name="door" required>
                    <option value="">Select Door</option>
                    <option value="2" {{ old('door') == '2' ? 'selected' : '' }}>2</option>
                    <option value="3" {{ old('door') == '3' ? 'selected' : '' }}>3</option>
                    <option value="4" {{ old('door') == '4' ? 'selected' : '' }}>4</option>
                    <option value="5" {{ old('door') == '5' ? 'selected' : '' }}>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="seats">Seats</label>
                <input type="text" id="seats" name="seats" value="{{ old('seats') }}" required>
            </div>
            <div class="form-group">
                <label for="bodytype">Body Type</label>
                <input type="text" id="bodytype" name="bodytype" value="{{ old('bodytype') }}" required>
            </div>
            <div class="form-group">
                <label for="mileage">Mileage</label>
                <input type="text" id="mileage" name="mileage" value="{{ old('mileage') }}" required>
            </div>
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" required>
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" id="location" name="location" value="{{ old('location') }}" required>
            </div>
            <div class="form-group" style="grid-column: 1 / -1; text-align: center;">
                <button type="submit">Submit</button>
            </div>
        </form>

        @if (session('success'))
            <div class="alert alert-success" style="color: white; background-color: green;">
                {{ session('success') }}
            </div>
        @endif

    </div>
    <div style="display: flex; justify-content: space-between; margin-top: 20px;">
        <div style="text-align: left;">
            <a href="{{ url('/') }}"
                style="display: inline-block; padding: 10px 20px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 5px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); transition: all 0.3s ease;">Go
                Home</a>
        </div>
        <div style="text-align: right;">
            <a href="{{ url('contact') }}"
                style="display: inline-block; padding: 10px 20px; background-color: #008CBA; color: white; text-decoration: none; border-radius: 5px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); transition: all 0.3s ease;">Contact
                Us</a>
        </div>
    </div>


</body>

</html>
