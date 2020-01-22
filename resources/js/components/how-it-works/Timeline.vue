<template>
    <div class="timeline mt-4">
        <div
            :class="`timeline-item ${item.side}`"
            v-for="(item, i) in items"
            :key="i"
        >
            <div class="timeline-subtitle">
                <p class="white-text">{{ item.phase }}</p>
            </div>
            <div class="timeline-dot"></div>
            <div class="timeline-content">
                <div class="uk-card uk-card-secondary uk-dark">
                    <div
                        class="uk-card-header uk-flex-middle uk-grid-small"
                        uk-grid
                    >
                        <h3 class="uk-card-title green-text playball">
                            {{ item.title }}
                        </h3>
                    </div>
                    <img
                        :src="`/img/timeline/${item.icon}.svg`"
                        :class="`icon ${item.icon}`"
                    />
                    <div class="uk-card-body">
                        <p>{{ item.text }}</p>
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
            items: [
                {
                    title: "Initial Consultation",
                    icon: "phase0",
                    phase: "Phase 0",
                    text:
                        "It all starts with a call and analysis of business requirements. We will discuss and estimate size, complexity, and cost; either in person or via email, phone, or online meeting.",
                    side: "left"
                },
                {
                    title: "Mock Designs",
                    icon: "phase1",
                    phase: "Phase 1",
                    text:
                        "Once we have agreed, we will collect an initial retainer payment (50% of total work or 33% for Specialty and Enterprise Designs. This step kicks off the initial design mock ups that will demonstrate the web design proposed look & feel.",
                    side: "right"
                },
                {
                    title: "Web Development",
                    icon: "phase2",
                    phase: "Phase 2",
                    text:
                        "Once the web design has been reviewed and approved (this may need several revisions), the designs are developed to perform the functions needed. These can include page navigation, element transitions, database connections, dynamic processing, and more.",
                    side: "left"
                },
                {
                    title: "Process Iteration",
                    icon: "phase1-2",
                    phase: "Phase 1.2",
                    text:
                        "Large projects such as Specialty and Enterprise web designs and business solutions are too large to develop in one phase. If the project is large enough, it will be divided in iterations of web design and web development targeting a few screens at a time. At some point, payment will be required during these iterations.",
                    side: "right"
                },
                {
                    title: "Testing",
                    icon: "phase3",
                    phase: "Phase 3",
                    text:
                        "At the end of phase 2 for every iteration, we will conduct a stress testing process that ensures the web design is compatible with all browsers, mobile devices, and operating systems. The testing phase also includes debugging of all errors found and UI/UX inconsistencies.",
                    side: "left"
                },
                {
                    title: "Content Copywrite",
                    icon: "phase4",
                    phase: "Phase 4",
                    text:
                        "Once the website or business solution is working as expected, the content is written to ensure the information is correct. The content will be submitted by the client.",
                    side: "right"
                },
                {
                    title: "Delivery",
                    icon: "phase5",
                    phase: "Phase 5",
                    text:
                        'At the end of the project or the end of every iteration for large projects, a payment will be required before the design is migrated to a live domain and server. These screens will be considered "finalized." Any changes to these pages can be taken care of during an enhancement phase.',
                    side: "left"
                },
                {
                    title: "Enhancements",
                    icon: "phase6",
                    phase: "Phase 6",
                    text:
                        "This phase is not always needed; however, there are times when a client would like to re-design a page or set of pages that have already been finalized. The enhancement phase facilitates further improvement to the site.",
                    side: "right"
                }
            ]
        };
    }
};
</script>

<style lang="scss" scoped>
.timeline {
    .timeline-item {
        padding-bottom: 24px;
        overflow: hidden;
        position: relative;
        line-height: 22px;
        .timeline-subtitle,
        .timeline-content {
            width: 48%;
        }
        &.left {
            .timeline-subtitle {
                float: right;
                text-align: left;
                left: 2px;
                position: relative;
                top: 2px;
                display: block;
                margin: 0;
                padding: 0;
                font-size: 12px;
                text-transform: uppercase;
                letter-spacing: 1px;
                font-weight: 700;
            }
            .timeline-content {
                float: left;
                padding-right: 30px;
                text-align: right;
                display: block;
                margin: 0;
                padding: 0;
            }
        }
        &.right {
            .timeline-subtitle {
                float: left;
                right: 2px;
                text-align: right;
                position: relative;
                top: 2px;
                display: block;
                margin: 0;
                padding: 0;
                font-size: 12px;
                text-transform: uppercase;
                letter-spacing: 1px;
                font-weight: 700;
            }
            .timeline-content {
                float: right;
                text-align: left;
                padding-left: 30px;
                display: block;
                margin: 0;
                padding: 0;
            }
        }
        @media (max-width: 800px) {
            .timeline-subtitle,
            .timeline-content {
                width: 96%;
            }
            left: 10px;
            &.left,
            &.right {
                .timeline-subtitle {
                    float: left;
                    text-align: left;
                    left: 2px;
                    position: relative;
                    top: 2px;
                    display: block;
                    margin-left: 30px;
                    padding: 0;
                    font-size: 12px;
                    text-transform: uppercase;
                    letter-spacing: 1px;
                    font-weight: 700;
                }
                .timeline-content {
                    float: left;
                    padding-right: 30px;
                    text-align: left;
                    display: block;
                    margin: 0;
                    padding: 0;
                    margin-left: 30px;
                }
            }
        }
    }
}

.timeline-dot {
    margin-top: 7px !important;
    position: absolute;
    left: 50%;
    margin-left: 0;
    top: 26px;
    bottom: 0;
    width: 3px;
    color: #4f5b62 !important;
    background: #4f5b62;
    &::before,
    &::after {
        content: "";
        background: currentColor;
        display: block;
        position: absolute;
    }
    &::before {
        border: 3px solid transparent;
        border-radius: 100%;
        height: 20px;
        width: 20px;
        top: -28px;
        left: -9px;
        transition: background 0.3s ease-in-out, border 0.3s ease-in-out;
    }
    @media (max-width: 800px) {
        left: 10px;
    }
}

.uk-card-title {
    width: 100%;
}

.phase0 {
    width: 89px;
    margin: 0 30px;
}
.phase1 {
    width: 120px;
    margin: -22px 22px;
}
.phase2 {
    width: 87px;
    margin: 0 41px;
}
.phase1-2 {
    width: 89px;
    margin: 0 35px;
}
.phase3 {
    width: 89px;
    margin: 0 28px;
}
.phase4 {
    width: 89px;
    margin: 0 40px;
}
.phase5 {
    width: 89px;
    margin: 0 40px;
}
.phase6 {
    width: 75px;
    margin: 0 41px;
}
</style>
