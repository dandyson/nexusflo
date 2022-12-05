<script setup>
import { useTemplateStore } from "@/stores/template";

// Main store
const store = useTemplateStore();

// Set example settings
store.darkModeSystem({ mode: "on" });
</script>

<template>
  <!-- Hero -->
  <BasePageHeading title="Dark Mode" subtitle="System">
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Layout</a>
          </li>
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Dark Mode</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">System</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <BaseBlock class="text-center">
      <p>Dark Mode based on your system's preference.</p>
    </BaseBlock>
  </div>
  <!-- END Page Content -->
</template>
