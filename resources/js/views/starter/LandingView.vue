
<template>
  <div>




<!-- Hero -->
<div id="one-vue-hero" class="bg-body-extra-light">
      <div class="content content-full">
        <div class="row g-0 justify-content-center text-center">
          <div class="col-9 col-xl-6 pt-5 hero-content-container">
            <img class="img-fluid" src="/assets/media/logos/logo.svg" alt="Logo" width="100" />
            <h1 class="fw=bold mt-3 mb-2">
              Center
              <span class="fw-light">Your Life</span>
            </h1>
            <p class="fs-lg fw-medium text-muted mb-4">
              Manage your mind with an app that allows you to manage not just your busy day, but your inner peace as well.
            </p>
            <RouterLink :to="{ name: 'register' }" class="btn btn-primary px-4 py-3" v-click-ripple>
              Sign Up Today
              <i class="fa fa-fw fa-arrow-right ms-1 opacity-50"></i>
            </RouterLink>
          </div>
        </div>
      </div>
    </div>
    <!-- END Hero -->

    <!-- Hero After -->
    <div id="one-vue-hero-after" class="bg-body-light">
      <div class="content content-full">
        <div class="px-lg-8 text-center">
          <BaseBlock
            fx-shadow
            class="overflow-hidden"
            content-class="p-2"
            style="margin-top: -200px"
          >
            <img
              class="img-fluid"
              src="/assets/media/photos/nexusflohero.png"
              alt="Hero Promo Light Dashboard"
            />
          </BaseBlock>
        </div>
      </div>
    </div>
    <!-- END Hero After -->

    <!-- Power of Vite -->
    <div id="one-vue-power-of-vite" class="bg-body-extra-light">
      <div class="content content-full">
        <div class="pt-4 pb-2 py-md-5">
          <div class="row mb-5">
            <div class="col-md-6">
              <h2 class="h1 fw-bold mb-2">
                With the power of
                <span class="fw-normal">Mindfulness</span>
              </h2>
              <p class="fs-lg fw-medium text-muted mb-0">
                Experience tranquility with our mindfulness-focused app, equipped with essential tools to effortlessly manage your daily stress levels.

              </p>
            </div>
            <div class="col-md-6 d-none d-md-flex align-items-md-center justify-content-md-end">
              <p class="h1 fw-bold text-body-bg-dark mb-0">Let it flow.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="d-flex align-items-center col-md-6 offset-lg-1 order-md-1">
            <div class="w-100 mb-5 mb-md-0 px-lg-6 position-relative">
              <div class="row d-flex flex-column">
                <div class="col-12">
                  <BaseBlock transparent class="bg-body-light">
                    <div class="pb-3 text-center">
                      <img src="/assets/media/photos/nexusflo1.png" alt="Image 1" class="img-fluid">
                    </div>
                  </BaseBlock>
                </div>
                <div class="col-12">
                  <BaseBlock transparent class="bg-body-light">
                    <div class="pb-3 text-center">
                      <img src="/assets/media/photos/nexusflo2.png" alt="Image 2" class="img-fluid">
                    </div>
                  </BaseBlock>
                </div>
              </div>
            </div>
          </div>
          <div class="d-md-flex align-items-md-center col-md-6 col-lg-5 order-md-0">
            <div>
              <div class="d-flex push">
                <div class="item item-rounded bg-body flex-shrink-0">
                  <i class="fa fa-2x fa-hourglass-half"></i>
                </div>
                <div class="ms-4">
                  <h4 class="mb-2">Pomodoro Timer</h4>
                  <p class="text-muted">
                    Invented in the 1980's, this technique perfects time management
                    that will power up your workflow.
                  </p>
                </div>
              </div>
              <div class="d-flex push">
                <div class="item item-rounded bg-body flex-shrink-0">
                  <i class="fa fa-2x fa-om"></i>
                </div>
                <div class="ms-4">
                  <h4 class="mb-2">Meditation Timer </h4>
                  <p class="text-muted">
                    Take things moment by moment with the meditation timer, allowing you
                    to focus and be in the present.
                  </p>
                </div>
              </div>
              <div class="d-flex push">
                <div class="item item-rounded bg-body flex-shrink-0">
                  <i class="fa fa-2x fa-face-grin-beam"></i>
                </div>
                <div class="ms-4">
                  <h4 class="mb-2">Positive News Feed</h4>
                  <p class="text-muted">
                    Collected from positive-only news sites, receive a stream of
                    wonderful news straight to your screen, all in one place.
                  </p>
                </div>
              </div>
              <div class="d-flex push">
                <div class="item item-rounded bg-body flex-shrink-0">
                  <i class="fa fa-2x fa-book-bookmark"></i>
                </div>
                <div class="ms-4">
                  <h4 class="mb-2">Worry Journal</h4>
                  <p class="text-muted">
                    Set your worries straight with a journal to help you recognise anxiety patterns
                    and thinking traps, allowing you to reframe your mind and hack away at worry
                    one entry at a time.
                  </p>
                </div>
              </div>
            </div>
  </div>
</div>

      </div>
    </div>
    <!-- END Power of Vite -->

    <!-- Call To Action -->
    <div id="one-vue-call-to-action" class="bg-body-extra-light">
      <div class="content content-full">
        <div class="py-5 py-md-8 text-center">
          <h2 class="fw-bold mb-2">
            Register <strong> today </strong> to begin enhancing your life.
          </h2>
          <p class="fs-lg fw-medium text-muted mb-4">
            Our quick and easy registration will have you up and running in minutes.
          </p>
          <RouterLink :to="{ name: 'register' }" v-click-ripple>
            <a class="btn btn-success py-2 px-3 m-1" href="https://1.envato.market/5Noyb" v-click-ripple>
              <i class="fa fa-fw fa-user-plus opacity-50"></i>
              <span class="ms-2">Create an Account</span>
            </a>
          </RouterLink>
        </div>
      </div>
    </div>
    <!-- END Call To Action -->
  </div>
</template>

<script setup>
import { useTemplateStore } from "@/stores/template";

// Main store
const store = useTemplateStore();
</script>

<style scoped>
.hero-content-container {
  padding-bottom: 16rem;
}
</style>
