<div 
  uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
  <nav class="uk-navbar-container shadow-sm main-header" uk-navbar="mode: click">
    <div class="uk-navbar-left">
        <ul class="uk-navbar-nav">
            <li>
              <a class="navbar-brand" href="{{ url('/') }}">
                <img src="/img/logo.svg"/>
              </a>
            </li>
        </ul>
    </div>

    <div class="uk-navbar-right desktop-menu" uk-grid>
      <div class="uk-width-1-1 login-register">
        @guest
          <ul class="uk-navbar-nav uk-flex-right admin-menu">
            <li>
              <a 
                href="{{ route('login') }}"
                class="uk-button uk-button-secondary uk-button-small mr-2"
                style="color:#fff">
                {{ __('Login') }}
              </a>
            </li>
            @if (Route::has('register'))
              <li>
                <a 
                  href="{{ route('register') }}"
                  class="uk-button uk-button-secondary uk-button-small"
                  style="color:#fff">
                  {{ __('Register') }}
                </a>
              </li>
            @endif
          </ul>
        @else
          <ul class="uk-navbar-nav uk-flex-right admin-menu">
            <li>
              <a href="#">
                {{ Auth::user()->name }} 
                <span uk-icon="chevron-down"></span>
              </a>
              <div class="uk-navbar-dropdown uk-box-shadow-medium">
                <ul class="uk-nav uk-navbar-dropdown-nav admin-menu">
                  <li>
                    <a href="/dashboard">
                      Dashboard
                    </a>
                  </li>
                  <li>
                    <a 
                      href="{{ route('logout') }}" 
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        @endguest
      </div>  
      <div class="uk-width-1-1 mt-0 main-nav">
        <ul class="uk-navbar-nav uk-flex-right">
            <li class="uk-active"><a href="/">Home</a></li>
            <li>
                <a href="#">
                  Services 
                  <span uk-icon="chevron-down"></span>
                </a>
                <div class="uk-navbar-dropdown uk-navbar-dropdown-width-1-5  uk-box-shadow-medium">
                  <ul class="uk-nav uk-navbar-dropdown-nav">
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">Graphic Design</a></li>
                    <li><a href="#">User Experience Optimization</a></li>
                    <li><a href="#">Web Maintenance</a></li>
                  </ul>
                </div>
            </li>
            <li><a href="/posts">Blog</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
      </div>
    </div>

    <div class="uk-navbar-right res-menu-button" uk-grid>  
      <button 
        class="uk-button uk-button-secondary navbar-toggler" 
        type="button" 
        uk-toggle="target: #offcanvas-menu" 
        aria-label="{{ __('Toggle navigation') }}">
        <span uk-icon="menu" class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
</div>

<div id="offcanvas-menu" uk-offcanvas>
  <div class="uk-offcanvas-bar">
    <div class="offcanvas-app-bar py-4 pl-3">
      <button 
        class="uk-offcanvas-close" 
        type="button" 
        style="position: absolute; top: 24px;" 
        uk-close></button>
      <h5 class="m-0">LOTUS Marketing Solutions</h5>
    </div>  
    <div class="uk-width-1-1 main-nav mt-3">
      <ul class="list-unstyled offcanvas-menu">
          <li><a href="/">Home</a></li>
          <li><a href="#">Web Design</a></li>
          <li><a href="#">Graphic Design</a></li>
          <li><a href="#">User Experience Optimization</a></li>
          <li><a href="#">Web Maintenance</a></li>
          <li><a href="/posts">Blog</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/contact">Contact</a></li>
      </ul>
    </div>

  </div>
</div>