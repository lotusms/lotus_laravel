@extends('layouts.app')

@section('content')
  <main class="main-body py-4">
    <div class="uk-container uk-container-large uk-light">
      <h1 class="text-center">Contact Us</h1>
      <hr/>
      <p>Our relationship with you is extremely important to us. We are always open to suggestions, feedback, or questions. Our team of web designers, developers, and graphic designers are always eager to collaborate with estimating a project or running and analysis on your domain to find what is more important for your project.
      <br/><br/>
      By contacting us, you are not subjected to any obligation. We will attempt to contact you for further information that could help us answer your concerns. This stops at your request or if we feel that you are not interested and simply providing feedback or just saying hello!
      <br/><br/>
      Please use this form to explain your concerns or make an inquiry about a web design project, and we will get back to you as soon as possible. If you are making an inquiry about a web design, be as thorough as you can be. Provide us with a domain for your current site if you have one and some domains for sites that you like so that we can zero in on a design style that you will love.
      <br/><br/>
      Notice: With the increasing spam activity on the internet today, many spammers send emails simply saying "I need a web design." Although we reply nonetheless, we can spot them easily in the following reply from them. It will help you tremendously if you were thorough and provided contact information. This way our spam blocking algorithms will not flag your email.</p>
        
     
      <div class="uk-card uk-card-secondary uk-dark p-4">
        <div class="justify-around items-end" uk-grid>
          <div class="uk-width-1-4@m">
            <div class="text-center">
              <img src="/img/logo.svg" alt="LOTUS Logo" />
            </div>
            <contact-info></contact-info>
          </div>

          <div class="uk-width-3-4@m">
            <contact-form></contact-form>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection