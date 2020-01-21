<template>
    <div>
        <h4 class="green-text playball text-center">
            {{ heading }}
        </h4>
        <div class="custom-list">
            <div class="list-group">
                <a
                    v-for="(link, index) in links"
                    :key="index"
                    :href="link.to"
                    class="list-group-item list-group-item-action"
                    >{{ link.title }}</a
                >
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "LeftFooter",
    data() {
        return {
            heading: "Additional Links",
            links: [
                {
                    title: "FAQs",
                    to: "/faqs"
                },
                {
                    title: "Sales Policy",
                    to: "/sales-policy"
                },
                {
                    title: "Refund Policy",
                    to: "/refund-policy"
                },
                {
                    title: "Privacy Policy",
                    to: "/privacy-policy"
                },
                {
                    title: "Terms Of Use",
                    to: "terms-of-use"
                }
            ]
        };
    }
};
</script>

<style lang="scss" scoped>
.footer-col {
    .green-text {
        padding-bottom: 5px;
        border-bottom: 2px solid #7cb342;
    }
}
</style>
