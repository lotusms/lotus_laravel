<template>
    <div
        class="card text-center p-5"
        style="background-color: #0f2027; border-color: #0f2027; color: #cbccce;"
    >
        <h1 class="white-text font-weight-medium">{{ heading }}</h1>
        <h2 class="green-text playball">{{ subheading }}</h2>
        <p class="white-text paragraph">{{ text }}</p>
    </div>
</template>

<script>
export default {
    name: "MainContent",
    data() {
        return {
            heading: "Web Design & User Experience Experts",
            subheading: "Ask About Our 100% Web Design Satisfaction Guarantee!",
            text:
                "We do not stop working until your web design, and web design requirements have met your satisfaction. Once we receive all the details concerning your web design, we will do as many revisions as needed to achieve the desired web design. Our new web design process is designed to gather all the necessary information that we will need to create the most accurate design for your business, brand, and product type. The criteria carefully scrutinize the smallest details about your business, as well as search engine trends that allow us to create a website that is not only beautiful, but very efficient, SEO-friendly, and user-friendly."
        };
    }
};
</script>
