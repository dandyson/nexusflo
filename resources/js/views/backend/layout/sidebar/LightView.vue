<script setup>
import { onBeforeRouteLeave } from "vue-router";
import { useTemplateStore } from "@/stores/template";

// Main store
const store = useTemplateStore();

// Set example settings
store.sidebarStyle({ mode: "light" });
store.darkModeSystem({ mode: "off" });
store.darkMode({ mode: "off" });

// Before leaving this page
onBeforeRouteLeave(() => {
  // Restore original settings
  store.sidebarStyle({ mode: "dark" });
  store.darkModeSystem({ mode: "on" });
});
</script>

<template>
  <!-- Hero -->
  <BasePageHeading title="Sidebar" subtitle="Light">
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Layout</a>
          </li>
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Sidebar</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Light</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <BaseBlock class="text-center">
      <p class="text-center">
        You can have a light themed Sidebar (works with Dark Mode off).
      </p>
    </BaseBlock>
  </div>
  <!-- END Page Content -->
</template>
