<script setup>
import { onBeforeRouteLeave } from "vue-router";
import { useTemplateStore } from "@/stores/template";

// Main store
const store = useTemplateStore();

// Set example settings
store.sidebarMini({ mode: "on" });

// Before leaving this page
onBeforeRouteLeave(() => {
  // Restore original settings
  store.sidebarMini({ mode: "off" });
});
</script>

<template>
  <!-- Hero -->
  <BasePageHeading title="Sidebar" subtitle="Mini">
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Layout</a>
          </li>
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Sidebar</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Mini</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <BaseBlock class="text-center">
      <p class="text-center">You can have a mini Sidebar.</p>
    </BaseBlock>
  </div>
  <!-- END Page Content -->
</template>
