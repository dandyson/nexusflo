import { createRouter, createWebHashHistory } from "vue-router";

import NProgress from "nprogress/nprogress.js";

// Main layouts
import LayoutBackend from "@/layouts/variations/BackendStarter.vue";
import LayoutSimple from "@/layouts/variations/Simple.vue";

// Frontend: Landing
const Landing = () => import("@/views/starter/LandingView.vue");

// Backend: Dashboard
const Dashboard = () => import("@/views/starter/DashboardView.vue");

// Backend: Pomodoro Timer
const PomodoroTimer = () => import("@/views/starter/PomdoroTimer.vue");

// Backend: Meditation Timer
const MeditationTimer = () => import("@/views/starter/MeditationTimer.vue");

// Backend: Positive News
const PositiveNews = () => import("@/views/starter/PositiveNews.vue");

// Backend: Worry Journal
const WorryJournal = () => import("@/views/starter/WorryJournal.vue");

// Set all routes
const routes = [
  {
    path: "/",
    component: LayoutSimple,
    children: [
      {
        path: "",
        name: "landing",
        component: Landing,
      },
    ],
  },
  {
    path: "/backend",
    redirect: "/backend/dashboard",
    component: LayoutBackend,
    children: [
      {
        path: "dashboard",
        name: "backend-dashboard",
        component: Dashboard,
      },
      {
        path: "pomodoro",
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
        path: "worry-journal",
        name: "backend-worry-journal",
        component: WorryJournal,
      },
    ],
  },
];

// Create Router
const router = createRouter({
  history: createWebHashHistory(),
  linkActiveClass: "active",
  linkExactActiveClass: "active",
  scrollBehavior() {
    return { left: 0, top: 0 };
  },
  routes,
});

// NProgress
/*eslint-disable no-unused-vars*/
NProgress.configure({ showSpinner: false });

router.beforeResolve((to, from, next) => {
  NProgress.start();
  next();
});

router.afterEach((to, from) => {
  NProgress.done();
});
/*eslint-enable no-unused-vars*/

export default router;
