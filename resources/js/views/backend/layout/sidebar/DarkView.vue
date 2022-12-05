<script setup>
import { useTemplateStore } from "@/stores/template";

// Main store
const store = useTemplateStore();

// Set example settings
store.sidebarStyle({ mode: "dark" });
</script>

<template>
  <!-- Hero -->
  <BasePageHeading title="Sidebar" subtitle="Dark">
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Layout</a>
          </li>
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Sidebar</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Dark</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <BaseBlock class="text-center">
      <p class="text-center">You can have a dark themed Sidebar.</p>
    </BaseBlock>
  </div>
  <!-- END Page Content -->
</template>
