<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactFormEntry;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('pages.contact');
    }

    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255', // Add validation for description
            'email' => 'required|email',
            'message' => 'required'
        ]);
        ContactFormEntry::create($validatedData);

        // TODO: Send notification to admin (can be implemented later)

        return redirect()->route('latest-news');
    }

    public function showMessages()
    {
    $messages = ContactFormEntry::all(); // or use pagination if there are many entries
    return view('auth.messages', compact('messages'));
    }

}