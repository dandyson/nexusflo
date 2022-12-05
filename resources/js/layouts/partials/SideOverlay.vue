<script setup>
import { reactive, onMounted, onUnmounted } from "vue";
import { useTemplateStore } from "@/stores/template";

// SimpleBar, for more info and examples you can check out https://github.com/Grsmto/simplebar/tree/master/packages/simplebar-vue
import SimpleBar from "simplebar";

// Grab example data
import activity from "@/data/activity";
import sales from "@/data/sales";
import users from "@/data/users";

const salesToday = sales.today;
const salesYesterday = sales.yesterday;

// Main store
const store = useTemplateStore();

// Reactive state
const state = reactive({
  settings: {
    status: true,
    updated: true,
    notifications: {
      email: true,
      sms: true,
    },
    api: true,
  },
});

// Close side overlay on ESCAPE key down
function eventSideOverlay(event) {
  if (event.which === 27) {
    event.preventDefault();
    store.sideOverlay({ mode: "close" });
  }
}

// Init SimpleBar (custom scrolling) and attach ESCAPE key event listener
onMounted(() => {
  new SimpleBar(document.getElementById("side-overlay"));

  document.addEventListener("keydown", eventSideOverlay);
});

// Remove keydown event listener
onUnmounted(() => {
  document.removeEventListener("keydown", eventSideOverlay);
});
</script>

