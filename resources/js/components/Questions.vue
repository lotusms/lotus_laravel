<template>
	<div class="uk-width-1-1">
		<ul class="uk-nav-default uk-nav-parent-icon accordion" uk-nav>
			<li class="uk-parent" v-for="(question, index) in questions" :key="index">
				<a href="#">{{question.question}}</a>
				<ul class="uk-nav-sub">
					<li v-html="question.answer"></li>
				</ul>
			</li>
		</ul>
	</div>
</template>

<script>
export default {
	data() {
		return {
			questions: [
				{
					opened: false,
					question: "How much is a website?",
					answer:
						"<p>How much is a bag a groceries? The answer is - it depends. We have reduced our overhead to ensure we can provide the most affordable prices you will ever find for professional design. But it is almost impossible to set a number until we gather all the requirements and size the project correctly. One thing is for sure, you will be pleased with our work and cost!</p>"
				},
				{
					opened: false,
					question: "How long will it take before my website is done?",
					answer:
						"<p>The lenght of time varies on the size of the project. Typically, within 2 weeks for economy and informational websites, 4 to 6 weeks for marketing websites, 8 to 12 weeks for e-commerce solutions, and 4 to 6+ months for enterprise solutions. However, this all depends on how effective our communications are with the client and how fast we receive the information we will requiere. </p>"
				},
				{
					opened: false,
					question: "Do you have payment plans?",
					answer:
						"<p>Yes! Our payment plans vary on the project.<br /><br />Economy/Informational web design projects require a small deposit and a small and affordable payment plan. We understand that most clients choosing this system is a startup company.<br /><br />Marketing, e-coomerce, and specialy web design projects require a 50% retainer payment to start the project and a closing payment at the end of the project.<br /><br />Enterprise web designs are invoiced in monthly payments with a retainer due at the start of the project as well.</p>"
				},
				{
					opened: false,
					question: "How much is graphic design or logo design?",
					answer:
						"Our logo design is priced at $120 - $250, depending on the complexity of it. Graphic design is priced according to the complexity of the art. All art includes various file formats (jpg, png, ai, eps, etc)."
				},
				{
					opened: false,
					question: "What does 100% Satisfaction Guarantee means?",
					answer:
						'<p>While some web design companies provide 2 to 3 mock-ups to choose from at the design stage, we do not limit this. We go great lenghts to ensure our clients are getting exactly what they paid for. When we collect your requirements, we create a mock-up design that you will review and give us feedback on. You can do this as many times as necessary until you absolutely love it! It is our burden if we don\'t nail it right the first few times. Once you give us the green light, the design is locked in and it can not be changed.*</p><p class="tiny">* Small modifications can be overlooked at our discretion. We are not that strict!</p>'
				},
				{
					opened: false,
					question: "Can I see my website while it is being created?",
					answer:
						"<p>Yes! Your website will be created in our test servers. You will have a domain that allows you to see your website as it is being created and provide feedback as it comes along. Please, remember the site may appear borken at any given time. This doesn't mean it is, it simply is in a development process and enduring programming.</p>"
				},
				{
					opened: false,
					question: "Why do I need a web maintenance service package?",
					answer:
						"<p>Websites can suffer issues over time and sometimes frequently caused by outdated code or unsupported plugins and browsers. If you have a web maintenance service package, your site will run smoothly and we can tend to it if anything happens unexpectedly. If you choose to ignore this, and your website falls victim of a hack, spam, server failure, or simply becomes outdated; we can only fix it by charging a design &amp; development fee that is not as comfortable as paying $50 - $120 a month (depending on the website system).<br /><br />If we did not build your website and you want us to maintain it, there is a small non-recurrent fee to prepare your website and bring it up to speed first. Then we can maintain it.</p>"
				},
				{
					opened: false,
					question: "Can I change my content on my own after the site is done?",
					answer:
						"<p>This is only available on websites that include a CMS (Content Management System). And yes, you will be able to. However, this is a concept often mistaken. Being able to change your content does not mean you can arbitrarily add new pages and content and it will all look the same as the ones we added. It is almost impossible to predict what anyone would add and preemptively code it to expect a desired result. Being able to change your content means you will be able to change content that has already been designed. If you opted for the web mainteanance service, you can add your content and let us know so that we can modify it. Yet, another great reason to why a web mainteanance service is so great!  </p>"
				}
			]
		};
	}
};
</script>

<style lang="scss" scoped>
.accordion {
	.uk-parent {
		background: #4f5b62;
		border-bottom: 2px solid #000000;
		a {
			padding: 10px 15px;
			font-weight: 600;
		}
		.uk-nav-sub {
			padding: 0;
			background: #000000;
			li {
				padding: 20px 0px 6px 34px;
				width: 96%;
			}
		}
	}
}
</style>