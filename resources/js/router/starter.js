import { createRouter, createWebHistory } from "vue-router";
import NProgress from "nprogress/nprogress.js";

import { useTemplateStore } from "@/stores/template";

// Main layout variations
import LayoutSimple from "@/layouts/variations/Simple.vue";
import LayoutLanding from "@/layouts/variations/Landing.vue";
import LayoutBackend from "@/layouts/variations/BackendStarter.vue";
import axios from "axios";
import Swal from 'sweetalert2';

// Axios defaults (for API register/login)
axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
axios.defaults.withCredentials = true;

// TODO: Will not need most of these views - delete the ones not needed when done

// Frontend: Landing
const Landing = () => import("@/views/starter/LandingView.vue");

// Frontend: Privacy Policy
const PrivacyPolicy = () => import("@/views/specials/PrivacyPolicy.vue");

// Backend: Dashboard
const AdminDashboard = () => import("@/views/starter/DashboardView.vue");

// Backend: Pomodoro Timer
const PomodoroTimer = () => import("@/views/starter/PomodoroTimer.vue");

// Backend: Meditation Timer
const MeditationTimer = () => import("@/views/starter/MeditationTimer.vue");

// Backend: Positive News
const PositiveNews = () => import("@/views/starter/PositiveNews.vue");

// Backend: General Notes
const GeneralNotes = () => import("@/views/starter/journals/GeneralNotes.vue");

// Backend: Worry Journal
const WorryJournal = () => import("@/views/starter/journals/worry-journal/WorryJournal.vue");
const WorryJournalEntry = () => import("@/views/starter/journals/worry-journal/WorryJournalEntry.vue");

// Backend: Worry Balancer
const WorryBalancer = () => import("@/views/starter/ai/WorryBalancer.vue");

// Backend: Plugins
const BackendPluginsImageCropper = () =>
  import("@/views/backend/plugins/ImageCropperView.vue");
const BackendPluginsCharts = () =>
  import("@/views/backend/plugins/ChartsView.vue");
const BackendPluginsCalendar = () =>
  import("@/views/backend/plugins/CalendarView.vue");
const BackendPluginsCarousel = () =>
  import("@/views/backend/plugins/CarouselView.vue");
const BackendPluginsOffcanvas = () =>
  import("@/views/backend/plugins/OffcanvasView.vue");
const BackendPluginsSyntaxHighlighting = () =>
  import("@/views/backend/plugins/SyntaxHighlightingView.vue");
const BackendPluginsRating = () =>
  import("@/views/backend/plugins/RatingView.vue");
const BackendPluginsDialogs = () =>
  import("@/views/backend/plugins/DialogsView.vue");
const BackendPluginsNotifications = () =>
  import("@/views/backend/plugins/NotificationsView.vue");
const BackendPluginsGallery = () =>
  import("@/views/backend/plugins/GalleryView.vue");

// Backend: Layout
const BackendLayoutPageDefault = () =>
  import("@/views/backend/layout/page/DefaultView.vue");
const BackendLayoutPageFlipped = () =>
  import("@/views/backend/layout/page/FlippedView.vue");
const BackendLayoutDarkModeOn = () =>
  import("@/views/backend/layout/dark-mode/OnView.vue");
const BackendLayoutDarkModeOff = () =>
  import("@/views/backend/layout/dark-mode/OffView.vue");
const BackendLayoutDarkModeSystem = () =>
  import("@/views/backend/layout/dark-mode/SystemView.vue");
const BackendLayoutMainContentFullWidth = () =>
  import("@/views/backend/layout/main-content/FullWidthView.vue");
const BackendLayoutMainContentNarrow = () =>
  import("@/views/backend/layout/main-content/NarrowView.vue");
const BackendLayoutMainContentBoxed = () =>
  import("@/views/backend/layout/main-content/BoxedView.vue");
const BackendLayoutHeaderFixedLight = () =>
  import("@/views/backend/layout/header/FixedLightView.vue");
const BackendLayoutHeaderFixedDark = () =>
  import("@/views/backend/layout/header/FixedDarkView.vue");
const BackendLayoutHeaderStaticLight = () =>
  import("@/views/backend/layout/header/StaticLightView.vue");
const BackendLayoutHeaderStaticDark = () =>
  import("@/views/backend/layout/header/StaticDarkView.vue");
