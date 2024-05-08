<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Create a new Contact instance
        $contact = Contact::create($validatedData);

        // Prepare the email data
        $emailData = [
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'subject' => $validatedData['subject'],
            'message' => $validatedData['message'],
        ];

        // Send email using the ContactFormMail mailable
        Mail::to('ndochcars@gmail.com')->send(new ContactFormMail($emailData));

        // Redirect or return a response
        return redirect()->back()->with('success', 'Thank you for your message!');
    }
}