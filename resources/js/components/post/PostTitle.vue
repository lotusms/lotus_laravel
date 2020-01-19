<template>
	<h3>
		<a :href="url">{{ title }}</a>
	</h3>
</template>

<script>
export default {
	props: ["post"],
	data() {
		return {
			title: this.post.title,
			url: this.post.url
		};
	}
};
</script>

<style>
</style>