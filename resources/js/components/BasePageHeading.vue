<script setup>
// Component properties
defineProps({
  title: {
    type: String,
    description: "The title of page heading section",
  },
  subtitle: {
    type: String,
    description: "The subtitle of page heading section",
  },
});
</script>

<template>
  <div class="bg-body-light">
    <div class="content content-full">
      <slot>
        <div
          v-if="title || $slots.extra"
          class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2"
        >
          <div class="flex-grow-1">
            <h1 v-if="title" class="h3 fw-bold mb-2">{{ title }}</h1>
            <h2
              v-if="subtitle"
              class="fs-base lh-base fw-medium text-muted mb-0"
            >
              {{ subtitle }}
            </h2>
          </div>
          <div v-if="$slots.extra" class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3">
            <slot name="extra"></slot>
          </div>
        </div>
      </slot>
    </div>
  </div>
</template>
