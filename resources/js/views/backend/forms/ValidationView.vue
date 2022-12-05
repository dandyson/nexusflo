<script setup>
import { reactive, computed } from "vue";

// Vuelidate, for more info and examples you can check out https://github.com/vuelidate/vuelidate
import useVuelidate from "@vuelidate/core";
import {
  required,
  minLength,
  between,
  email,
  decimal,
  integer,
  url,
  sameAs,
} from "@vuelidate/validators";

// Example options for select
const options = reactive([
  { value: null, text: "Please select" },
  { value: "html", text: "HTML" },
  { value: "css", text: "CSS" },
  { value: "javascript", text: "JavaScript" },
  { value: "angular", text: "Angular" },
  { value: "react", text: "React" },
  { value: "vuejs", text: "Vue.js" },
  { value: "ruby", text: "Ruby" },
  { value: "php", text: "PHP" },
  { value: "asp", text: "ASP.NET" },
  { value: "python", text: "Python" },
  { value: "mysql", text: "MySQL" },
]);

// Input state variables
const state = reactive({
  username: null,
  email: null,
  password: null,
  confirmPassword: null,
  suggestions: null,
  skill: null,
  currency: null,
  website: null,
  digits: null,
  number: null,
  range: null,
  terms: null,
});

// Validation rules
const rules = computed(() => {
  return {
    username: {
      required,
      minLength: minLength(3),
    },
    email: {
      required,
      email,
    },
    password: {
      required,
      minLength: minLength(5),
    },
    confirmPassword: {
      required,
      sameAs: sameAs(state.password),
    },
    suggestions: {
      required,
      minLength: minLength(3),
    },
    skill: {
      required,
    },
    currency: {
      required,
      decimal,
    },
    website: {
      required,
      url,
    },
    digits: {
      required,
      integer,
    },
    number: {
      required,
      decimal,
    },
    range: {
      required,
      between: between(1, 5),
    },
    terms: {
      sameAs: sameAs(true),
    },
  };
});

// Use vuelidate
const v$ = useVuelidate(rules, state);

// On form submission
async function onSubmit() {
  const result = await v$.value.$validate();

  if (!result) {
    // notify user form is invalid
    return;
  }

  // perform async actions
}
</script>

