@extends('layout.layout')
@section('title', 'Profile')

@section('content')
    <div class="container mt-4">
        <h1>Profile Page</h1>

        <!-- Display Profile Info -->
        <div class="container mt-4">
        <!-- Edit Profile Button -->
        

        <!-- Profile Information and Avatar -->
        <div class="bg-primary p-3 text-white rounded">
            <div class="row">
                <!-- Avatar -->
                <div class="col-md-4 mb-3 mb-md-0">
                    @if($user->avatar)
                        <img src="{{ $user->avatar }}" alt="{{ $user->name }}'s Avatar" class="img-fluid img-thumbnail">
                    @else
                        <p>No avatar set.</p>
                    @endif
                </div>

                <!-- Profile Info -->
                <div class="col-md-8">
                    <div id="profileDisplay">
                        <p><strong>Name:</strong> {{ $user->name }}</p>
                        <p><strong>Email:</strong> {{ $user->email }}</p>
                        <p><strong>Birthday:</strong> {{ $user->birthday ? $user->birthday->format('Y-m-d') : 'Not set' }}</p>
                        <p><strong>About Me:</strong> {{ $user->about_me }}</p>
                    </div>
                    <div class="row mb-3">
            <div class="col-12">
                <button onclick="toggleEdit()" class="btn btn-info">Edit Profile</button>
            </div>
        </div>
                </div>
            </div>
        </div>

        <!-- Edit Profile Form -->
        <div id="profileEdit" style="display: none;">
            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="mb-4">
                @csrf

                <div class="form-group mb-3">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                </div>

                <div class="form-group mb-3">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                </div>

                <div class="form-group mb-3">
                    <label for="birthday">Birthday:</label>
                    <input type="date" class="form-control" id="birthday" name="birthday" value="{{ $user->birthday ? $user->birthday->format('Y-m-d') : '' }}">
                </div>

                <div class="form-group mb-3">
                    <label for="about_me">About Me:</label>
                    <textarea class="form-control" id="about_me" name="about_me" rows="4">{{ $user->about_me }}</textarea>
                </div>

                <div class="form-group mb-3">
                    <label for="avatar">Change Avatar:</label>
                    <input type="file" class="form-control-file" id="avatar" name="avatar">
                </div>

                <button type="submit" class="btn btn-primary">Update Profile</button>
                <button type="button" onclick="toggleEdit()" class="btn btn-secondary">Cancel</button>
            </form>
        </div>
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