const BackendLayoutSidebarMini = () =>
  import("@/views/backend/layout/sidebar/MiniView.vue");
const BackendLayoutSidebarLight = () =>
  import("@/views/backend/layout/sidebar/LightView.vue");
const BackendLayoutSidebarDark = () =>
  import("@/views/backend/layout/sidebar/DarkView.vue");
const BackendLayoutSidebarHidden = () =>
  import("@/views/backend/layout/sidebar/HiddenView.vue");
const BackendLayoutSideOverlayVisible = () =>
  import("@/views/backend/layout/side-overlay/VisibleView.vue");
const BackendLayoutSideOverlayHoverMode = () =>
  import("@/views/backend/layout/side-overlay/HoverModeView.vue");
const BackendLayoutSideOverlayNoPageOverlay = () =>
  import("@/views/backend/layout/side-overlay/NoPageOverlayView.vue");
const BackendLayoutLoaders = () =>
  import("@/views/backend/layout/LoadersView.vue");
const BackendLayoutApi = () => import("@/views/backend/layout/ApiView.vue");

// Backend: Generic Pages
const BackendPagesGenericBlank = () =>
  import("@/views/backend/pages/generic/BlankView.vue");
const BackendPagesGenericBlankBlock = () =>
  import("@/views/backend/pages/generic/BlankBlockView.vue");
const BackendPagesGenericSearch = () =>
  import("@/views/backend/pages/generic/SearchView.vue");
const BackendPagesGenericProfile = () =>
  import("@/views/backend/pages/generic/ProfileView.vue");
  const BackendPagesGenericEditProfile = () =>
  import("@/views/backend/pages/generic/ProfileEditView.vue");
const BackendPagesGenericInvoice = () =>
  import("@/views/backend/pages/generic/InvoiceView.vue");
const BackendPagesGenericPricingPlans = () =>
  import("@/views/backend/pages/generic/PricingPlansView.vue");
const BackendPagesGenericFaq = () =>
  import("@/views/backend/pages/generic/FaqView.vue");
const BackendPagesGenericInbox = () =>
  import("@/views/backend/pages/generic/InboxView.vue");
const BackendPagesGenericSidebarMiniNav = () =>
  import("@/views/backend/pages/generic/SidebarMiniNavView.vue");

// Backend: Pages
const BackendPagesAuth = () => import("@/views/backend/pages/AuthView.vue");
const BackendPagesErrors = () => import("@/views/backend/pages/ErrorsView.vue");

// Specials
const SpecialsMaintenance = () =>
  import("@/views/specials/MaintenanceView.vue");
const SpecialsStatus = () => import("@/views/specials/StatusView.vue");
const SpecialsComingSoon = () => import("@/views/specials/ComingSoonView.vue");

// Auth
const Login = () => import("@/views/auth/Login.vue");
const Register = () => import("@/views/auth/Register.vue");
const AuthLock3 = () => import("@/views/auth/Lock3View.vue");
const PasswordReminder = () => import("@/views/auth/PasswordReminder.vue");
const PasswordReset = () => import("@/views/auth/PasswordReset.vue");
const VerifyEmail = () => import("@/views/auth/VerifyEmail.vue");

// Errors
const Error400 = () => import("@/views/errors/400View.vue");
const Error401 = () => import("@/views/errors/401View.vue");
const Error403 = () => import("@/views/errors/403View.vue");
const Error404 = () => import("@/views/errors/404View.vue");
const Error500 = () => import("@/views/errors/500View.vue");
const Error503 = () => import("@/views/errors/503View.vue");

let user = {};

// Guards

async function authenticated(to, from, next) {
  try {
    await axios.get('/sanctum/csrf-cookie');
    const response = await axios.get('/api/user');
    to.params.user = response.data;
    next();
  } catch (error) {
    next("/auth/login");
  }
}

