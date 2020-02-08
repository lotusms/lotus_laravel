<template>
	<div
		class="uk-position-relative uk-visible-toggle"
		tabindex="-1"
		uk-slideshow="animation: fade; autoplay: true; ratio: false"
	>
		<ul class="uk-slideshow-items" uk-height-viewport="offset-top: true; offset-bottom: 1">
			<li v-for="(slide, index) in slides" :key="index">
				<div
					class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left"
				>
					<img
						:src="
                            `https://raw.githubusercontent.com/lotusms/LotusMS/master/webp/home/slider/${slide.image}`
                        "
						:alt="`${slide.title1} ${slide.title2}`"
						uk-cover
					/>
					<div
						class="uk-position-top-left uk-position-large uk-text-left pa-12 mt-12 uk-transition-slide-left uk-light"
					>
						<h2 class="main-banner-title">
							{{ slide.title1 }}
							<br />
							{{ slide.title2 }}
						</h2>
						<p class="main-banner-subtitle">
							{{ slide.subtitle1 }}
							<br />
							{{ slide.subtitle2 }}
						</p>
					</div>
				</div>
			</li>
		</ul>

		<div class="uk-light">
			<a
				class="uk-position-center-left uk-position-small uk-hidden-hover"
				href="#"
				uk-slidenav-previous
				uk-slideshow-item="previous"
			></a>
			<a
				class="uk-position-center-right uk-position-small uk-hidden-hover"
				href="#"
				uk-slidenav-next
				uk-slideshow-item="next"
			></a>
		</div>
	</div>
</template>

<script>
export default {
	name: "MainSlider",
	data() {
		return {
			slides: [
				{
					id: "1",
					image: "Slide1.webp",
					title1: "talented",
					title2: "web designers",
					subtitle1: "Improve your client's experience &",
					subtitle2: "interaction with beautiful web design."
				},
				{
					id: "2",
					image: "Slide2.webp",
					title1: "branding &",
					title2: "graphic designers",
					subtitle1: "make an impression, stand out,",
					subtitle2: "and deliver in style."
				},
				{
					id: "3",
					image: "Slide3.webp",
					title1: "relax more,",
					title2: "work a little less",
					subtitle1: "let your web application handle",
					subtitle2: "some of the workload."
				}
			]
		};
	}
};
</script>

<style lang="scss" scoped>
.main-banner-title {
	font-size: 90px;
	line-height: 1;
	font-family: Poppins;
	color: #7cb342;
	margin-top: 100px;
}
.main-banner-subtitle {
	font-family: Poppins;
	font-size: 31px;
	line-height: 1.5;
	color: #ffffff;
}

@media (max-width: 991px) {
	.main-banner-title {
		font-size: 60px;
		line-height: 1;
	}
	.main-banner-subtitle {
		font-family: Poppins;
		font-size: 21px;
		line-height: 1.5;
	}
}

@media (max-width: 630px) {
	.main-banner-title {
		font-size: 40px;
		line-height: 1;
	}
	.main-banner-subtitle {
		font-family: Poppins;
		font-size: 18px;
		line-height: 1.5;
	}
}
</style>
