<div 
  uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
  <nav class="uk-navbar-container shadow-sm main-header" uk-navbar="mode: click">
    <div class="uk-navbar-left">
        <ul class="uk-navbar-nav">
            <li>
              <a class="navbar-brand" href="/">
                <img src="/img/logo.svg"/>
              </a>
            </li>
        </ul>
    </div>

    <div class="uk-navbar-right desktop-menu" uk-grid>
      <div class="uk-width-1-1 mt-0 main-nav uk-position-bottom">
        <ul class="uk-navbar-nav uk-flex-right mr-4" id="nav"> 
            <li id="home"><a href="/">Home</a></li>
            <li id="services">
                <a href="#">
                  Services 
                  <span uk-icon="chevron-down"></span>
                </a>
                <div class="uk-navbar-dropdown uk-navbar-dropdown-width-1-5  uk-box-shadow-medium">
                  <ul class="uk-nav uk-navbar-dropdown-nav">
                    <li id="web-design"><a href="/web-design">Web Design</a></li>
                    <li id="graphic-design"><a href="/graphic-design">Graphic Design</a></li>
                    <li id="user-experience-optimization"><a href="/user-experience-optimization">User Experience Optimization</a></li>
                    <li id="web-maintenance"><a href="/web-maintenance">Web Maintenance</a></li>
                  </ul>
                </div>
            </li>
            <li id="how-it-works"><a href="/how-it-works">How it works</a></li>
            <li id="posts"><a href="/posts">Blog</a></li>
            <li id="about"><a href="/about">About</a></li>
            <li id="contact"><a href="/contact">Contact</a></li>
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
          <li><a href="/web-design">Web Design</a></li>
          <li><a href="/graphic-design">Graphic Design</a></li>
          <li><a href="/user-experience-optimization">User Experience Optimization</a></li>
          <li><a href="/web-maintenance">Web Maintenance</a></li>
          <li><a href="/how-it-works">How it works</a></li>
          <li><a href="/posts">Blog</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/contact">Contact</a></li>
      </ul>
    </div>

  </div>
</div>