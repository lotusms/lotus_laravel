@extends('layouts.app')

@section('content')
  <div class="banner-overflow" style="height: 350px;">
    <div class="uk-inline uk-light banner-offset">
      <img src="https://raw.githubusercontent.com/lotusms/LotusMS/master/webp/pagebanners/ux.webp" style="top: 0px;" alt="">
      <div class="uk-overlay uk-overlay-primary uk-position-cover"></div>
        <div class="uk-position-center banner-text">
          <div class="uk-container uk-container-small">
            <h1>User Experience</h1>
            <h3 class="white-text playball">Several surveys have demonstrated that the main reason why visitors abandon websites is poor user experience.</h3>
        </div>
      </div>
    </div>
  </div>

  <main class="main-body py-4">
    <div class="uk-container uk-container-large">
      <h2
        class="h1 white-text text-center py-4">
        Enhance Your Website's User Experience
      </h2>
      <p class="paragraph uk-light">
      The idea of marketing is to deliver a product or service to an intended target audience or market. Considering that most of today's consumers are tech-savvy and avid smartphone users, ignoring the importance of user experience would be marketing suicide. Recent studies showed that an impressive <a href="https://www.experiencedynamics.com/blog/2015/03/30-ux-statistics-you-should-not-ignore-infographic" target="_blank">79% of mobile users</a> admitted having abandoned a website because the one they visited was too hard to understand, poorly designed, too busy, or too messy to understand how to navigate between items or pages.
      <br/><br/>
      User experience optimization is more than just an attractive design. Many psychological concepts are taken into consideration to attract the user’s attention and hack into their expected behaviors. Ideally, a user that is satisfied with your website is most likely to visit your store or shop and stay engaged with your website much longer. The latter increases your visibility in search engines.
      </p>
      <h3 class="h2 playball green-text text-center pb-4">Some Pointers</h3>
      <div uk-grid>
        <div class="uk-width-2-3@m">
          <ux-slider></ux-slider>
        </div>
        <div class="uk-width-1-3@m">
          <ux-sidebar></ux-sidebar>
        </div>  
      </div>
    </div>
  </main>
  <h3 class="h2 playball green-text text-center pb-4">Related Projects</h3>
  <ux-related-projects></ux-related-projects>
  <reach-out></reach-out>
@endsection