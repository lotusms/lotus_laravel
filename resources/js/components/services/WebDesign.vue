<template>
    <div uk-grid>
        <div
            class="uk-width-1-4@m"
            v-for="(service, index) in services"
            :key="index"
        >
            <div class="uk-card uk-card-secondary">
                <div class="ms-thumbnail ms-thumbnail-diagonal">
                    <img
                        :src="
                            `https://raw.githubusercontent.com/lotusms/LotusMS/master/webp/web-design/${service.image}`
                        "
                        :alt="service.title"
                    />
                    <figcaption class="ms-thumbnail-caption text-center">
                        <div class="ms-thumbnail-caption-content">
                            <h3
                                class="green-text playball ms-thumbnail-caption-title"
                            >
                                {{ service.title }}
                            </h3>
                        </div>
                    </figcaption>
                </div>
                <div class="uk-dark p-4">
                    <h3 class="green-text playball py-2 text-center">
                        {{ service.title }}
                    </h3>
                    <ul>
                        <li
                            v-for="property in service.properties"
                            :key="property.id"
                            class="paragraph"
                        >
                            {{ property }}
                        </li>
                    </ul>

                    <div class="text-center justify-center mt-4">
                        <p class="paragraph">
                            * Reserve your project by paying your retainer
                            today!
                        </p>
                        <a
                            :href="service.url"
                            target="_blank"
                            class="uk-button uk-button-primary"
                        >
                            I want this!
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            services: [
                {
                    title: "Web Design Lite",
                    url: "https://link.waveapps.com/83ydqh-jjm32v",
                    image: "startup.webp",
                    properties: [
                        "Single-page website",
                        "Informational",
                        "No content manager",
                        "Professional image"
                    ]
                },
                {
                    title: "Web Design 1.0",
                    url: "https://link.waveapps.com/jkg9gt-5ajpuq",
                    image: "smalll-business.webp",
                    properties: [
                        "Multi-page website",
                        "Small businesses preferred",
                        "For information and marketing",
                        "Content Manager Optional"
                    ]
                },
                {
                    title: "Web Design 2.0",
                    url: "https://link.waveapps.com/xjd85q-8wtvpz",
                    image: "online-store.webp",
                    properties: [
                        "Multi-page website",
                        "Multi accounts capable",
                        "Content Manager",
                        "Preferred by online stores"
                    ]
                },
                {
                    title: "Web Design 3.0",
                    url: "https://link.waveapps.com/kry745-p6m53e",
                    image: "enterprise.webp",
                    properties: [
                        "Multi-framework website",
                        "Custom functionality",
                        "Preferred by enterprises",
                        "Scalable for future releases"
                    ]
                }
            ]
        };
    }
};
</script>

<style lang="scss"></style>
