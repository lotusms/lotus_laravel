<footer class="uk-padding-medium uk-padding-large@m bg-black footer" uk-grid style="margin: 0 auto;">
  <div class="footer-col login-register uk-width-1-3@m p-4">
    <h4 class="green-text playball text-center border-bottom" style="padding-bottom: 5px;">
        Protected Area
    </h4>
    <div class="mb-5">
      <a class="navbar-brand" href="{{ url('/') }}">
        <img src="/img/logo.svg" alt="LOTUS MS Logo"/>
      </a>
    </div>
    <p class="paragraph white-text mt-4" style="font-size: 14px;">If you would like to colaborate as a blog writer, contact us and we will gladly discuss your knowledge and capabilites and give you access to our editing platform.</p>
    <div class="custom-list">
      @guest
        <div class="list-group">
          <a 
            href="{{ route('login') }}"
            class="uk-button uk-button-primary">
            {{ __('Login') }}
          </a>
        </div>
        {{-- @if (Route::has('register'))
          <div class="list-group">
            <a 
              href="{{ route('register') }}"
              class="list-group-item list-group-item-action">
              {{ __('Register') }}
            </a>
          </div>
        @endif --}}
      @else
        {{-- <a href="#">
          {{ Auth::user()->name }} 
          <span uk-icon="chevron-down"></span>
        </a> --}}
        <div class="list-group">
          <a class="list-group-item list-group-item-action" href="/dashboard"> Dashboard</a>
        </div>
        <div class="list-group">
          <a 
            href="{{ route('logout') }}" 
            class="list-group-item list-group-item-action"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
      @endguest
    </div>
  </div>
  <app-footer></app-footer>
</footer>
<div class="row copyright text-center p-3 uk-child-width-1-1@s uk-dark" uk-grid>
  <p>Copyright © LOTUS Marketing Solutions LLC 2018</p>
</div>