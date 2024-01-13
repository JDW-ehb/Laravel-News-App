@extends('layout.layout')
@section('title' , 'Homepage')
@section('content')

@auth
{{auth()->user()->name}}


@endauth




@endsection