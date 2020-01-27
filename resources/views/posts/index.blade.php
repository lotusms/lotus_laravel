@extends('layouts.app')

@section('content')
  <main class="main-body py-4">
    <div class="uk-container uk-container-large uk-dark">
      <div uk-grid>
        <div class="uk-width-1-2@m">
          <h1 class="white-text">Blog</h1>
        </div>
        @guest
          <div></div>
        @else
          <div class="uk-width-1-2@m">
            <div class="uk-text-right py-3">
              <a href="/posts/create" class="uk-button uk-button-primary">Create Post</a>
            </div>
          </div>  
        @endguest
      </div>
      @if(count($posts) > 0)
        <div uk-grid>
          @foreach($posts as $post)
            <div class="uk-width-1-3@m">
              <div class="uk-card uk-card-secondary mb-3">
                <div class="ms-thumbnail ms-thumbnail-diagonal">
                  <post-image :post="{{ $post }}"></post-image>
                  {{-- <img src="{{ asset('storage/cover_images/'.$post->$cover_image) }}" alt="..."> --}}
                  <figcaption class="ms-thumbnail-caption text-center">
                      <div class="ms-thumbnail-caption-content">
                          <h3
                              class="green-text playball ms-thumbnail-caption-title"
                          >
                              <post-title :post="{{ $post }}"></post-title>
                          </h3>
                      </div>
                  </figcaption>
                </div>
                <div class="uk-card-body">
                  <post-title :post="{{ $post }}"></post-title>
                  <div>By: {{$post->user->name}}, {{$post->created_date}}</div>
                  <post-content :post="{{ $post }}"></post-content>
                </div>
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
    </div>
  </main>
@endsection