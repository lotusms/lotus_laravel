@if(count($errors) > 0)
  @foreach($errors->all() as $error)
  <div uk-grid class="justify-content-center uk-position-top" style="top:96px;">
    <div clas="uk-container uk-container-medium">
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{$error}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div> 
  </div>
  @endforeach
@endif

@if(session('success'))
  <div uk-grid class="justify-content-center uk-position-top" style="top:96px;">
    <div clas="uk-container uk-container-medium">
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('success')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
    </div> 
  </div>
@endif

@if(session('error'))
  <div uk-grid class="justify-content-center uk-position-top" style="top:96px;">
    <div clas="uk-container uk-container-medium">
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{session('error')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div> 
  </div>
@endif