<template>
	<small>
		Written on {{ postDate }} by
		<a :href="user.url">{{user.name}}</a>
	</small>
</template>

<script>
export default {
	props: ["model"],
	data() {
		return {
			user: this.model.user
		};
	},
	computed: {
		postDate() {
			return this.model.created_date;
		}
		// userUrl() {
		// 	return this.model.user;
		// }
		// userName() {
		// 	return this.model.name;
		// }
	}
};
</script>
