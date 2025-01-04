<template>
  <!-- Page Content -->
  <div class="bg-primary-dark">
    <div class="row g-0 bg-primary-dark-op">
      <!-- Meta Info Section -->
      <div
        class="hero-static col-lg-4 d-none d-lg-flex flex-column justify-content-center"
      >
        <div class="p-4 p-xl-5 flex-grow-1 d-flex align-items-center">
          <div class="w-100">
            <RouterLink
              :to="{ name: 'landing' }"
              class="link-fx fw-semibold fs-2 text-white"
            >
            <img
              class="img-fluid me-2"
              src="/assets/media/logos/logo.svg"
              alt="Logo"
              width="40"
            />
          Nexus<span class="fw-normal">Flo</span>
            </RouterLink>
            <p class="text-white-75 me-xl-8 mt-2">
              Creating a new account is completely free. Get started today!
            </p>
          </div>
        </div>
        <div
          class="p-4 p-xl-5 d-xl-flex justify-content-between align-items-center fs-sm"
        >
          <p class="fw-medium text-white-50 mb-0">
            <strong>{{ store.app.name + " " + store.app.version }}</strong>
            &copy; {{ store.app.copyright }}
          </p>
          <RouterLink :to="{ name: 'privacy-policy' }" class="text-white-50 fw-bold text-decoration-underline">
            Privacy Policy
          </RouterLink>
        </div>
      </div>
      <!-- END Meta Info Section -->

      <!-- Main Section -->
      <div
        class="hero-static col-lg-8 d-flex flex-column align-items-center bg-body-extra-light"
      >
        <div class="p-3 w-100 d-lg-none text-center">
          <RouterLink
            :to="{ name: 'landing' }"
            class="link-fx fw-semibold fs-3 text-dark"
          >
            Nexus<span class="fw-normal">Flo</span>
          </RouterLink>
        </div>
        <div class="p-4 w-100 flex-grow-1 d-flex align-items-center">
          <div class="w-100">
            <!-- Header -->
            <div class="text-center mb-5">
              <p class="mb-3">
                <img
                  class="img-fluid"
                  src="/assets/media/logos/logo.svg"
                  alt="Logo"
                  width="70"
                />
              </p>
              <h1 class="fw-bold mb-2">Create Account</h1>
              <p class="fw-medium text-muted">
                Get your access today in one easy step
              </p>
            </div>
            <!-- END Header -->

            <!-- Sign Up Form -->
            <div class="row g-0 justify-content-center">
              <div class="col-sm-8 col-xl-4">
                <!-- Error alert for incorrect credentials -->
                <div v-if="credentialError" class="alert alert-danger" role="alert">
                  {{ credentialErrorMessage }}
                </div>
                <form @submit.prevent="onSubmit">
                  <div class="mb-4">
                    <input
                      type="text"
                      class="form-control form-control-lg form-control-alt py-3"
                      id="signup-name"
                      name="signup-name"
                      placeholder="Full Name"
                      autocomplete="name"
                      :class="{
                        'is-invalid': v$.name.$errors.length,
                      }"
                      v-model="state.name"
                      @blur="v$.name.$touch"
                    />
                    <div
                      v-if="v$.name.$errors.length"
                      class="invalid-feedback animated fadeIn"
                    >
                      Please enter your name
                    </div>
                  </div>
                  <div class="mb-4">
                    <input
                      type="email"
                      class="form-control form-control-lg form-control-alt py-3"
                      id="signup-email"
                      name="signup-email"
                      placeholder="Email"
                      autocomplete="email"
                      :class="{
                        'is-invalid': v$.email.$errors.length,
                      }"
                      v-model="state.email"
                      @blur="v$.email.$touch"
                    />
                    <div
                      v-if="v$.email.$errors.length"
                      class="invalid-feedback animated fadeIn"
                    >
                      Please enter a valid email address
                    </div>
                  </div>
                  <div class="mb-4">
                    <input
                      type="password"
                      class="form-control form-control-lg form-control-alt py-3"
                      id="signup-password"
                      name="signup-password"
                      placeholder="Password"
                      autocomplete="new-password"
                      :class="{
                        'is-invalid': v$.password.$errors.length,
                      }"
                      v-model="state.password"
                      @blur="v$.password.$touch"
                    />
                    <div
                      v-if="v$.password.$errors.length"
                      class="invalid-feedback animated fadeIn"
                    >
                      Please provide a password
                    </div>
                  </div>
                  <div class="mb-4">
                    <input
                      type="password"
                      class="form-control form-control-lg form-control-alt py-3"
                      id="password-confirmation"
                      name="password_confirmation"
                      placeholder="Confirm Password"
                      autocomplete="new-password"
                      :class="{
                        'is-invalid': v$.password_confirmation.$errors.length,
                      }"
                      v-model="state.password_confirmation"
                      @blur="v$.password_confirmation.$touch"
                    />
                    <div
                      v-if="v$.password_confirmation.$errors.length"
                      class="invalid-feedback animated fadeIn"
                    >
                      Please confirm the password
                    </div>
                  </div>
                  <div class="mb-4">
                    <div
                      class="d-md-flex align-items-md-center justify-content-md-between"
                    >
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          id="signup-terms"
                          name="signup-terms"
                          :class="{
                            'is-invalid': v$.terms.$errors.length,
                          }"
                          v-model="state.terms"
                          @blur="v$.terms.$touch"
                        />
                        <label class="form-check-label" for="signup-terms"
                          >I agree to Terms &amp; Conditions</label
                        >
                        <div
                          v-if="v$.terms.$errors.length"
                          class="invalid-feedback animated fadeIn"
                        >
                          You must agree to the service terms!
                        </div>
                      </div>
                      <div class="py-2">
                        <a
                          class="fs-sm fw-medium"
                          href="javascript:void(0)"
                          data-bs-toggle="modal"
                          data-bs-target="#one-signup-terms"
                          >View Terms</a
                        >
                      </div>
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-lg btn-alt-success">
                      <i class="fa fa-fw fa-plus me-1 opacity-50"></i> Sign Up
                    </button>
                  </div>
                </form>
              </div>
              <!-- Cookie notice -->
              <div class="text-center my-3 px-4 px-md-6">
                  <small class="text-muted">
                      We use essential cookies for session management and security. By using NexusFlo, you agree to these cookies.
                      <RouterLink :to="{ name: 'privacy-policy' }" class="text-primary fw-bold">
                        See our Privacy Policy for details.
                      </RouterLink>
                </small>
              </div>
            </div>
            <!-- END Sign Up Form -->
          </div>
        </div>
        <div
          class="px-4 py-3 w-100 d-lg-none d-flex flex-column flex-sm-row justify-content-between fs-sm text-center text-sm-start"
        >
          <p class="fw-medium text-black-50 py-2 mb-0">
            <strong>{{ store.app.name + " " + store.app.version }}</strong>
            &copy; {{ store.app.copyright }}
          </p>
        </div>
      </div>
      <!-- END Main Section -->
    </div>

    <!-- Terms Modal -->
