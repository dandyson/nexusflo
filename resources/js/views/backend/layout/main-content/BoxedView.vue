<script setup>
import { onBeforeRouteLeave } from "vue-router";
import { useTemplateStore } from "@/stores/template";

// Main store
const store = useTemplateStore();

// Set example settings
store.mainContent({ mode: "boxed" });

// Before leaving this page
onBeforeRouteLeave(() => {
  // Restore original settings
  store.mainContent({ mode: "narrow" });
});
</script>

<template>
  <!-- Hero -->
  <BasePageHeading title="Main Content" subtitle="Boxed">
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Layout</a>
          </li>
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Main Content</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Boxed</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <BaseBlock class="text-center">
      <p>
        Content has a max-width set, so on larger screens, the content is boxed
        (screen width greater than 991px).
      </p>
    </BaseBlock>
  </div>
  <!-- END Page Content -->
</template>
