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
        <div class="progress" role="progressbar" :aria-valuenow="progress" aria-valuemin="0" aria-valuemax="100">
          <div class="progress-bar" :style="{ width: progress + '%' }"></div>
        </div>

        <div class="mt-4">
          <div v-if="currentStep === 1">
            <button @click="nextStep" class="btn btn-primary">Next</button>
            <button v-if="entry" @click="submitForm" class="btn btn-success ms-2">Update Entry</button>
          </div>
          <div v-else-if="currentStep === 2">
            <button @click="prevStep" class="btn btn-secondary">Previous</button>
            <button @click="nextStep" class="btn btn-primary ms-2">Next</button>
            <button v-if="entry" @click="submitForm" class="btn btn-success ms-2">Update Entry</button>
          </div>
          <div v-else-if="currentStep === 3">
            <button @click="prevStep" class="btn btn-secondary">Previous</button>
            <button @click="submitForm" class="btn btn-success ms-2">{{ entry ? 'Update Entry' : 'Submit' }}</button>
          </div>
        </div>

        <div v-if="currentStep === 1" class="my-4">
          <h3>Step 1</h3>
          <h2 class="mb-4"><strong>Write out your worry</strong></h2>
          <div>
            <p class="mb-1"><strong>Title of Entry:</strong></p>
            <small>Choose a specific title for this entry, e.g., 'Worry about work tomorrow'</small>
            <input type="text" class="form-control form-control-lg my-3" placeholder="Title..." v-model="title" />
          </div>
          <div>
            <p class="mb-1"><strong>What's worrying you right now?</strong></p>
            <small>Be specific, e.g., 'I'm afraid I won't finish tomorrow's work on time.'</small>
          </div>
          <textarea rows="4" v-model="mainWorry" class="form-control mt-4" placeholder="Write here.."></textarea>
        </div>

        <div v-if="currentStep === 2" class="my-4">
          <div class="my-4">
            <h3>Step 2</h3>
            <h2 class="mb-1"><strong>Identify Thinking Traps</strong></h2>
            <p v-if="mainWorry !== ''" class="lead my-5 mx-3">"{{ mainWorry }}"</p>

            <small>Look at the cards below - do any of them fit your worries? Use your worry above for reference.
              Select one more more of the ones that do</small>
          </div>
          <div class="d-flex flex-wrap justify-content-evenly">
            <div
                class="col-12 col-md-5 mb-4 mx-2"
                v-for="trap in thinkingTraps"
                :key="trap.title"
                @click="toggleTrapSelection(trap)"
                @keydown.enter="toggleTrapSelection(trap)"
                role="button"
                tabindex="0"
                aria-label="Select thinking trap"
                :aria-pressed="selectedTraps.includes(trap)"
            >
              <div class="card h-100 block-link-pop cursor-pointer"
                :class="{ 'border-selected': selectedTraps.includes(trap) }">
                <div class="overlay-container">
                  <img class="card-img-top" :src="trap.image" alt="Thinking Trap Image">
                  <div class="overlay" :class="{ 'overlay-selected': selectedTraps.includes(trap) }">
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
          <h2 class="mb-4"><strong>Rewrite your thoughts</strong></h2>
          <div class="d-flex flex-column mb-3">
            <div v-if="mainWorry !== ''">
              <strong>Main Worry:</strong>
              <p class="lead my-3 mx-3">"{{ mainWorry }}"</p>
            </div>
            <div v-if="selectedTraps.length !== 0" class="mt-3">
              <strong>Thinking Traps:</strong>
              <div class="row justify-content-evenly">
                <div v-for="trap in selectedTraps" :key="trap.id" class="col-12 col-sm-4">
                  <div class="block block-rounded block-link-pop text-center">
                    <div class="block-content block-content-full">
                      <img class="img-avatar" :src="trap.image" :alt="`Icon representing ${trap.title} thinking trap`">
                    </div>
                    <div class="block-content block-content-full bg-body-light">
                      <p class="fw-semibold mb-0">{{ trap.title }}</p>
                    </div>
                </div>
                </div>
              </div>
            </div>
          </div>
          <small>Taking into account the previous Thinking Trap(s), how would you rewrite that thought to be more
            realistic? For example:</small>
          <div class="mt-4">
            <strong>Catastrophic Thought:</strong>
            <p>"I made a mistake at work today during the presentation, and now my colleagues probably think I'm
              completely incompetent. I'll definitely get fired, and my career is ruined. I'll never find another job, and
              my life will be a total failure."</p>
          </div>

          <div>
            <strong>Realistic and Balanced Rewrite:</strong>
            <p>"I made a mistake at work today during the presentation, and it was embarrassing. However, everyone makes
              mistakes from time to time, and my colleagues likely understand that. It's possible that some of them might
              have even been in similar situations before. I'll take this as an opportunity to learn from my mistake and
              improve my skills. It doesn't mean my entire career is at risk, and I can work on regaining confidence in my
              abilities."</p>
          </div>
          <button @click="fetchAIResponse" :disabled="aiBalancerLoading || mainWorry.length === 0" type="button" class="btn btn-lg btn-warning me-1 mb-3 my-2">
            <div  v-if="aiBalancerLoading" class="flex justify-center items-center" role="status">
              <i class="fa fa-sun fa-spin"></i>
            </div>

            <div v-else>
              <i class="far fa-star me-1"></i>
              Try the AI Worry Balancer!
            </div>
          </button>
          <textarea rows="8" v-model="balancedThought" class="form-control"
            placeholder="Rewrite your thoughts..">
          </textarea>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import axios from 'axios';