// Set all routes
const routes = [
  /*
  |
  |--------------------------------------------------------------------------
  | Landing Routes
  |--------------------------------------------------------------------------
  |
  */
  {
    path: "/",
    component: LayoutLanding,
    children: [
      {
        path: "",
        name: "landing",
        component: Landing,
        beforeEnter: async (to, from, next) => {
          // Redirect to dashboard if user is already logged in - Logged in users should not see landing page
          try {
            await axios.get('sanctum/csrf-cookie');
            const response = await axios.get('api/user');
            to.params.user = response.data;
            next({ name: 'backend-dashboard' });
          } catch (error) {
            next();
          }
        },
      },
    ],
  },

  // EMAIL VERIFICATION ROUTES
  {
    path: '/email/verify/:id/:token',
    name: 'email-verification',
    beforeEnter: (to, from, next) => {
      const store = useTemplateStore();
      store.setVerificationNotificationShown(false);

      axios.post('/api/logout')
        .then((res) => {
            store.createVerifiedToast();
            next('/auth/login');
        })
        .catch(error => {
            console.error('Logout error:', error);
            // If logout fails, you might still want to proceed to the email verification page
            store.createVerifiedToast();
            next();
        });
    },
    props: (route) => ({ verified: true }),
  },

  {
    path: '/verify-email',
    name: 'verify-email',
    component: VerifyEmail,
  },

  /*
  |
  |--------------------------------------------------------------------------
  | Privacy Policy
  |--------------------------------------------------------------------------
  |
  */
  {
    path: '/privacy-policy',
    name: 'privacy-policy',
    component: PrivacyPolicy,
  },

  /*
  |
  |--------------------------------------------------------------------------
  | Backend Routes
  |--------------------------------------------------------------------------
  |
  */
  {
    path: "/backend",
    redirect: "/backend/dashboard",
    meta: { requiresEmailVerification: true },
    component: LayoutBackend,
    beforeEnter: [authenticated],
    props: { user: true },
    children: [
      {
        path: "dashboard",
        name: "backend-dashboard",
        component: AdminDashboard,
      },
       /*
      |--------------------------------------------------------------------------
      | Backend Custom Routes
      |--------------------------------------------------------------------------
      */
      {
        path: "pomodoro-timer",
        name: "backend-pomodoro",
        component: PomodoroTimer,
      },
      {
        path: "meditation",
        name: "backend-meditation",
        component: MeditationTimer,
      },
      {
        path: "positive-news",
        name: "backend-positive-news",
        component: PositiveNews,
      },
      {
        path: "general-notes",
        name: "backend-general-notes",
        component: GeneralNotes,
      },
      {
        path: "worry-journal",
        name: "backend-worry-journal",
        component: WorryJournal,
      },
      {
        path: "worry-journal/create-entry",
        name: "backend-worry-journal-entry",
        component: WorryJournalEntry,
      },
      {
        path: 'worry-journal/edit/:id',
        name: 'backend-edit-worry-journal-entry',
        component: WorryJournalEntry,
        props: true,
      },
      {
        path: "worry-balancer",
        name: "backend-worry-balancer",
        component: WorryBalancer,
      },

      /*
      |--------------------------------------------------------------------------
      | Backend Plugins Routes
      |--------------------------------------------------------------------------
      */
      {
        path: "plugins",
        redirect: "/plugins/image-cropper",
        children: [
          {
            path: "image-cropper",
            name: "backend-plugins-image-cropper",
            component: BackendPluginsImageCropper,
          },
          {
            path: "charts",
            name: "backend-plugins-charts",
            component: BackendPluginsCharts,
          },
          {
            path: "calendar",
            name: "backend-plugins-calendar",
            component: BackendPluginsCalendar,
          },
          {
            path: "carousel",
            name: "backend-plugins-carousel",
            component: BackendPluginsCarousel,
          },
          {
            path: "offcanvas",
            name: "backend-plugins-offcanvas",
            component: BackendPluginsOffcanvas,
          },
          {
            path: "syntax-highlighting",
            name: "backend-plugins-syntax-highlighting",
            component: BackendPluginsSyntaxHighlighting,
          },
          {
            path: "rating",
            name: "backend-plugins-rating",
            component: BackendPluginsRating,
          },
          {
            path: "dialogs",
            name: "backend-plugins-dialogs",
            component: BackendPluginsDialogs,
          },
          {
            path: "notifications",
            name: "backend-plugins-notifications",
            component: BackendPluginsNotifications,
          },
          {
            path: "gallery",
            name: "backend-plugins-gallery",
            component: BackendPluginsGallery,
          },
        ],
      },

      /*
      |--------------------------------------------------------------------------
      | Backend Layout Routes
      |--------------------------------------------------------------------------
      */
      {
        path: "layout",
        redirect: "/layout/api",
        children: [
          {
            path: "page/default",
            name: "backend-layout-page-default",
            component: BackendLayoutPageDefault,
          },
          {
            path: "page/flipped",
            name: "backend-layout-page-flipped",
            component: BackendLayoutPageFlipped,
          },
          {
            path: "dark-mode/on",
            name: "backend-layout-dark-mode-on",
            component: BackendLayoutDarkModeOn,
          },
          {
            path: "dark-mode/off",
            name: "backend-layout-dark-mode-off",
            component: BackendLayoutDarkModeOff,
          },
          {
            path: "dark-mode/system",
            name: "backend-layout-dark-mode-system",
            component: BackendLayoutDarkModeSystem,
          },
          {
            path: "main-content/full-width",
            name: "backend-layout-main-content-full-width",
            component: BackendLayoutMainContentFullWidth,
          },
          {
            path: "main-content/narrow",
            name: "backend-layout-main-content-narrow",
            component: BackendLayoutMainContentNarrow,
          },
          {
            path: "main-content/boxed",
            name: "backend-layout-main-content-boxed",
            component: BackendLayoutMainContentBoxed,
          },
          {
            path: "header/fixed-light",
            name: "backend-layout-header-fixed-light",
            component: BackendLayoutHeaderFixedLight,
          },
          {
            path: "header/fixed-dark",
            name: "backend-layout-header-fixed-dark",
            component: BackendLayoutHeaderFixedDark,
          },
          {
            path: "header/static-light",
            name: "backend-layout-header-static-light",
            component: BackendLayoutHeaderStaticLight,
          },
          {
            path: "header/static-dark",
            name: "backend-layout-header-static-dark",
            component: BackendLayoutHeaderStaticDark,
          },
          {
            path: "sidebar/mini",
            name: "backend-layout-sidebar-mini",
            component: BackendLayoutSidebarMini,
          },
          {
            path: "sidebar/light",
            name: "backend-layout-sidebar-light",
            component: BackendLayoutSidebarLight,
          },
          {
            path: "sidebar/dark",
            name: "backend-layout-sidebar-dark",
            component: BackendLayoutSidebarDark,
          },
          {
            path: "sidebar/hidden",
            name: "backend-layout-sidebar-hidden",
            component: BackendLayoutSidebarHidden,
          },
          {
            path: "side-overlay/visible",
            name: "backend-layout-side-overlay-visible",
            component: BackendLayoutSideOverlayVisible,
          },
          {
            path: "side-overlay/hover-mode",
            name: "backend-layout-side-overlay-hover-mode",
            component: BackendLayoutSideOverlayHoverMode,
          },
          {
            path: "side-overlay/no-page-overlay",
            name: "backend-layout-side-overlay-no-page-overlay",
            component: BackendLayoutSideOverlayNoPageOverlay,
          },
          {
            path: "loaders",
            name: "backend-layout-loaders",
            component: BackendLayoutLoaders,
          },
          {
            path: "api",
            name: "backend-layout-api",
            component: BackendLayoutApi,
          },
        ],
      },

      /*
      |--------------------------------------------------------------------------
      | Backend Generic Pages Routes
      |--------------------------------------------------------------------------
      */
      {
        path: "pages/generic",
        redirect: "/pages/generic/blank",
        children: [
          {
            path: "blank",
            name: "backend-pages-generic-blank",
            component: BackendPagesGenericBlank,
          },
          {
            path: "blank-block",
            name: "backend-pages-generic-blank-block",
            component: BackendPagesGenericBlankBlock,
          },
          {
            path: "search",
            name: "backend-pages-generic-search",
            component: BackendPagesGenericSearch,
          },
          {
            path: "profile",
            name: "backend-pages-generic-profile",
            component: BackendPagesGenericProfile,
            beforeEnter: [authenticated]
          },
          {
            path: "profile/edit",
            name: "backend-pages-generic-edit-profile",
            component: BackendPagesGenericEditProfile,
            beforeEnter: [authenticated]
          },
          {
            path: "invoice",
            name: "backend-pages-generic-invoice",
            component: BackendPagesGenericInvoice,
          },
          {
            path: "pricing-plans",
            name: "backend-pages-generic-pricing-plans",
            component: BackendPagesGenericPricingPlans,
          },
          {
            path: "faq",
            name: "backend-pages-generic-faq",
            component: BackendPagesGenericFaq,
          },
          {
            path: "inbox",
            name: "backend-pages-generic-inbox",
            component: BackendPagesGenericInbox,
          },
        ],
      },

      /*
      |--------------------------------------------------------------------------
      | Backend Pages Routes
      |--------------------------------------------------------------------------
      */
      {
        path: "pages",
        children: [
          {
            path: "auth",
            name: "backend-pages-auth",
            component: BackendPagesAuth,
          },
          {
            path: "errors",
            name: "backend-pages-errors",
            component: BackendPagesErrors,
          },
        ],
      },
    ],
  },

  /*
  |
  |--------------------------------------------------------------------------
  | Special Routes
  |--------------------------------------------------------------------------
  |
  */
  {
    path: "/specials",
    component: LayoutSimple,
    children: [
      {
        path: "maintenance",
        name: "specials-maintenance",
        component: SpecialsMaintenance,
      },
      {
        path: "status",
        name: "specials-status",
        component: SpecialsStatus,
      },
      {
        path: "coming-soon",
        name: "specials-coming-soon",
        component: SpecialsComingSoon,
      },
    ],
  },

  /*
  |
  |--------------------------------------------------------------------------
  | Auth Routes
  |--------------------------------------------------------------------------
  |
  */
  {
    path: "/auth",
    component: LayoutSimple,
    children: [
      {
        path: "login",
        name: "login",
        component: Login,
      },
      {
        path: "register",
        name: "register",
        component: Register,
      },
      {
        path: "lock",
        name: "auth-lock3",
        component: AuthLock3,
      },
      {
        path: "password-reminder",
        name: "password-reminder",
        component: PasswordReminder,
      },
      {
        path: 'password-reset/:token',
        name: 'password-reset',
        component: PasswordReset,
        props: route => ({
            token: route.params.token,
            email: route.query.email
        }),
      }
    ],
  },

  /*
  |
  |--------------------------------------------------------------------------
  | Error Routes
  |--------------------------------------------------------------------------
  |
  */
  {
    path: "/errors",
    component: LayoutSimple,
    children: [
      {
        path: "400",
        name: "error-400",
        component: Error400,
      },
      {
        path: "401",
        name: "error-401",
        component: Error401,
      },
      {
        path: "403",
        name: "error-403",
        component: Error403,
      },
      {
        path: "404",
        name: "error-404",
        component: Error404,
      },
      {
        path: "500",
        name: "error-500",
        component: Error500,
      },
      {
        path: "503",
        name: "error-503",
        component: Error503,
      },
    ],
  },
];

