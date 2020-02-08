<template>
	<div class="uk-dark uk-padding uk-panel clients">
		<div class="text-center">
			<h1 class="white-text pb-0">{{ heading }}</h1>
		</div>
		<div
			class="uk-position-relative uk-visible-toggle uk-dark slider"
			tabindex="-1"
			uk-slider="sets: true"
		>
			<ul
				class="clients-slider uk-slider-items uk-slider-items uk-child-width-1-1@s uk-child-width-1-3@m uk-grid-large text-center"
			>
				<li v-for="(client, index) in clients" :key="index">
					<div class="uk-panel">
						<div class="card my-card client">
							<a :href="client.url" target="_blank">
								<img
									:src="
                                        `https://raw.githubusercontent.com/lotusms/LotusMS/master/webp/clients/${client.image}`
                                    "
									:alt="client.name"
								/>
							</a>
						</div>
					</div>
				</li>
			</ul>
			<div class="uk-dark">
				<a class="uk-position-center-left" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
				<a class="uk-position-center-right" href="#" uk-slidenav-next uk-slider-item="next"></a>
			</div>
			<ul class="uk-slider-nav uk-dotnav uk-flex-center dots"></ul>
		</div>
	</div>
</template>

<script>
export default {
	name: "LatestWork",
	data() {
		return {
			clients: [
				{
					image: "97milk.webp",
					name: "97 Milk",
					url: "http://www.97milk.com/"
				},
				{
					image: "birdsluvem.webp",
					name: "Birds Luv'Em",
					url: "https://birdsluvem.com/"
				},
				{
					image: "caffeinatedsloth.webp",
					name: "Caffeinated Sloth",
					url: "https://www.caffeinatedsloth.com/"
				},
				{
					image: "captor2.webp",
					name: "CAPTOR",
					url:
						"http://www.captor.lotuswebdesigns.com.s3-website.us-east-2.amazonaws.com/"
				},
				{
					image: "cmtl.webp",
					name: "CMTL",
					url: "http://www.teamcentermass.com/"
				},
				{
					image: "cpbs2.webp",
					name: "Central Penn Buy & Sell",
					url: "http://www.centralpennbuysell.com/"
				},
				{
					image: "feedcommodities.webp",
					name: "Feed Commodities",
					url: "http://www.feedcommodities.com/"
				},
				{
					image: "forourkids.webp",
					name: "ForOurKids",
					url: "https://4ourkids.com/"
				},
				{
					image: "gals2.webp",
					name: "The Gals Cleaning Service",
					url: "http://www.thegalscleaningservice.com/"
				},
				{
					image: "jg2.webp",
					name: "JobGateway",
					url: "https://www.pacareerlink.pa.gov/jponline/"
				},
				{
					image: "paww2.webp",
					name: "PA Wounded Warriors",
					url: "http://www.pawoundedwarriors.org/"
				},
				{
					image: "pelican2.webp",
					name: "PELICAN",
					url: "https://www.pelican.state.pa.us/provider/default.aspx#"
				},
				{
					image: "plcb2.webp",
					name: "Penn Liquor Control Board",
					url:
						"https://www.finewineandgoodspirits.com/webapp/wcs/stores/servlet/StoreCatalogDisplay?storeId=10051&catalogId=10051&langId=-1"
				},
				{
					image: "politicagoviernos.webp",
					name: "Politica y Gobiernos",
					url: "http://www.politicaygobiernos.com/"
				},
				{
					image: "randj2.webp",
					name: "R&J Dairy",
					url: "http://www.randjdairy.com/"
				},
				{
					image: "witmer2.webp",
					name: "Witmer's Feed",
					url: "http://www.witmersfeed.com/"
				},
				{
					image: "wybpd.webp",
					name: "West York Borough Police Department",
					url: "https://www.wybpd.org/"
				},
				{
					image: "ymmaa2.webp",
					name: "York MMA Academy",
					url: "http://www.ymmaa.com/"
				}
			],
			heading: "Some Of Our Latest Works"
		};
	}
};
</script>

<style lang="scss" scoped>
.clients {
	background: #0f2027 !important;
	.slider {
		.clients-slider {
			width: 94%;
			padding-top: 40px;
		}
	}
	.client {
		background: transparent !important;
		box-shadow: none;
	}
}
</style>
