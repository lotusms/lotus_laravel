<template>
	<div class="uk-padding uk-panel website-types uk-dark" style="background-color:#081400">
		<ul class="uk-child-width-expand custom-tabs" uk-tab>
			<li class="uk-active" v-for="(tab, index) in tabs" :key="index">
				<a href="#" class="green-text playball">{{ tab.name }}</a>
			</li>
		</ul>
		<ul class="uk-switcher uk-margin">
			<li v-for="(content, index) in tabcontent" :key="index">
				<div class="uk-child-width-1-1@s uk-child-width-1-2@m" uk-grid>
					<div class="p-5">
						<h3 class="green-text py-4 playball">Save on the details while capturing the big picture</h3>
						<p class="white-text">{{ content.text }}</p>
						<a href="/web-design" class="uk-button uk-button-primary my-5">
							<span uk-icon="info" class="mr-2"></span>
							More info
						</a>
					</div>
					<div class="text-center py-4">
						<img
							:src="
                                `https://raw.githubusercontent.com/lotusms/LotusMS/master/webp/home/website-types/${content.image}`
                            "
							:alt="content.heading"
						/>
					</div>
				</div>
			</li>
		</ul>
	</div>
</template>

<script>
export default {
	name: "WebsiteTypes",
	data() {
		return {
			tab: null,
			tabs: [
				{
					tab: "Economy",
					name: "economy"
				},
				{
					tab: "Informational",
					name: "informational"
				},
				{
					tab: "Marketing",
					name: "marketing"
				},
				{
					tab: "e-Commerce",
					name: "ecommerce"
				}
			],
			tabcontent: [
				{
					name: "economy",
					heading: "Save on the details while capturing the big picture",
					text:
						"Although a website is a great business tool, it may be costly for those who do not have a marketing budget or are in the beginning stages of building a business. \n\n We can offer economical solutions that provide you with a great website while sacrificing some minor details in the design. These can be added at a later time.",
					to: "/web-design",
					image: "economymd.webp"
				},
				{
					name: "informational",
					heading: "Conduce your business ideas to your market",
					text:
						"Consider that most consumers search online first and want to know about your products and services before they visit your store or shop. \n\n With an informational website, you can provide brief information about your brand, products, and services so that clients can visit you with a plan in mind.",
					image: "informationalmd.webp"
				},
				{
					name: "marketing",
					heading: "Promote and optimize your products & services",
					text:
						"Packed with on-page SEO and user experience conceptualization, a marketing website aims to attract consumers and improve your search engine visibility. \n\n Our digital marketing strategists work closely with our designers to create more visibility to products, services, or campaigns that you wish to promote. This is our most popular package!",
					image: "marketingmd.webp"
				},
				{
					name: "ecommerce",
					heading: "Sell in the largest mall in the world!",
					text:
						"Online shopping has increased exponentially over the past few years and we do not see a decline in sight any time in the future. \n\n By offering your products online, you can get the upperhand on your competition and expand your sales to a new market that does not use your services otherwise due to location or preference.",
					image: "ecommercemd.webp"
				}
			]
		};
	}
};
</script>

<style lang="scss" scoped>
.tab {
	font-size: 23px;
	line-height: 1.715em;
	font-weight: 500;
	font-family: "playball" !important;
	.q-tab__content {
		.q-tab__label {
			font-size: 23px !important;
		}
	}
}
.tab-panels {
	background: transparent;
	.tab-h5 {
		color: #7cb342;
		font-size: 2em;
	}
}

.website-types {
	ul:first-child {
		li {
			padding: 0;
			a {
				@media (max-width: 600px) {
					font-size: 18px;
				}
			}
		}
		@media (max-width: 480px) {
			display: -webkit-box;
			display: flex;
			flex-wrap: wrap;
			margin-left: 0;
			padding: 0;
			list-style: none;
			position: static;
			flex-direction: column;
		}
	}
}
</style>
