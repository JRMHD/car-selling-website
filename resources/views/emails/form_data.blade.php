<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>New Vehicle Sale Inquiry</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #0077b6;
            text-align: center;
            margin-bottom: 30px;
        }

        .info {
            margin-bottom: 20px;
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .info h2 {
            color: #0077b6;
            margin-top: 0;
        }

        .info p {
            margin: 5px 0;
        }

        .info p strong {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>New Vehicle Sale Inquiry</h1>
        <div class="info">
            <h2>Vehicle Information</h2>
            <p><strong>Vehicle Name:</strong> {{ $formData->vehicle_name }}</p>
            <p><strong>Model:</strong> {{ $formData->model }}</p>
            <p><strong>Transmission:</strong> {{ $formData->transmission }}</p>
            <p><strong>Drive:</strong> {{ $formData->drive }}</p>
            <p><strong>Engine Type:</strong> {{ $formData->engine_type }}</p>
            <p><strong>Engine Size:</strong> {{ $formData->engine_size }}</p>
            <p><strong>Fuel:</strong> {{ $formData->fuel }}</p>
            <p><strong>Year:</strong> {{ $formData->year }}</p>
            <p><strong>Color:</strong> {{ $formData->color }}</p>
            <p><strong>Door:</strong> {{ $formData->door }}</p>
            <p><strong>Seats:</strong> {{ $formData->seats }}</p>
            <p><strong>Body Type:</strong> {{ $formData->bodytype }}</p>
            <p><strong>Mileage:</strong> {{ $formData->mileage }}</p>
        </div>
        <div class="info">
            <h2>Customer Information</h2>
            <p><strong>Name:</strong> {{ $formData->name }}</p>
            <p><strong>Email:</strong> {{ $formData->email }}</p>
            <p><strong>Phone:</strong> {{ $formData->phone }}</p>
            <p><strong>Location:</strong> {{ $formData->location }}</p>
        </div>
    </div>
</body>

</html>
