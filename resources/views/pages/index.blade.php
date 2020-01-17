@extends('layouts.app')

@section('content')
  <div class="jumbotron text-center">
    <h1 class="display-4">{{$title}}</h1>
    <p class="lead">This is the laravel application</p>
    <hr class="my-4">
    <p>
      <a href="/public/lotus/login" class="btn btn-primary btn-lg" role="button">Login</a>
      <a href="/public/lotus/register" class="btn btn-success btn-lg" role="button">Register</a>
    </p>
  </div>
@endsection