// Create Router
const router = createRouter({
  history: createWebHistory(),
  linkActiveClass: "active",
  linkExactActiveClass: "",
  scrollBehavior() {
    return { left: 0, top: 0 };
  },
  routes,
});

router.beforeEach(async (to, from, next) => {
  const store = useTemplateStore();
  store.setLoading(true); // Set loading to true when navigating to a new route

  // Check if the route requires email verification
  if (to.meta.requiresEmailVerification) {
    try {
      const response = await axios.get('/api/user');
      const user = response.data;

      if (user && user.email_verified_at !== null && user.email_verified_at !== undefined) {
        next();
      } else {
        // Email is not verified, redirect to VerifyEmailPage
        next('/verify-email');
      }
    } catch (error) {
      console.error('Error fetching user data:', error);
      next();
    }
  } else {
    next(); // Proceed to the route (no email verification required)
  }
});

// Global error handling for route navigation
router.onError((error) => {
  console.log({
    'error': error.message,
    'message': error.message.includes('Failed to fetch dynamically imported module')
  });

  // Check if there is a 404 with a component path
  if (error.message.includes('Failed to fetch dynamically imported module')) {
    router.push('/errors/404');
    return;
  }

  // Set loading to false on error
  const store = useTemplateStore();
  store.setLoading(false);

  // Display a generic error message using SweetAlert
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'An error occurred while loading the page, please try again',
  });
});



router.afterEach((to, from) => {
  const store = useTemplateStore();
  store.setLoading(false); // Set loading to false after the route has been loaded
});

// NProgress
/*eslint-disable no-unused-vars*/
NProgress.configure({ showSpinner: false });

router.beforeResolve((to, from, next) => {
  if (to.name) {
    NProgress.start();
  }

  next();
});

router.afterEach(() => {
  NProgress.done();
});
/*eslint-enable no-unused-vars*/

export default router;
