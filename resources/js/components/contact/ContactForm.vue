<template>
    <div>
        <h3 class="playball green-text mt-12 mb-4">
            Get in touch with us!
        </h3>
        <form
            @submit.prevent="sendMail"
            @reset="onReset"
            class="uk-form-stacked"
        >
            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text"
                    >Name</label
                >
                <div class="uk-form-controls">
                    <input
                        class="uk-input"
                        type="text"
                        autofocus
                        v-model="name"
                        name="user_name"
                    />
                </div>
            </div>

            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text"
                    >Email</label
                >
                <div class="uk-form-controls">
                    <input
                        class="uk-input"
                        type="email"
                        v-model="email"
                        name="user_email"
                    />
                </div>
            </div>

            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text"
                    >Phone</label
                >
                <div class="uk-form-controls">
                    <input
                        class="uk-input"
                        type="phone"
                        v-model="phone"
                        name="user_phone"
                    />
                </div>
            </div>

            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text"
                    >Comment</label
                >
                <div class="uk-form-controls">
                    <textarea
                        class="uk-textarea"
                        v-model="comment"
                        label="Message *"
                        name="message"
                    ></textarea>
                </div>
            </div>

            <div class="text-right">
                <button type="reset" class="uk-button uk-button-secondary">
                    Reset
                </button>
                <button type="submit" class="uk-button uk-button-primary">
                    Submit
                </button>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            comment: "",
            email: "",
            name: "",
            phone: "",
            phoneMask: "(###) ### - ####"
        };
    },
    methods: {
        isValidEmailAddress(email) {
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(String(email).toLowerCase());
        },
        sendMail: e => {
            emailjs
                .sendForm(
                    "contact_saervice",
                    "template_contact",
                    e.target,
                    "user_DzeWQEkby1pHQC3E8FiDg"
                )
                .then(
                    result => {
                        console.log("SUCCESS!", response.status, response.text);
                    },
                    error => {
                        console.log("FAILED...", error);
                    }
                );
        },
        onReset() {
            (this.comment = ""),
                (this.email = ""),
                (this.name = ""),
                (this.phone = "");
        }
    }
};
</script>

<style></style>
