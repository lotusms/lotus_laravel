<template>
	<div class="uk-card p-4 uk-light" style="background: #455A64">
		<div uk-grid>
			<div class="uk-width-1-3@m" v-for="(project, index) in projects" :key="index">
				<div class="text-center">
					<img
						:src="
                `https://raw.githubusercontent.com/lotusms/LotusMS/master/webp/ux/${project.image}`
              "
						:alt="project.name"
					/>
					<p class="pre-formatted">{{ project.text }}</p>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
export default {
	data() {
		return {
			projects: [
				{
					image: "captor2.webp",
					name: "Captor",
					text:
						"Compartmentalization of content makes all the information easy to find. The navigational items are centralized in independent areas to make it easier for the user to find his/her way through the website. Built for indoor/office use where sun glare will not be a problem"
				},
				{
					image: "plcb2.webp",
					name: "Liquor Control Board",
					text:
						"Extensive databases can result in messy navigation and convoluted menus. Making use of a full width menu allows for better distribution of information in the screen. Even when the website was not intended to be deigned for full-screen."
				},
				{
					image: "jg2.webp",
					name: "JobGateway",
					text:
						"Understanding the users and their primery objective when they come to main page. The home page shows a lookup form to allow the users to perform searches and find the information they need right from the home page. The internal pages contain all the tools and extra features to configure their searches accordingly."
				}
			]
		};
	}
};
</script>

<style>
</style>