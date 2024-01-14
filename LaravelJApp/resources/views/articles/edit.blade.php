@extends('layout.layout')
@section('title', 'Edit Article')

@section('content')
    <div class="container mt-4">
        <h1>Edit Article</h1>
        <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Important: Use PUT method for updates -->

            <div class="mb-3">
                <label for="title" class="form-label">Title:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $news->title }}" required>
            </div>

            <div class="mb-3">
                <label for="cover_image" class="form-label">Cover Image:</label>
                <!-- If you want to show existing image -->
                @if($news->cover_image)
                    <img src="{{ asset($news->cover_image) }}" class="img-fluid mb-2">
                @endif
                <input type="file" class="form-control-file" id="cover_image" name="cover_image">
            </div>

            <div class="mb-3">
                <label for="summary" class="form-label">Summary:</label>
                <textarea class="form-control" id="summary" name="summary" rows="3">{{ $news->summary }}</textarea>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Content:</label>
                <textarea class="form-control" id="content" name="content" rows="10">{{ $news->content }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update Article</button>
        </form>
    </div>
@endsection
