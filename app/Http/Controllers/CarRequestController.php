<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\CarRequestNotification;
use App\Models\CarRequest;
use Illuminate\Support\Facades\Mail;

class CarRequestController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'car_make' => 'required|string',
            'car_model' => 'required|string',
            'max_price' => 'required|numeric',
            'min_year' => 'required|numeric',
            'user_name' => 'required|string',
            'user_phone' => 'required|string',
        ]);

        // Save the form data to the database
        $carRequest = CarRequest::create($validatedData);

        // Send email notification to the website owner
        Mail::to('ndochcars@gmail.com')->send(new CarRequestNotification($carRequest));



        // Redirect back with success message
        return back()->with('success', 'Your car request has been submitted successfully.');
    }
}
