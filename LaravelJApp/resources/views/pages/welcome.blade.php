@extends('layout.layout')
@section('title' , 'Homepage')
@section('content')


<div class="container my-4">
    <div class="row">
        @foreach($newsItems as $news)
            <div class="col-md-4 mb-3">
                <div class="card h-100">
                    @if($news->cover_image)
                        <img src="{{ asset($news->cover_image) }}" class="card-img-top" alt="Cover image for {{ $news->title }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $news->title }}</h5>
                        <p class="card-text">{{ \Illuminate\Support\Str::limit($news->content, 150) }}</p>
                        <p class="card-text"><small class="text-muted">Published on: {{ $news->publishing_date->format('Y-m-d') }}</small></p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>



@endsection