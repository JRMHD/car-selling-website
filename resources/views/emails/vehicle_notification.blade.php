@component('mail::message')
    # New Vehicle Submission

    A new vehicle submission has been received from the website:

    - **Vehicle Name:** {{ $vehicle->vehicle_name }}
    - **Model:** {{ $vehicle->model }}
    - **Transmission:** {{ $vehicle->transmission }}
    - **Drive:** {{ $vehicle->drive }}
    - **Engine Type:** {{ $vehicle->engine_type }}
    - **Engine Size:** {{ $vehicle->engine_size }}
    - **Fuel:** {{ $vehicle->fuel }}
    - **Year:** {{ $vehicle->year }}
    - **Color:** {{ $vehicle->color }}
    - **Door:** {{ $vehicle->door }}
    - **Seats:** {{ $vehicle->seats }}
    - **Body Type:** {{ $vehicle->bodytype }}
    - **Mileage:** {{ $vehicle->mileage }}
    - **Name:** {{ $vehicle->name }}
    - **Email:** {{ $vehicle->email }}
    - **Phone:** {{ $vehicle->phone }}
    - **Location:** {{ $vehicle->location }}

    ---

    {{ $vehicle->name }} wants to sell their vehicle with you. Kindly get back as soon as possible. You can reach them at
    {{ $vehicle->phone }}.
@endcomponent
