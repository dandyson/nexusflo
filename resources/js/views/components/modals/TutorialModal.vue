<template>
    <!-- TODO: Need to change this whole thing to be a carousel, or at least wait until all images are loaded before displaying! -->
    <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="modal" data-bs-target="#tutorialModal">
        <i class="fa fa-fw fa-circle-question"></i>
    </button>
    <div class="modal fade" id="tutorialModal" tabindex="-1" aria-labelledby="tutorialModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="block block-rounded block-transparent mb-0">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">{{ props.title !== "" && props.title !== undefined ?  `Tutorial - How to use the ${props.title}` : 'Tutorial'}} </h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content fs-sm">
                        <!-- Content Area -->
                        <div class="content">
                            <div v-for="step in props.steps" :key="step.id" class="d-flex flex-column align-items-center">
                                <div class="step-content" v-if="currentStep === step.id">
                                    <div class="d-flex flex-column align-items-center">
                                        <div class="col-12 col-md-6 my-3">
                                            <img :src="step.image" :alt="step.title" class="img-fluid border rounded" />
                                        </div>
                                        <h5 class="text-center my-3">{{ step.description }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Stepper -->
                        <div class="stepper">
                            <ul class="nav nav-pills justify-content-center small-pills">
                                <li class="nav-item" v-for="step in props.steps" :key="step.id">
                                    <a class="nav-link small-pill" :class="{ active: currentStep === step.id }" @click="currentStep = step.id">
                                        <i class="fas fa-circle"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" @click="prevStep"
                            :disabled="currentStep === 0">Back</button>
                        <button v-if="currentStep === props.steps.length - 1" type="button" class="btn btn-success" data-bs-dismiss="modal" aria-label="Close">Let's Go!</button>
                        <button v-else type="button" class="btn btn-primary" @click="nextStep">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';

const props = defineProps({
    title: String,
    steps: Array,
});

const currentStep = ref(0);

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
    display: none;
}

.step-content:nth-child(1) {
    display: block;
}

.small-pills .nav-link {
  padding: 0.25rem 0.5rem; /* Adjust the padding as needed */
  font-size: 1rem; /* Adjust the font size as needed */
  cursor: pointer;
}
</style>