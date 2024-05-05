<template>
  <div class="block-rounded block">
    <div class="block-header block-header-default">
      <h3 class="block-title"> {{ title }}</h3><!---->
      <div v-if="tutorial.length > 1" class="block-options">
        <TutorialModal :title="title" :steps="tutorial"></TutorialModal>
      </div>
    </div>
    <div class="block-content">
      <p>{{ description }}</p>
    </div>
  </div>
</template>

<script setup>
import TutorialModal from './modals/TutorialModal.vue';

const props = defineProps({
  title: String,
  description: String,
  tutorial: {
    type: Array,
    default: [],
  },
});

</script>