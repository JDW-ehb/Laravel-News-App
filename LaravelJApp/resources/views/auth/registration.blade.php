@extends('layout.layout')
@section('title' , 'Registration')
@section('content')
<div class="container" > 

<div class="mt-5"> 
  @if($errors -> any())
  <div class="alert alert-danger">
    <ul>
      @foreach($errors -> all() as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>
  @endif

  @if(Session()->has('error'))
  <div class="alert alert-danger"> {{session('error')}}</div>
  @endif

  @if(Session()->has('success'))
  <div class="alert alert-sucess"> {{session('success')}}</div>
  @endif
</div>

<form style = "width: 500 px" class = "ms-auto me-auto" action = "{{route('registration.post')}}" method="POST">

@csrf
<div class="mb-3">
    <label class = "form-label">name</label>
    <input type="text" class="form-control" name = "name" placeholder= "Enter your name">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" placeholder="Enter your email" name ="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" placeholder="Enter your password" name ="password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
@endsection