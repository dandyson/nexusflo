<script setup>
import { onBeforeRouteLeave } from "vue-router";
import { useTemplateStore } from "@/stores/template";

// Main store
const store = useTemplateStore();

// Set example settings
store.mainContent({ mode: "full" });

// Before leaving this page
onBeforeRouteLeave(() => {
  // Restore original settings
  store.mainContent({ mode: "narrow" });
});
</script>

<template>
  <!-- Hero -->
  <BasePageHeading title="Main Content" subtitle="Full Width">
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Layout</a>
          </li>
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Main Content</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Full Width</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <BaseBlock class="text-center">
      <p>
        Content always takes up all the available width of the main container. A
        maximum width is set for extra large screen widths.
      </p>
    </BaseBlock>
  </div>
  <!-- END Page Content -->
</template>
