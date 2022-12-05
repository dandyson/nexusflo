<script setup>
import { onBeforeRouteLeave } from "vue-router";
import { useTemplateStore } from "@/stores/template";

// Main store
const store = useTemplateStore();

// Set example settings
store.header({ mode: "static" });
store.headerStyle({ mode: "dark" });

// Before leaving this page
onBeforeRouteLeave(() => {
  // Restore original settings
  store.header({ mode: "fixed" });
  store.headerStyle({ mode: "light" });
});
</script>

<template>
  <!-- Hero -->
  <BasePageHeading title="Header" subtitle="Static - Dark">
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Layout</a>
          </li>
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Header</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Static - Dark</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <BaseBlock class="text-center">
      <p>A static, dark themed Header.</p>
    </BaseBlock>

    <BaseBlock class="text-center">
      <p class="text-center py-8">...</p>
    </BaseBlock>

    <BaseBlock class="text-center">
      <p class="text-center py-8">...</p>
    </BaseBlock>

    <BaseBlock class="text-center">
      <p class="text-center py-8">...</p>
    </BaseBlock>

    <BaseBlock class="text-center">
      <p class="text-center py-8">...</p>
    </BaseBlock>
  </div>
  <!-- END Page Content -->
</template>
