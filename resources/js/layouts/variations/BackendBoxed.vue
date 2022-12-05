<script setup>
import { ref } from "vue";
import { useTemplateStore } from "@/stores/template";

import BaseLayout from "@/layouts/BaseLayout.vue";
import BaseNavigation from "@/components/BaseNavigation.vue";

// Grab example data
import notifications from "@/data/notifications";

// Grab menu navigation arrays
import menu from "@/data/menu";

const navigation = menu.boxed;

// Main store
const store = useTemplateStore();

// Reactive variables
const mobileNav = ref(false);
const baseSearchTerm = ref("");

// Set default elements for this layout
store.setLayout({
  header: true,
  sidebar: false,
  sideOverlay: false,
  footer: true,
});

// Set various template options for this layout variation
store.headerStyle({ mode: "dark" });
store.mainContent({ mode: "boxed" });
</script>

<template>
  <BaseLayout>
    <!-- Header Content -->
    <!-- Using the available v-slot, we can override the default Header content from layouts/partials/Header.vue -->
    <template #header-content>
      <!-- Left Section -->
      <div class="d-flex align-items-center">
        <!-- Logo -->
        <RouterLink
          :to="{ name: 'landing' }"
          class="fw-semibold fs-5 tracking-wider text-dual me-3"
        >
          OneUI
          <span class="fw-normal">Vue</span>
        </RouterLink>
        <!-- END Logo -->

        <!-- Notifications Dropdown -->
        <div class="dropdown d-inline-block ms-2">
          <button
            type="button"
            class="btn btn-sm btn-alt-secondary"
            id="page-header-notifications-dropdown"
            data-bs-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            <i class="fa fa-fw fa-bell"></i>
            <span v-if="notifications.length > 0" class="text-primary">•</span>
          </button>
          <div
            class="dropdown-menu dropdown-menu-lg p-0 border-0 fs-sm"
            aria-labelledby="page-header-notifications-dropdown"
          >
            <div
              class="p-2 bg-body-light border-bottom text-center rounded-top"
            >
              <h5 class="dropdown-header text-uppercase">Notifications</h5>
            </div>
            <ul class="nav-items mb-0">
              <li
                v-for="(notification, index) in notifications"
                :key="`notification-${index}`"
              >
                <a class="text-dark d-flex py-2" :href="`${notification.href}`">
                  <div class="flex-shrink-0 me-2 ms-3">
                    <i :class="`${notification.icon}`"></i>
                  </div>
                  <div class="flex-grow-1 pe-2">
                    <div class="fw-semibold">{{ notification.title }}</div>
                    <span class="fw-medium text-muted">
                      {{ notification.time }}
                    </span>
                  </div>
                </a>
              </li>
              <li v-if="!notifications.length" class="p-2">
                <div
                  class="alert alert-light d-flex align-items-center space-x-2 mb-0"
                  role="alert"
                >
                  <i class="fa fa-exclamation-triangle opacity-50"></i>
                  <p class="mb-0">No new ones!</p>
                </div>
              </li>
            </ul>
            <div
              v-if="notifications.length > 0"
              class="p-2 border-top text-center"
            >
              <a class="d-inline-block fw-medium" href="javascript:void(0)">
                <i class="fa fa-fw fa-arrow-down me-1 opacity-50"></i> Load
                More..
              </a>
            </div>
          </div>
        </div>
        <!-- END Notifications Dropdown -->
      </div>
      <!-- END Left Section -->

      <!-- Right Section -->
      <div class="d-flex align-items-center">
        <!-- Open Search Section (visible on smaller screens) -->
        <button
          type="button"
          class="btn btn-sm btn-alt-secondary d-md-none"
          @click="store.headerSearch({ mode: 'on' })"
        >
          <i class="fa fa-fw fa-search"></i>
        </button>
        <!-- END Open Search Section -->

        <!-- Search Form (visible on larger screens) -->
        <form class="d-none d-md-inline-block" @submit.prevent="onSubmitSearch">
          <div class="input-group input-group-sm">
            <input
              type="text"
              class="form-control form-control-alt"
              placeholder="Search.."
              id="page-header-search-input2"
              name="page-header-search-input2"
              v-model="baseSearchTerm"
            />
            <span class="input-group-text border-0">
              <i class="fa fa-fw fa-search"></i>
            </span>
          </div>
        </form>
        <!-- END Search Form -->

        <!-- User Dropdown -->
        <div class="dropdown d-inline-block ms-2">
          <button
            type="button"
            class="btn btn-sm btn-alt-secondary d-flex align-items-center"
            id="page-header-user-dropdown"
            data-bs-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            <img
              class="rounded-circle"
              src="/assets/media/avatars/avatar10.jpg"
              alt="Header Avatar"
              style="width: 21px"
            />
            <span class="d-none d-sm-inline-block ms-2">John</span>
            <i
              class="fa fa-fw fa-angle-down d-none d-sm-inline-block opacity-50 ms-1"
            ></i>
          </button>
          <div
            class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0 border-0"
            aria-labelledby="page-header-user-dropdown"
          >
            <div
              class="p-3 text-center bg-body-light border-bottom rounded-top"
            >
              <img
                class="img-avatar img-avatar48 img-avatar-thumb"
                src="/assets/media/avatars/avatar10.jpg"
                alt="Header Avatar"
              />
              <p class="mt-2 mb-0 fw-medium">John Smith</p>
              <p class="mb-0 text-muted fs-sm fw-medium">Web Developer</p>
            </div>
            <div class="p-2">
              <a
                class="dropdown-item d-flex align-items-center justify-content-between"
                href="javascript:void(0)"
              >
                <span class="fs-sm fw-medium">Inbox</span>
                <span class="badge rounded-pill bg-primary ms-2">3</span>
              </a>
              <RouterLink
                :to="{ name: 'backend-pages-generic-profile' }"
                class="dropdown-item d-flex align-items-center justify-content-between"
              >
                <span class="fs-sm fw-medium">Profile</span>
                <span class="badge rounded-pill bg-primary ms-2">1</span>
              </RouterLink>
              <a
                class="dropdown-item d-flex align-items-center justify-content-between"
                href="javascript:void(0)"
              >
                <span class="fs-sm fw-medium">Settings</span>
              </a>
            </div>
            <div role="separator" class="dropdown-divider m-0"></div>
            <div class="p-2">
              <RouterLink
                :to="{ name: 'auth-lock' }"
                class="dropdown-item d-flex align-items-center justify-content-between"
              >
                <span class="fs-sm fw-medium">Lock Account</span>
              </RouterLink>
              <RouterLink
                :to="{ name: 'auth-signin' }"
                class="dropdown-item d-flex align-items-center justify-content-between"
              >
                <span class="fs-sm fw-medium">Log Out</span>
              </RouterLink>
            </div>
          </div>
        </div>
        <!-- END User Dropdown -->
      </div>
      <!-- END Right Section -->
    </template>
    <!-- END Header Content -->

    <!-- Page Top Content -->
    <!-- Using the available v-slot, we can override the default Page Top Content from layouts/BaseLayout.vue -->
    <template #page-top-content>
      <div class="bg-primary-darker">
        <div class="bg-black-10">
          <div class="content py-3">
            <!-- Toggle Navigation -->
            <div class="d-lg-none">
              <button
                type="button"
                class="btn w-100 btn-alt-secondary d-flex justify-content-between align-items-center"
                @click="
                  () => {
                    mobileNav = !mobileNav;
                  }
                "
              >
                Menu
                <i class="fa fa-bars"></i>
              </button>
            </div>
            <!-- END Toggle Navigation -->

            <!-- Navigation -->
            <div
              id="main-navigation"
              class="d-lg-block mt-2 mt-lg-0"
              :class="{
                'd-none': !mobileNav,
              }"
            >
              <BaseNavigation
                :nodes="navigation"
                horizontal
                horizontal-hover
                dark
              />
            </div>
            <!-- END Navigation -->
          </div>
        </div>
      </div>
    </template>
    <!-- END Page Top Content -->
  </BaseLayout>
</template>
