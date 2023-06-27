<script setup>
import { useTemplateStore } from "@/stores/template";

import BaseLayout from "@/layouts/BaseLayout.vue";

// Main store
const store = useTemplateStore();

// Set default elements for this layout
store.setLayout({
  header: true,
  sidebar: false,
  sideOverlay: false,
  footer: true,
});

// Set various template options for this layout variation
store.headerStyle({ mode: "light" });
store.mainContent({ mode: "boxed" });
</script>

<template>
  <BaseLayout>
    <!-- Header Content Left -->
    <!-- Using the available v-slot, we can override the default Side Overlay content from layouts/partials/Header.vue -->
    <template #header-content-left>
      <div class="d-flex align-items-center">
        <!-- Logo -->
        <RouterLink
          :to="{ name: 'landing' }"
          class="d-flex align-items-center fw-bold fs-lg tracking-wider text-dual me-2"
        >
        <img
              class="img-fluid me-2"
              src="/assets/media/logos/logo.svg"
              alt="Logo"
              width="40"
            />
          Centre
          <span class="fw-normal">App</span>
        </RouterLink>
        <!-- END Logo -->

        <!-- Version -->
        <div class="fs-xs fw-medium py-1 px-3 rounded-pill bg-body-dark text-dark">v{{ store.app.version }}</div>
      </div>
    </template>
    <!-- END Header Content Left -->

    <!-- Header Content Right -->
    <!-- Using the available v-slot, we can override the default Side Overlay content from layouts/partials/Header.vue -->
    <template #header-content-right>
      <!-- Login Link -->
      <a
        class="btn btn-primary me-2"
        href="https://1.envato.market/5Noyb"
        v-click-ripple
      >
        <i class="fa fa-fw fa-door-open opacity-50"></i>
        <span class="d-none d-sm-inline-block ms-2">Login</span>
      </a>
      <!-- END Purchase Link -->

      <!-- Sign Up Link -->
      <a
        class="btn btn-primary"
        href="https://1.envato.market/5Noyb"
        v-click-ripple
      >
        <i class="fa fa-fw fa-user-plus opacity-50"></i>
        <span class="d-none d-sm-inline-block ms-2">Register</span>
      </a>
      <!-- END Purchase Link -->
    </template>
    <!-- END Header Content Right -->
  </BaseLayout>
</template>
