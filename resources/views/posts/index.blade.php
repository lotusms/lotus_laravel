@extends('layouts.app')

@section('content')
  <h1>Posts</h1>
  <div class="py-3">
    <a href="/posts/create" class="btn btn-primary btn-sm">Create Post</a>
  </div>
    @if(count($posts) > 0)
      <div class="row">
        @foreach($posts as $post)
          <div class="col-md-4">
            <div class="card mb-3">
              @if(strlen($post->cover_image) >= 1 )
                {{-- <img style="width:100%" src="{{$post->cover_image}}" alt="{{$post->title}}"> --}}
                <img style="width:100%" src="{{asset("storage/cover_images/$post->cover_image")}}" alt="{{$post->title}}">
              @endif
              <div class="card-body">
                <h3>
                  <a href="{{$post->url}}">{{str_limit($post->title, 35)}}</a>
                </h3>
                <small>
                  Written on {{$post->created_date}} 
                  by <a href="{{$post->user->url}}">{{$post->user->name}}</a>
                </small>
                <div>{!!str_limit($post->body, 250)!!}</div>
              </div>
              
              {{-- <div class="card-body">
                <h3>
                  <a href="/posts/{{$post->id}}">{{str_limit($post->title, 35)}}</a>
                </h3>
                <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                <div>{!!str_limit($post->body, 250)!!}</div>
              </div> --}}
            </div>
          </div>
        @endforeach  
      </div>
      <div class="row">
        <div class="col-md-12">
          {{$posts->links()}}
        </div>
      </div>
    @else
      <p>No posts found</p>
    @endif
@endsection