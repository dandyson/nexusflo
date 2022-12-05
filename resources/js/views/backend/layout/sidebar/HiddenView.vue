<script setup>
import { onBeforeRouteLeave } from "vue-router";
import { useTemplateStore } from "@/stores/template";

// Main store
const store = useTemplateStore();

// Set example settings
store.sidebar({ mode: "close" });

// Before leaving this page
onBeforeRouteLeave(() => {
  // Restore original settings
  store.sidebar({ mode: "open" });
});
</script>

<template>
  <!-- Hero -->
  <BasePageHeading title="Sidebar" subtitle="Hidden">
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Layout</a>
          </li>
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Sidebar</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Hidden</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <BaseBlock class="text-center">
      <p class="text-center">You can hide the main sidebar by default.</p>
      <p>
        <button
          type="button"
          class="btn btn-alt-primary"
          @click="() => store.sidebar({ mode: 'open' })"
        >
          Open the Sidebar
        </button>
      </p>
    </BaseBlock>
  </div>
  <!-- END Page Content -->
</template>
