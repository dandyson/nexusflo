<script setup>
import { computed } from "vue";
import { useRoute } from "vue-router";
import { useTemplateStore } from "@/stores/template";

// Main store and Route
const store = useTemplateStore();
const route = useRoute();

// Component properties
const props = defineProps({
  nodes: {
    type: Array,
    description: "The nodes of the navigation",
  },
  subMenu: {
    type: Boolean,
    default: false,
    description: "If true, a submenu will be rendered",
  },
  dark: {
    type: Boolean,
    default: false,
    description: "Dark mode for menu",
  },
  horizontal: {
    type: Boolean,
    default: false,
    description: "Horizontal menu in large screen width",
  },
  horizontalHover: {
    type: Boolean,
    default: false,
    description: "Hover mode for horizontal menu",
  },
  horizontalCenter: {
    type: Boolean,
    default: false,
    description: "Center mode for horizontal menu",
  },
  horizontalJustify: {
    type: Boolean,
    default: false,
    description: "Justify mode for horizontal menu",
  },
  disableClick: {
    type: Boolean,
    default: false,
    description:
      "Disables submenu click on 2+ level when we are in horizontal and hover mode",
  },
});

// Set CSS classes accordingly
const classContainer = computed(() => {
  return {
    "nav-main": !props.subMenu,
    "nav-main-submenu": props.subMenu,
    "nav-main-dark": props.dark,
    "nav-main-horizontal": props.horizontal,
    "nav-main-hover": props.horizontalHover,
    "nav-main-horizontal-center": props.horizontalCenter,
    "nav-main-horizontal-justify": props.horizontalJustify,
  };
});

// Checks if a submenu path is part of the URL path
function subIsActive(paths) {
  const activePaths = Array.isArray(paths) ? paths : [paths];

  return activePaths.some((path) => {
    return route.path.indexOf(path) === 0; // current path starts with this path string
  });
}

// Main menu toggling and mobile functionality
function linkClicked(e, submenu) {
  if (submenu) {
    // Get closest li element
    let el = e.target.closest("li");

    // Check if we are in a large screen, have horizontal navigation and hover is enabled
    if (
      !(
        window.innerWidth > 991 &&
        ((props.horizontal && props.horizontalHover) || props.disableClick)
      )
    ) {
      if (el.classList.contains("open")) {
        // If submenu is open, close it..
        el.classList.remove("open");
      } else {
        // .. else if submenu is closed, close all other (same level) submenus first before open it
        Array.from(el.closest("ul").children).forEach((element) => {
          element.classList.remove("open");
        });

        el.classList.add("open");
      }
    }
  } else {
    // If we are in mobile, close the sidebar
    if (window.innerWidth < 992) {
      store.sidebar({ mode: "close" });
    }
  }
}
</script>

<template>
  <ul :class="classContainer">
    <li
      v-for="(node, index) in nodes"
      :key="`node-${index}`"
      :class="{
        'nav-main-heading': node.heading,
        'nav-main-item': !node.heading,
        open:
          node.sub && node.subActivePaths
            ? subIsActive(node.subActivePaths)
            : false,
      }"
    >
      <!-- Heading -->
      {{ node.heading ? node.name : "" }}
      <!-- Normal Link -->
      <div v-if="!node.heading && !node.sub" @click="linkClicked($event)">
        <RouterLink
          :to="node.to && node.to !== '#' ? { name: node.to } : '#'"
          class="nav-main-link"
          :active-class="node.to && node.to !== '#' ? 'active' : ''"
        >
          <i v-if="node.icon" :class="`nav-main-link-icon ${node.icon}`"></i>
          <span v-if="node.name" class="nav-main-link-name">
            {{ node.name }}
          </span>
          <span
            v-if="node.badge"
            class="nav-main-link-badge badge rounded-pill"
            :class="
              node['badge-variant']
                ? `bg-${node['badge-variant']}`
                : 'bg-primary'
            "
            >{{ node.badge }}</span
          >
        </RouterLink>
      </div>
      <!-- END Normal Link -->

      <!-- Submenu Link -->
      <a
        v-else-if="!node.heading && node.sub"
        href="#"
        class="nav-main-link nav-main-link-submenu"
        @click.prevent="linkClicked($event, true)"
      >
        <i v-if="node.icon" :class="`nav-main-link-icon ${node.icon}`"></i>
        <span v-if="node.name" class="nav-main-link-name">{{ node.name }}</span>
        <span
          v-if="node.badge"
          class="nav-main-link-badge badge rounded-pill"
          :class="
            node['badge-variant'] ? `bg-${node['badge-variant']}` : 'bg-primary'
          "
          >{{ node.badge }}</span
        >
      </a>
      <!-- END Submenu Link -->

      <BaseNavigation
        v-if="node.sub"
        :nodes="node.sub"
        sub-menu
        :disable-click="props.horizontal && props.horizontalHover"
      />
    </li>
  </ul>
</template>
