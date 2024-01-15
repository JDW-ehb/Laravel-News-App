@extends('layout.layout')
@section('title', $news->title)

@section('content')
    <div class="container my-5">
        <!-- Large Cover Image -->
        <p class="text-muted text-right"><small>Published on: {{ $news->publishing_date->format('Y-m-d') }}</small></p>
        <p>Author: {{ $news->author->name ?? 'Unknown' }}</p>

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

    @auth
<div class="container my-5">
    <h3>Leave a Comment</h3>
    <form action="{{ route('comment.store') }}" method="POST">
        @csrf
        <input type="hidden" name="news_id" value="{{ $news->id }}">
        <div class="form-group">
            <textarea name="comment" class="form-control" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Post Comment</button>
    </form>
</div>
<div class="container my-5">
    <h3>Comments</h3>
    @foreach($news->comments as $comment)
        <div class="card mb-2">
            <div class="card-body">
                <p>{{ $comment->comment }}</p>
                <small>Posted by {{ $comment->user->name }} on {{ $comment->created_at->format('d-m-Y') }}</small>
            </div>
        </div>
    @endforeach
</div>
@endauth
@endsection
