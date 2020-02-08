<template>
	<div style="background-color: #cccccc" class="uk-card py-2 certifications">
		<div class="uk-container uk-container-small">
			<div class="align-center" style="justify-content: space-around;" uk-grid>
				<div
					class="uk-width-1-5@s text-center"
					v-for="(certification, index) in certifications"
					:key="index"
				>
					<img
						class="max-width"
						:src="`https://raw.githubusercontent.com/lotusms/LotusMS/master/webp/home/certifications/${certification.image}.webp`"
						:alt="`${certification.image} Certification`"
					/>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
export default {
	name: "Certifications",
	data() {
		return {
			certifications: [
				{
					id: "1",
					image: "sba"
				},
				{
					id: "2",
					image: "adobe"
				},
				{
					id: "3",
					image: "vosb"
				},
				{
					id: "4",
					image: "microsoft"
				},
				{
					id: "5",
					image: "w3"
				}
			]
		};
	}
};
</script>

<style lang="scss" scoped>
.max-width {
	max-width: 114px;
}
</style>
