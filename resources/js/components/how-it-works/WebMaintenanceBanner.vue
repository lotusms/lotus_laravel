<template>
    <div class="bg-dark-grey full-width justify-center items-start" uk-grid>
        <div class="uk-width-1-4@s">
            <div class="picture">
                <div class="picture-circle">
                    <div class="child"></div>
                </div>
                <div class="img-parent">
                    <img
                        src="https://raw.githubusercontent.com/lotusms/LotusMS/master/webp/home/404Apple.webp"
                        width="428"
                        height="405"
                        title="Web Maintenance"
                        alt="Web Maintenance"
                    />
                </div>
            </div>
        </div>
        <div class="uk-width-3-4@s height500">
            <div
                class="justify-content-center align-content-center content-center"
                uk-grid
            >
                <div class="uk-width-1-2@s">
                    <h3 class="playball green-text pb-4 pt-9">
                        Web Maintenance
                    </h3>
                    <p class="paragraph white-text">
                        Browsers and technologies in your website upgrade very
                        frequently. Some upgrades do not affect your website and
                        some will. We have very affordable maintenance plans in
                        place specifically for this purpose. We will continue to
                        make sure your website and business solution are running
                        like the day we built them.
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "WebMaintenanceBanner"
};
</script>

<style lang="scss" scoped>
.bg-dark-grey {
    background: #263238;
}

.height500 {
    height: 420px !important;
    .content-center {
        height: 100% !important;
    }
}
.picture {
    width: 100%;
    position: absolute;
    .picture-circle {
        background-color: #cbccce;
        border-radius: 0 500px 500px 0;
        position: absolute;
        height: 420px;
        width: 420px;
        .child {
            padding-top: 100%;
        }
    }
    .img-parent {
        img {
            position: relative;
            bottom: 0;
            left: 20px;
            width: 444px;
        }
    }
}
@media (max-width: 991px) {
    .height500 {
        .content-center {
            height: 100% !important;
            justify-content: flex-end;
            padding-right: 40px;
        }
    }
}
@media (max-width: 740px) {
    .picture {
        .picture-circle {
            width: 345px;
            .child {
                padding-top: 100%;
            }
        }
        .img-parent {
            img {
                width: 345px;
                bottom: -93px;
            }
        }
    }
}
@media (max-width: 599px) {
    .picture {
        position: static;
        .picture-circle {
            display: none;
        }
        .img-parent {
            text-align: center;
            padding: 20px;
            img {
                position: static;
                width: 255px;
            }
        }
    }
    .height500 {
        height: auto !important;
        .content-center {
            height: auto;
            justify-content: inherit;
            padding-right: initial;
            padding: 20px;
        }
    }
}
</style>
