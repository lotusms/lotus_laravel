<template>
	<div>
		<h4 class="appbar py-3 green-text playball text-center">Design Specs</h4>
		<div class="uk-card uk-card-secondary p-4">
			<div v-for="(spec, index) in specs" :key="index">
				<h4 class="custom-heading-2 playball green-text pt-4 pb-0 mb-0">{{spec.title}}</h4>
				<p class="paragraph mt-0">{{spec.text}}</p>
			</div>
			<div>
				<h4 class="custom-heading-4 playball green-text">...and more!</h4>
			</div>
			<div class="text-center pb-5">
				<a class="uk-button uk-button-primary uk-button-small" href="tel:+7179458132">(717) 945-8132</a>
			</div>
		</div>
	</div>
</template>

<script>
export default {
	name: "Sidebar",
	data() {
		return {
			specs: [
				{
					title: "Navigation",
					text:
						"Centralizing the navigation allows the user to have only one place where any page can ultimately be found."
				},
				{
					title: "Controls",
					text:
						"Standardizing the form controls including buttons, tabs, and internal links so that the elements flow in natural order as well as avoiding any accidental destructive action."
				},
				{
					title: "Accents",
					text:
						"Enhance visibility to items that require the most attention and promotion."
				},
				{
					title: "Accessibility",
					text:
						"Address all color combinations as well as font and icon sizes to ensure users with sight problems or mouse accuracy can still use the content without struggle."
				},
				{
					title: "Images",
					text:
						"Minimize the use of images which leads to slow-loading and high data consumption for mobile users."
				}
			]
		};
	}
};
</script>

<style>
</style>