<script setup>
import { useTemplateStore } from "@/stores/template";

// Main store
const store = useTemplateStore();
</script>

<template>
  <!-- Page Content -->
  <div class="hero-static d-flex align-items-center">
    <div class="w-100">
      <!-- Status Section -->
      <div class="bg-body-extra-light">
        <div class="content content-full">
          <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-4 py-4">
              <!-- Header -->
              <div class="text-center mb-5">
                <p class="mb-2">
                  <i class="fa fa-2x fa-circle-notch text-primary"></i>
                </p>
                <h1 class="h4 mb-1">Status Page</h1>
                <h2 class="h6 fw-normal text-muted mb-3">
                  Check out how we are doing
                </h2>
              </div>
              <!-- END Header -->

              <!-- Services -->
              <div class="d-flex justify-content-between">
                <RouterLink
                  :to="{ name: 'backend-pages-generic-blank' }"
                  class="btn btn-lg btn-alt-primary"
                >
                  <i class="fa fa-arrow-left me-2 opacity-50"></i> Dashboard
                </RouterLink>
                <a class="btn btn-lg btn-secondary" href="javascript:void(0)">
                  <i class="fa fa-rss me-2 opacity-50"></i>
                  <span class="d-none d-sm-inline-block">Subscribe</span>
                </a>
              </div>
              <hr />
              <div class="alert alert-warning" role="alert">
                <p class="fw-medium fs-sm text-center mb-0">
                  Payments are currently under maintenance, please stay tuned.
                </p>
              </div>
              <div class="alert alert-danger" role="alert">
                <p class="fw-medium fs-sm text-center mb-0">
                  Our frontend is experiencing some issues but we are on it!
                </p>
              </div>
              <ul class="list-group push">
                <li
                  class="list-group-item d-flex justify-content-between align-items-center fw-medium"
                >
                  Backend
                  <span
                    class="fs-sm fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success"
                    >Operational</span
                  >
                </li>
                <li
                  class="list-group-item d-flex justify-content-between align-items-center fw-medium"
                >
                  Frontend
                  <span
                    class="fs-sm fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger"
                    >Down</span
                  >
                </li>
                <li
                  class="list-group-item d-flex justify-content-between align-items-center fw-medium"
                >
                  API
                  <span
                    class="fs-sm fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success"
                    >Operational</span
                  >
                </li>
                <li
                  class="list-group-item d-flex justify-content-between align-items-center fw-medium"
                >
                  Payments
                  <span
                    class="fs-sm fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning"
                    >Maintenance</span
                  >
                </li>
                <li
                  class="list-group-item d-flex justify-content-between align-items-center fw-medium"
                >
                  Helpdesk
                  <span
                    class="fs-sm fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success"
                    >Operational</span
                  >
                </li>
              </ul>
              <!-- END Services -->
            </div>
          </div>
        </div>
      </div>
      <!-- END Status Section -->

      <!-- Footer -->
      <div class="fs-sm text-center text-muted py-3">
        <strong>{{ store.app.name + " " + store.app.version }}</strong> &copy;
        {{ store.app.copyright }}
      </div>
      <!-- END Footer -->
    </div>
  </div>
  <!-- END Page Content -->
</template>
