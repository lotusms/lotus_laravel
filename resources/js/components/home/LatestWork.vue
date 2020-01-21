<template>
    <div class="uk-dark uk-padding uk-panel clients">
        <div class="text-center">
            <h1 class="white-text pb-0">
                {{ heading }}
            </h1>
        </div>
        <div
            class="uk-position-relative uk-visible-toggle uk-dark slider"
            tabindex="-1"
            uk-slider="sets: true"
        >
            <ul
                class="clients-slider uk-slider-items uk-slider-items uk-child-width-1-1@s uk-child-width-1-3@m uk-grid-large text-center"
            >
                <li v-for="(client, index) in clients" :key="index">
                    <div class="uk-panel">
                        <div class="card my-card client">
                            <a :href="client.url" target="_blank">
                                <img
                                    :src="
                                        `https://raw.githubusercontent.com/lotusms/LotusMS/master/webp/clients/${client.image}`
                                    "
                                    :alt="client.name"
                                />
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="uk-dark">
                <a
                    class="uk-position-center-left"
                    href="#"
                    uk-slidenav-previous
                    uk-slider-item="previous"
                ></a>
                <a
                    class="uk-position-center-right"
                    href="#"
                    uk-slidenav-next
                    uk-slider-item="next"
                ></a>
            </div>
            <ul class="uk-slider-nav uk-dotnav uk-flex-center dots"></ul>
        </div>
    </div>
</template>

<script>
export default {
    name: "LatestWork",
    data() {
        return {
            clients: [
                {
                    image: "97milk.webp",
                    url: "http://www.97milk.com/"
                },
                {
                    image: "birdsluvem.webp",
                    url: "https://birdsluvem.com/"
                },
                {
                    image: "caffeinatedsloth.webp",
                    url: "https://www.caffeinatedsloth.com/"
                },
                {
                    image: "captor2.webp",
                    url:
                        "http://www.captor.lotuswebdesigns.com.s3-website.us-east-2.amazonaws.com/"
                },
                {
                    image: "cmtl.webp",
                    url: "http://www.teamcentermass.com/"
                },
                {
                    image: "cpbs2.webp",
                    url: "http://www.centralpennbuysell.com/"
                },
                {
                    image: "feedcommodities.webp",
                    url: "http://www.feedcommodities.com/"
                },
                {
                    image: "forourkids.webp",
                    url: "https://4ourkids.com/"
                },
                {
                    image: "gals2.webp",
                    url: "http://www.thegalscleaningservice.com/"
                },
                {
                    image: "jg2.webp",
                    url: "https://www.pacareerlink.pa.gov/jponline/"
                },
                {
                    image: "paww2.webp",
                    url: "http://www.pawoundedwarriors.org/"
                },
                {
                    image: "pelican2.webp",
                    url:
                        "https://www.pelican.state.pa.us/provider/default.aspx#"
                },
                {
                    image: "plcb2.webp",
                    url:
                        "https://www.finewineandgoodspirits.com/webapp/wcs/stores/servlet/StoreCatalogDisplay?storeId=10051&catalogId=10051&langId=-1"
                },
                {
                    image: "politicagoviernos.webp",
                    url: "http://www.politicaygobiernos.com/"
                },
                {
                    image: "randj2.webp",
                    url: "http://www.randjdairy.com/"
                },
                {
                    image: "witmer2.webp",
                    url: "http://www.witmersfeed.com/"
                },
                {
                    image: "wybpd.webp",
                    url: "https://www.wybpd.org/"
                },
                {
                    image: "ymmaa2.webp",
                    url: "http://www.ymmaa.com/"
                }
            ],
            heading: "Some Of Our Latest Works"
        };
    }
};
</script>

<style lang="scss" scoped>
.clients {
    background: #0f2027 !important;
    .slider {
        .clients-slider {
            width: 94%;
            padding-top: 40px;
        }
    }
    .client {
        background: transparent !important;
        box-shadow: none;
    }
}
</style>
