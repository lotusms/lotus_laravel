<template>
    <div class="paragraph mt-3" :inner-html.prop="body_html | truncate(220)"></div>
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
            body: this.post.body,
            body_html: this.post.body_html
        };
    }
};
</script>

<style></style>
