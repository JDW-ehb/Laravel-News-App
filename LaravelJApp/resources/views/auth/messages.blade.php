@extends('layout.layout')
@section('title', 'Messages')

@section('content')
<div class="container mt-4">
    <h2>Messages</h2>
    @foreach ($messages as $message)
        <div class="card mt-3 message-card" onclick="toggleMessage(this)">
            <div class="card-body">
                <h5 class="card-title">{{ $message->name }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $message->email }}</h6>
                <p class="card-text description">{{ $message->description }}</p>
                <p class="card-text full-message d-none">{{ $message->message }}</p>
            </div>
        </div>
    @endforeach
</div>

<script>
    function toggleMessage(element) {
        element.querySelector('.full-message').classList.toggle('d-none');
    }
</script>
@endsection
