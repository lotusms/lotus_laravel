<template>
    <div class="custom-list">
        <div class="list-group social-icons-list">
            <a
                href="tel:+7179458132"
                class="list-group-item list-group-item-action"
            >
                <span class="social-icon">
                    <phone></phone>
                </span>
                <span>(717) 945-8132</span>
            </a>
            <a
                href="mailto:m%61il%74%6F%3Alotu%73ms%40ou%74%6C%6F%6Fk.%63om"
                class="list-group-item list-group-item-action"
            >
                <span class="social-icon">
                    <mail></mail>
                </span>
                <span>lotusms@outlook.com</span>
            </a>
            <a
                href="https://www.facebook.com/LOTUSMarketingSolutionsLLC/"
                class="list-group-item list-group-item-action"
            >
                <span class="social-icon">
                    <facebook></facebook>
                </span>
                <span>Like us on Facebook!</span>
            </a>
            <a
                href="https://twitter.com/LotusMarketingS"
                class="list-group-item list-group-item-action"
            >
                <span class="social-icon">
                    <twitter></twitter>
                </span>
                <span>Follow us on Twitter!</span>
            </a>
            <a
                href="https://www.linkedin.com/in/lotus-marketing-solutions-llc-32185462/"
                class="list-group-item list-group-item-action"
            >
                <span class="social-icon">
                    <linkedin></linkedin>
                </span>
                <span>Connect with us on Linkedin!</span>
            </a>
            <a
                href="https://plus.google.com/u/0/+LuisSilvaLOTUSMarketingSolutions"
                class="list-group-item list-group-item-action"
            >
                <span class="social-icon">
                    <google-plus></google-plus>
                </span>
                <span>Follow us on Google!</span>
            </a>
        </div>
    </div>
</template>

<script>
import Phone from "vue-material-design-icons/Phone.vue";
import Mail from "vue-material-design-icons/Mail.vue";
import Facebook from "vue-material-design-icons/Facebook.vue";
import Twitter from "vue-material-design-icons/Twitter.vue";
import Linkedin from "vue-material-design-icons/Linkedin.vue";
import GooglePlus from "vue-material-design-icons/GooglePlus.vue";

export default {
    components: { Phone, Mail, Facebook, Twitter, Linkedin, GooglePlus }
};
</script>

<style></style>
