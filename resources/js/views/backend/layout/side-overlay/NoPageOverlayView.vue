<script setup>
import { onBeforeRouteLeave } from "vue-router";
import { useTemplateStore } from "@/stores/template";

// Main store
const store = useTemplateStore();

// Set example settings
store.pageOverlay({ mode: "off" });

// Before leaving this page
onBeforeRouteLeave(() => {
  // Restore original settings
  store.pageOverlay({ mode: "on" });
});
</script>

<template>
  <!-- Hero -->
  <BasePageHeading title="Page Overlay" subtitle="Disabled">
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Layout</a>
          </li>
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Side Overlay</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">No Page Overlay</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <BaseBlock class="text-center">
      <p class="text-center">
        You can easily disable the clickable Page Overlay which opens when Side
        Overlay Opens. Try
        <a
          href="javascript:void(0)"
          @click="() => store.sideOverlay({ mode: 'open' })"
          >opening Side Overlay</a
        >
        to check it out.
      </p>
    </BaseBlock>
  </div>
  <!-- END Page Content -->
</template>
