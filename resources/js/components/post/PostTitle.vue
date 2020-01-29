<template>
	<span>{{ title | truncate(40) }}</span>
</template>

<script>
Vue.filter("truncate", function(value, length) {
	if (!value) return "";
	value = value.toString();
	if (value.length > length) {
		return value.substring(0, length) + "...";
	} else {
		return value;
	}
});

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

<style></style>
