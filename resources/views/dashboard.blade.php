@extends('layouts.app')

@section('content')
  <main class="main-body py-4">
    <div class="uk-container uk-container-large">
      <h1 class="white-text">Dashboard</h1>
      <div uk-grid>
        <div class="uk-width-1-1@m">
          @if (session('status'))
            <div class="uk-alert-success" uk-alert>
              <a class="uk-alert-close" uk-close></a>
              {{ session('status') }}
            </div>
          @endif
          <div class="uk-card uk-card-secondary p-4 mt-4">
            <h2 class="uk-card-title green-text h1 playball">Your Blog Posts</h2>

            <div class="uk-card-body">
              <div class="py-3">
                @if(count($posts) > 0)
                  <table class="uk-table uk-table-hover uk-table-divider uk-dark">
                    <thead>
                      <tr>
                        <th>Title</th>
                        <th class="uk-text-right"><a href="/posts/create" class="uk-button uk-button-primary uk-button-small">Create Post</a></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($posts as $post)
                        <tr>
                          <td>{{$post->title}}</td>
                          <td class="" uk-grid>
                            <div class="uk-width-1-2 p-0 uk-text-right">
                              <a href="{{$post->url}}/edit" class="uk-button uk-button-primary uk-button-small mr-2">Edit</a>
                            </div>
                            <div class="uk-width-1-2 p-0">
                            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => ' float-right'])!!}     
                              {{Form::hidden('_method', 'DELETE')}}
                              {{Form::submit('Delete', ['class' => 'uk-button uk-button-danger uk-button-small mt-0'] )}}
                            {!!Form::close()!!}
                            </div>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                @else 
                  No posts found. Create one! <a href="/posts/create" class="uk-button uk-button-primary uk-button-small  uk-text-right">Create Post</a>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
