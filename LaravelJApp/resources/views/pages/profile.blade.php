@extends('layout.layout')
@section('title', 'Profile')

@section('content')
    <h1>Profile Page</h1>

    <!-- Display Profile Info -->
    <div id="profileDisplay">
        <p>Name: {{ $user->name }}</p>
        <p>Email: {{ $user->email }}</p>
        <p>Birthday: {{ $user->birthday ? $user->birthday->format('Y-m-d') : 'Not set' }}</p>
        
        <p>About Me: {{ $user->about_me }}</p>
        <!-- Display Avatar -->
        @if($user->avatar)
            <img src="{{ $user->avatar }}" alt="{{ $user->name }}'s Avatar" style="width:100px; height:100px;">
        @else
            <p>No avatar set.</p>
        @endif
        <button onclick="toggleEdit()">Edit Profile</button>
    </div>

    <!-- Edit Profile Form -->
    <div id="profileEdit" style="display: none;">
        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Form fields here, similar to previous examples -->
            <!-- ... -->
    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $user->name }}">
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $user->email }}">
        </div>

        <div>
            <label for="birthday">Birthday:</label>
            <input type="date" id="birthday" name="birthday" value="{{ $user->birthday ? $user->birthday->format('Y-m-d') : '' }}">
        </div>

        <div>
            <label for="about_me">About Me:</label>
            <textarea id="about_me" name="about_me">{{ $user->about_me }}</textarea>
        </div>

        <div>
            <label for="avatar">Change Avatar:</label>
            <input type="file" id="avatar" name="avatar">
        </div>

        <button type="submit">Update Profile</button>
    </form>
    
            <button type="button" onclick="toggleEdit()">Cancel</button>
        </form>
    </div>
@endsection

<!-- Add JavaScript to Toggle Edit View -->
@section('scripts')
<script>
    function toggleEdit() {
        var display = document.getElementById('profileDisplay');
        var edit = document.getElementById('profileEdit');
        if (display.style.display === 'none') {
            display.style.display = 'block';
            edit.style.display = 'none';
        } else {
            display.style.display = 'none';
            edit.style.display = 'block';
        }
    }
</script>
@endsection
