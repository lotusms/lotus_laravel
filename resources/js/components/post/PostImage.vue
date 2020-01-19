<template>
	<div v-if="cover_image">
		<img style="width:100%" :src="`/storage/cover_images/${cover_image}`" :alt="title" />
	</div>
</template>

<script>
export default {
	props: ["post"],
	data() {
		return {
			title: this.post.title,
			cover_image: this.post.cover_image
		};
	}
};
</script>

<style>
</style>