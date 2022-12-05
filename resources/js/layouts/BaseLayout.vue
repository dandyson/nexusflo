<script setup>
import { computed, onMounted } from "vue";
import { useTemplateStore } from "@/stores/template";

// Import all layout partials
import BaseHeader from "@/layouts/partials/Header.vue";
import BaseSidebar from "@/layouts/partials/Sidebar.vue";
import BaseSideOverlay from "@/layouts/partials/SideOverlay.vue";
import BaseFooter from "@/layouts/partials/Footer.vue";

// Component properties
defineProps({
  sidebarWithMiniNav: {
    type: Boolean,
    default: false,
    description: "If the sidebar is in Mini Nav Mode",
  },
});

// Main store
const store = useTemplateStore();

// Set default color theme
store.setColorTheme({
  theme: store.settings.colorTheme,
});

// Render main classes based on store options
const classContainer = computed(() => {
  return {
    "sidebar-r": store.layout.sidebar && !store.settings.sidebarLeft,
    "sidebar-mini": store.layout.sidebar && store.settings.sidebarMini,
    "sidebar-o": store.layout.sidebar && store.settings.sidebarVisibleDesktop,
    "sidebar-o-xs": store.layout.sidebar && store.settings.sidebarVisibleMobile,
    "sidebar-dark":
      store.layout.sidebar &&
      store.settings.sidebarDark &&
      !store.settings.darkMode,
    "side-overlay-o":
      store.layout.sideOverlay && store.settings.sideOverlayVisible,
    "side-overlay-hover":
      store.layout.sideOverlay && store.settings.sideOverlayHoverable,
    "enable-page-overlay":
      store.layout.sideOverlay && store.settings.pageOverlay,
    "page-header-fixed": store.layout.header && store.settings.headerFixed,
    "page-header-dark":
      store.layout.header &&
      store.settings.headerDark &&
      !store.settings.darkMode,
    "main-content-boxed": store.settings.mainContent === "boxed",
    "main-content-narrow": store.settings.mainContent === "narrow",
    "rtl-support": store.settings.rtlSupport,
    "side-trans-enabled": store.settings.sideTransitions,
    "side-scroll": true,
    "sidebar-dark page-header-dark dark-mode": store.settings.darkMode,
  };
});

// Change dark mode based on dark mode system preference
if (store.settings.darkModeSystem) {
  if (
    window.matchMedia &&
    window.matchMedia("(prefers-color-scheme: dark)").matches
  ) {
    store.darkMode({ mode: "on" });
  } else {
    store.darkMode({ mode: "off" });
  }
}

window
  .matchMedia("(prefers-color-scheme: dark)")
  .addEventListener("change", (e) => {
    if (store.settings.darkModeSystem) {
      if (e.matches) {
        store.darkMode({ mode: "on" });
      } else {
        store.darkMode({ mode: "off" });
      }
    }
  });

// Remove side transitions on window resizing
onMounted(() => {
  let winResize = false;

  window.addEventListener("resize", () => {
    clearTimeout(winResize);

    store.setSideTransitions({ transitions: false });

    winResize = setTimeout(() => {
      store.setSideTransitions({ transitions: true });
    }, 500);
  });
});
</script>

<template>
  <div id="page-container" :class="classContainer">
    <!-- Page Loader -->
    <div id="page-loader" :class="{ show: store.settings.pageLoader }"></div>

    <!-- Page Overlay -->
    <div
      id="page-overlay"
      v-if="store.layout.sideOverlay && store.settings.pageOverlay"
      @click="store.sideOverlay({ mode: 'close' })"
    ></div>
    <!-- END Page Overlay -->

    <!-- Side Overlay -->
    <BaseSideOverlay v-if="store.layout.sideOverlay">
      <template #header>
        <slot name="side-overlay-header"></slot>
      </template>

      <template #content>
        <slot name="side-overlay-content"></slot>
      </template>

      <slot name="side-overlay"></slot>
    </BaseSideOverlay>
    <!-- END Side Overlay -->

    <!-- Sidebar -->
    <BaseSidebar
      v-if="store.layout.sidebar"
      :with-mini-nav="sidebarWithMiniNav"
    >
      <template #header>
        <slot name="sidebar-header"></slot>
      </template>

      <template #header-extra>
        <slot name="sidebar-header-extra"></slot>
      </template>

      <template #content>
        <slot name="sidebar-content"></slot>
      </template>

      <slot name="sidebar"></slot>
    </BaseSidebar>
    <!-- END Sidebar -->

    <!-- Header -->
    <BaseHeader v-if="store.layout.header">
      <template #content-left>
        <slot name="header-content-left"></slot>
      </template>

      <template #content-right>
        <slot name="header-content-right"></slot>
      </template>

      <template #content>
        <slot name="header-content"></slot>
      </template>
      <slot name="header"></slot>
    </BaseHeader>
    <!-- END Header -->

    <!-- Main Container -->
    <div id="main-container">
      <slot name="page-top-content"></slot>
      <RouterView />
    </div>
    <!-- END Main Container -->

    <!-- Footer -->
    <BaseFooter v-if="store.layout.footer">
      <template #content-left>
        <slot name="footer-content-left"></slot>
      </template>

      <template #content-right>
        <slot name="footer-content-right"></slot>
      </template>
      <slot name="footer"></slot>
    </BaseFooter>
    <!-- END Footer -->
  </div>
</template>