<template>
  <!-- Hero -->
  <BasePageHeading
    title="Form Validation"
    subtitle="It’s never been easier to validate form values."
  >
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Forms</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Validation</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <form @submit.prevent="onSubmit">
      <BaseBlock title="Validation Form" content-full>
        <!-- Regular -->
        <h2 class="content-heading border-bottom mb-4 pb-2">Regular</h2>
        <div class="row items-push">
          <div class="col-lg-4">
            <p class="fs-sm text-muted">
              Username, email and password validation made easy for your
              login/register forms
            </p>
          </div>
          <div class="col-lg-8 col-xl-5">
            <div class="mb-4">
              <label class="form-label" for="val-username"
                >Username <span class="text-danger">*</span></label
              >
              <input
                type="text"
                id="val-username"
                class="form-control"
                :class="{
                  'is-invalid': v$.username.$errors.length,
                }"
                v-model="state.username"
                @blur="v$.username.$touch"
                placeholder="Enter a username.."
              />
              <div
                v-if="v$.username.$errors.length"
                class="invalid-feedback animated fadeIn"
              >
                Please enter a username
              </div>
            </div>
            <div class="mb-4">
              <label class="form-label" for="val-email"
                >Email <span class="text-danger">*</span></label
              >
              <input
                type="text"
                id="val-email"
                class="form-control"
                :class="{
                  'is-invalid': v$.email.$errors.length,
                }"
                v-model="state.email"
                @blur="v$.email.$touch"
                placeholder="Your valid email.."
              />
              <div
                v-if="v$.email.$errors.length"
                class="invalid-feedback animated fadeIn"
              >
                Please enter a valid email address
              </div>
            </div>
            <div class="mb-4">
              <label class="form-label" for="val-password"
                >Password <span class="text-danger">*</span></label
              >
              <input
                type="password"
                id="val-password"
                class="form-control"
                :class="{
                  'is-invalid': v$.password.$errors.length,
                }"
                v-model="state.password"
                @blur="v$.password.$touch"
                placeholder="Choose a safe one.."
              />
              <div
                v-if="v$.password.$errors.length"
                class="invalid-feedback animated fadeIn"
              >
                Please provide a password
              </div>
            </div>
            <div class="mb-4">
              <label class="form-label" for="val-confirm-password"
                >Confirm Password <span class="text-danger">*</span></label
              >
              <input
                type="password"
                id="val-confirm-password"
                class="form-control"
                :class="{
                  'is-invalid': v$.confirmPassword.$errors.length,
                }"
                v-model="state.confirmPassword"
                @blur="v$.confirmPassword.$touch"
                placeholder="..and confirm it!"
              />
              <div
                v-if="v$.confirmPassword.$errors.length"
                class="invalid-feedback animated fadeIn"
              >
                Please confirm the password
              </div>
            </div>
          </div>
        </div>
        <!-- END Regular -->

        <!-- Advanced -->
        <h2 class="content-heading border-bottom mb-4 pb-2">Advanced</h2>
        <div class="row items-push">
          <div class="col-lg-4">
            <p class="fs-sm text-muted">
              You can easily validate any kind of data you like either it is in
              a normal input, a textarea or a select box
            </p>
          </div>
          <div class="col-lg-8 col-xl-5">
            <div class="mb-4">
              <label class="form-label" for="val-suggestions"
                >Suggestions <span class="text-danger">*</span></label
              >
              <textarea
                id="val-suggestions"
                class="form-control"
                :class="{
                  'is-invalid': v$.suggestions.$errors.length,
                }"
                rows="5"
                v-model="state.suggestions"
                @blur="v$.suggestions.$touch"
                placeholder="What would you like to see?"
              ></textarea>
              <div
                v-if="v$.suggestions.$errors.length"
                class="invalid-feedback animated fadeIn"
              >
                What can we do to become better?
              </div>
            </div>
            <div class="mb-4">
              <label class="form-label" for="val-skill"
                >Best Skill <span class="text-danger">*</span></label
              >
              <select
                id="val-skill"
                class="form-select"
                :class="{
                  'is-invalid': v$.skill.$errors.length,
                }"
                v-model="state.skill"
                @blur="v$.skill.$touch"
              >
                <option
                  v-for="(option, index) in options"
                  :value="option.value"
                  :key="`option-${index}`"
                >
                  {{ option.text }}
                </option>
              </select>
              <div
                v-if="v$.skill.$errors.length"
                class="invalid-feedback animated fadeIn"
              >
                Please select a skill!
              </div>
            </div>
            <div class="mb-4">
              <label class="form-label" for="val-currency"
                >Currency (USD) <span class="text-danger">*</span></label
              >
              <input
                type="text"
                id="val-currency"
                class="form-control"
                :class="{
                  'is-invalid': v$.currency.$errors.length,
                }"
                v-model="state.currency"
                @blur="v$.currency.$touch"
                placeholder="21.60"
              />
              <div
                v-if="v$.currency.$errors.length"
                class="invalid-feedback animated fadeIn"
              >
                Please enter a price!
              </div>
            </div>
            <div class="mb-4">
              <label class="form-label" for="val-website"
                >Website <span class="text-danger">*</span></label
              >
              <input
                type="text"
                id="val-website"
                class="form-control"
                :class="{
                  'is-invalid': v$.website.$errors.length,
                }"
                v-model="state.website"
                @blur="v$.website.$touch"
                placeholder="https://example.com"
              />
              <div
                v-if="v$.website.$errors.length"
                class="invalid-feedback animated fadeIn"
              >
                Please enter your website!
              </div>
            </div>
            <div class="mb-4">
              <label class="form-label" for="val-digits"
                >Digits <span class="text-danger">*</span></label
              >
              <input
                type="text"
                id="val-digits"
                class="form-control"
                :class="{
                  'is-invalid': v$.digits.$errors.length,
                }"
                v-model="state.digits"
                @blur="v$.digits.$touch"
                placeholder="5"
              />
              <div
                v-if="v$.digits.$errors.length"
                class="invalid-feedback animated fadeIn"
              >
                Please enter only digits!
              </div>
            </div>
            <div class="mb-4">
              <label class="form-label" for="val-number"
                >Number <span class="text-danger">*</span></label
              >
              <input
                type="text"
                id="val-number"
                class="form-control"
                :class="{
                  'is-invalid': v$.number.$errors.length,
                }"
                v-model="state.number"
                @blur="v$.number.$touch"
                placeholder="5.0"
              />
              <div
                v-if="v$.number.$errors.length"
                class="invalid-feedback animated fadeIn"
              >
                Please enter a number!
              </div>
            </div>
            <div class="mb-4">
              <label class="form-label" for="val-range"
                >Range [1, 5] <span class="text-danger">*</span></label
              >
              <input
                type="text"
                id="val-range"
                class="form-control"
                :class="{
                  'is-invalid': v$.range.$errors.length,
                }"
                v-model="state.range"
                @blur="v$.range.$touch"
                placeholder="4"
              />
              <div
                v-if="v$.range.$errors.length"
                class="invalid-feedback animated fadeIn"
              >
                Please enter a number between 1 and 5!
              </div>
            </div>
            <div class="mb-4">
              <label class="form-label">Terms &amp; Conditions</label>
              <span class="text-danger">*</span>
              <div
                class="form-check"
                :class="{
                  'is-invalid': v$.terms.$errors.length,
                }"
              >
                <input
                  class="form-check-input"
                  type="checkbox"
                  id="val-terms"
                  :class="{
                    'is-invalid': v$.terms.$errors.length,
                  }"
                  v-model="state.terms"
                  @blur="v$.terms.$touch"
                />
                <label class="form-check-label" for="val-terms">I agree</label>
              </div>
              <div
                v-if="v$.terms.$errors.length"
                class="invalid-feedback animated fadeIn"
              >
                You must agree to the service terms!
              </div>
            </div>
          </div>
        </div>
        <!-- END Advanced -->

        <!-- Submit -->
        <div class="row items-push">
          <div class="col-lg-7 offset-lg-4">
            <button type="submit" class="btn btn-alt-primary">Submit</button>
          </div>
        </div>
        <!-- END Submit -->
      </BaseBlock>
    </form>
  </div>
  <!-- END Page Content -->
</template>
