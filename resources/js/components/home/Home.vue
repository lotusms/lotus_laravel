<template>
    <main class="main-body">
        <main-slider />
        <certifications />
        <main-content />
        <services />
        <responsive-web-design />
        <website-types />
        <testimonials />
        <latest-work />
    </main>
</template>

<script>
import MainSlider from "./MainSlider";
import Certifications from "./Certifications";
import MainContent from "./MainContent";
import Services from "./Services";
import ResponsiveWebDesign from "./ResponsiveWebDesign";
import WebsiteTypes from "./WebsiteTypes";
import Testimonials from "./Testimonials";
import LatestWork from "./LatestWork";
export default {
    components: {
        MainSlider,
        Certifications,
        MainContent,
        Services,
        ResponsiveWebDesign,
        WebsiteTypes,
        Testimonials,
        LatestWork
    }
};
</script>

<style></style>
