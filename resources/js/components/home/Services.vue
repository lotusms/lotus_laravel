<template>
	<div class="bg-parallax uk-dark">
		<div class="p-5" uk-grid>
			<div class="uk-width-1-4@m uk-width-1-2@s" v-for="(card, key) in cards" :key="key">
				<div class="card solutions-card services" dark>
					<div class="text-center" style="padding: 20px 50px;">
						<div class="avatar services-avatar rounded-circle">
							<img
								:src="
                                    `https://raw.githubusercontent.com/lotusms/LotusMS/master/webp/home/services/${card.image}`
                                "
								:class="
                                    `rounded-circle card-image image-${card.id}`
                                "
								style="width: 100%; height: 100%;"
							/>
						</div>
					</div>
					<div class="card-content px-3">
						<h3 class="green-text playball text-center border-bottom">{{ card.title }}</h3>
						<p class="white-text paragraph pt-4 text-center">{{ card.text }}</p>
					</div>
					<div class="row pb-4 justify-content-center py-3">
						<a :href="card.to" class="uk-button uk-button-primary">Learn More</a>
					</div>
				</div>
			</div>
		</div>
		<div class="container text-center services-estimate pb-4">
			<h2 class="white-text">{{ secondheading }}</h2>
			<p class="white-text pt-4 pb-10">{{ text }}</p>
			<a :href="to" class="uk-button uk-button-primary">Request a quote</a>
		</div>
	</div>
</template>

<script>
export default {
	name: "Services",
	data() {
		return {
			cards: [
				{
					id: "1",
					image: "web-design2.webp",
					title: "Professional Web Design",
					text:
						"Web design with your clients in mind. We focus, primarily, on enhancing user experience and engagement so that your visitors can get a perfect idea of what you have to offer.",
					to: "/web-design"
				},
				{
					id: "2",
					image: "web-development2.webp",
					title: "Web Development",
					text:
						"Reliable web development is crucial to building a strong and secured environment for websites and web solutions. From mobile compatibility to web accessibility.",
					to: "/user-experience-optimization"
				},
				{
					id: "3",
					image: "brand-design2.webp",
					title: "Brand Design",
					text:
						"Branding identity and a strong logo are essential to a successful marketing strategy. It has a great impact on first impressions and will set you apart.",
					to: "/graphic-design"
				},
				{
					id: "4",
					image: "web-maintenance2.webp",
					title: "Web Maintenance",
					text:
						"Technology advances and enhances every day. A smooth running website often needs to cross all the Ts and dots all the Is to maintain browser compatibility and support.",
					to: "/web-maintenance"
				}
			],
			heading: "Web Design & User Experience Experts",
			secondheading: "Need an estimate or quote request?",
			text:
				"All projects vary in size, time, and complexity. By requesting an estimate, we will be able to gauge your needs more accurately. Use our contact form on our contact page and be as thorough as possible.",
			button: "Request a quote",
			to: "/contact"
		};
	}
};
</script>

<style lang="scss" scoped>
.bg-parallax {
	background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.77)),
		url("https://raw.githubusercontent.com/lotusms/LotusMS/master/webp/home/Computer-bg.webp")
			center center no-repeat fixed;
}
.services {
	.avatar {
		background-color: #4f5b62;
		border: 3px solid #7cb342;
		.card-image {
			width: 95px;
			&.image-3 {
				width: 70px;
			}
		}
	}
}
.solutions-card {
	background-color: rgba(193, 189, 189, 0.26);
	.green-text {
		color: #7cb342;
		padding-bottom: 5px;
		border-bottom: 2px solid #7cb342;
	}
	.white-text {
		line-height: 1.4;
	}
}
.services-estimate {
	padding-top: 40px;
	.text {
		max-width: 1050px;
		margin: 0 auto;
	}
}
</style>
