<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
  </head>   
  <body>
    <div id="app">
      @include('inc.navbar')
      @include('inc.messages')
      @yield('content')
      @include('inc.footer')
    </div>

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        setTimeout(function(){
            CKEDITOR.replace( 'article-ckeditor' );
        },400);

        let path = window.location.pathname;

        switch(path) {
          case '/':
            document.getElementById('home').className += ' uk-active';
            break;
          case '/web-design':
          case '/graphic-design':
          case '/user-experience-optimization':
          case '/web-maintenance':
            document.getElementById('services').className += ' uk-active';
            break;
          case '/how-it-works':
            document.getElementById('how-it-works').className += ' uk-active';
            break;
          case '/posts':
          case '/posts/**':
            document.getElementById('posts').className += ' uk-active';
            break;
          case '/about':
            document.getElementById('about').className += ' uk-active';
            break;
          case '/contact':
            document.getElementById('contact').className += ' uk-active';
            break;
          default:
            null;
        }

    </script>


  </body>

</html>
