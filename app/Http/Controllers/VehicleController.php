<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Mail;
use App\Mail\VehicleNotification;

class VehicleController extends Controller
{
    public function store(Request $request)
    {
        // Validate form data
        $validatedData = $request->validate([
            'vehicle_name' => 'required|string',
            'model' => 'required|string',
            'transmission' => 'required|string',
            'drive' => 'required|string',
            'engine_type' => 'required|string',
            'engine_size' => 'required|string',
            'fuel' => 'required|string',
            'year' => 'required|numeric',
            'color' => 'required|string',
            'door' => 'required|numeric',
            'seats' => 'required|numeric',
            'bodytype' => 'required|string',
            'mileage' => 'required|string',
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'location' => 'required|string',
        ]);

        // Store the form data in the database
        $vehicle = Vehicle::create($validatedData);

        // Send email notification to the website owner
        Mail::to('ndochcars@gmail.com')->send(new VehicleNotification($vehicle));

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Thank you for your submission!');
    }
}