<div
  class="modal fade"
  id="one-signup-terms"
  tabindex="-1"
  role="dialog"
  aria-labelledby="one-signup-terms"
  aria-hidden="true"
>
  <div class="modal-dialog modal-lg modal-dialog-popout" role="document">
    <div class="modal-content">
      <BaseBlock title="Terms &amp; Conditions" transparent class="mb-0">
        <template #options>
          <button
            type="button"
            class="btn-block-option"
            data-bs-dismiss="modal"
            aria-label="Close"
          >
            <i class="fa fa-fw fa-times"></i>
          </button>
        </template>

        <template #content>
            <div class="block-content">
                <p>
                    <strong>Terms & Conditions: NexusFlo Wellbeing App</strong>
                </p>
                <p>
                    <strong>Introduction:</strong><br>
                    Welcome to NexusFlo Wellbeing App. By using this app, you agree to comply with and
                    be bound by the following terms and conditions. NexusFlo is a demo app designed to
                    showcase portfolio work and is not intended for commercial use.
                </p>
                <p>
                    <strong>Ownership:</strong><br>
                    NexusFlo is the intellectual property of Daniel Dyson. All rights, title, and
                    interest in and to the app are retained by Daniel Dyson.
                </p>
                <p>
                    <strong>Disclaimer:</strong><br>
                    This app is for demonstration purposes only. It is not a finished product, and data
                    stored in the app may not be protected to the standards of a production application.
                    NexusFlo is not a substitute for professional advice, diagnosis, or treatment. For
                    urgent or professional assistance, please contact a qualified mental health provider
                    or emergency services.
                </p>
                <p>
                    <strong>User Responsibilities:</strong><br>
                    Users are solely responsible for the information they choose to enter into the app,
                    including any personal or sensitive data. Users should not upload highly sensitive
                    or confidential information to the app, as it is a demo and not built for real-world
                    use.
                </p>
                <p>
                    <strong>Data Privacy and Security:</strong><br>
                    Your data is stored securely in accordance with the
                    <RouterLink target="_blank" :to="{ name: 'privacy-policy' }">Privacy Policy
                    </RouterLink>. However, as this is a demo, users should avoid storing sensitive
                    personal information. Users can request to delete their data by contacting
                    nexusfloinfo@gmail.com.
                </p>
                <p>
                    <strong>Demo Nature of the App:</strong><br>
                    NexusFlo is a demo application designed for portfolio purposes only. No personal
                    data is collected from users, and any information entered is not stored or used for
                    any real-world applications. Users are encouraged to avoid entering sensitive or
                    confidential information.
                </p>
                <p>
                    <strong>Cookies and Local Storage:</strong><br>
                    NexusFlo uses cookies to manage user sessions and enhance user experience. The
                    cookies we use include:
                <ul>
                    <li><strong>nexusflo_session</strong>: This cookie is used to maintain user
                        sessions.</li>
                    <li><strong>XSRF Token</strong>: This cookie is used for security purposes to
                        prevent cross-site request forgery.</li>
                </ul>
                </p>

                <p>Additionally, we utilize local storage to cache news stories for improved
                    performance. This allows us to store data temporarily on your device, which can
                    enhance your experience by reducing load times. Cached data may include:</p>
                <ul>
                    <li><strong>Positive News</strong> stories</li>
                    <li><strong>Good News Network</strong> stories</li>
                </ul>
                <p>You can manage your cookie preferences through your browser settings. However,
                    disabling cookies may affect your ability to use certain features of the app.
                </p>
                <p>
                    <strong>Termination:</strong><br>
                    We reserve the right to terminate or suspend access to NexusFlo if users misuse the
                    app or violate these terms.
                </p>
                <p>
                    <strong>Limitation of Liability:</strong><br>
                    NexusFlo shall not be liable for any direct, indirect, incidental, or consequential
                    damages resulting from the use or inability to use the app.
                </p>
                <p>
                    <strong>Governing Law:</strong><br>
                    These terms shall be governed by and construed in accordance with the laws of
                    England and Wales.
                </p>
                <p>
                    <strong>Updates to Terms:</strong><br>
                    These terms may be updated periodically. Users are encouraged to review them
                    regularly.
                </p>
                <p>
                    <strong>Contact Information:</strong><br>
                    If you have any questions or concerns about these terms and conditions, please
                    contact us at nexusfloinfo@gmail.com.
                </p>
                <p>
                    By using NexusFlo Wellbeing App, you acknowledge that you have read, understood, and
                    agreed to these terms and conditions.
                </p>
            </div>
            <div class="block-content block-content-full text-end bg-body">
                <button type="button" class="btn btn-sm btn-alt-secondary me-1" data-bs-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal"
                    @click="state.terms = true">
                    I Agree
                </button>
            </div>
        </template>
      </BaseBlock>
    </div>
  </div>
