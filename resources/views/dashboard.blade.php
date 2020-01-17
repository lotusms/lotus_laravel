@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Dashboard</h1>
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">Your Blog Posts</div>

          <div class="card-body">
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif

            <div class="py-3">
              @if(count($posts) > 0)
                <table class="table table-striped">
                  <thead class="thead-dark">
                    <tr>
                      <th>Title</th>
                      <th><a href="/posts/create" class="btn btn-primary btn-sm float-right">Create Post</a></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($posts as $post)
                      <tr>
                        <td>{{$post->title}}</td>
                        <td>
                          {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => ' float-right'])!!}     
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete', ['class' => 'btn btn-danger btn-sm'] )}}
                          {!!Form::close()!!}
                          <a href="/posts/{{$post->id}}/edit" class="btn btn-primary btn-sm float-right mr-2">Edit</a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              @else 
                No posts found. Create one! <a href="/posts/create" class="btn btn-primary btn-sm float-right">Create Post</a>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
