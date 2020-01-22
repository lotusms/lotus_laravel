<template>
    <div uk-grid>
        <div
            class="uk-width-1-2@m"
            v-for="(brand, index) in brands"
            :key="index"
        >
            <div class="uk-card uk-card-secondary">
                <div uk-grid>
                    <div class="uk-width-1-2">
                        <img
                            :src="
                                `https://raw.githubusercontent.com/lotusms/LotusMS/master/webp/graphic-design/${brand.imageold}`
                            "
                            :alt="`${brand.title} old`"
                        />
                    </div>
                    <div class="uk-width-1-2">
                        <img
                            :src="
                                `https://raw.githubusercontent.com/lotusms/LotusMS/master/webp/graphic-design/${brand.imagenew}`
                            "
                            :alt="`${brand.title} new`"
                        />
                    </div>
                </div>
                <div class="uk-dark p-4">
                    <h3 class="green-text playball py-2 text-center">
                        How did they improve?
                    </h3>
                    <ul>
                        <li
                            v-for="property in brand.properties"
                            :key="property.id"
                            class="paragraph"
                        >
                            {{ property }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            brands: [
                {
                    title: "Spotify",
                    imageold: "spotify-before.webp",
                    imagenew: "spotify-after.webp",
                    properties: [
                        "Sharper design without fading or shadows",
                        "Compatible with all stitching or cutting machines",
                        "Isolated brand name improves readability"
                    ]
                },
                {
                    title: "Starbucks",
                    imageold: "starbucks-before.webp",
                    imagenew: "starbucks-after.webp",
                    properties: [
                        "Simpler design with fewer colors",
                        "Removing the brand name thus making the image more prominent",
                        "More identifiable from a further distance"
                    ]
                },
                {
                    title: "Apple Inc.",
                    imageold: "apple-before.webp",
                    imagenew: "apple-after.webp",
                    properties: [
                        "Removing the brand name allowing the apple to be bigger",
                        "Simpler and fewer colors for a sharper design",
                        "Embossed simulation by using several grays"
                    ]
                },
                {
                    title: "Dominos Pizza",
                    imageold: "dominoes-before.webp",
                    imagenew: "dominoes-after.webp",
                    properties: [
                        "Smaller and simpler overall design",
                        "Eliminating the unnecessary word Pizza",
                        "Isolated brand name improves readibility"
                    ]
                }
            ]
        };
    }
};
</script>

<style lang="scss"></style>
