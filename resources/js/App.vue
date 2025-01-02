<template>
  <!-- Loading Spinner -->
  <div class="overlay" v-if="store.isLoading">
    <div class="spinner-border text-primary" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
  </div>
  <RouterView />
</template>

<script setup>
import { useTemplateStore } from "@/stores/template";

const store = useTemplateStore();

</script>

<style lang="scss">
// Main Stylesheet
@import "@/assets/scss/main";

// All color themes are included and available by default
// Feel free to comment out any of them if you won't use them in your project
// @import "@/assets/scss/oneui/themes/amethyst";
// @import "@/assets/scss/oneui/themes/city";
// @import "@/assets/scss/oneui/themes/flat";
// @import "@/assets/scss/oneui/themes/modern";
// @import "@/assets/scss/oneui/themes/smooth";
</style>