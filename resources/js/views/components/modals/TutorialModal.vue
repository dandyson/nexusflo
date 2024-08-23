<template>
    <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="modal" data-bs-target="#tutorialModal">
      <i class="fa fa-fw fa-circle-question"></i>
    </button>
    <div class="modal fade" id="tutorialModal" tabindex="-1" aria-labelledby="tutorialModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="block block-rounded block-transparent mb-0">
            <div class="block-header block-header-default">
              <h3 class="block-title">{{ props.title ? `Tutorial - How to use the ${props.title}` : 'Tutorial' }}</h3>
              <div class="block-options">
                <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                  <i class="fa fa-fw fa-times"></i>
                </button>
              </div>
            </div>
            <div class="block-content fs-sm">
              <!-- Content Area -->
              <div class="content">
                <!-- Only one step content is shown at a time -->
                <transition name="fade" mode="out-in">
                  <div v-if="props.steps[currentStep]" class="d-flex flex-column align-items-center" :key="props.steps[currentStep].id">
                    <div class="step-content">
                      <div class="d-flex flex-column align-items-center">
                        <div class="col-12 col-md-6 my-3">
                          <img :src="props.steps[currentStep].image" :alt="props.steps[currentStep].title" class="img-fluid border rounded" />
                        </div>
                        <h6 class="text-center my-3">{{ props.steps[currentStep].description }}</h6>
                      </div>
                    </div>
                  </div>
                </transition>
              </div>
              <!-- Stepper -->
              <div class="stepper">
                <ul class="nav nav-pills justify-content-center small-pills">
                  <li class="nav-item" v-for="(step, index) in props.steps" :key="step.id">
                    <a class="nav-link small-pill" :class="{ active: currentStep === index }" @click="currentStep = index">
                      <i class="fas fa-circle"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" @click="prevStep" :disabled="currentStep === 0">Back</button>
              <button v-if="currentStep === props.steps.length - 1" type="button" class="btn btn-success" data-bs-dismiss="modal" aria-label="Close">Let's Go!</button>
              <button v-else type="button" class="btn btn-primary" @click="nextStep">Next</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>

  <script setup>
  import { ref, onMounted } from 'vue';

  const props = defineProps({
    title: String,
    steps: Array,
  });

  const currentStep = ref(0);

  // Function to preload images
  function preloadImages() {
    props.steps.forEach(step => {
      const img = new Image();
      img.src = step.image;
    });
  }

  onMounted(() => {
    preloadImages(); // Preload images when the component is mounted
  });

  function nextStep() {
    if (currentStep.value < props.steps.length - 1) {
      currentStep.value++;
    }
  }

  function prevStep() {
    if (currentStep.value > 0) {
      currentStep.value--;
    }
  }
  </script>

  <style scoped>
  .step-content {
    width: 100%;
  }

  .small-pills .nav-link {
    padding: 0.25rem 0.5rem;
    font-size: 1rem;
    cursor: pointer;
  }

  /* Transition Styles */
  .fade-enter-active, .fade-leave-active {
    transition: opacity 0.5s ease-in-out;
  }

  .fade-enter, .fade-leave-to {
    opacity: 0;
  }

  .fade-enter-to, .fade-leave {
    opacity: 1;
  }

  .fade-enter-active, .fade-leave-active {
  transition: opacity 0.6s ease, transform 0.6s cubic-bezier(0.68, -0.55, 0.27, 1.55);
}

.fade-enter-from, .fade-leave-to {
  opacity: 0;
  transform: scale(0.9); /* Optional for a slight zoom effect */
}

.fade-enter-to, .fade-leave-from {
  opacity: 1;
  transform: scale(1);
}
  </style>
