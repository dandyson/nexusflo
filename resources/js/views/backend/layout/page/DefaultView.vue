<script setup>
import { useTemplateStore } from "@/stores/template";

// Main store
const store = useTemplateStore();

// Set example settings
store.sidebarPosition({ mode: "left" });
store.sidebar({ mode: "open" });
store.sideOverlay({ mode: "close" });
store.header({ mode: "fixed" });
</script>

<template>
  <!-- Hero -->
  <BasePageHeading title="Page Layout" subtitle="Default">
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Layout</a>
          </li>
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Page</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Default</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <BaseBlock class="text-center">
      <p>Left Sidebar, right Side Overlay and a fixed Header.</p>
    </BaseBlock>
  </div>
  <!-- END Page Content -->
</template>
