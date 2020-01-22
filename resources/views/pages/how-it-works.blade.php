@extends('layouts.app')

@section('content')
  <div class="banner-overflow" style="height: 100%;">
    <div class="uk-inline uk-light banner-offset hit">
      <img src="https://raw.githubusercontent.com/lotusms/LotusMS/master/webp/pagebanners/howitworks.webp" alt="">
      <div class="uk-overlay uk-overlay-primary uk-position-cover"></div>
      <div class="uk-position-center banner-text">
        <div class="uk-container uk-container-small">
          <h1>Web Design Project Process</h1>
          <h3 class="white-text playball">Starting your project with us is simple and transparent. You will be able to monitor the process and see your website grow while we give it shape.</h3>
      </div>
      </div>
    </div>
  </div>

  <main class="main-body py-4">
    <div class="uk-container uk-container-large">
      <p class="paragraph uk-light">
        Our process is simple and most of all, effective! To pinpoint the web design accurately, we implement an agile system that allows us to gather information, design, and develop in a matter that clients will be able to understand the website or business solution as it grows. The process involves the client's input and feedback to ensure we are delivering the designs according to the business rules and demands.
        <br />
        <br />
        The web design and development takes shape in a dedicated test server. This allows us to design without causing any interruptions to the current website the client may have in place. Startup clients without a website will follow the same process so that their end users do not land accidentally on a website that is not finished.
      </p>
      <h3 class="h1 green-text playball text-center">This is how it works!</h3>
      <timeline></timeline>
    </div>
  </main>
  <web-maintenance-banner></web-maintenance-banner>
  <reach-out></reach-out>
@endsection