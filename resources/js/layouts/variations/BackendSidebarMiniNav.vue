<script setup>
import { onBeforeRouteLeave } from "vue-router";
import { useTemplateStore } from "@/stores/template";

import BaseNavigation from "@/components/BaseNavigation.vue";

import BaseLayout from "@/layouts/BaseLayout.vue";

// Grab menu navigation arrays
import menu from "@/data/menu";

const navigation = menu.main;

// Main store
const store = useTemplateStore();

// Set default elements for this layout
store.setLayout({
  header: true,
  sidebar: true,
  sideOverlay: true,
  footer: true,
});

// Set various template options for this layout variation
store.sidebarStyle({ mode: "light" });
store.sidebarMini({ mode: "off" });
store.mainContent({ mode: "narrow" });

// Before leaving this page
onBeforeRouteLeave(() => {
  // Restore original settings
  store.sidebarStyle({ mode: "dark" });
});
</script>

<template>
  <BaseLayout sidebar-with-mini-nav>
    <!-- Sidebar Content -->
    <!-- Using the available v-slot, we can override the default Header content from layouts/partials/Sidebar.vue -->
    <template #sidebar>
      <!-- Sidebar Mini Nav -->
      <div class="sidebar-mini-nav">
        <!-- Logo -->
        <RouterLink :to="{ name: 'landing' }" class="mini-nav-item h-header">
          <i class="fa fa-circle-notch text-primary"></i>
        </RouterLink>
        <!-- END Logo -->

        <!-- Mini Main Nav -->
        <nav class="flex-grow-1 space-y-1">
          <a class="mini-nav-item" href="javascript:void(0)">
            <i class="si si-briefcase fs-sm"></i>
          </a>
          <a class="mini-nav-item" href="javascript:void(0)">
            <i class="si si-pie-chart fs-sm"></i>
          </a>
          <a class="mini-nav-item" href="javascript:void(0)">
            <i class="si si-users fs-sm"></i>
          </a>
        </nav>
        <!-- END Mini Main Nav -->

        <!-- Mini User Nav -->
        <nav class="space-y-1 pb-2">
          <a class="mini-nav-item" href="javascript:void(0)">
            <i class="si si-settings fs-sm"></i>
          </a>
          <a class="mini-nav-item" href="javascript:void(0)">
            <i class="si si-logout fs-sm"></i>
          </a>
        </nav>
        <!-- END Mini User Nav -->
      </div>
      <!-- END Sidebar Mini Nav -->

      <!-- Sidebar Scrolling -->
      <div id="simplebar-sidebar" class="js-sidebar-scroll full-height">
        <!-- Side Header -->
        <div class="content-header">
          <!-- Logo -->
          <RouterLink :to="{ name: 'landing' }" class="fw-semibold text-dual">
            <span class="smini-visible">
              <i class="fa fa-circle-notch text-primary"></i>
            </span>
            <span class="smini-hide fs-5 tracking-wider">
              OneUI
              <span class="fw-normal">Vue</span>
            </span>
          </RouterLink>
          <!-- END Logo -->

          <!-- Extra -->
          <div>
            <!-- Close Sidebar, Visible only on mobile screens -->
            <button
              type="button"
              class="d-lg-none btn btn-sm btn-alt-secondary ms-1"
              @click="store.sidebar({ mode: 'close' })"
            >
              <i class="fa fa-fw fa-times"></i>
            </button>
            <!-- END Close Sidebar -->
          </div>
          <!-- END Extra -->
        </div>
        <!-- END Side Header -->

        <!-- Side Navigation -->
        <div class="content-side">
          <BaseNavigation :nodes="navigation" />
        </div>
        <!-- END Side Navigation -->
      </div>
      <!-- END Sidebar Scrolling -->
    </template>
    <!-- END Sidebar Content -->

    <!-- Header Content Left -->
    <!-- Using the available v-slot, we can override the default Header content from layouts/partials/Header.vue -->
    <template #header-content-left>
      <!-- Toggle Sidebar -->
      <button
        type="button"
        class="btn btn-sm btn-alt-secondary me-2"
        @click="store.sidebar({ mode: 'toggle' })"
      >
        <i class="fa fa-fw fa-bars"></i>
      </button>
      <!-- END Toggle Sidebar -->

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
          />
          <span class="input-group-text border-0">
            <i class="fa fa-fw fa-search"></i>
          </span>
        </div>
      </form>
      <!-- END Search Form -->
    </template>
    <!-- END Header Content Left -->
  </BaseLayout>
</template>
