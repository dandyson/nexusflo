<template>
  <!-- Hero -->
  <BaseBackground
    image="/assets/media/photos/photo12@2x.jpg"
    inner-class="bg-black-50"
  >
    <div class="content content-full text-center">
      <div class="my-3">
        <img
          v-if="authUser.avatar !== ''" 
          :src="authUser.avatar"
          class="img-avatar img-avatar-thumb"
          src="/assets/media/avatars/avatar13.jpg"
          alt="Avatar"
        />
        <img
          v-else
          class="img-avatar img-avatar-thumb"
          src="/assets/media/avatars/avatar13.jpg"
          alt="Avatar"
        />
      </div>
      <h1 class="h2 text-white mb-0">{{ authUser.name }}</h1>
      <span class="text-white-75">{{ authUser.email }}</span>
    </div>
  </BaseBackground>
  <!-- END Hero -->

  <!-- Stats -->
  <div class="bg-body-extra-light">
    <div class="content content-boxed">
      <div class="row items-push text-center d-flex justify-content-center">
        <div class="col-6 col-md-3">
          <div class="fs-sm fw-semibold text-muted text-uppercase">Member for:</div>
          <a class="link-fx fs-3" href="javascript:void(0)">{{ memberDuration(authUser.created_at) }}</a>
        </div>
      </div>
    </div>
  </div>
  <!-- END Stats -->

  <!-- Page Content -->
  <div class="content content-boxed">
    <div class="row d-flex justify-content-center">
      <div class="col-12 col-sm-6 d-flex justify-content-center">
        <div class="mb-3 d-flex flex-column flex-sm-row justify-content-center">
          <RouterLink
            :to="{ name: 'backend-pages-generic-edit-profile' }"
            class="btn btn-primary mb-2 me-sm-2 mb-sm-0"
          >
            <i class="fa fa-fw fa-pencil-alt me-1"></i>Edit
          </RouterLink>
          <button @click="deleteAccount" class="btn btn-danger"><i class="far fa-fw fa-trash-alt me-1"></i>Delete Account</button>
        </div>
      </div>
    </div>
  </div>
  <!-- END Page Content -->
</template>

<script setup>
import { useRoute } from 'vue-router';
import axios from "axios";
import Swal from 'sweetalert2';

const route = useRoute();

const authUser = {
  name: route.params?.user?.name ?? '',
  email: route.params?.user?.email ?? '',
  avatar: route.params?.user?.avatar ?? '',
  created_at: route.params?.user?.created_at ?? '',
}

const memberDuration = (createdAt) => {
  const currentDate = new Date();
  const memberDate = new Date(createdAt);

  // Calculate the difference in milliseconds
  const differenceInMilliseconds = currentDate - memberDate;

  // Calculate the number of milliseconds in a year and a day
  const millisecondsPerYear = 365 * 24 * 60 * 60 * 1000;
  const millisecondsPerDay = 24 * 60 * 60 * 1000;

  // Calculate the number of years and days
  const years = Math.floor(differenceInMilliseconds / millisecondsPerYear);
  const days = Math.floor((differenceInMilliseconds % millisecondsPerYear) / millisecondsPerDay);

  if (years > 0) {
    return `${years} year${years > 1 ? 's' : ''} and ${days} day${days > 1 ? 's' : ''}`;
  } else {
    return `${days} days`;
  }
};

const deleteAccount = () => {
  axios.get('sanctum/csrf-cookie')
    .then(() => {
      const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
          confirmButton: 'btn btn-success',
          cancelButton: 'btn btn-danger me-2'
        },
        buttonsStyling: false
      });

      swalWithBootstrapButtons.fire({
        title: 'Delete Account',
        text: 'Are you sure you want to delete your account?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Delete My Account',
        cancelButtonText: 'Cancel',
        reverseButtons: true
      }).then((result) => {
        if (result.isConfirmed) {
          axios.delete(`/api/users/${route.params?.user.id}/delete`, {
            headers: {
              'Content-Type': 'application/json',
            }
          })
            .then((response) => {
              if (response.data?.type === 'success') {
                Swal.fire({
                  icon: 'success',
                  title: 'Account Deleted Successfully',
                  showConfirmButton: false,
                  timer: 1500
                }).then(() => {
                  logOut();
                });
              }
            })
            .catch((error) => {
              console.log({ error });
            });
        }
      });
    });
}

const logOut = () => {
  axios.post('/api/logout')
    .then((res) => {
      // Reload so the page is redirected to signin
      location.reload();
    }).catch(() => {});
}
</script>