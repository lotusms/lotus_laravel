@extends('layouts.app')

@section('content')<div class="banner-overflow" style="height: 100%;">
    <div class="uk-inline uk-light banner-offset">
      <img src="https://raw.githubusercontent.com/lotusms/LotusMS/master/webp/pagebanners/web-maintenance.webp" style="top: 0px;" alt="Web Maintenance">
      <div class="uk-overlay uk-overlay-primary uk-position-cover"></div>
        <div class="uk-position-center banner-text">
          <div class="uk-container uk-container-small">
            <h1>Web Maintenance Services</h1>
            <h3 class="white-text playball">The last thing you'd want to do is walk away from the things you love doing to update your website...and it will need it</h3>
        </div>
      </div>
    </div>
  </div>

  <main class="main-body py-4">
    <div class="uk-container uk-container-large">
      <h2
        class="h1 white-text text-center py-4">
        No News Is Good News
      </h2>
      <p class="paragraph uk-light">
      Contrary to widespread belief, websites are not self-sustained. Much like any other technology, they need to be updated. Code becomes obsolete, browsers are constantly updating, search engines are a moving target, coding languages are releasing new versions, and the list goes on. Not to mention, your website can become a victim of a security breach and used for spamming, phishing, illegal online activity re-routing, and more severe issues that no one would like to deal with. By choosing one of our web maintenance packages (after your website is designed and live), you can enjoy some peace of mind. As the heading above states, “No News is Good News.” This is the kind of service you pay to avoid dealing with your site problems. And quite frankly, you couldn’t hire an employee to do this work for $60 - $170 a month! We know…, we are cheap, aren’t we?
      </p>
      <h3 class="h2 playball green-text text-center pb-4">Our Maintenance Packages</h3>
      <price-table></price-table>
    </div>
  </main>
  <reach-out></reach-out>
@endsection