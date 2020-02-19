@extends('layouts.app')

<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BlogPosting",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{$post->url}}"
      },
      "headline": "{{$post->title}}",
      "description": "{{str_limit($post->body_html, $limit = 120, $end = '...') }}",
      "image": "{{asset("storage/cover_images/$post->cover_image")}}",  
      "author": {
        "@type": "Person",
        "name": "{{$post->user->name}}"
      },  
      "publisher": {
        "@type": "Organization",
        "name": "",
        "logo": {
          "@type": "ImageObject",
          "url": "",
          "width": ,
          "height": 
        }
      },
      "datePublished": "{{$post->created_date}}",
      "dateModified": "{{$post->created_date}}"
    }
</script>

@section('content')
  <main class="main-body py-4">
    <div class="uk-container uk-container-large">
      <div uk-grid>
        <div class="uk-width-2-3@m">
          <div class="uk-card uk-card-secondary p-0">
            @if(strlen($post->cover_image) >= 1 )
              <img style="width:100%" src="{{asset("storage/cover_images/$post->cover_image")}}" alt="{{$post->title}}">
            @endif
            <div class="uk-card-body p-4">  
              <h1 class="green-text playball h2 my-4">{{$post->title}}</h1>
              <div class="white-text">By: {{$post->user->name}}, {{$post->created_date}}</div>
              <hr>
              <div class="white-text paragraph mt-4">{!!$post->body_html!!}</div>

              @if(!Auth::guest())
                @if(Auth::user()->id === $post->user_id)
                  <div class="d-flex justify-content-between">
                    <a href="{{$post->url}}/edit" class="uk-button uk-button-primary" style="height: 42px;">Edit Post</a>

                    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}     
                      {{Form::hidden('_method', 'DELETE')}}
                      {{Form::submit('Delete', ['class' => 'uk-button uk-button-danger'] )}}
                    {!!Form::close()!!}
                  </div>
                @endif
              @endif
            </div>
          </div>
        </div>
        <div class="uk-width-1-3@m">
          <div class="uk-card uk-card-secondary uk-card-body p-0">
            <div uk-grid class="border-bottom uk-flex-middle appbar p-3 m-0">
              <div class="uk-width-2-3 p-0">
                <h4 class="green-text playball">
                  Knowledge Center
                </h4>
              </div>
              <div class="uk-width-1-3 p-0 uk-text-right">
                <a href="/posts" class="uk-button uk-button-secondary uk-button-small">All Posts</a>
              </div>  
            </div>  
            @foreach($posts as $post)
              @if(strlen($post->cover_image) >= 1 )
              <div class="sidebar-list uk-flex-left uk-flex-middle m-0" uk-grid>
                <div class="uk-width-1-5 p-2">
                  <a class="" href="{{$post->url}}">
                    <img 
                      class="avatar rounded-circle"
                      src="{{asset("storage/cover_images/$post->cover_image")}}" 
                      alt="{{$post->title}}">
                  </a>
                </div>
                <div class="uk-width-expand p-2">
                  <a class="" href="{{$post->url}}">
                    <span>
                      <p class="white-text paragraph m-0">
                        {{str_limit($post->title, $limit = 35, $end = '...') }}
                      </p>
                    </span>  
                  </a>
                </div>  
              </div>
              @endif
            @endforeach 
          </div> 
        </div>
      </div>
    </div>
  </main>
@endsection