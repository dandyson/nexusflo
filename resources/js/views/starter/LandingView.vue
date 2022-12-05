<script setup></script>

<template>
  <!-- Hero -->
  <div class="hero bg-body-extra-light">
    <div class="content content-full text-center">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-6">
          <i class="fa fa-2x fa-circle-notch text-primary"></i>
          <h1 class="fw=bold mt-3 mb-2">
            OneUI
            <span class="fw-light">Vue Edition</span>
          </h1>
          <p class="fs-lg fw-medium text-muted mb-4">
            This is a simple layout based page which you can use as a base for
            your landing, authentication, status or error pages.
          </p>
          <RouterLink
            :to="{ name: 'backend-dashboard' }"
            class="btn btn-primary px-4 py-3"
            v-click-ripple
          >
            Enter Dashboard
            <i class="fa fa-fw fa-arrow-right ms-1 opacity-50"></i>
          </RouterLink>
        </div>
      </div>
    </div>
  </div>
  <!-- END Hero -->
</template>
