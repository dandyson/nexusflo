/*
 * Main and demo navigation arrays
 *
 * 'to' attribute points to the route name, not the path url
 */

export default {
  main: [
    {
      name: "Dashboard",
      to: "backend-dashboard",
      icon: "si si-speedometer",
    },
    {
      name: "Page Packs",
      icon: "si si-layers",
      subActivePaths: "/backend/page-packs",
      sub: [
        {
          name: "Blog",
          icon: "si si-pencil",
          subActivePaths: "/backend/page-packs/blog",
          sub: [
            {
              name: "Classic",
              to: "backend-blog-classic",
            },
            {
              name: "List",
              to: "backend-blog-list",
            },
            {
              name: "Grid",
              to: "backend-blog-grid",
            },
            {
              name: "Story",
              to: "backend-blog-story",
            },
            {
              name: "Story Cover",
              to: "backend-blog-story-cover",
            },
          ],
        },
        {
          name: "e-Learning",
          icon: "si si-graduation",
          subActivePaths: "/backend/page-packs/elearning",
          sub: [
            {
              name: "Courses",
              to: "backend-elearning-courses",
            },
            {
              name: "Course",
              to: "backend-elearning-course",
            },
            {
              name: "Lesson",
              to: "backend-elearning-lesson",
            },
          ],
        },
        {
          name: "Forum",
          icon: "si si-bubbles",
          subActivePaths: "/backend/page-packs/forum",
          sub: [
            {
              name: "Categories",
              to: "backend-forum-categories",
            },
            {
              name: "Topics",
              to: "backend-forum-topics",
            },
            {
              name: "Discussion",
              to: "backend-forum-discussion",
            },
          ],
        },
        {
          name: "Boxed Backend",
          icon: "si si-magnet",
          subActivePaths: "/backend-boxed",
          sub: [
            {
              name: "Dashboard",
              to: "backend-boxed-dashboard",
            },
            {
              name: "Search",
              to: "backend-boxed-search",
            },
            {
              name: "Simple 1",
              to: "backend-boxed-simple1",
            },
            {
              name: "Simple 2",
              to: "backend-boxed-simple2",
            },
            {
              name: "Image 1",
              to: "backend-boxed-image1",
            },
            {
              name: "Image 2",
              to: "backend-boxed-image2",
            },
          ],
        },
      ],
    },
    {
      name: "User Interface",
      heading: true,
    },
    {
      name: "Blocks",
      icon: "si si-energy",
      subActivePaths: "/backend/blocks",
      sub: [
        {
          name: "Styles",
          to: "backend-blocks-styles",
        },
        {
          name: "Options",
          to: "backend-blocks-options",
        },
        {
          name: "Forms",
          to: "backend-blocks-forms",
        },
        {
          name: "Themed",
          to: "backend-blocks-themed",
        },
        {
          name: "API",
          to: "backend-blocks-api",
        },
      ],
    },
    {
      name: "Elements",
      icon: "si si-badge",
      subActivePaths: "/backend/elements",
      sub: [
        {
          name: "Grid",
          to: "backend-elements-grid",
        },
        {
          name: "Typography",
          to: "backend-elements-typography",
        },
        {
          name: "Icons",
          to: "backend-elements-icons",
        },
        {
          name: "Buttons",
          to: "backend-elements-buttons",
        },
        {
          name: "Button Groups",
          to: "backend-elements-button-groups",
        },
        {
          name: "Dropdowns",
          to: "backend-elements-dropdowns",
        },
        {
          name: "Tabs",
          to: "backend-elements-tabs",
        },
        {
          name: "Navigation",
          to: "backend-elements-navigation",
        },
        {
          name: "Horizontal Navigation",
          to: "backend-elements-navigation-horizontal",
        },
        {
          name: "Mega Menu",
          to: "backend-elements-mega-menu",
        },
        {
          name: "Progress",
          to: "backend-elements-progress",
        },
        {
          name: "Alerts",
          to: "backend-elements-alerts",
        },
        {
          name: "Tooltips",
          to: "backend-elements-tooltips",
        },
        {
          name: "Popovers",
          to: "backend-elements-popovers",
        },
        {
          name: "Modals",
          to: "backend-elements-modals",
        },
        {
          name: "Images Overlay",
          to: "backend-elements-images-overlay",
        },
        {
          name: "Timeline",
          to: "backend-elements-timeline",
        },
        {
          name: "Ribbons",
          to: "backend-elements-ribbons",
        },
        {
          name: "Animations",
          to: "backend-elements-animations",
        },
        {
          name: "Color Themes",
          to: "backend-elements-color-themes",
        },
      ],
    },
    {
      name: "Tables",
      icon: "si si-grid",
      subActivePaths: "/backend/tables",
      sub: [
        {
          name: "Styles",
          to: "backend-tables-styles",
        },
        {
          name: "Responsive",
          to: "backend-tables-responsive",
        },
        {
          name: "Helpers",
          to: "backend-tables-helpers",
        },
      ],
    },
    {
      name: "Forms",
      icon: "si si-note",
      subActivePaths: "/backend/forms",
      sub: [
        {
          name: "Elements",
          to: "backend-form-elements",
        },
        {
          name: "Layouts",
          to: "backend-form-layouts",
        },
        {
          name: "Input Groups",
          to: "backend-form-input-groups",
        },
        {
          name: "Plugins",
          to: "backend-form-plugins",
        },
        {
          name: "Editors",
          to: "backend-form-editors",
        },
        {
          name: "Validation",
          to: "backend-form-validation",
        },
      ],
    },
    {
      name: "Develop",
      heading: true,
    },
    {
      name: "Plugins",
      icon: "si si-wrench",
      subActivePaths: "/backend/plugins",
      sub: [
        {
          name: "Image Cropper",
          to: "backend-plugins-image-cropper",
        },
        {
          name: "Charts",
          to: "backend-plugins-charts",
        },
        {
          name: "Calendar",
          to: "backend-plugins-calendar",
        },
        {
          name: "Carousel",
          to: "backend-plugins-carousel",
        },
        {
          name: "Offcanvas",
          to: "backend-plugins-offcanvas",
        },
        {
          name: "Syntax Highlighting",
          to: "backend-plugins-syntax-highlighting",
        },
        {
          name: "Rating",
          to: "backend-plugins-rating",
        },
        {
          name: "Dialogs",
          to: "backend-plugins-dialogs",
        },
        {
          name: "Notifications",
          to: "backend-plugins-notifications",
        },
        {
          name: "Gallery",
          to: "backend-plugins-gallery",
        },
      ],
    },
    {
      name: "Layout",
      icon: "si si-magic-wand",
      subActivePaths: "/backend/layout",
      sub: [
        {
          name: "Page",
          subActivePaths: "/backend/layout/page",
          sub: [
            {
              name: "Default",
              to: "backend-layout-page-default",
            },
            {
              name: "Flipped",
              to: "backend-layout-page-flipped",
            },
          ],
        },
        {
          name: "Dark Mode",
          subActivePaths: "/backend/layout/dark-mode",
          sub: [
            {
              name: "On",
              to: "backend-layout-dark-mode-on",
            },
            {
              name: "Off",
              to: "backend-layout-dark-mode-off",
            },
            {
              name: "System",
              to: "backend-layout-dark-mode-system",
            },
          ],
        },
        {
          name: "Main Content",
          subActivePaths: "/backend/layout/main-content",
          sub: [
            {
              name: "Full Width",
              to: "backend-layout-main-content-full-width",
            },
            {
              name: "Narrow",
              to: "backend-layout-main-content-narrow",
            },
            {
              name: "Boxed",
              to: "backend-layout-main-content-boxed",
            },
          ],
        },
        {
          name: "Header",
          subActivePaths: "/backend/layout/header",
          sub: [
            {
              name: "Fixed",
              heading: true,
            },
            {
              name: "Light",
              to: "backend-layout-header-fixed-light",
            },
            {
              name: "Dark",
              to: "backend-layout-header-fixed-dark",
            },
            {
              name: "Static",
              heading: true,
            },
            {
              name: "Light",
              to: "backend-layout-header-static-light",
            },
            {
              name: "Dark",
              to: "backend-layout-header-static-dark",
            },
          ],
        },
        {
          name: "Sidebar",
          subActivePaths: "/backend/layout/sidebar",
          sub: [
            {
              name: "Mini",
              to: "backend-layout-sidebar-mini",
            },
            {
              name: "Light",
              to: "backend-layout-sidebar-light",
            },
            {
              name: "Dark",
              to: "backend-layout-sidebar-dark",
            },
            {
              name: "Hidden",
              to: "backend-layout-sidebar-hidden",
            },
          ],
        },
        {
          name: "Side Overlay",
          subActivePaths: "/backend/layout/side-overlay",
          sub: [
            {
              name: "Visible",
              to: "backend-layout-side-overlay-visible",
            },
            {
              name: "Hover Mode",
              to: "backend-layout-side-overlay-hover-mode",
            },
            {
              name: "No Page Overlay",
              to: "backend-layout-side-overlay-no-page-overlay",
            },
          ],
        },
        {
          name: "Loaders",
          to: "backend-layout-loaders",
        },
        {
          name: "API",
          to: "backend-layout-api",
        },
      ],
    },
    {
      name: "Multi Level Menu",
      icon: "si si-puzzle",
      sub: [
        {
          name: "Link 1-1",
          to: "#",
        },
        {
          name: "Link 1-2",
          to: "#",
        },
        {
          name: "Sub Level 2",
          sub: [
            {
              name: "Link 2-1",
              to: "#",
            },
            {
              name: "Link 2-2",
              to: "#",
            },
            {
              name: "Sub Level 3",
              sub: [
                {
                  name: "Link 4-1",
                  to: "#",
                },
                {
                  name: "Link 4-2",
                  to: "#",
                },
                {
                  name: "Sub Level 5",
                  sub: [
                    {
                      name: "Link 5-1",
                      to: "#",
                    },
                    {
                      name: "Link 5-2",
                      to: "#",
                    },
                    {
                      name: "Sub Level 6",
                      sub: [
                        {
                          name: "Link 6-1",
                          to: "#",
                        },
                        {
                          name: "Link 6-2",
                          to: "#",
                        },
                      ],
                    },
                  ],
                },
              ],
            },
          ],
        },
      ],
    },
    {
      name: "Pages",
      heading: true,
    },
    {
      name: "Generic",
      icon: "si si-layers",
      subActivePaths: "/backend/pages/generic",
      sub: [
        {
          name: "Blank",
          to: "backend-pages-generic-blank",
        },
        {
          name: "Blank (Block)",
          to: "backend-pages-generic-blank-block",
        },
        {
          name: "Search",
          to: "backend-pages-generic-search",
        },
        {
          name: "Profile",
          to: "backend-pages-generic-profile",
        },
        {
          name: "Invoice",
          to: "backend-pages-generic-invoice",
        },
        {
          name: "Pricing Plans",
          to: "backend-pages-generic-pricing-plans",
        },
        {
          name: "FAQ",
          to: "backend-pages-generic-faq",
        },
        {
          name: "Inbox",
          to: "backend-pages-generic-inbox",
        },
        {
          name: "Sidebar with Mini Nav",
          to: "backend-pages-generic-sidebar-mini-nav",
        },
        {
          name: "Maintenance",
          to: "specials-maintenance",
        },
        {
          name: "Status",
          to: "specials-status",
        },
        {
          name: "Coming Soon",
          to: "specials-coming-soon",
        },
      ],
    },
    {
      name: "Authentication",
      icon: "si si-lock",
      subActivePaths: "/backend/pages/auth",
      sub: [
        {
          name: "All",
          to: "backend-pages-auth",
        },
        {
          name: "Sign In",
          to: "auth-signin",
        },
        {
          name: "Sign In 2",
          to: "auth-signin2",
        },
        {
          name: "Sign In 3",
          to: "auth-signin3",
        },
        {
          name: "Sign Up",
          to: "auth-signup",
        },
        {
          name: "Sign Up 2",
          to: "auth-signup2",
        },
        {
          name: "Sign Up 3",
          to: "auth-signup3",
        },
        {
          name: "Lock Screen",
          to: "auth-lock",
        },
        {
          name: "Lock Screen 2",
          to: "auth-lock2",
        },
        {
          name: "Lock Screen 3",
          to: "auth-lock3",
        },
        {
          name: "Pass Reminder",
          to: "auth-reminder",
        },
        {
          name: "Pass Reminder 2",
          to: "auth-reminder2",
        },
        {
          name: "Pass Reminder 3",
          to: "auth-reminder3",
        },
      ],
    },
    {
      name: "Error Pages",
      icon: "si si-fire",
      subActivePaths: "/backend/pages/errors",
      sub: [
        {
          name: "All",
          to: "backend-pages-errors",
        },
        {
          name: "400",
          to: "error-400",
        },
        {
          name: "401",
          to: "error-401",
        },
        {
          name: "403",
          to: "error-403",
        },
        {
          name: "404",
          to: "error-404",
        },
        {
          name: "500",
          to: "error-500",
        },
        {
          name: "503",
          to: "error-503",
        },
      ],
    },
  ],
  boxed: [
    {
      name: "Dashboard",
      to: "backend-boxed-dashboard",
      icon: "si si-compass",
    },
    {
      name: "Pages",
      heading: true,
    },
    {
      name: "Variations",
      icon: "si si-puzzle",
      sub: [
        {
          name: "Simple 1",
          to: "backend-boxed-simple1",
        },
        {
          name: "Simple 2",
          to: "backend-boxed-simple2",
        },
        {
          name: "Image 1",
          to: "backend-boxed-image1",
        },
        {
          name: "Image 2",
          to: "backend-boxed-image2",
        },
      ],
    },
    {
      name: "Search",
      to: "backend-boxed-search",
      icon: "si si-magnifier",
    },
    {
      name: "Go Back",
      to: "backend-dashboard",
      icon: "si si-action-undo",
    },
  ],
  demo: [
    {
      name: "Home",
      to: "#",
      icon: "fa fa-home",
      badge: 5,
    },
    {
      name: "Manage",
      heading: true,
    },
    {
      name: "Products",
      icon: "fa fa-briefcase",
      sub: [
        {
          name: "HTML Templates",
          icon: "fab fa-html5",
          sub: [
            {
              name: "Description",
              to: "#",
              icon: "fa fa-pencil-alt",
            },
            {
              name: "Statistics",
              to: "#",
              icon: "fa fa-chart-line",
            },
            {
              name: "Sales",
              to: "#",
              icon: "fa fa-chart-area",
              badge: 320,
            },
            {
              name: "Media",
              to: "#",
              icon: "far fa-images",
              badge: 18,
            },
            {
              name: "Files",
              to: "#",
              icon: "far fa-file-alt",
              badge: 32,
            },
          ],
        },
        {
          name: "WordPress Themes",
          icon: "fab fa-wordpress",
          sub: [
            {
              name: "Description",
              to: "#",
              icon: "fa fa-pencil-alt",
            },
            {
              name: "Statistics",
              to: "#",
              icon: "fa fa-chart-line",
            },
            {
              name: "Sales",
              to: "#",
              icon: "fa fa-chart-area",
              badge: 680,
            },
            {
              name: "Media",
              to: "#",
              icon: "far fa-images",
              badge: 15,
            },
            {
              name: "Files",
              to: "#",
              icon: "far fa-file-alt",
              badge: 20,
            },
          ],
        },
        {
          name: "Web Applications",
          icon: "fab fa-medapps",
          sub: [
            {
              name: "Description",
              to: "#",
              icon: "fa fa-pencil-alt",
            },
            {
              name: "Statistics",
              to: "#",
              icon: "fa fa-chart-line",
            },
            {
              name: "Sales",
              to: "#",
              icon: "fa fa-chart-area",
              badge: 158,
            },
            {
              name: "Media",
              to: "#",
              icon: "far fa-images",
              badge: 65,
            },
            {
              name: "Files",
              to: "#",
              icon: "far fa-file-alt",
              badge: 78,
            },
          ],
        },
        {
          name: "Video Templates",
          icon: "fab fa-youtube",
          sub: [
            {
              name: "Description",
              to: "#",
              icon: "fa fa-pencil-alt",
            },
            {
              name: "Statistics",
              to: "#",
              icon: "fa fa-chart-line",
            },
            {
              name: "Sales",
              to: "#",
              icon: "fa fa-chart-area",
              badge: 920,
            },
            {
              name: "Media",
              to: "#",
              icon: "far fa-images",
              badge: 7,
            },
            {
              name: "Files",
              to: "#",
              icon: "far fa-file-alt",
              badge: 19,
            },
          ],
        },
        {
          name: "Add Product",
          to: "#",
          icon: "fa fa-plus",
        },
      ],
    },
    {
      name: "Payments",
      icon: "fa fa-money-bill-wave",
      sub: [
        {
          name: "Scheduled",
          to: "#",
          badge: 3,
          "badge-variant": "success",
        },
        {
          name: "Recurring",
          to: "#",
        },
        {
          name: "Manage",
          to: "#",
        },
        {
          name: "New Payment",
          to: "#",
          icon: "fa fa-plus",
        },
      ],
    },
    {
      name: "Services",
      icon: "fa fa-globe-americas",
      sub: [
        {
          name: "Hosting",
          to: "#",
        },
        {
          name: "Web Design",
          to: "#",
        },
        {
          name: "Web Development",
          to: "#",
        },
        {
          name: "Graphic Design",
          to: "#",
        },
        {
          name: "Legal",
          to: "#",
        },
        {
          name: "Consulting",
          to: "#",
        },
      ],
    },
    {
      name: "Personal",
      heading: true,
    },
    {
      name: "Profile",
      icon: "far fa-user",
      sub: [
        {
          name: "Edit",
          to: "#",
        },
        {
          name: "Settings",
          to: "#",
        },
        {
          name: "Log out",
          to: "#",
        },
      ],
    },
  ],
};
