@extends('layout.layout')
@section('title' , 'Homepage')
@section('content')

@auth
{{auth()->user()->name}}

<form action="{{ route('promote.to.admin', auth()->user()->id) }}" method="POST">
    @csrf
    <button type="submit">Promote to Admin</button>
</form>
@endauth




@endsection