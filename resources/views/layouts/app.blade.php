<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Web design, graphic design, and digital marketing company in the Harrisburg, York, and Lancaster area. Very flexible and affordable to meet all of client's needs.">

    <meta property="og:title" content="LOTUS Marketing Solutions LLC">
    <meta property="fb:app_id"  content="278493115638960">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.lotusmarketingsolutions.com">
    <meta property="og:description" content="The best web designers you will ever hire">
    <meta property="og:image" content="https://raw.githubusercontent.com/lotusms/LotusMS/master/webp/home/Facebook-Share-Card.webp">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:description" content="The best web designers you will ever hire">
    <meta name="twitter:site" content="https://www.lotusmarketingsolutions.com">
    <meta name="twitter:title" content="LOTUS Marketing Solutions LLC">
    <meta name="twitter:image" content="https://raw.githubusercontent.com/lotusms/LotusMS/master/webp/home/Facebook-Share-Card.webp">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>Professional & Attractive Web Design & Development</title>

    <!-- Scripts -->
    <script src="{{ asset('/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    
    <link property="favicon" rel="icon" type="image/x-icon" href="/favicon.ico">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-37483178-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-37483178-1');
    </script>


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
      var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
      };
    </script>
    <script>
        setTimeout(function(){
            CKEDITOR.replace( 'article-ckeditor', options );
        },500);

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
