@extends('layouts.app')

@section('content')
  <div class="banner-overflow" style="height: 100%;">
    <div class="uk-inline uk-light banner-offset">
      <img src="https://raw.githubusercontent.com/lotusms/LotusMS/master/webp/pagebanners/graphic-design-banner.webp" style="top: 0px;" alt="">
      <div class="uk-overlay uk-overlay-primary uk-position-cover"></div>
        <div class="uk-position-center banner-text">
          <div class="uk-container uk-container-small">
            <h1>Branding & Interfacing</h1>
            <h3 class="white-text playball">Having a recognizable and intuitive brand will enhance trust and authority for your business.</h3>
        </div>
      </div>
    </div>
  </div>

  <main class="main-body py-4">
    <div class="uk-container uk-container-large">
      <p class="paragraph uk-light py-4">
        Graphic design is a form of expression through visual aid. In a world without graphic design, we would be living in Pleasantville. For those who watched the film, this was an easy reference. For those who didn't, Pleasantville is a world where dullness rules and individual expression and character is tabooed. Until they are introduced to color. Then life becomes beautiful and enjoyable.
        <br/><br/>
        Graphic design can affect modern web design and marketing strategies in a similar fashion. Adding a small but powerful amount of graphic design intervention to a web design enhances the user experience and reduces cognitive friction. In addition, graphic design, when implemented in branding design, binds your website and brand cohesively to form an entire identity for your organization.
      </p>
      <branding-design></branding-design>
      <p class="paragraph uk-light py-4">
        Branding extends beyond a logo. A successful branding campaign includes the consistent appearance of your brand in as many places as possible. Some of these include: business cards, banners, complimentary pens and gifts, shopping bags, social media profiles, uniforms, and more. Let us discuss your brand design and branding strategy so that we may prepare the necessary file formats and sizes for the right job.
      </p>
      <h2 class="playball green-text text-center pt-5">
        Here is some of our own graphic design work
      </h2>
    </div>
  </main>
  <logos></logos>
  <reach-out></reach-out>
@endsection