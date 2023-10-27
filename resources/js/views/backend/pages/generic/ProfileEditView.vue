<script setup>
import { ref, reactive, computed } from "vue";
import { useRouter } from "vue-router";
import { useRoute } from 'vue-router';
import { useTemplateStore } from "@/stores/template";
import axios from "axios";
import Swal from 'sweetalert2';

// Vuelidate, for more info and examples you can check out https://github.com/vuelidate/vuelidate
import useVuelidate from "@vuelidate/core";
import { required, minLength, email, sameAs } from "@vuelidate/validators";

// Main store and Router
const store = useTemplateStore();
const router = useRouter();
const route = useRoute();

const authUser = {
  name: route.params?.user?.name ?? '',
  email: route.params?.user?.email ?? '',
  created_at: route.params?.user?.created_at ?? '',
}

// Input state variables
const detailState = reactive({
  name: authUser.name ?? null,
  email: authUser.email ?? null,
});

const passwordState = reactive({
  current_password: null,
  password: null,
  password_confirmation: null,
});

// Validation rules
const detailRules = computed(() => {
  return {
    name: {
      required,
      minLength: minLength(3),
    },
    email: {
      required,
      email,
    },
  };
});

const passwordRules = computed(() => {
  return {
    current_password: {
      required,
      minLength: minLength(5),
    },
    password: {
      required,
      minLength: minLength(5),
    },
    password_confirmation: {
      required,
      sameAs: sameAs(passwordState.newPassword),
    },
  }
});

// Custom Errors
let credentialDetailError = ref(false);
let credentialDetailErrorMessage = ref('');
let credentialPasswordError = ref(false);
let credentialPasswordErrorMessage = ref('');

// Use vuelidate
const vDetailRules$ = useVuelidate(detailRules, detailState);
const vPasswordRules$ = useVuelidate(passwordRules, passwordState);

const detailSubmit = () => {
  axios.get('sanctum/csrf-cookie')
    .then(() => {
      axios.post(`/api/users/${route.params?.user.id}/update`, detailState, {
        headers: {
          "Content-Type": "application/json",
        },
      }).then((response) => {
        if (response.data?.type === 'success') {
            Swal.fire({
              icon: 'success',
              title: 'Information Updated Successfully!',
              showConfirmButton: false,
              timer: 1500,
            }).then(() => {
              router.push({ name: 'backend-pages-generic-profile' });
            });
          }
      }).catch((error) => {
        credentialDetailError.value = true;
        credentialDetailErrorMessage.value = 'There has been an error, please try again';
      });
    });
}

const passwordSubmit = () => {
  axios.get('sanctum/csrf-cookie')
    .then(() => {
      axios.post(`/api/users/${route.params?.user.id}/update-password`, passwordState, {
        headers: {
          "Content-Type": "application/json",
        },
      }).then((response) => {
        if (response.data?.type === 'success') {
            Swal.fire({
              icon: 'success',
              title: 'Password Updated Successfully!',
              showConfirmButton: false,
              timer: 1500,
            }).then(() => {
              router.push({ name: 'backend-pages-generic-profile' });
            });
          }
      }).catch((error) => {
        credentialPasswordError.value = true;
        credentialPasswordErrorMessage.value = 'There has been an error, please try again';
      });
    });
}

</script>