import { ref, onMounted } from 'vue';
import Swal from 'sweetalert2';
import router from '../../../../router/starter';

// Props
const { id } = defineProps(['id']); // Specify the prop type

// Data
const entry = ref(null); // Store the fetched entry data
const title = ref('');
const mainWorry = ref('');
const thinkingTraps = ref([]);
const balancedThought = ref('');
const aiBalancerLoading = ref(false);
const aiFetchError = ref(false);
let aiFetchErrorMessage = ref('');

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
  const index = selectedTraps.value.findIndex(
    (selectedTrap) => selectedTrap.id === trap.id
  );

  if (index === -1) {
    selectedTraps.value.push(trap);
  } else {
    selectedTraps.value.splice(index, 1);
  }
};

const submitForm = () => {
  axios.get('sanctum/csrf-cookie').then((res) => {
    if (entry.value) {
      axios
        .put(`/api/worry-journal/${entry.value.id}`, {
          title: title.value,
          main_worry: mainWorry.value,
          thinking_traps: selectedTraps.value.map((trap) => trap.id),
          balanced_thought: balancedThought.value,
        })
        .then((res) => {
          if (res.data?.type === 'success') {
            Swal.fire({
              icon: 'success',
              title: 'Journal Entry Stored Successfully',
              showConfirmButton: false,
              timer: 1500,
            }).then(() => {
              router.push({ name: 'backend-worry-journal' });
            });
          }
        })
        .catch((error) => {
          Swal.fire({
            icon: 'error',
            title: 'There has been an error, please try again.',
            showConfirmButton: true,
          });
        });
    } else {
      axios
        .post('/api/worry-journal', {
          title: title.value,
          main_worry: mainWorry.value,
          thinking_traps: selectedTraps.value.map((trap) => trap.id),
          balanced_thought: balancedThought.value,
        })
        .then((res) => {
          if (res.data?.type === 'success') {
            Swal.fire({
              icon: 'success',
              title: 'Journal Entry Stored Successfully',
              showConfirmButton: false,
              timer: 1500,
            }).then(() => {
              router.push({ name: 'backend-worry-journal' });
            });
          }
        })
        .catch((error) => {
          Swal.fire({
            icon: 'error',
            title: 'There has been an error, please try again.',
            showConfirmButton: true,
          });
        });
    }
  });
};

const fetchAIResponse = () => {
  aiBalancerLoading.value = true;
  balancedThought.value = '';
  aiFetchError.value = false;
  aiFetchErrorMessage.value = '';

  axios.post('/api/worry-balancer', { text: mainWorry.value })
    .then(response => {
      balancedThought.value = response.data.reply;
      aiBalancerLoading.value = false;
    })
    .catch(error => {
      aiFetchError.value = true;
      aiFetchErrorMessage.value = "ERROR: There was an issue. Please try again";
      aiBalancerLoading.value = false;
    })
};

onMounted(async () => {
  try {
    // Fetch thinking traps
    const thinkingTrapsResponse = await axios.get('/api/thinking-traps');
    thinkingTraps.value = thinkingTrapsResponse.data.thinkingTraps;
  } catch (error) {
    console.error('Error fetching thinkingTraps:', error);
  }

  try {
    if (id) {
      const worryJournalResponse = await axios.get(`/api/worry-journal/${id}`);
      entry.value = worryJournalResponse.data;

      if (entry.value) {
        title.value = entry.value.title || '';
        mainWorry.value = entry.value.main_worry || '';
        balancedThought.value = entry.value.balanced_thought || '';

        if (entry.value.thinking_traps) {
          selectedTraps.value = thinkingTraps.value.filter((trap) =>
            entry.value.thinking_traps.includes(trap.id)
          );
        }
      }
    }
  } catch (error) {
    console.error('An error occurred:', error);
  }
});
</script>

<style scoped>
.card {
  border: none;
  transition: 0.3s ease-in-out;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}

.card:hover {
  cursor: pointer;
}

.border-selected {
  border: 5px solid green;
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
  background-color: rgba(0, 255, 0, 0.5);
  opacity: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: opacity 0.3s ease-in-out;
}

.overlay-selected {
  opacity: 1;
}

.overlay i {
  font-size: 24px;
  color: white;
}
</style>
