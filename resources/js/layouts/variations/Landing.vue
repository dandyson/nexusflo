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
  footer: false,
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
          class="fw-bold fs-lg tracking-wider text-dual me-2"
        >
          OneUI
          <span class="fw-normal">Vue</span>
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
      <!-- Options -->
      <div class="dropdown">
        <button
          type="button"
          class="btn btn-alt-secondary me-2"
          id="sidebar-themes-dropdown"
          data-bs-toggle="dropdown"
          data-bs-auto-close="outside"
          aria-haspopup="true"
          aria-expanded="false"
        >
          <i class="fa fa-brush"></i>
        </button>
        <div
          class="dropdown-menu dropdown-menu-end fs-sm smini-hide border-0"
          aria-labelledby="sidebar-themes-dropdown"
        >
          <!-- Color Themes -->
          <button
            type="button"
            class="dropdown-item d-flex align-items-center justify-content-between fw-medium"
            @click.prevent="store.setColorTheme({ theme: '' })"
          >
            <span>Default</span>
            <i class="fa fa-circle text-default"></i>
          </button>
          <button
            type="buttbuttonn"
            class="dropdown-item d-flex align-items-center justify-content-between fw-medium"
            @click.prevent="store.setColorTheme({ theme: 'amethyst' })"
          >
            <span>Amethyst</span>
            <i class="fa fa-circle text-amethyst"></i>
          </button>
          <button
            type="button"
            class="dropdown-item d-flex align-items-center justify-content-between fw-medium"
            @click.prevent="store.setColorTheme({ theme: 'city' })"
          >
            <span>City</span>
            <i class="fa fa-circle text-city"></i>
          </button>
          <button
            type="button"
            class="dropdown-item d-flex align-items-center justify-content-between fw-medium"
            @click.prevent="store.setColorTheme({ theme: 'flat' })"
          >
            <span>Flat</span>
            <i class="fa fa-circle text-flat"></i>
          </button>
          <button
            type="button"
            class="dropdown-item d-flex align-items-center justify-content-between fw-medium"
            @click.prevent="store.setColorTheme({ theme: 'modern' })"
          >
            <span>Modern</span>
            <i class="fa fa-circle text-modern"></i>
          </button>
          <button
            type="button"
            class="dropdown-item d-flex align-items-center justify-content-between fw-medium"
            @click.prevent="store.setColorTheme({ theme: 'smooth' })"
          >
            <span>Smooth</span>
            <i class="fa fa-circle text-smooth"></i>
          </button>
          <!-- END Color Themes -->
        </div>
      </div>
      <!-- END Options -->

      <!-- Purchase Link -->
      <a
        class="btn btn-success"
        href="https://1.envato.market/5Noyb"
        v-click-ripple
      >
        <i class="fa fa-fw fa-shopping-cart opacity-50"></i>
        <span class="d-none d-sm-inline-block ms-2">Purchase</span>
      </a>
      <!-- END Purchase Link -->
    </template>
    <!-- END Header Content Right -->
  </BaseLayout>
</template>
