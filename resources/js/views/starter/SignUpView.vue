<script setup>
import { reactive, computed } from "vue";
import { useRouter } from "vue-router";
import { useTemplateStore } from "@/stores/template";

// Vuelidate, for more info and examples you can check out https://github.com/vuelidate/vuelidate
import useVuelidate from "@vuelidate/core";
import { required, minLength, email, sameAs } from "@vuelidate/validators";

// Main store and Router
const store = useTemplateStore();
const router = useRouter();

// Input state variables
const state = reactive({
  username: null,
  email: null,
  password: null,
  confirmPassword: null,
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
          <!-- Sign Up Block -->
          <BaseBlock title="Create Account" class="mb-0">
            <template #options>
              <a
                class="btn-block-option fs-sm"
                href="javascript:void(0)"
                data-bs-toggle="modal"
                data-bs-target="#one-signup-terms"
                >View Terms</a
              >
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
                Please fill the following details to create a new account.
              </p>

              <!-- Sign Up Form -->
              <form @submit.prevent="onSubmit">
                <div class="py-3">
                  <div class="mb-4">
                    <input
                      type="text"
                      class="form-control form-control-lg form-control-alt"
                      id="signup-username"
                      name="signup-username"
                      placeholder="Username"
                      :class="{
                        'is-invalid': v$.username.$errors.length,
                      }"
                      v-model="state.username"
                      @blur="v$.username.$touch"
                    />
                    <div
                      v-if="v$.username.$errors.length"
                      class="invalid-feedback animated fadeIn"
                    >
                      Please enter a username
                    </div>
                  </div>
                  <div class="mb-4">
                    <input
                      type="email"
                      class="form-control form-control-lg form-control-alt"
                      id="signup-email"
                      name="signup-email"
                      placeholder="Email"
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
                      class="form-control form-control-lg form-control-alt"
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
                      class="form-control form-control-lg form-control-alt"
                      id="signup-password-confirm"
                      name="signup-password-confirm"
                      placeholder="Confirm Password"
                      :class="{
                        'is-invalid': v$.confirmPassword.$errors.length,
                      }"
                      v-model="state.confirmPassword"
                      @blur="v$.confirmPassword.$touch"
                    />
                    <div
                      v-if="v$.confirmPassword.$errors.length"
                      class="invalid-feedback animated fadeIn"
                    >
                      Please confirm the password
                    </div>
                  </div>
                  <div class="mb-4">
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
                  </div>
                </div>
                <div class="row mb-4">
                  <div class="col-md-6 col-xl-5">
                    <button type="submit" class="btn w-100 btn-alt-success">
                      <i class="fa fa-fw fa-plus me-1 opacity-50"></i> Sign Up
                    </button>
                  </div>
                </div>
              </form>
              <!-- END Sign Up Form -->
            </div>
          </BaseBlock>
          <!-- END Sign Up Block -->
        </div>
      </div>
      <div class="fs-sm text-muted text-center">
        <strong>{{ store.app.name + " " + store.app.version }}</strong> &copy;
        {{ store.app.copyright }}
      </div>
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
