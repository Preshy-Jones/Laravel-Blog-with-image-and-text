@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome To the blog!</h1>
        <p>This is a laravel blog</p>
        <p><a class="btn  btn-primary btn-lg" href="{{ url('/login')}}" role="button">Login</a> <a class="btn btn-success btn-lg" href="{{ url('/register')}}" role="button">Register</a></p>
    </div>
@endsection