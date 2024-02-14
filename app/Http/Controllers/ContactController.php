<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactUS; 
use Illuminate\Support\Facades\Mail; 

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function submitContactForm(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        try {
            Mail::to('locheikhndao778@gmail.com')->send(new ContactUS($data));
            return redirect()->route('contact')->with('success', 'Your message has been sent successfully! We will respond to you as soon as possible.');
        } catch (\Exception $e) {
            return redirect()->route('contact')->with('error', 'Oops! Something went wrong while sending your message. Please try again later.');
        }

       
}
}
