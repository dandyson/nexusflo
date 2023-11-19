<script setup>
import { reactive, computed, ref } from "vue";
import { useRouter } from "vue-router";
import { useTemplateStore } from "@/stores/template";

// Vuelidate, for more info and examples you can check out https://github.com/vuelidate/vuelidate
import useVuelidate from "@vuelidate/core";
import { required, minLength, sameAs } from "@vuelidate/validators";

// Axios
import axios from "axios";

// Sweetalerts
import Swal from "sweetalert2";

// Main store and Router
const store = useTemplateStore();
const router = useRouter();

// Input state variables
const state = reactive({
  password: null,
  password_confirmation: null,
});

// Validation rules
const rules = computed(() => {
  return {
    password: {
      required,
      minLength: minLength(8),
    },
    password_confirmation: {
      required,
      sameAs: sameAs(state.password),
    },
  };
});

// Props
const { token, email } = defineProps(['token', 'email']);

// Use vuelidate
const v$ = useVuelidate(rules, state);

// Custom Error
let error = ref(false);
let errorMessage = ref('');

// On form submission
async function onSubmit() {
  const result = await v$.value.$validate();

  if (!result) {
    // notify user form is invalid
    return;
  }

  try {
    await axios.post('/api/reset-password', {
      'email': email,
      'password': state.password,
      'password_confirmation': state.password_confirmation,
      'token': token,
    }, {
      headers: {
        "Content-Type": "application/json",
      },
    });

    Swal.fire({
        icon: 'success',
        title: 'Password Reset Successfully',
        text: 'Please login to access your account',
        showConfirmButton: true,
      }).then(() => {
        // Go to login
        router.push({ name: "auth-signin3" });
      })
    } catch (error) {
      store.setLoading(false);
      error.value = true;
      errorMessage.value = 
      error.response?.data?.message !== undefined ? 
      error.response.data.message : 
      'There has been an error, please try again';
    }
  

}
</script>

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
                  class="img-fluid"
                  src="/assets/media/logos/logo.svg"
                  alt="Logo"
                  width="70"
                />
              </p>
              <h1 class="fw-bold mb-2">Reset Your Password</h1>
              <p class="fw-medium text-muted">
                Reset your password in one easy step
              </p>
            </div>
            <!-- END Header -->

            <!-- Sign Up Form -->
            <div class="row g-0 justify-content-center">
              <div class="col-sm-8 col-xl-4">
                <!-- Error alert if any exist -->
                <div v-if="error" class="alert alert-danger" role="alert">
                  {{ errorMessage }}
                </div>
                <form @submit.prevent="onSubmit">
                  <div class="mb-4">
                    <input
                      type="password"
                      class="form-control form-control-lg form-control-alt py-3"
                      id="signup-password"
                      name="signup-password"
                      placeholder="Password"
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
                  <div class="text-center">
                    <button type="submit" class="btn btn-lg btn-alt-primary">
                      Submit
                    </button>
                  </div>
                </form>
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
                  Dolor posuere proin blandit accumsan senectus netus nullam
                  curae, ornare laoreet adipiscing luctus mauris adipiscing
                  pretium eget fermentum, tristique lobortis est ut metus
                  lobortis tortor tincidunt himenaeos habitant quis dictumst
                  proin odio sagittis purus mi, nec taciti vestibulum quis in
                  sit varius lorem sit metus mi.
                </p>
                <p>
                  Dolor posuere proin blandit accumsan senectus netus nullam
                  curae, ornare laoreet adipiscing luctus mauris adipiscing
                  pretium eget fermentum, tristique lobortis est ut metus
                  lobortis tortor tincidunt himenaeos habitant quis dictumst
                  proin odio sagittis purus mi, nec taciti vestibulum quis in
                  sit varius lorem sit metus mi.
                </p>
                <p>
                  Dolor posuere proin blandit accumsan senectus netus nullam
                  curae, ornare laoreet adipiscing luctus mauris adipiscing
                  pretium eget fermentum, tristique lobortis est ut metus
                  lobortis tortor tincidunt himenaeos habitant quis dictumst
                  proin odio sagittis purus mi, nec taciti vestibulum quis in
                  sit varius lorem sit metus mi.
                </p>
                <p>
                  Dolor posuere proin blandit accumsan senectus netus nullam
                  curae, ornare laoreet adipiscing luctus mauris adipiscing
                  pretium eget fermentum, tristique lobortis est ut metus
                  lobortis tortor tincidunt himenaeos habitant quis dictumst
                  proin odio sagittis purus mi, nec taciti vestibulum quis in
                  sit varius lorem sit metus mi.
                </p>
                <p>
                  Dolor posuere proin blandit accumsan senectus netus nullam
                  curae, ornare laoreet adipiscing luctus mauris adipiscing
                  pretium eget fermentum, tristique lobortis est ut metus
                  lobortis tortor tincidunt himenaeos habitant quis dictumst
                  proin odio sagittis purus mi, nec taciti vestibulum quis in
                  sit varius lorem sit metus mi.
                </p>
                <p>
                  Dolor posuere proin blandit accumsan senectus netus nullam
                  curae, ornare laoreet adipiscing luctus mauris adipiscing
                  pretium eget fermentum, tristique lobortis est ut metus
                  lobortis tortor tincidunt himenaeos habitant quis dictumst
                  proin odio sagittis purus mi, nec taciti vestibulum quis in
                  sit varius lorem sit metus mi.
                </p>
              </div>
              <div class="block-content block-content-full text-end bg-body">
                <button
                  type="button"
                  class="btn btn-sm btn-alt-secondary me-1"
                  data-bs-dismiss="modal"
                >
                  Close
                </button>
                <button
                  type="button"
                  class="btn btn-sm btn-primary"
                  data-bs-dismiss="modal"
                >
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
