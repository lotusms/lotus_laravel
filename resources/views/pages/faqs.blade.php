@extends('layouts.app')

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "How much is a website?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "How much is a bag of groceries? The answer is - it depends. We have reduced our overhead to ensure we can provide the most affordable prices you will ever find for professional design. But it is almost impossible to set a number until we gather all the requirements and size of the project correctly. One thing is for sure, you will be pleased with our work and cost!"
    }
  },{
    "@type": "Question",
    "name": "How long will it take before my website is done?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "The length of time varies on the size of the project. Typically, within 2 weeks for the economy and informational websites, 4 to 6 weeks for marketing websites, 8 to 12 weeks for e-commerce solutions, and 4 to 6+ months for enterprise solutions. However, this all depends on how effective our communications are with the client and how fast we receive the information we will require."
    }
  },{
    "@type": "Question",
    "name": "Do you have payment plans?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes! Our payment plans vary on the project. Economy/Informational web design projects require a small deposit and a small and affordable payment plan. We understand that most clients choosing this system is a startup company.<br /><br />Marketing, e-commerce, and especially web design projects require a 50% retainer payment to start the project and a closing payment at the end of the project. Enterprise web designs are invoiced in monthly payments with a retainer due at the start of the project as well."
    }
  },{
    "@type": "Question",
    "name": "How much is graphic design or logo design?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Our logo design is priced at $120 - $250, depending on the complexity of it. Graphic design is priced according to the complexity of the art. All art includes various file formats (jpg, png, ai, eps, etc)."
    }
  },{
    "@type": "Question",
    "name": "What does 100% Satisfaction Guarantee means?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "While some web design companies provide 2 to 3 mock-ups to choose from at the design stage, we do not limit this. We go great lengths to ensure our clients are getting exactly what they paid for. When we collect your requirements, we create a mock-up design that you will review and give us feedback on. You can do this as many times as necessary until you absolutely love it! It is our burden if we don't nail it right the first few times. Once you give us the green light, the design is locked in and it can not be changed.  Small modifications can be overlooked at our discretion. We are not that strict!"
    }
  },{
    "@type": "Question",
    "name": "Can I see my website while it is being created?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes! Your website will be created in our test servers. You will have a domain that allows you to see your website as it is being created and provide feedback as it comes along. Please, remember the site may appear broken at any given time. This doesn't mean it is, it simply is in a development process and enduring programming."
    }
  },{
    "@type": "Question",
    "name": "Why do I need a web maintenance service package?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Websites can suffer issues over time and sometimes frequently caused by outdated code or unsupported plugins and browsers. If you have a web maintenance service package, your site will run smoothly and we can tend to it if anything happens unexpectedly. If you choose to ignore this, and your website falls victim of a hack, spam, server failure, or simply becomes outdated; we can only fix it by charging a design & development fee that is not as comfortable as paying $50 - $120 a month (depending on the website system). If we did not build your website and you want us to maintain it, there is a small non-recurrent fee to prepare your website and bring it up to speed first. Then we can maintain it."
    }
  },{
    "@type": "Question",
    "name": "Can I change my content on my own after the site is done?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "This is only available on websites that include a CMS (Content Management System). And yes, you will be able to. However, this is a concept often mistaken. Being able to change your content does not mean you can arbitrarily add new pages and content and it will all look the same as the ones we added. It is almost impossible to predict what anyone would add and preemptively code it to expect the desired result. Being able to change your content means you will be able to change content that has already been designed. If you opted for the web maintenance service, you can add your content and let us know so that we can modify it. Yet, another great reason to why a web maintenance service is so great!"
    }
  }]
}
</script>


@section('content')
  <main class="main-body py-4">
      <div class="uk-container uk-container-large uk-light">
        <h1 class="text-center">Frequently Asked Questions</h1>
        <hr/>
        <p>We have compiled a series of questions and answers based on previous concerns from our clients. Hopefully this will clear things out a litte. If you can't find what you're looking for, feel free to contact us!</p>
        <questions></questions>
      </div>
  </main>
  <reach-out></reach-out>
@endsection