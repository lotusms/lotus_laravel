<template>
    <div v-if="{ courses }">
        <h4 class="green-text playball text-center">
            Knowledge Center
        </h4>
        <div class="custom-list">
            <div class="list-group social-icons-list">
                <a
                    :href="url"
                    class="list-group-item list-group-item-action"
                >
                    <img style="width:100%" :src="`/storage/cover_images/${cover_image}`" :alt="title" />

                    {{ title | truncate(40) }}
                </a>
            </div>
        </div>
    </div>
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
    name: "CenterFooter",
    data() {
        return {
            title: this.post.title,
            url: this.post.url,
			cover_image: this.post.cover_image
        };
    },
};
</script>

<style lang="scss" scoped>
.footer-col {
    .green-text {
        padding-bottom: 5px;
        border-bottom: 2px solid #7cb342;
    }
    .date-section {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: flex-start;
        .avatar {
            border: 2px solid #7cb342;
            img {
                border: 2px solid #7cb342;
            }
        }
        .icon {
            font-size: 12px;
            margin-right: 5px;
        }
        span {
            font-size: 13px;
        }
    }
}
</style>
