<script setup>
import { useTemplateStore } from "@/stores/template";
import axios from "axios";
import BaseLayout from "@/layouts/BaseLayout.vue";
import BaseNavigation from "@/components/BaseNavigation.vue";
import { useRouter } from 'vue-router';
import { useRoute } from 'vue-router';

// Main store
const store = useTemplateStore();

// Router & Route
const router = useRouter();
const route = useRoute();

const authUser = {
  name: route.params?.user?.name ?? '',
  email: route.params?.user?.email ?? '',
  avatar: route.params?.user?.avatar ?? '',
}

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

// Methods
const logOut = () => {
  axios.post('/api/logout')
    .then((res) => {
      // Go to sign in
      router.push({ name: "auth-signin3" });
    }).catch(() => {});
}

</script>

<template>
  <BaseLayout>
    <!-- Side Overlay Content -->
    <!-- Using the available v-slot, we can override the default Side Overlay content from layouts/partials/SideOvelay.vue -->
    <template #side-overlay-content>
      <div class="content-side">
        <p>Side Overlay content..</p>
      </div>
    </template>
    <!-- END Side Overlay Content -->

    <!-- Sidebar Content -->
    <!-- Using the available v-slot, we can override the default Sidebar content from layouts/partials/Sidebar.vue -->
    <template #sidebar-content>
      <div class="content-side">
        <BaseNavigation :nodes="[
          {
            name: 'Dashboard',
            to: 'backend-dashboard',
            icon: 'si si-speedometer',
          },
          {
            name: 'News',
            heading: true,
          },
          {
            name: 'Positive News',
            to: 'backend-positive-news',
            icon: 'fa fa-newspaper',
          },
          {
            name: 'Journals',
            heading: true,
          },
          {
            name: 'General Notes',
            to: 'backend-general-notes',
            icon: 'fa fa-book',
          },
          {
            name: 'Worry Journal',
            to: 'backend-worry-journal',
            icon: 'fa fa-book',
          },
          {
            name: 'Tools',
            heading: true,
          },
          {
            name: 'Worry Balancer',
            to: 'backend-worry-balancer',
            icon: 'fa fa-comments',
          },
          {
            name: 'Timers',
            heading: true,
          },
          {
            name: 'Pomodoro Timer',
            to: 'backend-pomodoro',
            icon: 'si si-clock',
          },
          {
            name: 'Meditation Timer',
            to: 'backend-meditation',
            icon: 'fa fa-fw fa-clock',
          },
        ]" />
      </div>
    </template>
    <!-- END Sidebar Content -->

    <!-- Header Content Left -->
    <!-- Using the available v-slot, we can override the default Header content from layouts/partials/Header.vue -->
    <template #header-content-left>
      <!-- Toggle Sidebar -->
      <button type="button" class="btn btn-sm btn-alt-secondary me-2 d-lg-none"
        @click="store.sidebar({ mode: 'toggle' })">
        <i class="fa fa-fw fa-bars"></i>
      </button>
      <!-- END Toggle Sidebar -->

      <!-- Toggle Mini Sidebar -->
      <button type="button" class="btn btn-sm btn-alt-secondary me-2 d-none d-lg-inline-block"
        @click="store.sidebarMini({ mode: 'toggle' })">
        <i class="fa fa-fw fa-ellipsis-v"></i>
      </button>
      <!-- END Toggle Mini Sidebar -->
    </template>
    <!-- END Header Content Left -->

    <!-- Header Content Left -->
    <!-- Using the available v-slot, we can override the default Header content from layouts/partials/Header.vue -->
    <template #header-content-right>
      <!-- User Dropdown -->
      <div class="dropdown d-inline-block ms-2">
        <button type="button" class="btn btn-sm btn-alt-secondary d-flex align-items-center"
          id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img v-if="authUser.avatar !== ''" :src="authUser.avatar" class="rounded-circle" alt="User Avatar" style="width: 21px" />
          <img v-else src="/assets/media/avatars/avatar10.jpg" class="rounded-circle" alt="Default Avatar" style="width: 21px" />
          <span class="d-none d-sm-inline-block ms-2">{{ authUser.name }}</span>
          <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block opacity-50 ms-1 mt-1"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0 border-0"
          aria-labelledby="page-header-user-dropdown">
          <div class="p-3 text-center bg-body-light border-bottom rounded-top">
            <img v-if="authUser.avatar !== ''" :src="authUser.avatar" class="img-avatar img-avatar48 img-avatar-thumb" alt="User Avatar" />
            <img v-else src="/assets/media/avatars/avatar10.jpg" class="img-avatar img-avatar48 img-avatar-thumb" alt="Default Avatar" />
            <p class="mt-2 mb-0 fw-medium">{{ authUser.email }}</p>
          </div>
          <div class="p-2">
            <RouterLink :to="{ name: 'backend-pages-generic-profile' }"
              class="dropdown-item d-flex align-items-center justify-content-between">
              <span class="fs-sm fw-medium">Profile</span>
            </RouterLink>
          </div>
          <div role="separator" class="dropdown-divider m-0"></div>
          <div class="p-2">
            <a @click="logOut"
              href="javascript:void(0)"
              class="dropdown-item d-flex align-items-center justify-content-between">
              <span class="fs-sm fw-medium">Log Out</span>
            </a>
          </div>
        </div>
      </div>
      <!-- END User Dropdown -->
    </template>
    <!-- END Header Content Left -->

    <!-- Footer Content Left -->
    <!-- Using the available v-slot, we can override the default Footer content from layouts/partials/Footer.vue -->
    <template #footer-content-left>
      <strong>NexusFlo</strong>
      &copy; {{ store.app.copyright }}
    </template>
    <!-- END Footer Content Left -->
  </BaseLayout>
</template>
