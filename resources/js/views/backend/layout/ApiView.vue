<script setup>
import { useTemplateStore } from "@/stores/template";

// Main store
const store = useTemplateStore();
</script>

<template>
  <!-- Hero -->
  <BasePageHeading title="Layout API">
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Layout</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">API</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <!-- Sidebar Visibility -->
    <BaseBlock title="Sidebar Visibility" content-full>
      <div class="table-responsive">
        <table class="table table-hover mb-0">
          <thead>
            <tr>
              <th style="width: 400px">Live</th>
              <th>JS</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <button
                  type="button"
                  class="btn btn-sm btn-alt-primary mb-3"
                  @click="
                    () => {
                      store.sidebar({ mode: 'toggle' });
                    }
                  "
                >
                  Toggle Sidebar
                </button>
                <p class="fs-sm mb-0 text-muted">
                  Opens or Closes the Sidebar based on its current state
                </p>
              </td>
              <td>
                <code>store.sidebar({ mode: 'toggle' })</code>
              </td>
            </tr>
            <tr>
              <td>
                <button
                  type="button"
                  class="btn btn-sm btn-alt-primary mb-3"
                  @click="
                    () => {
                      store.sidebar({ mode: 'open' });
                    }
                  "
                >
                  Open Sidebar
                </button>
                <p class="fs-sm mb-0 text-muted">Opens the Sidebar</p>
              </td>
              <td>
                <code>store.sidebar({ mode: 'open' })</code>
              </td>
            </tr>
            <tr>
              <td>
                <button
                  type="button"
                  class="btn btn-sm btn-alt-primary mb-3"
                  @click="
                    () => {
                      store.sidebar({ mode: 'close' });
                    }
                  "
                >
                  Close Sidebar
                </button>
                <p class="fs-sm mb-0 text-muted">Closes the Sidebar</p>
              </td>
              <td>
                <code>store.sidebar({ mode: 'close' })</code>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </BaseBlock>
    <!-- END Sidebar Visibility -->

    <!-- Sidebar Position -->
    <BaseBlock title="Sidebar Position" content-full>
      <div class="table-responsive">
        <table class="table table-hover mb-0">
          <thead>
            <tr>
              <th style="width: 400px">Live</th>
              <th>JS</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <button
                  type="button"
                  class="btn btn-sm btn-alt-primary mb-3"
                  @click="
                    () => {
                      store.sidebarPosition({ mode: 'toggle' });
                    }
                  "
                >
                  Toggle Sidebar Position
                </button>
                <p class="fs-sm mb-0 text-muted">
                  Sets the Sidebar position to the left or to the right based on
                  its current position
                </p>
              </td>
              <td>
                <code>store.sidebarPosition({ mode: 'toggle' })</code>
              </td>
            </tr>
            <tr>
              <td>
                <button
                  type="button"
                  class="btn btn-sm btn-alt-primary mb-3"
                  @click="
                    () => {
                      store.sidebarPosition({ mode: 'right' });
                    }
                  "
                >
                  Right Sidebar Position
                </button>
                <p class="fs-sm mb-0 text-muted">
                  Moves the Sidebar to the right
                </p>
              </td>
              <td>
                <code>store.sidebarPosition({ mode: 'right' })</code>
              </td>
            </tr>
            <tr>
              <td>
                <button
                  type="button"
                  class="btn btn-sm btn-alt-primary mb-3"
                  @click="
                    () => {
                      store.sidebarPosition({ mode: 'left' });
                    }
                  "
                >
                  Left Sidebar Position
                </button>
                <p class="fs-sm mb-0 text-muted">
                  Moves the Sidebar to the left
                </p>
              </td>
              <td>
                <code>store.sidebarPosition({ mode: 'left' })</code>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </BaseBlock>
    <!-- END Sidebar Position -->

    <!-- Sidebar Mini -->
    <BaseBlock title="Sidebar Mini" content-full>
      <div class="table-responsive">
        <table class="table table-hover mb-0">
          <thead>
            <tr>
              <th style="width: 400px">Live</th>
              <th>JS</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <button
                  type="button"
                  class="btn btn-sm btn-alt-primary mb-3"
                  @click="
                    () => {
                      store.sidebarMini({ mode: 'toggle' });
                    }
                  "
                >
                  Toggle Mini Mode
                </button>
                <p class="fs-sm mb-0 text-muted">
                  Toggles the Sidebar mini mode
                </p>
              </td>
              <td>
                <code>store.sidebarMini({ mode: 'toggle' })</code>
              </td>
            </tr>
            <tr>
              <td>
                <button
                  type="button"
                  class="btn btn-sm btn-alt-primary mb-3"
                  @click="
                    () => {
                      store.sidebarMini({ mode: 'on' });
                    }
                  "
                >
                  Enable Mini Mode
                </button>
                <p class="fs-sm mb-0 text-muted">
                  Enables the Sidebar mini mode
                </p>
              </td>
              <td>
                <code>store.sidebarMini({ mode: 'on' })</code>
              </td>
            </tr>
            <tr>
              <td>
                <button
                  type="button"
                  class="btn btn-sm btn-alt-primary mb-3"
                  @click="
                    () => {
                      store.sidebarMini({ mode: 'off' });
                    }
                  "
                >
                  Disable Mini Mode
                </button>
                <p class="fs-sm mb-0 text-muted">
                  Disables the Sidebar mini mode
                </p>
              </td>
              <td>
                <code>store.sidebarMini({ mode: 'off' })</code>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </BaseBlock>
    <!-- END Sidebar Mini -->

    <!-- Sidebar Styles -->
    <BaseBlock title="Sidebar Styles" content-full>
      <div class="table-responsive">
        <table class="table table-hover mb-0">
          <thead>
            <tr>
              <th style="width: 400px">Live</th>
              <th>JS</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <button
                  type="button"
                  class="btn btn-sm btn-alt-primary mb-3"
                  @click="
                    () => {
                      store.sidebarStyle({ mode: 'toggle' });
                    }
                  "
                >
                  Toggle Sidebar Style
                </button>
                <p class="fs-sm mb-0 text-muted">
                  Toggles Sidebar style between light and dark variations
                </p>
              </td>
              <td>
                <code>store.sidebarStyle({ mode: 'toggle' })</code>
              </td>
            </tr>
            <tr>
              <td>
                <button
                  type="button"
                  class="btn btn-sm btn-alt-primary mb-3"
                  @click="
                    () => {
                      store.sidebarStyle({ mode: 'light' });
                    }
                  "
                >
                  Light Themed Sidebar
                </button>
                <p class="fs-sm mb-0 text-muted">
                  Sets the Sidebar to light variation (works with Dark Mode off)
                </p>
              </td>
              <td>
                <code>store.sidebarStyle({ mode: 'light' })</code>
              </td>
            </tr>
            <tr>
              <td>
                <button
                  type="button"
                  class="btn btn-sm btn-alt-primary mb-3"
                  @click="
                    () => {
                      store.sidebarStyle({ mode: 'dark' });
                    }
                  "
                >
                  Dark Themed Sidebar
                </button>
                <p class="fs-sm mb-0 text-muted">
                  Sets the Sidebar to dark variation
                </p>
              </td>
              <td>
                <code>store.sidebarStyle({ mode: 'dark' })</code>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </BaseBlock>
    <!-- END Sidebar Styles -->

    <!-- Side Overlay Visibility -->
    <BaseBlock title="Side Overlay Visibility" content-full>
      <div class="table-responsive">
        <table class="table table-hover mb-0">
          <thead>
            <tr>
              <th style="width: 400px">Live</th>
              <th>JS</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <button
                  type="button"
                  class="btn btn-sm btn-alt-primary mb-3"
                  @click="
                    () => {
                      store.sideOverlay({ mode: 'toggle' });
                    }
                  "
                >
                  Toggle Side Overlay
                </button>
                <p class="fs-sm mb-0 text-muted">
                  Opens or Closes the Side Overlay based on its current state
                </p>
              </td>
              <td>
                <code>store.sideOverlay({ mode: 'toggle' })</code>
              </td>
            </tr>
            <tr>
              <td>
                <button
                  type="button"
                  class="btn btn-sm btn-alt-primary mb-3"
                  @click="
                    () => {
                      store.sideOverlay({ mode: 'open' });
                    }
                  "
                >
                  Open Side Overlay
                </button>
                <p class="fs-sm mb-0 text-muted">Opens the Side Overlay</p>
              </td>
              <td>
                <code>store.sideOverlay({ mode: 'open' })</code>
              </td>
            </tr>
            <tr>
              <td>
                <button
                  type="button"
                  class="btn btn-sm btn-alt-primary mb-3"
                  @click="
                    () => {
                      store.sideOverlay({ mode: 'close' });
                    }
                  "
                >
                  Close Side Overlay
                </button>
                <p class="fs-sm mb-0 text-muted">Closes the Side Overlay</p>
              </td>
              <td>
                <code>store.sideOverlay({ mode: 'close' })</code>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </BaseBlock>
    <!-- END Side Overlay Visibility -->

    <!-- Side Overlay Hover Mode -->
    <BaseBlock title="Side Overlay Hover Mode" content-full>
      <div class="table-responsive">
        <table class="table table-hover mb-0">
          <thead>
            <tr>
              <th style="width: 400px">Live</th>
              <th>JS</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <button
                  type="button"
                  class="btn btn-sm btn-alt-primary mb-3"
                  @click="
                    () => {
                      store.sideOverlayHover({ mode: 'toggle' });
                    }
                  "
                >
                  Toggle Hover Mode
                </button>
                <p class="fs-sm mb-0 text-muted">
                  Toggles the Side Overlay hover mode
                </p>
              </td>
              <td>
                <code>store.sideOverlayHover({ mode: 'toggle' })</code>
              </td>
            </tr>
            <tr>
              <td>
                <button
                  type="button"
                  class="btn btn-sm btn-alt-primary mb-3"
                  @click="
                    () => {
                      store.sideOverlayHover({ mode: 'on' });
                    }
                  "
                >
                  Enable Hover Mode
                </button>
                <p class="fs-sm mb-0 text-muted">
                  Enables the Side Overlay hover mode
                </p>
              </td>
              <td>
                <code>store.sideOverlayHover({ mode: 'on' })</code>
              </td>
            </tr>
            <tr>
              <td>
                <button
                  type="button"
                  class="btn btn-sm btn-alt-primary mb-3"
                  @click="
                    () => {
                      store.sideOverlayHover({ mode: 'off' });
                    }
                  "
                >
                  Disable Hover Mode
                </button>
                <p class="fs-sm mb-0 text-muted">
                  Disables the Side Overlay hover mode
                </p>
              </td>
              <td>
                <code>store.sideOverlayHover({ mode: 'off' })</code>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </BaseBlock>
    <!-- END Side Overlay Hover Mode -->

    <!-- Header Mode -->
    <BaseBlock title="Header Mode" content-full>
      <div class="table-responsive">
        <table class="table table-hover mb-0">
          <thead>
            <tr>
              <th style="width: 400px">Live</th>
              <th>JS</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <button
                  type="button"
                  class="btn btn-sm btn-alt-primary mb-3"
                  @click="
                    () => {
                      store.header({ mode: 'toggle' });
                    }
                  "
                >
                  Toggle Header Mode
                </button>
                <p class="fs-sm mb-0 text-muted">
                  Toggles Header mode between static and fixed
                </p>
              </td>
              <td>
                <code>store.header({ mode: 'toggle' })</code>
              </td>
            </tr>
            <tr>
              <td>
                <button
                  type="button"
                  class="btn btn-sm btn-alt-primary mb-3"
                  @click="
                    () => {
                      store.header({ mode: 'static' });
                    }
                  "
                >
                  Static Header
                </button>
                <p class="fs-sm mb-0 text-muted">
                  Sets the Header to static mode
                </p>
              </td>
              <td>
                <code>store.header({ mode: 'static' })</code>
              </td>
            </tr>
            <tr>
              <td>
                <button
                  type="button"
                  class="btn btn-sm btn-alt-primary mb-3"
                  @click="
                    () => {
                      store.header({ mode: 'fixed' });
                    }
                  "
                >
                  Fixed Header
                </button>
                <p class="fs-sm mb-0 text-muted">
                  Sets the Header to fixed mode
                </p>
              </td>
              <td>
                <code>store.header({ mode: 'fixed' })</code>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </BaseBlock>
    <!-- END Header Mode -->

    <!-- Header Styles -->
    <BaseBlock title="Header Styles" content-full>
      <div class="table-responsive">
        <table class="table table-hover mb-0">
          <thead>
            <tr>
              <th style="width: 400px">Live</th>
              <th>JS</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <button
                  type="button"
                  class="btn btn-sm btn-alt-primary mb-3"
                  @click="
                    () => {
                      store.headerStyle({ mode: 'toggle' });
                    }
                  "
                >
                  Toggle Header Style
                </button>
                <p class="fs-sm mb-0 text-muted">
                  Toggles Header style between light and dark variations
                </p>
              </td>
              <td>
                <code>store.headerStyle({ mode: 'toggle' })</code>
              </td>
            </tr>
            <tr>
              <td>
                <button
                  type="button"
                  class="btn btn-sm btn-alt-primary mb-3"
                  @click="
                    () => {
                      store.headerStyle({ mode: 'light' });
                    }
                  "
                >
                  Light Themed Header
                </button>
                <p class="fs-sm mb-0 text-muted">
                  Sets the Header to light variation (works with Dark Mode off)
                </p>
              </td>
              <td>
                <code>store.headerStyle({ mode: 'light' })</code>
              </td>
            </tr>
            <tr>
              <td>
                <button
                  type="button"
                  class="btn btn-sm btn-alt-primary mb-3"
                  @click="
                    () => {
                      store.headerStyle({ mode: 'dark' });
                    }
                  "
                >
                  Dark Themed Header
                </button>
                <p class="fs-sm mb-0 text-muted">
                  Sets the Header to dark variation
                </p>
              </td>
              <td>
                <code>store.headerStyle({ mode: 'dark' })</code>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </BaseBlock>
    <!-- END Header Styles -->

    <!-- Main Content -->
    <BaseBlock title="Main Content" content-full>
      <div class="table-responsive">
        <table class="table table-hover mb-0">
          <thead>
            <tr>
              <th style="width: 400px">Live</th>
              <th>JS</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <button
                  type="button"
                  class="btn btn-sm btn-alt-primary mb-3"
                  @click="
                    () => {
                      store.mainContent({ mode: 'boxed' });
                    }
                  "
                >
                  Boxed Content Layout
                </button>
                <p class="fs-sm mb-0 text-muted">
                  Sets the content layout to boxed
                </p>
              </td>
              <td>
                <code>store.mainContent({ mode: 'boxed' });</code>
              </td>
            </tr>
            <tr>
              <td>
                <button
                  type="button"
                  class="btn btn-sm btn-alt-primary mb-3"
                  @click="
                    () => {
                      store.mainContent({ mode: 'narrow' });
                    }
                  "
                >
                  Narrow Content Layout
                </button>
                <p class="fs-sm mb-0 text-muted">
                  Sets the content layout to narrow
                </p>
              </td>
              <td>
                <code>store.mainContent({ mode: 'narrow' })</code>
              </td>
            </tr>
            <tr>
              <td>
                <button
                  type="button"
                  class="btn btn-sm btn-alt-primary mb-3"
                  @click="
                    () => {
                      store.mainContent({ mode: 'full' });
                    }
                  "
                >
                  Full Width Content Layout
                </button>
                <p class="fs-sm mb-0 text-muted">
                  Sets the content layout to full width
                </p>
              </td>
              <td>
                <code>store.mainContent({ mode: 'full' })</code>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </BaseBlock>
    <!-- END Main Content -->

    <!-- Dark Mode -->
    <BaseBlock title="Dark Mode" content-full>
      <div class="table-responsive">
        <table class="table table-hover mb-0">
          <thead>
            <tr>
              <th style="width: 400px">Live</th>
              <th>JS</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <button
                  type="button"
                  class="btn btn-sm btn-alt-primary mb-3"
                  @click="
                    () => {
                      store.darkModeSystem({ mode: 'off' });
                      store.darkMode({ mode: 'off' });
                    }
                  "
                >
                  Dark Mode Off
                </button>
                <p class="fs-sm mb-0 text-muted">Disables Dark Mode</p>
              </td>
              <td>
                <code
                  >store.darkModeSystem({ mode: 'off' }); store.darkMode({ mode:
                  'off' });</code
                >
              </td>
            </tr>
            <tr>
              <td>
                <button
                  type="button"
                  class="btn btn-sm btn-alt-primary mb-3"
                  @click="
                    () => {
                      store.darkModeSystem({ mode: 'off' });
                      store.darkMode({ mode: 'on' });
                    }
                  "
                >
                  Dark Mode On
                </button>
                <p class="fs-sm mb-0 text-muted">Enables Dark Mode</p>
              </td>
              <td>
                <code
                  >store.darkModeSystem({ mode: 'off' }); store.darkMode({ mode:
                  'on' });</code
                >
              </td>
            </tr>
            <tr>
              <td>
                <button
                  type="button"
                  class="btn btn-sm btn-alt-primary mb-3"
                  @click="
                    () => {
                      store.darkModeSystem({ mode: 'on' });
                    }
                  "
                >
                  Dark Mode System
                </button>
                <p class="fs-sm mb-0 text-muted">
                  Dark Mode based on system's preferences
                </p>
              </td>
              <td>
                <code>store.darkModeSystem({ mode: 'on' })</code>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </BaseBlock>
    <!-- END Dark Mode -->
  </div>
  <!-- END Page Content -->
</template>
