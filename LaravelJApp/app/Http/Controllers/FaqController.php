<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq; // Import the Faq model

class FaqController extends Controller
{
    public function index()
    {
    $faqs = Faq::all(); // Retrieve all FAQs
    return view('faqs.faqs', compact('faqs'));
    }

    public function create()
    {   
    // Ensure the user is an admin
    if (!auth()->check() || !auth()->user()->isAdmin) {
        abort(403);
    }

    return view('faqs.create');
    }

    public function store(Request $request)
    {
        // Ensure the user is an admin
        if (!auth()->check() || !auth()->user()->isAdmin) {
            abort(403);
        }
    
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string'
        ]);
    
        Faq::create($request->all());
    
        return redirect()->route('faqs.index')->with('success', 'FAQ added successfully.');
    }

    public function edit($id)
    {
    // Ensure the user is an admin
    if (!auth()->check() || !auth()->user()->isAdmin) {
        abort(403);
    }

    $faq = Faq::findOrFail($id);

    return view('faqs.edit', compact('faq'));
    }
    public function update(Request $request, $id)
    {
        // Ensure the user is an admin
        if (!auth()->check() || !auth()->user()->isAdmin) {
            abort(403);
        }
    
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string'
        ]);
    
        $faq = Faq::findOrFail($id);
        $faq->update($request->all());
    
        return redirect()->route('faqs.index')->with('success', 'FAQ updated successfully.');
    }

    public function destroy($id)
    {
        // Ensure the user is an admin
        if (!auth()->check() || !auth()->user()->isAdmin) {
            abort(403);
        }
    
        $faq = Faq::findOrFail($id);
        $faq->delete();
    
        return redirect()->route('faqs.index')->with('success', 'FAQ deleted successfully.');
    }
    
}
