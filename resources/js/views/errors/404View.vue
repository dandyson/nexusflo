<script setup></script>

<template>
  <!-- Page Content -->
  <div class="hero">
    <div class="hero-inner text-center">
      <div class="bg-body-extra-light">
        <div class="content content-full overflow-hidden">
          <div class="py-4">
            <!-- Error Header -->
            <div class="d-flex flex-column align-items-center">
              <img
                class=""
                src="/assets/media/logos/logo.svg"
                alt="Logo"
                width="100"
              />
              <h1 class="display-1 fw-bolder text-smooth">404</h1>
            </div>
            <h2 class="h4 fw-normal text-muted mb-5">
              We are sorry but the page you are looking for was not found..
            </h2>
            <RouterLink :to="{ name: 'backend-dashboard' }" class="link-fx"
              >Go Back to Dashboard</RouterLink
            >
            <!-- END Error Header -->
          </div>
        </div>
      </div>
    
    </div>
  </div>
  <!-- END Page Content -->
</template>