<template>
<!-- Hero -->
<BaseBackground image="/assets/media/photos/photo10@2x.jpg">
    <div class="bg-primary-dark-op">
      <div class="content content-full text-center">
        <div class="my-3">
          <img
            class="img-avatar img-avatar-thumb"
            src="/assets/media/avatars/avatar13.jpg"
            alt=""
          />
        </div>
        <h1 class="h2 text-white mb-0">Edit Account</h1>
        <h2 class="h4 fw-normal text-white-75">{{ authUser.name }}</h2>
        <RouterLink
          :to="{ name: 'backend-pages-generic-profile' }"
          class="btn btn-alt-secondary"
        >
          <i class="fa fa-fw fa-arrow-left text-danger"></i> Back to Profile
        </RouterLink>
      </div>
    </div>
  </BaseBackground>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content content-boxed">
    <!-- User Profile -->
    <BaseBlock title="User Profile">
      <div v-if="credentialDetailError" class="alert alert-danger" role="alert">
        {{ credentialDetailErrorMessage }}
      </div>
      <form @submit.prevent="detailSubmit">
        <div class="row push">
          <div class="col-lg-4">
            <p class="fs-sm text-muted">
              Your account’s vital info.
            </p>
          </div>
          <div class="col-lg-8 col-xl-5">
            <div class="mb-4">
              <label class="form-label" for="one-profile-edit-name">Name</label>
              <input
                type="text"
                class="form-control"
                id="one-profile-edit-name"
                name="one-profile-edit-name"
                placeholder="Enter your name.."
                v-model="detailState.name"
                :class="{
                  'is-invalid': vDetailRules$.name.$errors.length,
                }"
                @blur="vDetailRules$.name.$touch"
              />
              <div
                  v-if="vDetailRules$.name.$errors.length"
                  class="invalid-feedback animated fadeIn"
                >
                <ul style="list-style: none" class="p-0">
                  <li v-for="error in vDetailRules$.name.$errors" :key="error.$uid">
                    {{ error.$message }}
                  </li>
                </ul>
              </div>
            </div>
            <div class="mb-4">
              <label class="form-label" for="one-profile-edit-email"
                >Email Address</label
              >
              <input
                type="email"
                class="form-control"
                id="one-profile-edit-email"
                name="one-profile-edit-email"
                placeholder="Enter your email.."
                v-model="detailState.email"
                :class="{
                  'is-invalid': vDetailRules$.email.$errors.length,
                }"
                @blur="vDetailRules$.email.$touch"
              />
              <div
                  v-if="vDetailRules$.email.$errors.length"
                  class="invalid-feedback animated fadeIn"
                >
                <ul style="list-style: none" class="p-0">
                  <li v-for="error in vDetailRules$.email.$errors" :key="error.$uid">
                    {{ error.$message }}
                  </li>
                </ul>
              </div>
            </div>
            <div class="mb-4">
              <label class="form-label">Your Avatar</label>
              <div class="mb-4">
                <img
                  class="img-avatar"
                  src="/assets/media/avatars/avatar13.jpg"
                  alt=""
                />
              </div>
              <div class="mb-4">
                <label for="one-profile-edit-avatar" class="form-label"
                  >Choose a new avatar</label
                >
                <input
                  class="form-control"
                  type="file"
                  id="one-profile-edit-avatar"
                />
              </div>
            </div>
            <div class="mb-4">
              <button type="submit" class="btn btn-alt-primary">Update</button>
            </div>
          </div>
        </div>
      </form>
    </BaseBlock>
    <!-- END User Profile -->

    <!-- Change Password -->
    <BaseBlock title="Change Password">
      <div v-if="credentialPasswordError" class="alert alert-danger" role="alert">
        {{ credentialPasswordErrorMessage }}
      </div>
      <form @submit.prevent="passwordSubmit">
        <div class="row push">
          <div class="col-lg-4">
            <p class="fs-sm text-muted">
              Changing your sign in password is an easy way to keep your account
              secure.
            </p>
          </div>
          <div class="col-lg-8 col-xl-5">
            <div class="mb-4">
              <label class="form-label" for="one-profile-edit-password"
                >Current Password</label
              >
              <input
                type="password"
                class="form-control"
                id="one-profile-edit-password"
                name="one-profile-edit-password"
                v-model="passwordState.current_password"
                :class="{
                  'is-invalid': vPasswordRules$.current_password.$errors.length,
                }"
                @blur="vPasswordRules$.current_password.$touch"
              />
              <div
                  v-if="vPasswordRules$.current_password.$errors.length"
                  class="invalid-feedback animated fadeIn"
                >
                <ul style="list-style: none" class="p-0">
                  <li v-for="error in vPasswordRules$.current_password.$errors" :key="error.$uid">
                    {{ error.$message }}
                  </li>
                </ul>
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-12">
                <label class="form-label" for="one-profile-edit-password-new"
                  >New Password</label
                >
                <input
                  type="password"
                  class="form-control"
                  id="one-profile-edit-password-new"
                  name="one-profile-edit-password-new"
                  v-model="passwordState.password"
                  :class="{
                  'is-invalid': vPasswordRules$.password.$errors.length}"
                  @blur="vPasswordRules$.password.$touch"
                />
                <div
                    v-if="vPasswordRules$.password.$errors.length"
                    class="invalid-feedback animated fadeIn"
                  >
                  <ul style="list-style: none" class="p-0">
                    <li v-for="error in vPasswordRules$.password.$errors" :key="error.$uid">
                      {{ error.$message }}
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-12">
                <label
                  class="form-label"
                  for="one-profile-edit-password-new-confirm"
                  >Confirm New Password</label
                >
                <input
                  type="password"
                  class="form-control"
                  id="one-profile-edit-password-new-confirm"
                  name="one-profile-edit-password-new-confirm"
                  v-model="passwordState.password_confirmation"
                  :class="{
                  'is-invalid': vPasswordRules$.password_confirmation.$errors.length}"
                  @blur="vPasswordRules$.password_confirmation.$touch"
                />
                <div
                    v-if="vPasswordRules$.password_confirmation.$errors.length"
                    class="invalid-feedback animated fadeIn"
                  >
                  <ul style="list-style: none" class="p-0">
                    <li v-for="error in vPasswordRules$.password_confirmation.$errors" :key="error.$uid">
                      {{ error.$message === 'The value must be equal to the other value' ? 
                      'The passwords do not match' : 
                      error.$message }}
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <button type="submit" class="btn btn-alt-primary">Update</button>
            </div>
          </div>
        </div>
      </form>
    </BaseBlock>
    <!-- END Change Password -->
  </div>
  <!-- END Page Content -->

</template>
