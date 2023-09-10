<template>
    <div class="content">

        <div class="block-rounded block">
            <div class="block-header block-header-default">
                <h3 class="block-title"> Worry Journal</h3><!---->
            </div>
            <div class="block-content">
                <p>Fill out the below form to record your worries, spot any thinking traps and to try to re-balance your
                    thought by challenging your beliefs about the situation.</p>
            </div>
        </div>



        <div class="block-rounded block">
            <div class="block-header block-header-default">
                <h3 class="block-title"> Worry Journal</h3><!---->
            </div>
            <div class="block-content">
                <div class="progress">
                    <div class="progress-bar" :style="{ width: progress + '%' }"></div>
                </div>

                <div class="mt-4">
                    <button v-if="currentStep === 1" @click="nextStep" class="btn btn-primary">Next</button>
                    <div v-else-if="currentStep === 2">
                        <button @click="prevStep" class="btn btn-secondary">Previous</button>
                        <button @click="nextStep" class="btn btn-primary ms-2">Next</button>
                    </div>
                    <div v-else-if="currentStep === 3">
                        <button @click="prevStep" class="btn btn-secondary">Previous</button>
                        <button @click="submitForm" class="btn btn-success ms-2">Submit</button>
                    </div>
                </div>

                <div v-if="currentStep === 1" class="my-4">
                    <h3>Step 1</h3>
                    <p class="mb-1">What's worrying you right now?</p>
                    <small>Make it quite specific - instead of 'I am dreading work tomorrow', write the actual problem, like 'I am afraid I will not finish the work due by the end of the day tomorrow and I will be in big trouble'.</small>
                    <textarea rows="4" v-model="form.name" class="form-control mt-4" placeholder="Write here.."></textarea>
                </div>

                <div v-if="currentStep === 2" class="my-4">
                    <div class="my-4">
                        <h3>Step 2</h3>
                        <p class="mb-1">Identify Thinking Traps</p>
                        <small>Look at the cards below - do any of them fit your worries? Select one more more of the ones that do</small>
                    </div>
                    <div class="d-flex flex-wrap justify-content-evenly">
                        <div 
                            class="col-12 col-md-3 mb-4 mx-2" 
                            v-for="trap in thinkingTraps" 
                            :key="trap.title"
                            @click="toggleTrapSelection(trap)"
                        >
                        <div
                            class="card h-100 block-link-pop cursor-pointer"
                            :class="{ 'border-selected': selectedTraps.includes(trap.title) }"
                        >
                            <div class="overlay-container">
                                <img class="card-img-top" :src="trap.image" alt="Thinking Trap Image">
                                <div class="overlay" :class="{ 'overlay-selected': selectedTraps.includes(trap.title) }">
                                    <i class="far fa-circle-check"></i>
                                </div>
                            </div>
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title">{{ trap.title }}</h4>
                                <p class="card-text mt-2">{{ trap.description }}</p>
                            </div>
                        </div>
                        </div>


                    </div>
                </div>

                <div v-if="currentStep === 3" class="my-4">
                    <h3>Step 3</h3>
                    <p class="mb-1">Rewrite your thoughts</p>
                    <small>Taking into account the previous Thinking Trap(s), how would you rewrite that thought to be more realistic? For example:</small>
                    <div class="mt-4">
                        <strong>Catastrophic Thought:</strong>
                        <p>"I made a mistake at work today during the presentation, and now my colleagues probably think I'm completely incompetent. I'll definitely get fired, and my career is ruined. I'll never find another job, and my life will be a total failure."</p>
                    </div>
                        
                    <div>
                        <strong>Realistic and Balanced Rewrite:</strong>
                        <p>"I made a mistake at work today during the presentation, and it was embarrassing. However, everyone makes mistakes from time to time, and my colleagues likely understand that. It's possible that some of them might have even been in similar situations before. I'll take this as an opportunity to learn from my mistake and improve my skills. It doesn't mean my entire career is at risk, and I can work on regaining confidence in my abilities."</p>
                    </div>
                    <textarea rows="4" v-model="form.message" class="form-control" placeholder="Rewrite your thoughts.."></textarea>
                </div>
            </div>
        </div>
    </div>
</template>
  

<script setup>
import axios from 'axios';
import { ref, onMounted } from 'vue';

const form = ref({
    name: '',
    email: '',
    message: ''
});

const currentStep = ref(1);
const totalSteps = 3;
const progress = ref((currentStep.value / totalSteps) * 100);
const selectedTraps = ref([]);

const nextStep = () => {
    if (currentStep.value < totalSteps) {
        currentStep.value++;
        progress.value = (currentStep.value / totalSteps) * 100;
    }
};

const prevStep = () => {
    if (currentStep.value > 1) {
        currentStep.value--;
        progress.value = (currentStep.value / totalSteps) * 100;
    }
};

const toggleTrapSelection = (trap) => {
    const index = selectedTraps.value.indexOf(trap.title); // Assuming trap.title is unique for each trap
    if (index === -1) {
        selectedTraps.value.push(trap.title);
    } else {
        selectedTraps.value.splice(index, 1);
    }
};


const submitForm = () => {
    console.log('Form submitted:', form.value);
};

const thinkingTraps = ref([]);

onMounted(async () => {
    try {
        const res = await axios.get('/api/worry-journal/thinking-traps');
        thinkingTraps.value = res.data.thinkingTraps;
    } catch (error) {
        console.error('Error fetching thinkingTraps:', error);
    }
});
</script>

<style scoped>
.card {
    border: none; /* Remove the default card border */
    transition: 0.3s ease-in-out;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2); /* Add a subtle box shadow */
}

.card:hover {
    cursor: pointer;
}

.border-selected {
    border: 5px solid green; /* Customize the border size and color as needed */
    border-radius: 10px;
    transition: 0.2s ease-in-out;
}

.overlay-container {
  position: relative;
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 255, 0, 0.5); /* Green with 0.5 opacity */
  opacity: 0; /* Initially, hide the overlay */
  display: flex;
  justify-content: center;
  align-items: center;
  transition: opacity 0.3s ease-in-out;
}

.overlay-selected {
  opacity: 1; /* Show the overlay when the card is selected */
}

.overlay i {
  font-size: 24px; /* Adjust the size of the icon */
  color: white; /* Set the color of the icon */
}

</style>