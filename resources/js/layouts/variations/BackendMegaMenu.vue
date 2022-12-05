<script setup>
import { useTemplateStore } from "@/stores/template";

import BaseLayout from "@/layouts/BaseLayout.vue";

// Main store
const store = useTemplateStore();

// Set default elements for this layout
store.setLayout({
  header: true,
  sidebar: true,
  sideOverlay: true,
  footer: true,
});

// Set various template options for this layout variation
store.headerStyle({ mode: "light" });
store.mainContent({ mode: "narrow" });
</script>

<template>
  <BaseLayout>
    <!-- Header Content Left -->
    <!-- Using the available v-slot, we can override the default Header content from layouts/partials/Header.vue -->
    <template #header-content-left>
      <!-- Toggle Sidebar -->
      <button
        type="button"
        class="btn btn-sm btn-alt-secondary me-2 d-lg-none"
        @click="store.sidebar({ mode: 'toggle' })"
      >
        <i class="fa fa-fw fa-bars"></i>
      </button>
      <!-- END Toggle Sidebar -->

      <!-- Mega Menu -->
      <nav class="d-none d-lg-flex align-items-center space-x-2">
        <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
          <i class="fa fa-home opacity-50 me-2"></i>
          <span>Dashboard</span>
        </a>
        <div class="dropdown">
          <button
            class="btn btn-sm btn-alt-secondary"
            type="button"
            id="page-header-mega-menu-websites"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            <i class="fa fa-globe-americas opacity-50 me-2"></i>
            <span>Websites</span>
            <i class="fa fa-fw fa-angle-down opacity-50 ms-2"></i>
          </button>
          <div
            class="dropdown-menu dropdown-menu-xxl dropdown-menu-mega p-0 border-0"
            aria-labelledby="page-header-mega-menu-websites"
          >
            <div
              class="px-3 py-3 bg-primary rounded-top d-flex align-items-center justify-content-between"
            >
              <h3 class="h5 fw-semibold text-white mb-0">My Projects</h3>
              <i
                class="fa fa-2x fa-globe-americas text-white opacity-25 ms-2"
              ></i>
            </div>
            <div class="p-3">
              <div class="row g-3 fs-sm">
                <div class="col-xxl-4">
                  <BaseBlock
                    tag="a"
                    href="javascript:void(0)"
                    transparent
                    bordered
                    link-pop
                    class="text-center mb-0"
                  >
                    <i class="fa fa-2x fa-globe-americas opacity-50"></i>
                    <p class="fw-medium mt-3">example.com</p>
                  </BaseBlock>
                </div>
                <div class="col-xxl-4">
                  <BaseBlock
                    tag="a"
                    href="javascript:void(0)"
                    transparent
                    bordered
                    link-pop
                    class="text-center mb-0"
                  >
                    <i class="fa fa-2x fa-globe-americas opacity-50"></i>
                    <p class="fw-medium mt-3">example2.com</p>
                  </BaseBlock>
                </div>
                <div class="col-xxl-4">
                  <BaseBlock
                    tag="a"
                    href="javascript:void(0)"
                    transparent
                    bordered
                    link-pop
                    class="text-center mb-0"
                  >
                    <i class="fa fa-2x fa-globe-americas opacity-50"></i>
                    <p class="fw-medium mt-3">example3.com</p>
                  </BaseBlock>
                </div>
                <div class="col-xxl-4">
                  <BaseBlock
                    tag="a"
                    href="javascript:void(0)"
                    transparent
                    bordered
                    link-pop
                    class="text-center mb-0"
                  >
                    <i class="fa fa-2x fa-globe-americas opacity-50"></i>
                    <p class="fw-medium mt-3">example4.com</p>
                  </BaseBlock>
                </div>
                <div class="col-xxl-4">
                  <BaseBlock
                    tag="a"
                    href="javascript:void(0)"
                    transparent
                    bordered
                    link-pop
                    class="text-center mb-0"
                  >
                    <i class="fa fa-2x fa-plus text-success opacity-50"></i>
                    <p class="fw-medium mt-3">Add New</p>
                  </BaseBlock>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="dropdown">
          <button
            class="btn btn-sm btn-alt-secondary"
            type="button"
            id="page-header-mega-menu-apps"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            <i class="fa fa-box opacity-50 me-2"></i>
            <span>Apps</span>
            <i class="fa fa-fw fa-angle-down opacity-50 ms-2"></i>
          </button>
          <div
            class="dropdown-menu dropdown-menu-xxl dropdown-menu-mega p-0 border-0"
            aria-labelledby="page-header-mega-menu-apps"
          >
            <div
              class="px-3 py-3 bg-primary rounded-top d-flex align-items-center justify-content-between"
            >
              <h3 class="h5 fw-semibold text-white mb-0">My Applications</h3>
              <i class="fa fa-2x fa-box text-white opacity-25 ms-2"></i>
            </div>
            <div class="p-3">
              <div class="row fs-sm">
                <div class="col-xxl-4">
                  <h4 class="h6 p-2 mb-3 bg-body rounded-3">
                    <i class="fa fa-icon"></i>
                    <span>Office</span>
                  </h4>
                  <ul class="list list-simple-mini mb-0">
                    <li>
                      <a class="fw-semibold" href="javascript:void(0)">
                        <i
                          class="fa fa-fw fa-file-word text-primary-lighter me-1"
                        ></i>
                        Documents
                      </a>
                    </li>
                    <li>
                      <a class="fw-semibold" href="javascript:void(0)">
                        <i
                          class="fa fa-fw fa-file-excel text-primary-lighter me-1"
                        ></i>
                        Spreadsheets
                      </a>
                    </li>
                    <li>
                      <a class="fw-semibold" href="javascript:void(0)">
                        <i
                          class="fa fa-fw fa-file-powerpoint text-primary-lighter me-1"
                        ></i>
                        Presentation
                      </a>
                    </li>
                    <li>
                      <a class="fw-semibold" href="javascript:void(0)">
                        <i
                          class="fa fa-fw fa-file-alt text-primary-lighter me-1"
                        ></i>
                        Forms
                      </a>
                    </li>
                    <li>
                      <a class="fw-semibold" href="javascript:void(0)">
                        <i
                          class="fa fa-fw fa-file-csv text-primary-lighter me-1"
                        ></i>
                        Database
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="col-xxl-4 mt-2 mt-xxl-0">
                  <h4 class="h6 p-2 mb-3 bg-body rounded-3">
                    <i class="fa fa-icon"></i>
                    <span>Development</span>
                  </h4>
                  <ul class="list list-simple-mini mb-0">
                    <li>
                      <a class="fw-semibold" href="javascript:void(0)">
                        <i
                          class="fa fa-fw fa-code text-primary-lighter me-1"
                        ></i>
                        VS Code
                      </a>
                    </li>
                    <li>
                      <a class="fw-semibold" href="javascript:void(0)">
                        <i
                          class="fa fa-fw fa-code-branch text-primary-lighter me-1"
                        ></i>
                        Repository
                      </a>
                    </li>
                    <li>
                      <a class="fw-semibold" href="javascript:void(0)">
                        <i
                          class="fab fa-fw fa-figma text-primary-lighter me-1"
                        ></i>
                        Figma
                      </a>
                    </li>
                    <li>
                      <a class="fw-semibold" href="javascript:void(0)">
                        <i
                          class="fab fa-fw fa-stack-overflow text-primary-lighter me-1"
                        ></i>
                        Stack Overflow
                      </a>
                    </li>
                    <li>
                      <a class="fw-semibold" href="javascript:void(0)">
                        <i
                          class="fab fa-fw fa-sourcetree text-primary-lighter me-1"
                        ></i>
                        Sourcetree
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="col-xxl-4 mt-2 mt-xxl-0">
                  <h4 class="h6 p-2 mb-3 bg-body rounded-3">
                    <i class="fa fa-icon"></i>
                    <span>Communication</span>
                  </h4>
                  <ul class="list list-simple-mini mb-0">
                    <li>
                      <a class="fw-semibold" href="javascript:void(0)">
                        <i
                          class="fab fa-fw fa-slack text-primary-lighter me-1"
                        ></i>
                        Slack
                      </a>
                    </li>
                    <li>
                      <a class="fw-semibold" href="javascript:void(0)">
                        <i
                          class="fab fa-fw fa-discord text-primary-lighter me-1"
                        ></i>
                        Discord
                      </a>
                    </li>
                    <li>
                      <a class="fw-semibold" href="javascript:void(0)">
                        <i
                          class="fab fa-fw fa-discourse text-primary-lighter me-1"
                        ></i>
                        Discourse
                      </a>
                    </li>
                    <li>
                      <a class="fw-semibold" href="javascript:void(0)">
                        <i
                          class="fab fa-fw fa-diaspora text-primary-lighter me-1"
                        ></i>
                        Diaspora
                      </a>
                    </li>
                    <li>
                      <a class="fw-semibold" href="javascript:void(0)">
                        <i
                          class="fa fa-fw fa-comments text-primary-lighter me-1"
                        ></i>
                        Forum
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="dropdown">
          <button
            class="btn btn-sm btn-alt-secondary"
            type="button"
            id="page-header-mega-menu-settings"
            data-bs-toggle="dropdown"
            data-bs-auto-close="outside"
            aria-expanded="false"
          >
            <i class="fa fa-cog opacity-50 me-2"></i>
            <span>Settings</span>
            <i class="fa fa-fw fa-angle-down opacity-50 ms-2"></i>
          </button>
          <div
            class="dropdown-menu dropdown-menu-xl dropdown-menu-mega p-0 border-0"
            aria-labelledby="page-header-mega-menu-settings"
          >
            <div
              class="px-3 py-3 bg-primary rounded-top d-flex align-items-center justify-content-between"
            >
              <h3 class="h5 fw-semibold text-white mb-0">My Settings</h3>
              <i class="fa fa-2x fa-cog text-white opacity-25 ms-2"></i>
            </div>
            <div class="p-3">
              <!-- Quick Settings Form -->
              <form @submit.prevent>
                <div class="row fs-sm">
                  <div class="col-xxl-6 space-y-4">
                    <div>
                      <p class="fs-sm fw-semibold mb-2">Online Status</p>
                      <div class="form-check form-switch">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="mega-settings-status"
                          name="mega-settings-status"
                        />
                        <label
                          class="form-check-label fs-sm"
                          for="mega-settings-status"
                          >Make visible</label
                        >
                      </div>
                    </div>
                    <div>
                      <p class="fs-sm fw-semibold mb-2">Updates</p>
                      <div class="space-y-2">
                        <div class="form-check form-switch">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            value=""
                            id="mega-settings-update-app"
                            name="mega-settings-update-app"
                          />
                          <label
                            class="form-check-label fs-sm"
                            for="mega-settings-update-app"
                            >Applications</label
                          >
                        </div>
                        <div class="form-check form-switch">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            value=""
                            id="mega-settings-update-sales"
                            name="mega-settings-update-sales"
                            checked
                          />
                          <label
                            class="form-check-label fs-sm"
                            for="mega-settings-update-sales"
                            >Sales</label
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xxl-6 space-y-4 mt-4 mt-xxl-0">
                    <div>
                      <p class="fs-sm fw-semibold mb-1">Application Alerts</p>
                      <div class="space-y-2">
                        <div class="form-check form-switch">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            value=""
                            id="mega-settings-email"
                            name="mega-settings-email"
                            checked
                          />
                          <label
                            class="form-check-label fs-sm"
                            for="mega-settings-email"
                            >Email Notifications</label
                          >
                        </div>
                        <div class="form-check form-switch">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            value=""
                            id="mega-settings-sms"
                            name="mega-settings-sms"
                          />
                          <label
                            class="form-check-label fs-sm"
                            for="mega-settings-sms"
                            >SMS Notifications</label
                          >
                        </div>
                      </div>
                    </div>
                    <div>
                      <p class="fs-sm fw-semibold mb-1">API</p>
                      <div class="form-check form-switch">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="mega-settings-api"
                          name="mega-settings-api"
                          checked
                        />
                        <label
                          class="form-check-label fs-sm"
                          for="mega-settings-api"
                          >Enable access</label
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <!-- END Quick Settings Form -->
            </div>
          </div>
        </div>
      </nav>
      <!-- END Mega Menu -->
    </template>
    <!-- END Header Content Left -->
  </BaseLayout>
</template>
