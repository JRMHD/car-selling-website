@component('mail::message')
    # New Car Request Submitted

    A new car request has been submitted with the following details:

    - **Car Make:** {{ $carRequest->car_make }}
    - **Car Model:** {{ $carRequest->car_model }}
    - **Maximum Price:** {{ $carRequest->max_price }}
    - **Minimum Year:** {{ $carRequest->min_year }}
    - **User Name:** {{ $carRequest->user_name }}
    - **User Phone:** {{ $carRequest->user_phone }}

    Please reach out to the user as soon as possible to discuss their car preferences and assist them in finding their dream
    car.

    Thank you for your prompt attention to this matter.
@endcomponent
