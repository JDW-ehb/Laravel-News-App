<?php

namespace App\Http\Controllers;

use App\Models\News; // Add this line
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Add this line

class NewsController extends Controller
{

    public function latestNews()
    {
        $newsItems = News::latest()->get(); // Fetch latest news items
        return view('pages.welcome', compact('newsItems'));
    }

    public function create()
    {
    return view('articles.createArticles');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'summary' => 'required|string|max:1000', // Validate summary
            'content' => 'required|string',
            // Add other validation rules as needed
        ]);

        $news = new News();
        $news->title = $request->title;
        $news->summary = $request->summary; // Save summary
        $news->content = $request->content;

        if ($request->hasFile('cover_image')) {
            $imagePath = $request->file('cover_image')->store('news_images', 'public');
            $news->cover_image = Storage::url($imagePath);
        }

        $news->publishing_date = now(); // Set the current time as the publishing date
        $news->save();

        return redirect()->route('latest-news')->with('success', 'News article created successfully!');
    }
    public function show(News $news)
    {
        return view('articles.show', compact('news'));
    }
    public function destroy(News $news)
    {
    // Optional: Check if the user is authorized to delete the news article
    $news->delete();
    return redirect()->route('latest-news')->with('success', 'Article deleted successfully');
    }

    public function edit(News $news)
    {
    // Optional: Check if the user is authorized to edit the news article
    return view('articles.edit', compact('news'));
    }

    public function update(Request $request, News $news)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'summary' => 'required|string|max:1000',
        'content' => 'required|string',
    ]);

    // Update the article
    $news->title = $request->title;
    $news->summary = $request->summary;
    $news->content = $request->content;

    if ($request->hasFile('cover_image')) {
        // Delete the old image, if it exists
        if ($news->cover_image) {
            Storage::delete($news->cover_image);
        }

        // Store the new image
        $imagePath = $request->file('cover_image')->store('news_images', 'public');
        $news->cover_image = Storage::url($imagePath);
    }

    $news->save(); // Save the updated news

    return redirect()->route('latest-news')->with('success', 'Article updated successfully');
}
}
