<template>
    <div class="bg-mountain-image p-5 uk-dark">
        <div class="row">
            <div class="col">
                <h1 class="white-text font-weight-medium text-center pb-5">
                    {{ heading }}
                </h1>
            </div>
        </div>
        <div class="uk-child-width-1-1@s uk-child-width-1-2@m" uk-grid>
            <div>
                <p class="white-text paragraph" style="max-width: 80%">
                    {{ text }}
                </p>

                <ul style="max-width: 80% bulleted">
                    <li
                        class="white-text paragraph mb-4"
                        v-for="(item, index) in listitems"
                        :key="index"
                    >
                        {{ item.text }}
                    </li>
                </ul>

                <div class="row p-4">
                    <a :href="phonebtnto" class="uk-button uk-button-primary">
                        <span uk-icon="receiver" class="mr-2"></span>
                        {{ phonebtn }}
                    </a>
                    <a
                        :href="mailbtnto"
                        class="uk-button uk-button-primary ml-2"
                    >
                        <span uk-icon="mail" class="mr-2"></span>
                        {{ mailbtn }}
                    </a>
                </div>
            </div>
            <div class="text-center py-12">
                <img
                    :src="
                        `https://raw.githubusercontent.com/lotusms/LotusMS/master/webp/home/${image}`
                    "
                    alt="Mobile Device Compatible"
                />
            </div>
        </div>
    </div>
</template>

<script>
import PhoneIcon from "vue-material-design-icons/Phone.vue";
import MailIcon from "vue-material-design-icons/Mail.vue";

export default {
    name: "ResponsiveWebDesign",
    components: { PhoneIcon, MailIcon },
    data() {
        return {
            heading: "Responsive Web Design (Mobile Device Compatible)",
            text:
                "All of our websites are built on a responsive framework. This means we ensure the website runs flawlessly on all mobile devices that support a web browser, such as Android phones and tablets, iPhones, iPads, Microsoft mobile devices, and Google Tablets. But why is this important?",
            phonebtn: "(717) 945-8132",
            phonebtnto: "tel:+7179458132",
            mailbtn: "Email Us",
            mailbtnto:
                "mailto:m%61il%74%6F%3Alotu%73ms%40ou%74%6C%6F%6Fk.%63om",
            listitems: [
                {
                    text:
                        "We live in a mobile generation. Most people use their phones more often than a computer or laptop."
                },
                {
                    text:
                        "A non-responsive website is often hard to read and requires pinching and horizontal scrolling to read."
                },
                {
                    text:
                        "Phone numbers and email addresses are directly connected to your device dialer and email app so that you never have to swap back and forth between browser and dialer, or copy & paste anything."
                },
                {
                    text: "Try the buttons below!"
                }
            ],
            background: "back_mountain.webp",
            image: "mock.webp"
        };
    }
};
</script>

<style lang="scss" scoped>
.bg-mountain-image {
    color: #fafafa;
    background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.77)),
        url("https://raw.githubusercontent.com/lotusms/LotusMS/master/webp/home/back_mountain.webp")
            center center no-repeat;
    background-position: center center;
    background-size: cover;
    position: relative;
    -webkit-animation: moveBack;
    animation: moveBack;
    -webkit-animation-duration: 30s;
    animation-duration: 30s;
    -webkit-animation-timing-function: linear;
    animation-timing-function: linear;
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
}
</style>
