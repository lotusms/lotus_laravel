<template>
	<div
		class="uk-position-relative uk-visible-toggle uk-light"
		tabindex="-1"
		id="slider"
		uk-slideshow="animation: fade; autoplay: true"
	>
		<ul class="uk-slideshow-items">
			<li
				v-for="(slide, index) in slides"
				:key="index"
				class="text-center"
				style="background: #2c5364"
			>
				<img
					:src="`https://raw.githubusercontent.com/lotusms/LotusMS/master/webp/ux/${slide.image}`"
					:alt="slide.title"
					width="70%"
					style="margin: 0 auto, text-align: center"
				/>
				<div
					class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom"
				>
					<h3 class="green-text playball mt-0 pt-0">{{slide.title}}</h3>
					<p class="uk-margin-remove">{{slide.text}}</p>
				</div>
			</li>
		</ul>

		<a
			class="uk-position-center-left uk-position-small"
			href="#"
			uk-slidenav-previous
			uk-slideshow-item="previous"
		></a>
		<a
			class="uk-position-center-right uk-position-small"
			href="#"
			uk-slidenav-next
			uk-slideshow-item="next"
		></a>
	</div>
</template>

<script>
export default {
	name: "Slider",
	data() {
		return {
			slides: [
				{
					title: "Informational Data",
					text:
						"Data that is organized intuitively conveys information and increases production and user engagement.",
					image: "ux1.webp"
				},
				{
					title: "Responsive Design",
					text:
						"Forcing a user to use a specific device, platform, or browser motivates the user to leave the website.",
					image: "ux2.webp"
				},
				{
					title: "Cognitive Friction",
					text:
						"Allowing sufficient space between elements reduces cognitive friction and makes tapping with your finger much easier.",
					image: "ux3.webp"
				}
			]
		};
	}
};
</script>

<style>
</style>