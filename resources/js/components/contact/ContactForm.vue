<template>
    <div>
        <h3 class="playball green-text mt-12 mb-4">Get in touch with us!</h3>
        <form
            ref="contactForm"
            @submit.prevent="sendMail()"
            @reset="onReset"
            class="uk-form-stacked uk-dark"
        >
            <div class="uk-margin">
                <div
                    :class="`uk-form-controls uk-validation ${$v.name.$error}`"
                >
                    <label class="uk-form-label" for="form-stacked-text"
                        >Name</label
                    >
                    <input
                        class="uk-input"
                        type="text"
                        autofocus
                        v-model.trim="name"
                        name="user_name"
                        @blur="setName($event.target.value)"
                    />
                </div>
                <div v-if="$v.name.$error" class="form-error">
                    <span v-if="!$v.name.required" class="help is-danger"
                        >Name is required</span
                    >
                </div>
            </div>

            <div class="uk-margin">
                <div
                    :class="`uk-form-controls uk-validation ${$v.email.$error}`"
                >
                    <label class="uk-form-label" for="form-stacked-text"
                        >Email</label
                    >
                    <input
                        class="uk-input"
                        type="email"
                        v-model="email"
                        name="user_email"
                        @blur="setEmail($event.target.value)"
                    />
                </div>
                <div v-if="$v.email.$error" class="form-error">
                    <span v-if="!$v.email.required" class="help is-danger"
                        >Email is required</span
                    >
                    <span v-if="!$v.email.email" class="help is-danger"
                        >Email must be valid</span
                    >
                </div>
            </div>

            <div class="uk-margin">
                <div class="uk-form-controls">
                    <label class="uk-form-label" for="form-stacked-text"
                        >Phone</label
                    >
                    <input
                        class="uk-input"
                        type="phone"
                        v-model="phone"
                        name="user_phone"
                    />
                </div>
            </div>

            <div class="uk-margin">
                <div
                    :class="
                        `uk-form-controls uk-validation ${$v.comment.$error}`
                    "
                >
                    <label class="uk-form-label" for="form-stacked-text"
                        >Comment</label
                    >
                    <textarea
                        class="uk-textarea"
                        v-model="comment"
                        label="Message *"
                        name="message"
                        rows="10"
                        @blur="setComment($event.target.value)"
                    ></textarea>
                </div>
                <div v-if="$v.comment.$error" class="form-error">
                    <span v-if="!$v.comment.required" class="help is-danger"
                        >Comment is required</span
                    >
                </div>
            </div>

            <div class="text-right">
                <button
                    type="reset"
                    class="uk-button uk-button-secondary uk-button-small"
                >
                    Reset
                </button>
                <button
                    type="submit"
                    class="uk-button uk-button-primary uk-button-small"
                    :disabled="
                        $v.name.$invalid ||
                            $v.email.$invalid ||
                            $v.comment.$invalid
                    "
                >
                    Submit
                </button>
            </div>
        </form>
    </div>
</template>

<script>
import emailjs from "emailjs-com";
import Vue from "vue";
import Vuelidate from "vuelidate";
Vue.use(Vuelidate);

import { required, email } from "vuelidate/lib/validators";

export default {
    data() {
        return {
            errors: [],
            comment: "",
            email: "",
            name: "",
            phone: "",
            proceed: false
        };
    },
    validations: {
        name: {
            required
        },
        email: {
            required,
            email
        },
        comment: {
            required
        }
    },
    methods: {
        setName(value) {
            this.name = value;
            this.$v.name.$touch();
        },
        setEmail(value) {
            this.email = value;
            this.$v.email.$touch();
        },
        setComment(value) {
            this.comment = value;
            this.$v.comment.$touch();
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
            (this.comment = null),
                (this.email = null),
                (this.name = null),
                (this.phone = null);
        }
    }
};
</script>

<style></style>
