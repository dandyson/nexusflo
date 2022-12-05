<script setup>
import VueCountdown from "@chenfengyuan/vue-countdown";
</script>

<template>
  <!-- Page Content -->
  <BaseBackground image="/assets/media/photos/photo8@2x.jpg">
    <div class="bg-primary-dark-op">
      <div class="hero bg-black-50">
        <div class="hero-inner">
          <div class="content content-full">
            <div class="row justify-content-center">
              <div class="col-md-6 py-3 text-center">
                <div class="push">
                  <RouterLink
                    :to="{ name: 'backend-dashboard' }"
                    class="link-fx fw-bold fs-1"
                  >
                    <span class="text-white">OneUI Vue Edition</span>
                  </RouterLink>
                  <p class="text-white-75">
                    Stay tuned! We are working on it and it is coming soon!
                  </p>
                </div>

                <!-- Countdown -->
                <VueCountdown
                  :time="408 * 24 * 60 * 60 * 955"
                  v-slot="{ days, hours, minutes, seconds }"
                >
                  <div class="row items-push py-3 text-center">
                    <div class="col-6 col-md-3">
                      <div class="fs-1 fw-bold text-white">{{ days }}</div>
                      <div class="fs-sm fw-bold text-muted">DAYS</div>
                    </div>
                    <div class="col-6 col-md-3">
                      <div class="fs-1 fw-bold text-white">{{ hours }}</div>
                      <div class="fs-sm fw-bold text-muted">HOURS</div>
                    </div>
                    <div class="col-6 col-md-3">
                      <div class="fs-1 fw-bold text-white">{{ minutes }}</div>
                      <div class="fs-sm fw-bold text-muted">MINUTES</div>
                    </div>
                    <div class="col-6 col-md-3">
                      <div class="fs-1 fw-bold text-white">{{ seconds }}</div>
                      <div class="fs-sm fw-bold text-muted">SECONDS</div>
                    </div>
                  </div>
                </VueCountdown>
                <!-- END Countdown -->

                <form @submit.prevent class="push">
                  <div class="row justify-content-center mb-4">
                    <div class="col-md-10 col-xl-6">
                      <div
                        class="input-group input-group-lg bg-primary-dark-op p-3 rounded-3 mb-2"
                      >
                        <input
                          type="email"
                          class="form-control border-0"
                          placeholder="Enter your email.."
                          required
                        />
                        <button type="submit" class="btn btn-primary">
                          Subscribe
                        </button>
                      </div>
                      <div class="fs-sm text-white-50">
                        Don't worry, we hate spam.
                      </div>
                    </div>
                  </div>
                </form>
                <RouterLink
                  :to="{ name: 'backend-pages-generic-blank' }"
                  class="btn btn-dark"
                >
                  <i class="fa fa-arrow-left opacity-50 me-1"></i> Go Back to
                  Dashboard
                </RouterLink>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </BaseBackground>
  <!-- END Page Content -->
</template>
