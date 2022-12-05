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
    <div class="content">
      <div class="row justify-content-center push">
        <div class="col-md-8 col-lg-6 col-xl-4">
          <!-- Reminder Block -->
          <BaseBlock title="Password Reminder" class="mb-0">
            <template #options>
              <RouterLink
                :to="{ name: 'auth-signin' }"
                class="btn-block-option"
              >
                <i class="fa fa-sign-in-alt"></i>
              </RouterLink>
            </template>

            <div class="p-sm-3 px-lg-4 px-xxl-5 py-lg-5">
              <h1 class="h2 mb-1">OneUI</h1>
              <p class="fw-medium text-muted">
                Please provide your account’s email or username and we will send
                you your password.
              </p>

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
                <div class="row mb-4">
                  <div class="col-md-6 col-xl-5">
                    <button type="submit" class="btn w-100 btn-alt-primary">
                      <i class="fa fa-fw fa-envelope me-1 opacity-50"></i>
                      Send Mail
                    </button>
                  </div>
                </div>
              </form>
              <!-- END Reminder Form -->
            </div>
          </BaseBlock>
          <!-- END Reminder Block -->
        </div>
      </div>
      <div class="fs-sm text-muted text-center">
        <strong>{{ store.app.name + " " + store.app.version }}</strong> &copy;
        {{ store.app.copyright }}
      </div>
    </div>
  </div>
  <!-- END Page Content -->
</template>
