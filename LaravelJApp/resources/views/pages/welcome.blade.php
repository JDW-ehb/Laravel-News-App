@extends('layout.layout')
@section('title' , 'Homepage')
@section('content')

<div class="container my-4">
    <div class="row">
        @foreach($newsItems as $news)
            <div class="col-md-4 mb-3">
                <div class="card h-100">
                    @if($news->cover_image)
                    <img src="{{ asset($news->cover_image) }}" class="img-thumbnail" alt="Cover image for {{ $news->title }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $news->title }}</h5>
                        <p class="card-text">{{ \Illuminate\Support\Str::limit($news->summary, 256) }}</p>
                        <p class="card-text"><small class="text-muted">Published on: {{ $news->publishing_date->format('d-m-Y') }}</small></p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('news.show', $news->id) }}" class="btn btn-primary">Read more</a>
                        @if(auth()->check() && auth()->user()->isAdmin)
                            <a href="{{ route('news.edit', $news->id) }}" class="btn btn-secondary">Edit</a>
                            <form action="{{ route('news.destroy', $news->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</button>
                            </form>
                        @endif
                    </div>
                    
                </div>
            </div>
        @endforeach
    </div>

   

</div>

@endsection