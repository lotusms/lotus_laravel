<template>
	<div class="col-lg-4 col-md-6 col-xs-12">
		<div class="card mb-3">
			<!-- @if(strlen($post->cover_image) >= 1 ) -->
			<img style="width:100%" :src="`/storage/cover_images/${cover_image}`" :alt="title" />
			<!-- @endif -->
			<div class="card-body">
				<h3>
					<a :href="url">{{ title }}</a>
				</h3>
				<small>
					Written on {{created_date}}
					by
				</small>
				<div class="excerpt" v-html="body_html"></div>
			</div>
		</div>
	</div>
</template>

<script>
Vue.filter("truncate", function(text, stop, clamp) {
	return text.slice(0, stop) + (stop < text.length ? clamp || "..." : "");
});

export default {
	props: ["post"],
	data() {
		return {
			title: this.post.title,
			body: this.post.body,
			body_html: this.post.body_html,
			url: this.post.url,
			cover_image: this.post.cover_image,
			created_date: this.post.created_date
		};
	}
};
</script>

<style>
</style>