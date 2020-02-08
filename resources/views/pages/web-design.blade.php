@extends('layouts.app')

@section('content')
  <div class="banner-overflow" style="height: 100%;">
    <div class="uk-inline uk-light banner-offset">
      <img src="https://raw.githubusercontent.com/lotusms/LotusMS/master/webp/pagebanners/web-design-banner.webp" style="top: 0px;" alt="Web Design">
      <div class="uk-overlay uk-overlay-primary uk-position-cover"></div>
      <div class="uk-position-center banner-text">
        <div class="uk-container uk-container-small">
          <h1>Custom Web Design</h1>
          <h3 class="white-text playball">Avoid falling into cookie-cutter designs. Express your company vibe through your own design and bring emphasis to where it matters most.</h3>
      </div>
      </div>
    </div>
  </div>

  <main class="main-body py-4">
    <div class="uk-container uk-container-large">
      <web-design></web-design>
      <p class="paragraph uk-light py-4">
        In the technological world we live in today, a website is more than a domain and information about your services, organization, and products. A modern, powerful, and professional web design allows business owners and organization stakeholders to interact with their clients and provide them with the ability to perform functions that they would have to come in the office for otherwise.
        <br/><br/>
        Every organization has specific needs and relationships with their clients. Some businesses rely on less demanding web design solutions, such as startup businesses. Others rely on a website to perform most, if not all, of the functions of the business, as it is the case for e-commerce websites. And for many other organizations, a website is a marketing tool to generate traffic and a stronger presence in their market. Whatever your organization business’ rules are, a website can serve as a powerful tool, and it must be customized accordingly to ensure it satisfies those requirements. This is the main reason why do-it-yourself web design engines are a flawed solution.
        <br/><br/>
        All web designs vary in size, look & feel, complexity, and business rules according to the client's needs and requirements. Frequently, a web design is better complimented with an enhancement to the client's brand. And in some occasions, domain, hosting, and security must be acquired. Let us know what your assets at your consultation are.
      </p>
      <div class="uk-alert-primary" uk-alert>
        <div uk-grid>
          <div class="uk-width-auto">
            <span uk-icon="icon: info; ratio: 1.5" class="mr-3"></span>
          </div>
          <div class="uk-width-expand">
            <p class="uk-text-small">
            * Your retainer ensures that you have hired us to start your project. A retainer is 50% of your estimated project. The final payment will include the balance which could be the remainder 50% or more if you've added more functionality or complexity to the project that was not initially estimated for. Keep in mind, that throughout the course of the project, there may be proprietary code by other agencies (USPS Shipping plugins, appointment scheduling services, etc) that we are, by law, not allowed to replicate and must be acquired as a separate service from their owning entity. This is an added cost to the project that we can not predict.
            <br/><br/>
            We will make every effort to ensure you stay within your budget, however, it is a good idea to keep a contingency budget for any unforeseen expense you may require during the project's life cycle.
            <br/><br/>
            Additionally, we are not responsible for your domain and hosting charges. We can certainly acquire them for you, as it is somewhat a complicated process for some. But you are responsible for renewing these services every year.</p>
          </div>
        </div>
        
      </div>
    </div>
  </main>
  <reach-out></reach-out>
@endsection