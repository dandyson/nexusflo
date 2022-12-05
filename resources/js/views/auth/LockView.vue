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
    <div class="hero-static d-flex align-items-center bg-primary-dark-op">
      <div class="content">
        <div class="row justify-content-center push">
          <div class="col-md-8 col-lg-6 col-xl-4">
            <!-- Unlock Block -->
            <BaseBlock title="Account Locked" class="shadow-none mb-0">
              <template #options>
                <RouterLink
                  :to="{ name: 'auth-signin' }"
                  class="btn-block-option"
                >
                  <i class="fa fa-sign-in-alt"></i>
                </RouterLink>
              </template>

              <div class="p-sm-3 px-lg-4 px-xxl-5 py-lg-5 text-center">
                <img
                  class="img-avatar img-avatar96"
                  src="/assets/media/avatars/avatar10.jpg"
                  alt=""
                />
                <p class="fw-semibold my-2">user@example.com</p>

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
                    <div class="col-md-6 col-xl-5">
                      <button type="submit" class="btn w-100 btn-alt-success">
                        <i class="fa fa-fw fa-lock-open me-1 opacity-50"></i>
                        Unlock
                      </button>
                    </div>
                  </div>
                </form>
                <!-- END Unlock Form -->
              </div>
            </BaseBlock>
            <!-- END Unlock Block -->
          </div>
        </div>
        <div class="fs-sm text-center text-white">
          <span class="fw-medium">{{
            store.app.name + " " + store.app.version
          }}</span>
          &copy; {{ store.app.copyright }}
        </div>
      </div>
    </div>
  </BaseBackground>
  <!-- END Page Content -->
</template>
