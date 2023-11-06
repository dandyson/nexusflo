<template>
  <div class="content">
    <SectionIntro 
        title="Positive News" 
        description="Discover a world of positivity with this curated collection of 
        uplifting news articles from positive.news and the Good News Network. 
        Get inspired by stories that celebrate the brighter side of life." 
        :tutorial="tutorialData"
      ></SectionIntro>
  </div>
    <!-- Positive News -->
    <div class="row mx-5 my-5">
      <h2 class="my-3">Positive.News</h2>
      <div class="row row-sm">
        <div v-if="positiveNewsError" class="alert alert-danger alert-dismissible" role="alert">
          <h3 class="alert-heading h4 my-2">Error</h3>
          <p class="mb-0">There was an error loading the data. Please check your internet connection, refresh and try again!</p>
        </div>
        <div class="d-flex justify-content-center" v-if="positiveNewsLoading === true">
          <div class="spinner-border text-primary m-1" role="status">
            <span class="sr-only">Loading...</span>
          </div>
        </div>
        <div v-for="(item, index) in positiveNewsData" :key="index" class="col-md-4 col-lg-4 mb-4">
          <div class="card">
            <a target="_blank" :href="item.link">
              <img alt="Image" class="img-fluid card-img-top" :src="item.image">
            </a>
            <div class="card-body">
              <a target="_blank" :href="item.link">
                <h4 class="card-title news-headline">{{ item.title }}</h4>
              </a>
              <p class="card-text">{{ item.description }}</p>
            </div>
          </div>
        </div><!-- col-4 -->
      </div>
    </div>
    <!-- End of Positive News -->

    <hr class="my-4">

    <!-- Good News Network -->
    <div class="row mx-5 my-5">
      <h2 class="my-3">Good News Network</h2>
      <div class="row row-sm">
        <div v-if="goodNewsNetworkError" class="alert alert-danger alert-dismissible" role="alert">
          <h3 class="alert-heading h4 my-2">Error</h3>
          <p class="mb-0">There was an error loading the data. Please check your internet connection, refresh and try again!</p>
        </div>
        <div class="d-flex justify-content-center" v-if="goodNewsNetworkLoading === true">
          <div class="spinner-border text-primary m-1" role="status">
            <span class="sr-only">Loading...</span>
          </div>
        </div>
        <div v-for="(item, index) in goodNewsNetworkData" :key="index" class="col-md-4 col-lg-4 mb-4">
          <div class="card">
            <a target="_blank" :href="item.link">
              <img alt="Image" class="img-fluid card-img-top" :src="item.image">
            </a>
            <div class="card-body">
              <a target="_blank" :href="item.link">
                <h4 class="card-title news-headline">{{ item.title }}</h4>
              </a>
              <p class="card-text">{{ item.description }}</p>
            </div>
          </div>
        </div><!-- col-4 -->
      </div>
    </div>
    <!-- End of Good News Network -->
</template>

<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';
import SectionIntro from '../components/SectionIntro.vue';
import * as imagePaths from '../../assets/photos/tutorialImagePaths.js';

const tutorialData = ref([
    {
        id: 0,
        image: imagePaths.worryJournalStep1,
        description: 'Create a new Image by clicking the "Create New Entry" button',
    },
    {
        id: 1,
        image: imagePaths.worryJournalStep2,
        description: 'Fill out the "Step 1" section before continuing by clicking the "next" button',
    },
    {
        id: 2,
        image: imagePaths.worryJournalStep3,
        description: 'Choose "Thinking Traps" - common patterns of anxious thought that may apply to you. Select all that apply',
    },
    {
        id: 3,
        image: imagePaths.worryJournalStep4,
        description: 'Step 3 gives you the chance to balance your worry after reviewing it and the Thinking Traps involved',
    },
    {
        id: 4,
        image: imagePaths.worryJournalStep5,
        description: 'When you are done, hit the Submit button to save the entry',
    },
    {
        id: 5,
        image: imagePaths.worryJournalStep6,
        description: 'You will now see the entry stored!',
    },
    {
        id: 6,
        image: imagePaths.worryJournalStep7,
        description: 'From this table you can quick view, edit or delete entries',
    },
]);

const positiveNewsData = ref([]);
const positiveNewsLoading = ref(true);
const positiveNewsError = ref(false);

const goodNewsNetworkData = ref([]);
const goodNewsNetworkLoading = ref(true);
const goodNewsNetworkError = ref(false);

onMounted(async () => {
  // Check if cached data exists and is not stale
  const cachedPositiveNews = JSON.parse(localStorage.getItem('positiveNewsCache'));
  const cachedGoodNewsNetwork = JSON.parse(localStorage.getItem('goodNewsNetworkCache'));
  const currentTime = new Date().getTime();
  const isPositiveNewsCacheValid = cachedPositiveNews && currentTime - cachedPositiveNews.timestamp < 3600000; // Cache valid for 1 hour (adjust as needed)
  const isGoodNewsCacheValid = cachedGoodNewsNetwork && currentTime - cachedGoodNewsNetwork.timestamp < 3600000;

  if (isPositiveNewsCacheValid && isGoodNewsCacheValid) {
    positiveNewsData.value = cachedPositiveNews.data;
    positiveNewsLoading.value = false;
    goodNewsNetworkData.value = cachedGoodNewsNetwork.data;
    goodNewsNetworkLoading.value = false;
  } else {
    try {
      const res = await axios.get('/api/positive-news-feed');
      positiveNewsData.value = res.data.data['positive-news'];
      positiveNewsLoading.value = false;
      goodNewsNetworkData.value = res.data.data['good-news-network'];
      goodNewsNetworkLoading.value = false;

      // Cache the data
      localStorage.setItem('positiveNewsCache', JSON.stringify({ data: positiveNewsData.value, timestamp: currentTime }));
      localStorage.setItem('goodNewsNetworkCache', JSON.stringify({ data: goodNewsNetworkData.value, timestamp: currentTime }));
    } catch (error) {
      positiveNewsLoading.value = false;
      positiveNewsError.value = true;
      console.error(error);
    }
  }
});
</script>