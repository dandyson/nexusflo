<script setup>
import { useTemplateStore } from "@/stores/template";

// Main store
const store = useTemplateStore();

// Demo page loader
function previewPageLoader() {
  // Start page loader
  store.pageLoader({ mode: "on" });

  // Set a timeout for demo purposes
  setTimeout(() => {
    // Stop page loader
    store.pageLoader({ mode: "off" });
  }, 3000);
}
</script>

<template>
  <!-- Hero -->
  <BasePageHeading
    title="Loaders"
    subtitle="Show a loader for any page or custom activity."
  >
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Layout</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Loaders</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <!-- Header Loader -->
    <BaseBlock title="Header Loader" content-full>
      <p class="fs-sm text-muted">
        You can use the layout API to start the header loader and stop it on
        demand. It is better to be used when the header is also set to fixed, so
        it is always visible.
      </p>
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
                      store.headerLoader({ mode: 'on' });
                    }
                  "
                >
                  <i class="fa fa-play me-1 opacity-50"></i>
                  Start Header Loader
                </button>
                <p class="fs-sm mb-0">
                  Starting the header loader is very easy and you can either do
                  it on button click or from JS code
                </p>
              </td>
              <td>
                <code>store.headerLoader({ mode: 'on' })</code>
              </td>
            </tr>
            <tr>
              <td>
                <button
                  type="button"
                  class="btn btn-sm btn-alt-primary push"
                  @click="
                    () => {
                      store.headerLoader({ mode: 'off' });
                    }
                  "
                >
                  <i class="fa fa-stop me-1 opacity-50"></i>
                  Stop Header Loader
                </button>
                <p class="fs-sm mb-0">
                  The same applies for stoping it as well, it is very
                  straightforward to use it
                </p>
              </td>
              <td>
                <code>store.headerLoader({ mode: 'off' })</code>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </BaseBlock>
    <!-- END Header Loader -->

    <!-- Page Loader -->
    <BaseBlock title="Page Loader" content-full>
      <p class="fs-sm text-muted">
        Page loader can provide a loading/splash screen feature. You can preview
        the page loader for 3 seconds by clicking the following button:
      </p>
      <button
        type="button"
        class="btn btn-sm btn-alt-primary mb-3"
        @click="previewPageLoader()"
      >
        Preview Page Loader
      </button>
      <div class="table-responsive">
        <table class="table table-hover mb-0">
          <thead>
            <tr>
              <th style="width: 400px">Mode</th>
              <th>JS</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <p class="fs-sm mb-0">Showing the page header</p>
              </td>
              <td>
                <code>store.pageLoader({ mode: "on" })</code>
              </td>
            </tr>
            <tr>
              <td>
                <p class="fs-sm mb-0">Hiding the page header</p>
              </td>
              <td>
                <code>store.pageLoader({ mode: "off" })</code>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </BaseBlock>
    <!-- END Page Loader -->
  </div>
  <!-- END Page Content -->
</template>
