<script setup>
import { ref, onMounted } from "vue";

// Helper variables
const toast1 = ref(null);
const toast2 = ref(null);
const toast3 = ref(null);

// Initialize Bootstrap toasts on content load
onMounted(() => {
  toast1.value = new window.bootstrap.Toast(
    document.getElementById("toast-example-1")
  );

  toast2.value = new window.bootstrap.Toast(
    document.getElementById("toast-example-2")
  );

  toast3.value = new window.bootstrap.Toast(
    document.getElementById("toast-example-3")
  );
});
</script>

<template>
  <!-- Hero -->
  <BasePageHeading
    title="Notifications"
    subtitle="Powerful alerts based on Bootstrap Toasts."
  >
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Plugins</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Notifications</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <!-- Bootstrap Toasts -->
    <div
      class="position-fixed bottom-0 end-0 p-3 space-y-3"
      style="z-index: 9999"
    >
      <!-- Toast Example 1 -->
      <div
        id="toast-example-1"
        class="toast fade hide"
        data-delay="4000"
        role="alert"
        aria-live="assertive"
        aria-atomic="true"
      >
        <div class="toast-header">
          <i class="si si-bubble text-primary me-2"></i>
          <strong class="me-auto">Title</strong>
          <small class="text-muted">just now</small>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="toast"
            aria-label="Close"
          ></button>
        </div>
        <div class="toast-body">
          This is a nice notification based on Bootstrap implementation.
        </div>
      </div>
      <!-- END Toast Example 1 -->

      <!-- Toast Example 2 -->
      <div
        id="toast-example-2"
        class="toast fade hide"
        data-delay="4000"
        role="alert"
        aria-live="assertive"
        aria-atomic="true"
      >
        <div class="toast-header">
          <i class="si si-wrench text-danger me-2"></i>
          <strong class="me-auto">System</strong>
          <small class="text-muted">just now</small>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="toast"
            aria-label="Close"
          ></button>
        </div>
        <div class="toast-body">
          You can alert the user with a system message!
        </div>
      </div>
      <!-- END Toast Example 2 -->

      <!-- Toast Example 3 -->
      <div
        id="toast-example-3"
        class="toast fade hide"
        data-delay="4000"
        role="alert"
        aria-live="assertive"
        aria-atomic="true"
      >
        <div class="toast-header">
          <i class="fa fa-user-plus opacity-50 me-2"></i>
          <strong class="me-auto">New Friend Request</strong>
          <small class="text-muted">just now</small>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="toast"
            aria-label="Close"
          ></button>
        </div>
        <div class="toast-body">
          <a class="fw-bold" href="javascript:void(0)">John Doe</a> send you a
          friend request.
          <div class="mt-2 pt-2 border-top space-x-2">
            <button type="button" class="btn btn-sm btn-primary">
              <i class="fa fa-check me-1 opacity-50"></i>
              Accept
            </button>
            <button
              type="button"
              class="btn btn-sm btn-alt-primary"
              data-bs-dismiss="toast"
            >
              Close
            </button>
          </div>
        </div>
      </div>
      <!-- END Toast Example 3 -->
    </div>
    <BaseBlock title="Bootstrap Toasts">
      <!-- Default -->
      <div class="row items-push">
        <div class="col-lg-4">
          <p class="fs-sm text-muted">A nice toast with a message</p>
        </div>
        <div class="col-lg-8">
          <button
            type="button"
            class="btn btn-alt-primary push"
            @click="toast1.show"
          >
            <i class="fa fa-bell me-1 opacity-50"></i> Open Toast 1
          </button>
          <p class="fw-semibold mb-0">You can trigger it with JS:</p>
          <p>
            <code>toast1.show();</code>
          </p>
          <button
            type="button"
            class="btn btn-alt-primary push"
            @click="toast2.show"
          >
            <i class="fa fa-bell me-1 opacity-50"></i> Open Toast 2
          </button>
          <p class="fw-semibold mb-0">You can trigger it with JS:</p>
          <p>
            <code>toast2.show();</code>
          </p>
          <button
            type="button"
            class="btn btn-alt-primary push"
            @click="toast3.show"
          >
            <i class="fa fa-bell me-1 opacity-50"></i> Open Toast 3
          </button>
          <p class="fw-semibold mb-0">You can trigger it with JS:</p>
          <p>
            <code>toast3.show();</code>
          </p>
        </div>
      </div>
      <!-- END Default -->
    </BaseBlock>
    <!-- END Bootstrap Toasts -->
  </div>
  <!-- END Page Content -->
</template>
