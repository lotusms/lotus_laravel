/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");
// import MarkdownIt from "markdown-it";
// Vue.use(MarkdownIt);
// import Quill from "quill";
// Vue.use(Quill);
// import CKEditor from "@ckeditor/ckeditor5-build-classic";
// Vue.use(CKEditor);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component("author-info", require("./components/AuthorInfo.vue").default);
Vue.component("post", require("./components/Post.vue").default);
Vue.component("post-image", require("./components/post/PostImage.vue").default);
Vue.component("post-title", require("./components/post/PostTitle.vue").default);
Vue.component(
    "post-content",
    require("./components/post/PostContent.vue").default
);
Vue.component("home", require("./components/home/Home").default);

Vue.component("app-footer", require("./components/footers/AppFooter").default);
Vue.component(
    "timeline",
    require("./components/how-it-works/Timeline").default
);
Vue.component("reach-out", require("./components/shared/ReachOut.vue").default);
Vue.component(
    "web-maintenance-banner",
    require("./components/how-it-works/WebMaintenanceBanner.vue").default
);
Vue.component(
    "contact-info",
    require("./components/contact/ContactInfo.vue").default
);
Vue.component(
    "contact-form",
    require("./components/contact/ContactForm.vue").default
);
Vue.component(
    "web-design",
    require("./components/services/WebDesign.vue").default
);
Vue.component(
    "branding-design",
    require("./components/services/BrandingDesign.vue").default
);
Vue.component("logos", require("./components/services/Logos.vue").default);
Vue.component(
    "ux-slider",
    require("./components/services/UxSlider.vue").default
);
Vue.component(
    "ux-sidebar",
    require("./components/services/UxSidebar.vue").default
);
Vue.component(
    "ux-related-projects",
    require("./components/services/UxRelatedProjects.vue").default
);
Vue.component(
    "price-table",
    require("./components/services/PriceTable.vue").default
);
Vue.component("questions", require("./components/Questions.vue").default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
window.onload = function() {
    const app = new Vue({
        el: "#app"
    });
};

window.UIkit = require("uikit");
window.Icons = require("uikit/dist/js/uikit-icons");
UIkit.use(Icons);
