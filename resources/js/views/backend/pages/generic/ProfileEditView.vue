<script setup>
import { reactive, computed } from "vue";
import { useRouter } from "vue-router";
import { useRoute } from 'vue-router';
import { useTemplateStore } from "@/stores/template";

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
  password: null,
  newPassword: null,
  confirmNewPassword: null,
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
    password: {
      required,
      minLength: minLength(5),
    },
    newPassword: {
      required,
      minLength: minLength(5),
    },
    confirmNewPassword: {
      required,
      sameAs: sameAs(passwordState.newPassword),
    },
  }
});

// Use vuelidate
const vDetailRules$ = useVuelidate(detailRules, detailState);
const vPasswordlRules$ = useVuelidate(passwordRules, passwordState);

const detailSubmit = () => {

}

const passwordSubmit = () => {
  
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
        <h2 class="h4 fw-normal text-white-75">John Parker</h2>
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
      <form @submit.prevent="changeDetails">
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
              />
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
              />
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
      <form @submit.prevent="changePassword">
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
              />
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
                />
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
    <!-- END Change Password -->
  </div>
  <!-- END Page Content -->

</template>
