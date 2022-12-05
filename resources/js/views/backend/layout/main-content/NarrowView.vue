<script setup>
import { useTemplateStore } from "@/stores/template";

// Main store
const store = useTemplateStore();

// Set example settings
store.mainContent({ mode: "narrow" });
</script>

<template>
  <!-- Hero -->
  <BasePageHeading title="Main Content" subtitle="Narrow">
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Layout</a>
          </li>
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Main Content</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Narrow</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <BaseBlock class="text-center">
      <p>
        Content uses a percentage width, so on larger screens, content’s width
        is smaller than the available (screen width greater than 991px).
      </p>
    </BaseBlock>
  </div>
  <!-- END Page Content -->
</template>
