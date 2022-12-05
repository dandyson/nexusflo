<script setup>
import { reactive, computed } from "vue";
import { useRouter } from "vue-router";
import { useTemplateStore } from "@/stores/template";

// Vuelidate, for more info and examples you can check out https://github.com/vuelidate/vuelidate
import useVuelidate from "@vuelidate/core";
import { required, minLength } from "@vuelidate/validators";

// Main store and Router
const store = useTemplateStore();
const router = useRouter();

// Input state variables
const state = reactive({
  password: null,
});

// Validation rules
const rules = computed(() => {
  return {
    password: {
      required,
      minLength: minLength(5),
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

  // Go to dashboard
  router.push({ name: "backend-pages-auth" });
}
</script>

<template>
  <!-- Page Content -->
  <BaseBackground image="/assets/media/photos/photo14@2x.jpg">
    <div class="hero-static d-flex align-items-center">
      <div class="w-100 bg-body-extra-light">
        <div class="content content-full">
          <!-- Unlock Section -->
          <div class="row g-0 justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-4 py-4 px-4 px-lg-5">
              <!-- Header -->
              <div class="text-center">
                <p class="mb-2">
                  <i class="fa fa-2x fa-circle-notch text-primary"></i>
                </p>
                <h1 class="h4 mb-1">Account Locked</h1>
                <p class="fw-medium text-muted mb-5">
                  Please enter your password to unlock your account
                </p>
                <img
                  class="img-avatar img-avatar96"
                  src="/assets/media/avatars/avatar10.jpg"
                  alt=""
                />
                <p class="fw-semibold text-center my-2">user@example.com</p>
              </div>
              <!-- END Header -->

              <!-- Unlock Form -->
              <form @submit.prevent="onSubmit">
                <div class="mb-4">
                  <input
                    type="password"
                    class="form-control form-control-lg form-control-alt"
                    id="lock-password"
                    name="lock-password"
                    placeholder="Password.."
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
                    Please enter your password
                  </div>
                </div>
                <div class="row justify-content-center mb-4">
                  <div class="col-lg-6 col-xxl-5">
                    <button type="submit" class="btn w-100 btn-alt-success">
                      <i class="fa fa-fw fa-lock-open me-1 opacity-50"></i>
                      Unlock
                    </button>
                  </div>
                </div>
              </form>
              <!-- END Unlock Form -->
            </div>
          </div>
          <!-- END Unlock Section -->

          <!-- Footer -->
          <div class="fs-sm text-center">
            <strong>{{ store.app.name + " " + store.app.version }}</strong>
            &copy; {{ store.app.copyright }}
          </div>
          <!-- END Footer -->
        </div>
      </div>
    </div>
  </BaseBackground>
  <!-- END Page Content -->
</template>
