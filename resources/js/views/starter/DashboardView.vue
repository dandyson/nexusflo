<template>
  <BasePageHeading title="Dashboard" subtitle="Welcome!">
  </BasePageHeading>

  <div class="content">
    <div class="row items-push">
      <div class="col-12">
        <BaseBlock title="Latest Good News" class="h-100 mb-0">
          <template #options>
            <div class="block-options-item">
              <RouterLink :to="{ name: 'backend-positive-news' }" class="btn btn-primary">
                <i class="far fa-fw fa-newspaper me-2"></i>See All Good News
              </RouterLink>
            </div>
          </template>
          <!-- News Section -->
          <div class="row d-flex pb-5">
            <!-- Positive News Item -->
            <div class="col-12 col-lg-6">
              <h2 class="my-3">Positive.News</h2>
              <div class="row row-sm">
                <div v-if="positiveNewsError" class="alert alert-danger alert-dismissible" role="alert">
                  <h3 class="alert-heading h4 my-2">Error</h3>
                  <p class="mb-0">There was an error loading the data. Please check your internet connection, refresh and
                    try again!</p>
                </div>
                <div class="d-flex justify-content-center" v-if="positiveNewsLoading === true">
                  <div class="spinner-border text-primary m-1" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
                </div>
                <div v-for="(item, index) in latestPositiveNews" :key="index">
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
                </div>
              </div>
            </div>
            <!-- End of Positive News -->

            <!-- Good News Network -->
            <div class="col-12 col-lg-6">
              <h2 class="my-3">Good News Network</h2>
              <div class="row row-sm">
                <div v-if="goodNewsNetworkError" class="alert alert-danger alert-dismissible" role="alert">
                  <h3 class="alert-heading h4 my-2">Error</h3>
                  <p class="mb-0">There was an error loading the data. Please check your internet connection, refresh and
                    try again!</p>
                </div>
                <div class="d-flex justify-content-center" v-if="goodNewsNetworkLoading === true">
                  <div class="spinner-border text-primary m-1" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
                </div>
                <div v-for="(item, index) in latestGoodNews" :key="index">
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
                </div>
              </div>
            </div>
            <!-- End of Good News Network -->
          </div>
          <!-- End of News Section -->
        </BaseBlock>
      </div>
      <div class="col-12">
        <BaseBlock title="Today's Quotes" class="h-100 mb-0">
          <!-- Quote Slider -->
          <div class="block-content">
            <transition name="quote-fade" mode="out-in">
              <div :key="currentQuoteIndex">
                <div v-if="quotes.length > 0">
                  <blockquote class="blockquote">
                    <p>"{{ quotes[currentQuoteIndex].text }}"</p>
                  </blockquote>
                  <figcaption class="blockquote-footer mt-2">
                    {{ quotes[currentQuoteIndex].author }}
                  </figcaption>
                </div>
                <div v-else>
                  <!-- Show a loading message or handle when no quotes are available -->
                  <p>Loading quotes...</p>
                </div>
              </div>
            </transition>
          </div>
          <!-- End of Quote Slider -->
        </BaseBlock>
      </div>
    </div>
  </div>
</template>

<script setup>
import { onMounted, ref, onBeforeUnmount } from "vue";
import { useTemplateStore } from "@/stores/template";
import Swal from "sweetalert2";
import axios from "axios";

// Initialize Vue 3 Composition API setup
const store = useTemplateStore();
const quotes = ref([]); // Array for quotes
const currentQuoteIndex = ref(0); // Index to keep track of the current quote
let timer; // Timer for the quote slider

// Check if cached data exists and is not stale
const cachedPositiveNews = JSON.parse(localStorage.getItem('positiveNewsCache'));
const cachedGoodNewsNetwork = JSON.parse(localStorage.getItem('goodNewsNetworkCache'));
const currentTime = new Date().getTime();
const isPositiveNewsCacheValid = cachedPositiveNews && currentTime - cachedPositiveNews.timestamp < 3600000; // Cache valid for 1 hour
const isGoodNewsCacheValid = cachedGoodNewsNetwork && currentTime - cachedGoodNewsNetwork.timestamp < 3600000;

// Arrays for positive and good news
const latestPositiveNews = ref([]);
const positiveNewsLoading = ref(true);
const positiveNewsError = ref(false);
const latestGoodNews = ref([]);
const goodNewsNetworkLoading = ref(true);
const goodNewsNetworkError = ref(false);

// Perform actions when the component is mounted
onMounted(async () => {
  if (!store.verifiedNotificationShown) {
    // Display a success notification if not already shown
    Swal.fire({
      icon: 'success',
      title: 'Email Verified',
      text: 'Welcome to NexusFlo!',
      showConfirmButton: true,
    });
    store.setVerificationNotificationShown(true);
  }

  // News data fetching
  if (isPositiveNewsCacheValid && isGoodNewsCacheValid) {
    latestPositiveNews.value = cachedPositiveNews.data.slice(0, 1);
    positiveNewsLoading.value = false;
    latestGoodNews.value = cachedGoodNewsNetwork.data.slice(0, 1);
    goodNewsNetworkLoading.value = false;
  } else {
    try {
      const res = await axios.get('/api/positive-news-feed');
      latestPositiveNews.value = res.data.data['positive-news'];
      positiveNewsLoading.value = false;
      latestGoodNews.value = res.data.data['good-news-network'];
      goodNewsNetworkLoading.value = false;

      // Cache the data
      localStorage.setItem('positiveNewsCache', JSON.stringify({ data: latestPositiveNews.value, timestamp: currentTime }));
      localStorage.setItem('goodNewsNetworkCache', JSON.stringify({ data: latestGoodNews.value, timestamp: currentTime }));
    } catch (error) {
      positiveNewsLoading.value = false;
      positiveNewsError.value = true;
      console.error(error);
    }
  }

  // Fetch quotes and set up the quote slider
  const res = await axios.get('/api/quotes');
  quotes.value = res.data;
  setupQuoteSlider();
});

// Set up the quote slider
const setupQuoteSlider = () => {
  timer = setInterval(() => {
    nextQuote();
  }, 5000); // Change quote every 10 seconds
};

// Switch to the next quote in the slider
const nextQuote = () => {
  currentQuoteIndex.value = (currentQuoteIndex.value + 1) % quotes.value.length;
};

// Fetch news data
const getNews = async () => {
  try {
    const res = await axios.get('/api/positive-news-feed');
    latestPositiveNews.value = res.data.data['positive-news'].slice(0, 1);
    positiveNewsLoading.value = false;
    latestGoodNews.value = res.data.data['good-news-network'].slice(0, 1);
    goodNewsNetworkLoading.value = false;
  } catch (error) {
    positiveNewsLoading.value = false;
    positiveNewsError.value = true;
    console.error(error);
  }
};

// Clear the timer when the component is unmounted
onBeforeUnmount(() => {
  clearInterval(timer);
});
</script>

<style>
.quote-fade-enter-active,
.quote-fade-leave-active {
  transition: opacity 0.5s;
}

.quote-fade-enter,
.quote-fade-leave-to {
  opacity: 0;
}

.card-img-top {
  width: 100%;
  height: 20vw;
  object-fit: cover;
}
</style>
