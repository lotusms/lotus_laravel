<template>
    <div style="background-color: #cccccc" class="card py-2 certifications">
        <div class="container">
            <div
                class="row align-center"
                style="justify-content: space-around;"
            >
                <div
                    class="max-width"
                    v-for="(certification, index) in certifications"
                    :key="index"
                >
                    <img
                        class=" "
                        :src="
                            `https://raw.githubusercontent.com/lotusms/LotusMS/master/webp/home/certifications/${certification.image}`
                        "
                    />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Certifications",
    data() {
        return {
            certifications: [
                {
                    id: "1",
                    image: "sba.webp"
                },
                {
                    id: "2",
                    image: "adobe.webp"
                },
                {
                    id: "3",
                    image: "vosb.webp"
                },
                {
                    id: "4",
                    image: "microsoft.webp"
                },
                {
                    id: "5",
                    image: "w3.webp"
                }
            ]
        };
    }
};
</script>

<style lang="scss" scoped>
.max-width {
    max-width: 114px;
}
</style>
