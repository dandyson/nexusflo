<template>
  <!-- Sidebar -->
  <!--
    Sidebar Mini Mode - Display Helper classes

    Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
    Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
    If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

    Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
    Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
    Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
  -->
  <nav
    id="sidebar"
    :class="{ 'with-mini-nav': withMiniNav }"
    aria-label="Main Navigation"
  >
    <slot>
      <!-- Side Header -->
      <div class="content-header">
        <slot name="header">
          <!-- Logo -->
          <RouterLink :to="{ name: 'landing' }" class="fw-semibold text-dual">
            <img
              class="img-fluid me-2 app-logo"
              src="/assets/media/logos/logo.svg"
              alt="Logo"
              width="40"
            />
            <span class="smini-hide fs-5 tracking-wider">
              <span class="fw-normal">NexusFlo</span>
            </span>
          </RouterLink>
          <!-- END Logo -->
        </slot>

        <!-- Extra -->
        <div>
          <slot name="header-extra">
            <!-- Dark Mode -->
            <div class="dropdown d-inline-block ms-1">
              <button
                type="button"
                class="btn btn-sm btn-alt-secondary"
                id="sidebar-dark-mode-dropdown"
                data-bs-toggle="dropdown"
                data-bs-auto-close="outside"
                aria-haspopup="true"
                aria-expanded="false"
                aria-label="Toggle dark mode options"
              >
                <i v-if="!store.settings.darkMode" class="far fa-moon"></i>
                <i v-if="store.settings.darkMode" class="fa fa-moon"></i>
              </button>
              <div
                class="dropdown-menu dropdown-menu-end dropdown-menu fs-sm smini-hide border-0"
                style="min-width: 8rem"
                aria-labelledby="sidebar-dark-mode-dropdown"
              >
                <div class="px-3 py-2 space-y-2">
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      id="radio-dark-mode-off"
                      value="light"
                      v-model="radioDarkMode"
                      @change="onDarkModeRadioChange"
                    />
                    <label
                      class="form-check-label fw-medium"
                      for="radio-dark-mode-off"
                      >Light</label
                    >
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      id="radio-dark-mode-on"
                      value="dark"
                      v-model="radioDarkMode"
                      @change="onDarkModeRadioChange"
                    />
                    <label
                      class="form-check-label fw-medium"
                      for="radio-dark-mode-on"
                      >Dark</label
                    >
                  </div>
                  <div class="form-check mb-0">
                    <input
                      class="form-check-input"
                      type="radio"
                      id="radio-dark-mode-system"
                      value="system"
                      v-model="radioDarkMode"
                      @change="onDarkModeRadioChange"
                    />
                    <label
                      class="form-check-label fw-medium"
                      for="radio-dark-mode-system"
                      >System</label
                    >
                  </div>
                </div>
              </div>
            </div>
            <!-- END Dark Mode -->
          </slot>

          <!-- Close Sidebar, Visible only on mobile screens -->
          <button
            type="button"
            class="d-lg-none btn btn-sm btn-alt-secondary ms-1"
            aria-label="Close sidebar"
            @click="store.sidebar({ mode: 'close' })"
          >
            <i class="fa fa-fw fa-times" aria-hidden="true"></i>
          </button>
          <!-- END Close Sidebar -->
        </div>
        <!-- END Extra -->
      </div>
      <!-- END Side Header -->

      <!-- Sidebar Scrolling -->
      <div id="simplebar-sidebar" class="js-sidebar-scroll">
        <slot name="content">
          <!-- Side Navigation -->
          <div class="content-side">
            <BaseNavigation :nodes="navigation" />
          </div>
          <!-- END Side Navigation -->
        </slot>
      </div>
      <!-- END Sidebar Scrolling -->
    </slot>
  </nav>
  <!-- END Sidebar -->
</template>

<script setup>
import { ref, watch, onMounted } from "vue";
import { useTemplateStore } from "@/stores/template";

import BaseNavigation from "@/components/BaseNavigation.vue";

// SimpleBar, for more info and examples you can check out https://github.com/Grsmto/simplebar/tree/master/packages/simplebar-vue
import SimpleBar from "simplebar";

// Grab menu navigation arrays
import menu from "@/data/menu";

const navigation = menu.main;

// Component properties
defineProps({
  withMiniNav: {
    type: Boolean,
    default: false,
    description: "If the sidebar is in Mini Nav Mode",
  },
});

// Main store
const store = useTemplateStore();

// Dark Mode preference helper for radios
const radioDarkMode = ref();

// Sets default dark mode preferences for radios
function setDarkModeRadioDefault() {
  if (store.settings.darkModeSystem) {
    radioDarkMode.value = "system";
  } else {
    if (store.settings.darkMode) {
      radioDarkMode.value = "dark";
    } else {
      radioDarkMode.value = "light";
    }
  }
}

// When the user sets dark mode preference through the radios
function onDarkModeRadioChange() {
  if (radioDarkMode.value === "system") {
    store.darkModeSystem({ mode: "on" });
  } else {
    store.darkModeSystem({ mode: "off" });

    if (radioDarkMode.value === "dark") {
      store.darkMode({ mode: "on" });
    } else {
      store.darkMode({ mode: "off" });
    }
  }
}

// Set dark mode preference radios default and watch for changes to store
setDarkModeRadioDefault();
watch(
  () => store.settings.darkModeSystem,
  () => {
    setDarkModeRadioDefault();
  }
);
watch(
  () => store.settings.darkMode,
  () => {
    setDarkModeRadioDefault();
  }
);

// Init SimpleBar (custom scrolling)
onMounted(() => {
  new SimpleBar(document.getElementById("simplebar-sidebar"));
});
</script>

<style >
  .app-logo {
    position: relative;
    right: 0.75rem;
  }
</style>
