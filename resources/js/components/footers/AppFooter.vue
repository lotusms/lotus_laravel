<template>
    <div class="uk-width-2-3@m">
        <div uk-grid>
            <div class="footer-col uk-width-1-2@m p-4">
                <left-footer />
            </div>
            <div class="footer-col uk-width-1-2@m p-4">
                <right-footer />
            </div>
        </div>
    </div>
</template>

<script>
import LeftFooter from "./LeftFooter";
import RightFooter from "./RightFooter";
export default {
    components: { LeftFooter, RightFooter }
};
</script>

<style></style>
