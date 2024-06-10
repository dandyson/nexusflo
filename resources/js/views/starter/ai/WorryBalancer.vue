<template>
  <div class="content">
    <SectionIntro 
      title="Worry Balancer"
      description="Use this timer to maximise your activity and keep your goals on track.">
    </SectionIntro>
    <div class="block-rounded block">
      <div class="block-header block-header-default">
        What's on your mind?
      </div>
      <div class="block-content">
        <small>Write out in detail exactly what you are worried about right now. This tool will rewrite the thought in a balanced
            and realistic way for better clarify. For example:</small>
          <div class="mt-4">
            <p>"I made a mistake at work today during the presentation, and now my colleagues probably think I'm
              completely incompetent. I'll definitely get fired, and my career is ruined. I'll never find another job, and
              my life will be a total failure."</p>
          </div>
          <button v-if="balancedThought.length === 0" @click="fetchAIResponse" :disabled="aiBalancerLoading || worryEntry.length === 0" type="button" class="btn btn-lg btn-warning me-1 mb-3 my-2">
            <div  v-if="aiBalancerLoading" class="flex justify-center items-center" role="status">
              <i class="fa fa-sun fa-spin"></i>
            </div>
            
            <div v-else>
              <i class="far fa-star me-1"></i>
              Balance your thought
            </div>

          </button>
          <p v-if="aiFetchError" class="text-danger">{{ aiFetchErrorMessage }}</p>
          <textarea v-if="balancedThought.length === 0" rows="8" v-model="worryEntry" class="form-control mb-4"
            placeholder="What's on your mind?">
          </textarea>

          <div v-if="balancedThought.length > 0" class="card card-borderless push mt-4">
            <div class="card-header">
              <h3 class="block-title">Balanced Thought</h3>
            </div>
            <div class="card-body" v-html="balancedThought"></div>
            <div class="card-footer fs-sm border-top-0">
              <button @click="regenerate" type="button" class="btn btn-warning me-1">
                <i class="far fa-circle-left  me-1"></i>
                Try again
              </button>
            </div>
          </div>

      </div>

      <!-- TODO: MAKE A COMPONENT OUT OF THE WORRY BALANCER TEXTAREA AND BUTTON, THEN PLACE IT HERE -->
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';
import SectionIntro from '../../components/SectionIntro.vue';
import axios from 'axios';

const balancedThought = ref('');
const worryEntry = ref('');
const aiBalancerLoading = ref(false);
const aiFetchError = ref(false);
let aiFetchErrorMessage = ref('');

const fetchAIResponse = () => {
  aiBalancerLoading.value = true;
  aiFetchError.value = false;
  aiFetchErrorMessage.value = '';

  axios.post('/api/worry-balancer', { 
    text: worryEntry.value, 
    standaloneWorryBalancer: true 
  })
    .then(response => {
      balancedThought.value = response.data.reply;
      aiBalancerLoading.value = false;
    })
    .catch(error => {
      aiFetchError.value = true;
      aiFetchErrorMessage.value = "ERROR: There was an issue. Please try again";
      aiBalancerLoading.value = false;
    });
};

const regenerate = () => {
  balancedThought.value = '';
}

</script>