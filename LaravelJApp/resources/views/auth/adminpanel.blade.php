@extends('layout.layout')
@section('title' , 'Registration')
@section('content')

@foreach($users as $user)
    <div>
        <p>{{ $user->name }} - {{ $user->email }}</p>
        <form action="{{ route('promote.to.admin', $user->id) }}" method="POST">
            @csrf
            <button type="submit">Promote to Admin</button>
        </form>
    </div>
@endforeach

@endsection


