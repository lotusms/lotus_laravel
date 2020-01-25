<template>
	<div v-if="cover_image">
		<a :href="url">
			<img style="width:100%" :src="`/public/cover_images/${cover_image}`" :alt="title" />
		</a>
	</div>
</template>

<script>
export default {
	props: ["post"],
	data() {
		return {
			title: this.post.title,
			cover_image: this.post.cover_image,
			url: this.post.url
		};
	}
};
</script>

<style>
</style>