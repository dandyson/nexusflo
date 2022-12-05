<script setup>
import { onBeforeRouteLeave } from "vue-router";
import { useTemplateStore } from "@/stores/template";

// Main store
const store = useTemplateStore();

// Set example settings
store.sideOverlay({ mode: "close" });
store.sideOverlayHover({ mode: "on" });

// Before leaving this page
onBeforeRouteLeave(() => {
  // Restore original settings
  store.sideOverlayHover({ mode: "off" });
});
</script>

<template>
  <!-- Hero -->
  <BasePageHeading title="Side Overlay" subtitle="Hover Mode">
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Layout</a>
          </li>
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Side Overlay</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Hover Mode</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <BaseBlock class="text-center">
      <p class="text-center">
        You can make a small portion of Side Overlay visible. If you hover it,
        the Side Overlay will open (screen width greater than 991px).
      </p>
    </BaseBlock>
  </div>
  <!-- END Page Content -->
</template>
