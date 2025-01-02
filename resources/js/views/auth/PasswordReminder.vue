<template>
  <!-- Page Content -->
  <BaseBackground image="/assets/media/photos/photo28@2x.jpg">
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
              “Be happy in the moment, that's enough. Each moment is all we need, not more.”
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
                class="img-fluid me-2"
                src="/assets/media/logos/logo.svg"
                alt="Logo"
                width="70"
              />
              </p>
              <h1 class="fw-bold mb-2">Password Reset</h1>
              <p class="fw-medium text-muted">
                Please provide your account’s email address and we will send
                you your password.
              </p>
            </div>
            <!-- END Header -->

            <!-- email Form -->
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
                      id="email-credential"
                      name="email-credential"
                      placeholder="Username or Email"
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
                      Please enter a valid credential
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-lg btn-alt-primary">
                      <i class="fa fa-fw fa-envelope me-1 opacity-50"></i> Submit
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <!-- END email Form -->
          </div>
        </div>
        <div
          class="px-4 py-3 w-100 d-lg-none d-flex flex-column flex-sm-row justify-content-between fs-sm text-center text-sm-start"
        >
          <p class="fw-medium text-black-50 py-2 mb-0">
            <strong>{{ store.app.name + " " + store.app.version }}</strong>
            &copy; {{ store.app.copyright }}
          </p>
          <ul class="list list-inline py-2 mb-0">
            <li class="list-inline-item">
              <a class="text-muted fw-medium" href="javascript:void(0)"
                >Legal</a
              >
            </li>
            <li class="list-inline-item">
              <a class="text-muted fw-medium" href="javascript:void(0)"
                >Contact</a
              >
            </li>
            <li class="list-inline-item">
              <a class="text-muted fw-medium" href="javascript:void(0)"
                >Terms</a
              >
            </li>
          </ul>
        </div>
      </div>
      <!-- END Main Section -->
    </div>
  </BaseBackground>
  <!-- END Page Content -->
</template>

<script setup>
import { reactive, computed, ref } from "vue";
import { useRouter } from "vue-router";
import { useTemplateStore } from "@/stores/template";

// Vuelidate, for more info and examples you can check out https://github.com/vuelidate/vuelidate
import useVuelidate from "@vuelidate/core";
import { required, minLength } from "@vuelidate/validators";
import axios from "axios";
import Swal from "sweetalert2";

// Main store and Router
const store = useTemplateStore();
const router = useRouter();

// Input state variables
const state = reactive({
  email: null,
});

// Validation rules
const rules = computed(() => {
  return {
    email: {
      required,
      minLength: minLength(3),
    },
  };
});

// Use vuelidate
const v$ = useVuelidate(rules, state);

// Custom Error
let credentialError = ref(false);
let credentialErrorMessage = ref('');

// On form submission
async function onSubmit() {
  const result = await v$.value.$validate();

  if (!result) {
    // notify user form is invalid
    return;
  }

  try {
    axios.get('sanctum/csrf-cookie')
      .then((res) => {
        axios.post('/api/forgot-password', state, {
          headers: {
            "Content-Type": "application/json",
          },
        }).then(() => {
          Swal.fire({
            icon: 'success',
            title: 'Sent',
            text: 'Please check your email for the reset password link!',
            showConfirmButton: true,
          }).then(() => {
            // Go to Login
            router.push({ name: "login" });
          })
        }).catch((routeError) => {
          credentialError.value = true;
          credentialErrorMessage.value =
          routeError.response?.data?.message !== undefined ?
          routeError.response.data.message :
          'There has been an error, please try again';
        })
      });
  } catch (error) {
    store.setLoading(false);
    credentialError.value = true;
    credentialErrorMessage.value =
    error.response?.data?.message !== undefined ?
    error.response.data.message :
    'There has been an error, please try again';
  }
}
</script>