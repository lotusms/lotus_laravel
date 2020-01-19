<template>
	<div class="excerpt" v-html="body_html"></div>
</template>

<script>
export default {
	props: ["post"],
	data() {
		return {
			body: this.post.body,
			body_html: this.post.body_html
		};
	}
};
</script>

<style>
</style>