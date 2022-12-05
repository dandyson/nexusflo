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
  reminder: null,
});

// Validation rules
const rules = computed(() => {
  return {
    reminder: {
      required,
      minLength: minLength(3),
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
  <div class="hero-static d-flex align-items-center">
    <div class="w-100">
      <!-- Reminder Section -->
      <div class="bg-body-extra-light">
        <div class="content content-full">
          <div class="row g-0 justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-4 py-4 px-4 px-lg-5">
              <!-- Header -->
              <div class="text-center">
                <p class="mb-2">
                  <i class="fa fa-2x fa-circle-notch text-primary"></i>
                </p>
                <h1 class="h4 mb-1">Password Reminder</h1>
                <p class="fw-medium text-muted mb-3">
                  Please provide your account’s email or username and we will
                  send you your password.
                </p>
              </div>
              <!-- END Header -->

              <!-- Reminder Form -->
              <form @submit.prevent="onSubmit">
                <div class="mb-4">
                  <input
                    type="text"
                    class="form-control form-control-lg form-control-alt"
                    id="reminder-credential"
                    name="reminder-credential"
                    placeholder="Username or Email"
                    :class="{
                      'is-invalid': v$.reminder.$errors.length,
                    }"
                    v-model="state.reminder"
                    @blur="v$.reminder.$touch"
                  />
                  <div
                    v-if="v$.reminder.$errors.length"
                    class="invalid-feedback animated fadeIn"
                  >
                    Please enter a valid credential
                  </div>
                </div>
                <div class="row justify-content-center mb-4">
                  <div class="col-lg-6 col-xxl-5">
                    <button type="submit" class="btn w-100 btn-primary">
                      <i class="fa fa-fw fa-envelope me-1"></i> Send Mail
                    </button>
                  </div>
                </div>
              </form>
              <!-- END Reminder Form -->

              <div class="text-center">
                <RouterLink
                  :to="{ name: 'auth-signin2' }"
                  class="fs-sm fw-medium"
                  >Login?</RouterLink
                >
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END Reminder Section -->

      <!-- Footer -->
      <div class="fs-sm text-center text-muted py-3">
        <strong>{{ store.app.name + " " + store.app.version }}</strong> &copy;
        {{ store.app.copyright }}
      </div>
      <!-- END Footer -->
    </div>
  </div>
  <!-- END Page Content -->
</template>