<template>
  <!-- Side Overlay-->
  <aside id="side-overlay">
    <slot>
      <!-- Side Header -->
      <div class="content-header border-bottom">
        <slot name="header">
          <!-- User Avatar -->
          <a class="img-link me-1" href="javascript:void(0)">
            <img
              class="img-avatar img-avatar32"
              src="/assets/media/avatars/avatar10.jpg"
              alt="Avatar"
            />
          </a>
          <!-- END User Avatar -->

          <!-- User Info -->
          <div class="ms-2">
            <a class="text-dark fw-semibold fs-sm" href="javascript:void(0)"
              >John Smith</a
            >
          </div>
          <!-- END User Info -->
        </slot>

        <!-- Close Side Overlay -->
        <button
          type="button"
          class="ms-auto btn btn-sm btn-alt-danger"
          @click="store.sideOverlay({ mode: 'close' })"
        >
          <i class="fa fa-fw fa-times"></i>
        </button>
        <!-- END Close Side Overlay -->
      </div>
      <!-- END Side Header -->

      <slot name="content">
        <!-- Side Content -->
        <div class="content-side">
          <!-- Side Overlay Tabs -->
          <BaseBlock transparent :rounded="false" class="pull-x pull-t">
            <template #content>
              <ul
                class="nav nav-tabs nav-tabs-block nav-justified"
                role="tablist"
              >
                <li class="nav-item">
                  <button
                    type="button"
                    class="nav-link active"
                    id="so-overview-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#so-overview"
                    role="tab"
                    aria-controls="so-overview"
                    aria-selected="true"
                  >
                    <i class="fa fa-fw fa-coffee text-gray opacity-75 me-1"></i>
                    Overview
                  </button>
                </li>
                <li class="nav-item">
                  <button
                    type="button"
                    class="nav-link"
                    id="so-sales-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#so-sales"
                    role="tab"
                    aria-controls="so-sales"
                    aria-selected="false"
                  >
                    <i
                      class="fa fa-fw fa-chart-line text-gray opacity-75 me-1"
                    ></i>
                    Sales
                  </button>
                </li>
              </ul>
              <div class="block-content tab-content overflow-hidden">
                <!-- Overview Tab -->
                <div
                  class="tab-pane pull-x fade fade-left show active"
                  id="so-overview"
                  role="tabpanel"
                  aria-labelledby="so-overview-tab"
                  tabindex="0"
                >
                  <!-- Activity -->
                  <BaseBlock
                    title="Recent Activity"
                    header-bg
                    transparent
                    btn-option-content
                  >
                    <ul class="nav-items mb-0">
                      <li
                        v-for="(appEvent, index) in activity"
                        :key="`event-${index}`"
                      >
                        <a class="text-dark d-flex py-2" :href="appEvent.href">
                          <div class="flex-shrink-0 me-3 ms-2">
                            <i
                              :class="`${appEvent.icon} text-${appEvent.color}`"
                            ></i>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">{{ appEvent.title }}</div>
                            <div>{{ appEvent.subtitle }}</div>
                            <small class="text-muted">{{
                              appEvent.time
                            }}</small>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </BaseBlock>
                  <!-- END Activity -->

                  <!-- Online Friends -->
                  <BaseBlock
                    title="Online Friends"
                    header-bg
                    transparent
                    btn-option-content
                  >
                    <ul class="nav-items mb-0">
                      <li
                        v-for="(user, index) in users"
                        :key="`userlist-${index}`"
                      >
                        <a class="d-flex py-2" :href="`${user.href}`">
                          <div
                            class="me-3 ms-2 overlay-container overlay-bottom"
                          >
                            <img
                              class="img-avatar img-avatar48"
                              :src="`/assets/media/avatars/${user.avatar}.jpg`"
                              alt="User Photo"
                            />
                            <span
                              :class="`overlay-item item item-tiny item-circle border border-2 border-white bg-${user.statusColor}`"
                            ></span>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">{{ user.name }}</div>
                            <div class="text-muted">{{ user.profession }}</div>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </BaseBlock>
                  <!-- END Online Friends -->

                  <!-- Quick Settings -->
                  <BaseBlock
                    title="Quick Settings"
                    header-bg
                    transparent
                    btn-option-content
                  >
                    <div class="mb-4">
                      <p class="fs-sm fw-semibold mb-2">Online Status</p>
                      <div class="form-check form-switch">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value
                          id="so-settings-check1"
                          name="so-settings-check1"
                          v-model="state.settings.status"
                        />
                        <label
                          class="form-check-label fs-sm"
                          for="so-settings-check1"
                          >Show your status to all</label
                        >
                      </div>
                    </div>
                    <div class="mb-4">
                      <p class="fs-sm fw-semibold mb-2">Auto Updates</p>
                      <div class="form-check form-switch">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value
                          id="so-settings-check2"
                          name="so-settings-check2"
                          v-model="state.settings.updated"
                        />
                        <label
                          class="form-check-label fs-sm"
                          for="so-settings-check2"
                          >Keep up to date</label
                        >
                      </div>
                    </div>
                    <div class="mb-4">
                      <p class="fs-sm fw-semibold mb-1">Application Alerts</p>
                      <div class="space-y-2">
                        <div class="form-check form-switch">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            value
                            id="so-settings-check3"
                            name="so-settings-check3"
                            v-model="state.settings.notifications.email"
                          />
                          <label
                            class="form-check-label fs-sm"
                            for="so-settings-check3"
                            >Email Notifications</label
                          >
                        </div>
                        <div class="form-check form-switch">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            value
                            id="so-settings-check4"
                            name="so-settings-check4"
                            v-model="state.settings.notifications.sms"
                          />
                          <label
                            class="form-check-label fs-sm"
                            for="so-settings-check4"
                            >SMS Notifications</label
                          >
                        </div>
                      </div>
                    </div>
                    <div class="mb-4">
                      <p class="fs-sm fw-semibold mb-1">API</p>
                      <div class="form-check form-switch">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value
                          id="so-settings-check5"
                          name="so-settings-check5"
                          v-model="state.settings.api"
                        />
                        <label
                          class="form-check-label fs-sm"
                          for="so-settings-check5"
                          >Enable access</label
                        >
                      </div>
                    </div>
                  </BaseBlock>
                  <!-- END Quick Settings -->
                </div>
                <!-- END Overview Tab -->

                <!-- Sales Tab -->
                <div
                  class="tab-pane pull-x fade fade-right"
                  id="so-sales"
                  role="tabpanel"
                  aria-labelledby="so-sales-tab"
                  tabindex="0"
                >
                  <!-- Stats -->
                  <BaseBlock>
                    <div class="row pull-t">
                      <div class="col-6">
                        <div class="fs-sm fw-semibold text-uppercase">
                          Sales
                        </div>
                        <a class="fs-lg" href="javascript:void(0)">22.030</a>
                      </div>
                      <div class="col-6">
                        <div class="fs-sm fw-semibold text-uppercase">
                          Balance
                        </div>
                        <a class="fs-lg" href="javascript:void(0)">$4.589,00</a>
                      </div>
                    </div>
                  </BaseBlock>

                  <!-- END Stats -->

                  <!-- Today -->
                  <BaseBlock title="Today" header-bg>
                    <template #options>
                      <span class="fs-sm text-muted">$996</span>
                    </template>

                    <ul class="nav-items mb-0">
                      <li
                        v-for="(sale, index) in salesToday"
                        :key="`sale-today-${index}`"
                      >
                        <a class="text-dark d-flex py-2" :href="`${sale.href}`">
                          <div class="flex-shrink-0 me-3 ms-2">
                            <i :class="`${sale.icon}`"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">{{ sale.title }}</div>
                            <small class="text-muted">{{ sale.time }}</small>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </BaseBlock>
                  <!-- END Today -->

                  <!-- Yesterday -->
                  <BaseBlock title="Yesterday" header-bg>
                    <template #options>
                      <span class="fs-sm text-muted">$765</span>
                    </template>

                    <ul class="nav-items">
                      <li
                        v-for="(sale, index) in salesYesterday"
                        :key="`sale-today-${index}`"
                      >
                        <a class="text-dark d-flex py-2" :href="`${sale.href}`">
                          <div class="flex-shrink-0 me-3 ms-2">
                            <i :class="`${sale.icon}`"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">{{ sale.title }}</div>
                            <small class="text-muted">{{ sale.time }}</small>
                          </div>
                        </a>
                      </li>
                    </ul>
                    <div class="text-center">
                      <a
                        class="btn btn-sm btn-alt-secondary"
                        href="javascript:void(0)"
                      >
                        <i class="fa fa-arrow-down opacity-50 me-1"></i> Load
                        More..
                      </a>
                    </div>
                  </BaseBlock>
                  <!-- END Yesterday -->
                </div>
                <!-- END Sales Tab -->
              </div>
            </template>
          </BaseBlock>
          <!-- END Side Overlay Tabs -->
        </div>
        <!-- END Side Content -->
      </slot>
    </slot>
  </aside>
  <!-- END Side Overlay -->
</template>
