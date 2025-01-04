<template>
  <div class="bg-primary-dark">
    <div class="row g-0 bg-primary-dark-op">
      <div class="hero-static col-lg-4 d-none d-lg-flex flex-column justify-content-center">
        <div class="p-4 p-xl-5 flex-grow-1 d-flex align-items-center">
          <div class="w-100">
            <RouterLink :to="{ name: 'landing' }" class="link-fx fw-semibold fs-2 text-white">
              <img class="img-fluid me-2" src="/assets/media/logos/logo.svg" alt="Logo" width="40" />
              Nexus<span class="fw-normal">Flo</span>
            </RouterLink>
            <p class="text-white-75 me-xl-8 mt-2">
              “Be happy in the moment, that's enough. Each moment is all we need, not more.”
            </p>
          </div>
        </div>
        <div class="p-4 p-xl-5 d-xl-flex justify-content-between align-items-center fs-sm">
          <p class="fw-medium text-white-50 mb-0">
            <strong>{{ store.app.name + " " + store.app.version }}</strong>
            &copy; {{ store.app.copyright }}
          </p>
        </div>
      </div>
      <div class="hero-static col-lg-8 d-flex flex-column align-items-center bg-body-extra-light">
        <div class="p-3 w-100 d-lg-none text-center">
          <RouterLink :to="{ name: 'landing' }" class="link-fx fw-semibold fs-3 text-dark">
            Nexus<span class="fw-normal">Flo</span>
          </RouterLink>
        </div>
        <div class="p-4 w-100 flex-grow-1 d-flex align-items-center">
          <div class="w-100">
            <div class="text-center mb-5">
              <p class="mb-3">
                <img class="img-fluid" src="/assets/media/logos/logo.svg" alt="Logo" width="70" />
              </p>
              <h1 class="fw-bold mb-2">Reset Your Password</h1>
              <p class="fw-medium text-muted">
                Reset your password in one easy step
              </p>
            </div>
            <div class="row g-0 justify-content-center">
              <div class="col-sm-8 col-xl-4">
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
                      :class="{'is-invalid': v$.password.$errors.length}"
                      v-model="state.password"
                      @blur="v$.password.$touch"
                    />
                    <div v-if="v$.password.$errors.length" class="invalid-feedback animated fadeIn">
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
                      :class="{'is-invalid': v$.password_confirmation.$errors.length}"
                      v-model="state.password_confirmation"
                      @blur="v$.password_confirmation.$touch"
                    />
                    <div v-if="v$.password_confirmation.$errors.length" class="invalid-feedback animated fadeIn">
                      Please confirm the password
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-lg btn-alt-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="px-4 py-3 w-100 d-lg-none d-flex flex-column flex-sm-row justify-content-between fs-sm text-center text-sm-start">
          <p class="fw-medium text-black-50 py-2 mb-0">
            <strong>{{ store.app.name + " " + store.app.version }}</strong>
            &copy; {{ store.app.copyright }}
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { reactive, computed, ref, onMounted } from 'vue';
import { useRoute, useRouter } from 'vue-router';
import { useTemplateStore } from "@/stores/template";
import useVuelidate from '@vuelidate/core';
import { required, minLength, sameAs } from '@vuelidate/validators';
import axios from 'axios';
import Swal from 'sweetalert2';

const store = useTemplateStore();
const route = useRoute();
const router = useRouter();

const token = ref(route.params.token);
const email = ref(route.query.email);

const state = reactive({
  password: '',
  password_confirmation: '',
});

const rules = computed(() => ({
  password: { required, minLength: minLength(8) },
  password_confirmation: { required, sameAs: sameAs(state.password) },
}));

const v$ = useVuelidate(rules, state);

const error = ref(false);
const errorMessage = ref('');

onMounted(() => {
  if (!token.value || !email.value) {
    error.value = true;
    errorMessage.value = 'Invalid or missing token/email.';
  }
});

async function onSubmit() {
  if (!token.value || !email.value) {
    error.value = true;
    errorMessage.value = 'Invalid or missing token/email.';
    return;
  }

  const result = await v$.value.$validate();
  if (!result) return;

  try {
    await axios.post('/api/reset-password', {
      email: email.value,
      password: state.password,
      password_confirmation: state.password_confirmation,
      token: token.value,
    });

    Swal.fire({
      icon: 'success',
      title: 'Password Reset Successfully',
      text: 'Please login to access your account',
    }).then(() => router.push({ name: 'login' }));
  } catch (err) {
    error.value = true;
    errorMessage.value = err.response?.data?.message || 'There has been an error, please try again';
  }
}
</script>
