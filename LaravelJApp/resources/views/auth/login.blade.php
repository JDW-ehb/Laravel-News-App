@extends('layout.layout')
@section('title', 'Registration')

@section('content')
<div class="container"> 
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="bg-primary p-4 rounded mt-6">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(Session()->has('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                @if(Session()->has('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{ route('login.post') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" placeholder="Enter Your Email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" placeholder="Enter Your Password" name="password">
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-success me-2">Login</button>
                        <a href="{{ route('registration.get') }}" class="btn btn-success">Register here</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