</div>
<!-- END Terms Modal -->

  </div>
  <!-- END Page Content -->
</template>

<script setup>
import { reactive, computed, ref, onMounted } from "vue";
import { useRouter } from "vue-router";
import { useTemplateStore } from "@/stores/template";

// Vuelidate, for more info and examples you can check out https://github.com/vuelidate/vuelidate
import useVuelidate from "@vuelidate/core";
import { required, minLength, email, sameAs } from "@vuelidate/validators";

// Axios
import axios from "axios";

// Sweetalert
import Swal from "sweetalert2";

// Main store and Router
const store = useTemplateStore();
const router = useRouter();

// Input state variables
const state = reactive({
  name: null,
  email: null,
  password: null,
  password_confirmation: null,
  terms: null,
});

// Validation rules
const rules = computed(() => {
  return {
    name: {
      required,
      minLength: minLength(3),
    },
    email: {
      required,
      email,
    },
    password: {
      required,
      minLength: minLength(8),
    },
    password_confirmation: {
      required,
      sameAs: sameAs(state.password),
    },
    terms: {
      sameAs: sameAs(true),
    },
  };
});

// Use vuelidate
const v$ = useVuelidate(rules, state);

// Custom Error
let credentialError = ref(false);
let credentialErrorMessage = ref('');

// Demo notification SWAL
onMounted(() => {
  Swal.fire({
    icon: 'warning',
    title: 'Demo Notice',
    html: 'This is a <strong>demo</strong> version of our app, so trying to sign up here will throw an error.<br><br>' +
          'To sign up and access the service, please contact us at <a href="mailto:dannydyson297@gmail.com">dannydyson297@gmail.com</a> with your email address.<br><br>' +
          'Once we have added you to our email service, you will be able to register for an account<br><br>' +
          'Thank you for your interest!',
    showConfirmButton: true,
  });
});

// On form submission
async function onSubmit() {
  const result = await v$.value.$validate();

  if (!result) {
    // notify user form is invalid
    return;
  }

    /** TODO: Manually setting the loading to true here, as the 'setLoading' stuff in the router file
   * only responds once this request is completed - so this is more for the UX so the user does not
   * think the app is frozen. Need to find another way of doing this maybe?
   * **/
  store.setLoading(true);

  try {
    // Register the user
    await axios.post('/api/register', state, {
      headers: {
        "Content-Type": "application/json",
      },
    });

    // Login succeeded, proceed to the email verify page
    router.push({ name: "verify-email" });
  } catch (error) {
    store.setLoading(false);
    credentialError.value = true;
    credentialErrorMessage.value = 'There has been an error, please try again';
  }
}
</script>
