import { defineStore } from "pinia";

// Main Pinia Store
export const useTemplateStore = defineStore({
  id: "template",
  state: () => ({
    // App vital details
    app: {
      name: "OneUI Vue Edition",
      version: "2.2.0",
      copyright: new Date().getFullYear(),
    },

    // Default layout options
    layout: {
      header: true,
      sidebar: true,
      sideOverlay: true,
      footer: true,
    },

    // Default template settings
    // Various of them are also set in each layout variation under layouts/variations/ folder
    settings: {
      colorTheme: "", // 'amethyst', 'city', 'flat', 'modern', 'smooth'
      darkMode: false,
      darkModeSystem: true,
      sidebarLeft: true,
      sidebarMini: false,
      sidebarDark: true,
      sidebarVisibleDesktop: true,
      sidebarVisibleMobile: false,
      sideOverlayVisible: false,
      sideOverlayHoverable: false,
      pageOverlay: true,
      headerFixed: true,
      headerDark: false,
      headerSearch: false,
      headerLoader: false,
      pageLoader: false,
      rtlSupport: false,
      sideTransitions: true,
      mainContent: "", // 'boxed', ''narrow'
    },
  }),
  actions: {
    // Sets the layout, useful for setting different layouts (under layouts/variations/)
    setLayout(payload) {
      this.layout.header = payload.header;
      this.layout.sidebar = payload.sidebar;
      this.layout.sideOverlay = payload.sideOverlay;
      this.layout.footer = payload.footer;
    },
    // Sets sidebar visibility (open, close, toggle)
    sidebar(payload) {
      if (window.innerWidth > 991) {
        if (payload.mode === "open") {
          this.settings.sidebarVisibleDesktop = true;
        } else if (payload.mode === "close") {
          this.settings.sidebarVisibleDesktop = false;
        } else if (payload.mode === "toggle") {
          this.settings.sidebarVisibleDesktop =
            !this.settings.sidebarVisibleDesktop;
        }
      } else {
        if (payload.mode === "open") {
          this.settings.sidebarVisibleMobile = true;
        } else if (payload.mode === "close") {
          this.settings.sidebarVisibleMobile = false;
        } else if (payload.mode === "toggle") {
          this.settings.sidebarVisibleMobile =
            !this.settings.sidebarVisibleMobile;
        }
      }
    },
    // Sets sidebar mini mode (on, off, toggle)
    sidebarMini(payload) {
      if (window.innerWidth > 991) {
        if (payload.mode === "on") {
          this.settings.sidebarMini = true;
        } else if (payload.mode === "off") {
          this.settings.sidebarMini = false;
        } else if (payload.mode === "toggle") {
          this.settings.sidebarMini = !this.settings.sidebarMini;
        }
      }
    },
    // Sets sidebar position (left, right, toggle)
    sidebarPosition(payload) {
      if (payload.mode === "left") {
        this.settings.sidebarLeft = true;
      } else if (payload.mode === "right") {
        this.settings.sidebarLeft = false;
      } else if (payload.mode === "toggle") {
        this.settings.sidebarLeft = !this.settings.sidebarLeft;
      }
    },
    // Sets sidebar style (dark, light, toggle)
    sidebarStyle(payload) {
      if (payload.mode === "dark") {
        this.settings.sidebarDark = true;
      } else if (payload.mode === "light") {
        this.settings.sidebarDark = false;
      } else if (payload.mode === "toggle") {
        this.settings.sidebarDark = !this.settings.sidebarDark;
      }
    },
    // Sets side overlay visibility (open, close, toggle)
    sideOverlay(payload) {
      if (payload.mode === "open") {
        this.settings.sideOverlayVisible = true;
      } else if (payload.mode === "close") {
        this.settings.sideOverlayVisible = false;
      } else if (payload.mode === "toggle") {
        this.settings.sideOverlayVisible = !this.settings.sideOverlayVisible;
      }
    },
    // Sets side overlay hover mode (on, off, toggle)
    sideOverlayHover(payload) {
      if (payload.mode === "on") {
        this.settings.sideOverlayHoverable = true;
      } else if (payload.mode === "off") {
        this.settings.sideOverlayHoverable = false;
      } else if (payload.mode === "toggle") {
        this.settings.sideOverlayHoverable =
          !this.settings.sideOverlayHoverable;
      }
    },
    // Sets page overlay visibility (on, off, toggle)
    pageOverlay(payload) {
      if (payload.mode === "on") {
        this.settings.pageOverlay = true;
      } else if (payload.mode === "off") {
        this.settings.pageOverlay = false;
      } else if (payload.mode === "toggle") {
        this.settings.pageOverlay = !this.settings.pageOverlay;
      }
    },
    // Sets header mode (fixed, static, toggle)
    header(payload) {
      if (payload.mode === "fixed") {
        this.settings.headerFixed = true;
      } else if (payload.mode === "static") {
        this.settings.headerFixed = false;
      } else if (payload.mode === "toggle") {
        this.settings.headerFixed = !this.settings.headerFixed;
      }
    },
    // Sets header style (dark, light, toggle)
    headerStyle(payload) {
      if (payload.mode === "dark") {
        this.settings.headerDark = true;
      } else if (payload.mode === "light") {
        this.settings.headerDark = false;
      } else if (payload.mode === "toggle") {
        this.settings.headerDark = !this.settings.headerDark;
      }
    },
    // Sets header search visibility (on, off, toggle)
    headerSearch(payload) {
      if (payload.mode === "on") {
        this.settings.headerSearch = true;
      } else if (payload.mode === "off") {
        this.settings.headerSearch = false;
      } else if (payload.mode === "toggle") {
        this.settings.headerSearch = !this.settings.headerSearch;
      }
    },
    // Sets header loader visibility (on, off, toggle)
    headerLoader(payload) {
      if (payload.mode === "on") {
        this.settings.headerLoader = true;
      } else if (payload.mode === "off") {
        this.settings.headerLoader = false;
      } else if (payload.mode === "toggle") {
        this.settings.headerLoader = !this.settings.headerLoader;
      }
    },
    // Sets page loader visibility (on, off, toggle)
    pageLoader(payload) {
      if (payload.mode === "on") {
        this.settings.pageLoader = true;
      } else if (payload.mode === "off") {
        this.settings.pageLoader = false;
      } else if (payload.mode === "toggle") {
        this.settings.pageLoader = !this.settings.pageLoader;
      }
    },
    // Sets main content mode (full, boxed, narrow)
    mainContent(payload) {
      if (payload.mode === "full") {
        this.settings.mainContent = "";
      } else if (payload.mode === "boxed") {
        this.settings.mainContent = "boxed";
      } else if (payload.mode === "narrow") {
        this.settings.mainContent = "narrow";
      }
    },
    // Dark Mode
    darkMode(payload) {
      if (payload.mode === "on") {
        this.settings.darkMode = true;
      } else if (payload.mode === "off") {
        this.settings.darkMode = false;
      } else if (payload.mode === "toggle") {
        this.settings.darkMode = !this.settings.darkMode;
      }
    },
    // Dark Mode System based
    darkModeSystem(payload) {
      if (payload.mode === "on") {
        this.settings.darkModeSystem = true;

        // Check system preference
        if (
          window.matchMedia &&
          window.matchMedia("(prefers-color-scheme: dark)").matches
        ) {
          this.settings.darkMode = true;
        } else {
          this.settings.darkMode = false;
        }
      } else if (payload.mode === "off") {
        this.settings.darkModeSystem = false;
      }
    },
    // Sets active color theme
    setColorTheme(payload) {
      // Matches all classes which start with 'theme-'
      let regx = new RegExp("\\btheme-[^ ]*[ ]?\\b", "g");

      // Set new theme
      this.settings.colorTheme = payload.theme || "";

      // Remove all classes which start with 'theme-' from body element
      document.body.className = document.body.className.replace(regx, "");

      // If theme is set, add the theme class to body element
      if (payload.theme) {
        document.body.classList.add("theme-" + payload.theme);
      }
    },
    // Sets side transitions
    setSideTransitions(payload) {
      this.settings.sideTransitions = payload.transitions;
    },
  },
});
