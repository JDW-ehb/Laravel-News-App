@extends('layout.layout')
@section('title', $news->title)

@section('content')
    <div class="container my-5">
        <!-- Large Cover Image -->
        <p class="text-muted text-right"><small>Published on: {{ $news->publishing_date->format('Y-m-d') }}</small></p>
        @if($news->cover_image)
            <div class="text-center mb-4">
                <img src="{{ asset($news->cover_image) }}" alt="Cover image for {{ $news->title }}" class="img-fluid rounded" style="max-height: 400px;">
            </div>
        @endif

        <!-- Article Title and Publishing Date -->
        <h1 class="display-4 text-center mb-3">{{ $news->title }}</h1>

        <!-- Horizontal Line for Transition -->
        <hr class="my-4">

        <!-- Summary -->
        <p class="lead text-center mb-4">{{ $news->summary }}</p>

        <!-- Horizontal Line for Transition -->
        <hr class="my-4">

        <!-- Full Article Content -->
        <div class="article-content">
            {!! nl2br(e($news->content)) !!}
        </div>
    </div>
@endsection
