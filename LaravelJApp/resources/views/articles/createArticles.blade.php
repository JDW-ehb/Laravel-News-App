@extends('layout.layout')
@section('title', 'Create Article')

@section('content')
    <div class="container py-5">
        <h1 class="mb-4">Create a New Article</h1>
        <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title:</label>
                <input type="text" class="form-control" id="title" name="title" required placeholder="Enter article title">
            </div>
            <div class="mb-3">
                <label for="cover_image" class="form-label">Cover Image:</label>
                <input type="file" class="form-control-file" id="cover_image" name="cover_image">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content:</label>
                <textarea class="form-control" id="content" name="content" rows="10" required placeholder="Write your article content here"></textarea>
            </div>
            <div class="mb-3">
                <label for="summary" class="form-label">Summary:</label>
                <textarea class="form-control" id="summary" name="summary" rows="3" placeholder="Enter a brief summary of the article"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection