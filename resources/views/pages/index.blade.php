@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h2>Welcome To Easy Notes!</h2>
        <p>Here you can share your class notes with your friends easy and pain free.</p>
        <p>
            <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> 
            <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
        </p>
    </div>
@endsection
