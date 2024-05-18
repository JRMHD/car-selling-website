<?php

namespace App\Http\Controllers;

use App\Models\FormData;
use Illuminate\Http\Request;
use App\Mail\FormDataMail;
use Illuminate\Support\Facades\Mail;

class FormDataController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'vehicle_name' => 'required',
            'model' => 'required',
            'transmission' => 'required',
            'drive' => 'required',
            'engine_type' => 'required',
            'engine_size' => 'required',
            'fuel' => 'required',
            'year' => 'required',
            'color' => 'required',
            'door' => 'required',
            'seats' => 'required',
            'bodytype' => 'required',
            'mileage' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'location' => 'required',
        ]);

        // Create a new FormData instance
        $formData = FormData::create($validatedData);

        // Send email with form details
        Mail::to('ndochcars@gmail.com')->send(new FormDataMail($formData));

        return redirect()->back()->with('success', 'Form data submitted successfully');
    }
}