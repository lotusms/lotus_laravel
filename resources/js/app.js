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
// Vue.component("m-editor", require("./components/MEditor.vue").default);
Vue.component("main-slider", require("./components/home/MainSlider").default);
Vue.component(
    "certifications",
    require("./components/home/Certifications").default
);
Vue.component("main-content", require("./components/home/MainContent").default);
Vue.component("services", require("./components/home/Services").default);
Vue.component(
    "responsive-web-design",
    require("./components/home/ResponsiveWebDesign").default
);
Vue.component(
    "website-types",
    require("./components/home/WebsiteTypes").default
);
Vue.component(
    "testimonials",
    require("./components/home/Testimonials").default
);
Vue.component("latest-work", require("./components/home/LatestWork").default);
Vue.component(
    "left-footer",
    require("./components/footers/LeftFooter").default
);
Vue.component(
    "center-footer",
    require("./components/footers/CenterFooter").default
);
Vue.component(
    "right-footer",
    require("./components/footers/RightFooter").default
);

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
