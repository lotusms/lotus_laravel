@extends('layouts.app')

@section('content')
  <main class="main-body py-4">
      <div class="uk-container uk-container-large uk-light">
        <h1 class="text-center">Frequently Asked Questions</h1>
        <hr/>
        <p>We have compiled a series of questions and answers based on previous concerns from our clients. Hopefully this will clear things out a litte. If you can't find what you're looking for, feel free to contact us!</p>
        <questions></questions>
      </div>
  </main>
  <reach-out></reach-out>
@endsection