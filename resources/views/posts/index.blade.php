@extends('layouts.app')

@section('content')
  <h1>Posts</h1>
  <div class="py-3">
    <a href="/posts/create" class="btn btn-primary btn-sm">Create Post</a>
  </div>
  <div class="row">
    @if(count($posts) > 0)
      @foreach($posts as $post)
        <div class="col-md-4">
          <div class="card mb-3">
            @if(strlen($post->cover_image) >= 1 )
              <img style="width:100%" src="{{$post->cover_image}}" alt="{{$post->title}}">
              {{-- <img style="width:100%" src="{{asset("storage/cover_images/$post->cover_image")}}" alt="{{$post->title}}"> --}}
            @endif
            
            <div class="card-body">
              <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
              <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
              <div>{!!$post->body!!}</div>
            </div>
          </div>
        </div>
      @endforeach  
      {{$posts->links()}}
    @else
      <p>No posts found</p>
    @endif
  </div>
@endsection