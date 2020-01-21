@extends('layouts.app')

@section('content')
  <main class="main-body py-4">
    <div class="uk-container uk-container-large uk-dark">
      <h1 class="white-text">Edit Post</h1>
      <div class="uk-card uk-card-secondary uk-dark p-4 mt-4">
        {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
          <div class="form-group">
            {{Form::label('title', 'Title', ['class' => 'uk-form-label'] )}}
            {{Form::text('title', $post->title, ['class' => 'uk-input', 'placeholder' => 'Title'])}}
          </div>
          <div class="form-group">
            {{Form::label('body', 'Body', ['class' => 'uk-form-label'])}}
            {{-- <m-editor :body="body"> --}}
              {{Form::textarea('body', $post->body, ['id'=>'article-ckeditor', 'class' => 'uk-textarea', 'placeholder' => 'Body Text'])}}
            {{-- </m-editor> --}}
          </div>

          <div class="form-group">
            {{Form::file('cover_image')}}
          </div>

          <div class="d-flex justify-content-between">
            <a href="{{ route('posts.index') }}" class="uk-button uk-button-secondary">Back to Blog</a>
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Submit', ['class'=> 'uk-button uk-button-primary'])}}
          </div>
        {!! Form::close() !!}
      </div>
    </div>
  </main>
@endsection