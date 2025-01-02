<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Suggestion;
use App\Models\Consultation;
use Illuminate\Http\Request;
use App\Models\FreeCounseling;
use App\Models\CareerCounselling;

class FormController extends Controller
{
    public function contactFormStore(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'city' => 'nullable|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Save the data to the database
        Contact::create($validatedData);

        // Redirect or respond with success
        return redirect()->back()->with('success', 'Your message has been sent!');
    }

    public function counselingFormStore(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'nullable|string|max:255',
            'choose_center' => 'required|string|max:1000',
        ]);

        // Save the data to the database
        FreeCounseling::create($validatedData);

        session(key: ['counsellingFormSent' => true]);

        // Redirect or respond with success
        return redirect()->back()->with('success', 'Your message has been sent!');
    }

    
    public function consultationFormStore(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Save the data to the database
        Consultation::create($validatedData);

        // Redirect or respond with success
        return redirect()->back()->with('success', 'Your message has been sent!');
    }

    public function careerCounsFormStore(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|integer',
            'city' => 'required|string|max:100',
            'selected_time' => 'required|string|max:100',
            'message' => 'required|string|max:1000',
        ]);

        // Save the data to the database
        CareerCounselling::create($validatedData);

        // Redirect or respond with success
        return redirect()->back()->with('success', 'Your message has been sent!');
    }

    public function suggestionFormStore(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'experience' => 'required|string|max:255',
            'page' => 'nullable|string|max:255',
        ]);

        // Save the data to the database
        Suggestion::create($validatedData);

        // Redirect or respond with success
        return redirect()->back()->with('success', 'Your message has been sent!');
    }
    
}
