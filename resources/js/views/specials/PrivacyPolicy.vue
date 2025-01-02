<template>
  <!-- Page Content -->
  <BaseBackground image="/assets/media/photos/photo28@2x.jpg">
    <div class="row g-0 bg-primary-dark-op">
      <!-- Meta Info Section -->
      <div
        class="hero-static col-lg-4 d-none d-lg-flex flex-column justify-content-center"
      >
        <div class="p-4 p-xl-5 flex-grow-1 d-flex align-items-center">
          <div class="w-100">
            <RouterLink
              :to="{ name: 'landing' }"
              class="link-fx fw-semibold fs-2 text-white"
            >
              <img
                class="img-fluid me-2"
                src="/assets/media/logos/logo.svg"
                alt="Logo"
                width="40"
              />
              Nexus<span class="fw-normal">Flo</span>
            </RouterLink>
            <p class="text-white-75 me-xl-8 mt-2">
              “Be happy in the moment, that's enough. Each moment is all we need, not more.”
            </p>
          </div>
        </div>
        <div
          class="p-4 p-xl-5 d-xl-flex justify-content-between align-items-center fs-sm"
        >
          <p class="fw-medium text-white-50 mb-0">
            <strong>{{ store.app.name + " " + store.app.version }}</strong>
            &copy; {{ store.app.copyright }}
          </p>
        </div>
      </div>
      <!-- END Meta Info Section -->

      <!-- Main Section -->
      <div
        class="hero-static col-lg-8 d-flex flex-column align-items-center bg-body-extra-light"
      >
        <div class="p-3 w-100 d-lg-none text-center">
          <RouterLink
            :to="{ name: 'landing' }"
            class="link-fx fw-semibold fs-3 text-dark"
          >
            Nexus<span class="fw-normal">Flo</span>
          </RouterLink>
        </div>
        <div class="p-4 w-100 flex-grow-1 d-flex align-items-center">
          <div class="w-100">
            <!-- Header -->
            <div class="text-center mb-5">
              <p class="mb-3">
                <img
                  class="img-fluid"
                  src="/assets/media/logos/logo.svg"
                  alt="Logo"
                  width="70"
                />
              </p>
              <h1 class="fw-bold mb-2">Privacy Policy</h1>
            </div>
            <!-- END Header -->

            <!-- Privacy Policy Text -->
            <div class="row g-0 justify-content-center">
              <div class="col-sm-8">
                <h1>Privacy Policy for NexusFlo</h1>

                <p>Last updated: 6th December 2024</p>

                <h2>Introduction</h2>

                <p>Welcome to NexusFlo! This privacy policy outlines how we collect, use, and protect your personal information. By using our web app, you agree to the terms described in this policy.</p>

                <h2>Information We Collect</h2>

                <h3>1. Account Information</h3>
                <p>When you register for an account on NexusFlo, we collect and store the following information:</p>
                <ul>
                    <li>Name</li>
                    <li>Email address</li>
                    <li>Password (stored securely using Laravel Fortify)</li>
                </ul>

                <h3>2. Profile Information</h3>
                <p>You have the option to enhance your user experience by providing additional information:</p>
                <ul>
                    <li>Avatar (stored in our production database)</li>
                    <li>Profile image (stored in our production database and on AWS S3 bucket)</li>
                </ul>

                <h2>How We Use Your Information</h2>
                <p>Your information is used for the following purposes:</p>
                <ul>
                    <li>User Authentication: Laravel Fortify utilizes your email and password for secure authentication.</li>
                    <li>Profile Enhancement: Your name, avatar, and profile image are used to personalize your experience on the platform.</li>
                </ul>

                <h2>Data Storage and Security</h2>
                <p>Your data is stored securely in our production database hosted on Heroku. Passwords are hashed and encrypted using industry-standard practices. Profile images are stored on both our production database and an AWS S3 bucket.</p>

                <h2>Cookies</h2>
                <p>NexusFlo may use cookies to enhance user experience. These cookies are set by Laravel and Laravel Fortify for authentication and session management.</p>

                <h2>Third-Party Services</h2>
                <p>We use the following third-party services to operate NexusFlo:</p>
                <ul>
                    <li><strong>Amazon Web Services (AWS)</strong>: We use AWS S3 for storing profile images. <a href="https://aws.amazon.com/privacy/" target="_blank" rel="noopener noreferrer">View their privacy policy here</a>.</li>
                    <li><strong>Heroku</strong>: Our application and database are hosted on Heroku. <a href="https://devcenter.heroku.com/articles/security-privacy-compliance" target="_blank" rel="noopener noreferrer">View their privacy policy here</a>.</li>
                </ul>

                <h2>Your Rights</h2>
                <p>As per GDPR, you have the right to:</p>
                <ul>
                    <li><strong>Access Your Data</strong>: Contact us to request details about the data we store.</li>
                    <li><strong>Delete Your Data</strong>: Request deletion of your account and data by emailing nexusfloinfo@gmail.com.</li>
                    <li><strong>Withdraw Consent</strong>: Stop using the app at any time.</li>
                </ul>

                <h2>Data Retention</h2>
                <p>User data will be stored for the duration of your demo account’s existence or until you request its deletion.</p>

                <h2>Changes to this Privacy Policy</h2>
                <p>We may update this privacy policy to reflect changes in our practices. Please check this page periodically for updates.</p>

                <h2>Contact Us</h2>
                <p>If you have any questions or concerns about our privacy policy, please contact us at nexusfloinfo@gmail.com.</p>

                <h2>Key Notice</h2>
                <p>This app is for demonstration purposes only and is not intended for real-world use. By using this app, you acknowledge and accept these terms.</p>
              </div>
            </div>
            <!-- END Privacy Policy Text -->
          </div>
        </div>
        <div
          class="px-4 py-3 w-100 d-lg-none d-flex flex-column flex-sm-row justify-content-between fs-sm text-center text-sm-start"
        >
          <p class="fw-medium text-black-50 py-2 mb-0">
            <strong>{{ store.app.name + " " + store.app.version }}</strong>
            &copy; {{ store.app.copyright }}
          </p>
          <ul class="list list-inline py-2 mb-0">
            <li class="list-inline-item">
              <a class="text-muted fw-medium" href="javascript:void(0)"
                >Legal</a
              >
            </li>
            <li class="list-inline-item">
              <a class="text-muted fw-medium" href="javascript:void(0)"
                >Contact</a
              >
            </li>
            <li class="list-inline-item">
              <a class="text-muted fw-medium" href="javascript:void(0)"
                >Terms</a
              >
            </li>
          </ul>
        </div>
      </div>
      <!-- END Main Section -->
    </div>
  </BaseBackground>
  <!-- END Page Content -->
</template>

<script setup>
import { useTemplateStore } from "@/stores/template";

// Main store and Router
const store = useTemplateStore();
</script>