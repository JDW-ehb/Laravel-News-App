<?php

namespace App\Http\Controllers;

use App\Models\News; // Add this line
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function latestNews()
    {
        $newsItems = News::latest()->get(); // Fetch latest news items
        return view('pages.welcome', compact('newsItems'));
    }
}
