<script setup>
import { onBeforeRouteLeave } from "vue-router";
import { useTemplateStore } from "@/stores/template";

// Main store
const store = useTemplateStore();

// Set example settings
store.sidebarPosition({ mode: "right" });
store.sidebar({ mode: "open" });
store.sideOverlay({ mode: "close" });
store.header({ mode: "fixed" });

// Before leaving this page
onBeforeRouteLeave(() => {
  // Restore original settings
  store.sidebarPosition({ mode: "left" });
});
</script>

<template>
  <!-- Hero -->
  <BasePageHeading title="Page Layout" subtitle="Flipped">
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Layout</a>
          </li>
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Page</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Flipped</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <BaseBlock class="text-center">
      <p>Right Sidebar, Left Side Overlay and a fixed Header.</p>
    </BaseBlock>
  </div>
  <!-- END Page Content -->
</template>
