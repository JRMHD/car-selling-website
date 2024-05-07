<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;
use App\Mail\SubscriptionNotification;
use App\Mail\SubscriptionConfirmation;
use Illuminate\Support\Facades\Mail;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:subscriptions',
        ]);

        // Create a new subscription record in the database
        $subscription = Subscription::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        // Send a notification email to the owner
        Mail::to('ndochcars@gmail.com')->send(new SubscriptionNotification($subscription));

        // Send a confirmation email to the user
        Mail::to($subscription->email)->send(new SubscriptionConfirmation($subscription->name));

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Thank you for subscribing!');
    }
}

