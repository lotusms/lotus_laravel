@extends('layouts.app')

@section('content')
  <a href="/posts" class="btn btn-secondary btn-sm">Go Back</a>
  <div class="py-4">
    <h1>{{$post->title}}</h1>
    @if(strlen($post->cover_image) >= 1 )
      <img style="width:100%" src="{{asset("storage/cover_images/$post->cover_image")}}" alt="{{$post->title}}">
    @endif
    <div>{!!$post->body!!}</div>
    <hr>
    <small>
      Written on {{$post->created_date}} by 
      <a href="{{$post->user->url}}">{{$post->user->name}}</a>
    </small>

    <hr>

    @if(!Auth::guest())
    @if(Auth::user()->id === $post->user_id)
      <div class="d-flex justify-content-between">
        <a href="{{$post->url}}/edit" class="btn btn-primary btn-sm">Edit Post</a>

        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}     
          {{Form::hidden('_method', 'DELETE')}}
          {{Form::submit('Delete', ['class' => 'btn btn-danger btn-sm'] )}}
        {!!Form::close()!!}
      </div>
    @endif
    @endif
  </div>
@endsection