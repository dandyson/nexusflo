<script setup>
import { onMounted, onUnmounted } from "vue";

// Helper variables
let tooltipTriggerList = [];
let tooltipList = [];

// Init tooltips on content loaded
onMounted(() => {
  // Grab all tooltip containers..
  tooltipTriggerList = [].slice.call(
    document.querySelectorAll('[data-bs-toggle="tooltip"]')
  );

  // ..and init them
  tooltipList = tooltipTriggerList.map((tooltipTriggerEl) => {
    return new window.bootstrap.Tooltip(tooltipTriggerEl, {
      container: tooltipTriggerEl.dataset.bsContainer || "#page-container",
      animation:
        tooltipTriggerEl.dataset.bsAnimation &&
        tooltipTriggerEl.dataset.bsAnimation.toLowerCase() == "true"
          ? true
          : false,
    });
  });
});

// Dispose tooltips on unMounted
onUnmounted(() => {
  tooltipList.forEach((tooltip) => tooltip.dispose());
});
</script>

<template>
  <!-- Hero -->
  <BasePageHeading
    title="Tooltips"
    subtitle="Attach optional info to an element."
  >
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Elements</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Tooltips</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <!-- For advanced Tooltip usage you can check out https://getbootstrap.com/docs/5.2/components/tooltips/ -->
  <div class="content">
    <!-- Default -->
    <BaseBlock title="Default">
      <p class="fs-sm text-muted">Show tooltips on hover</p>
      <div class="row items-push text-center">
        <div class="col-sm-6 col-xl-3">
          <button
            type="button"
            class="btn btn-primary w-100"
            data-bs-toggle="tooltip"
            data-bs-placement="top"
            title="Top Tooltip"
          >
            Top
          </button>
        </div>
        <div class="col-sm-6 col-xl-3">
          <button
            type="button"
            class="btn btn-primary w-100"
            data-bs-toggle="tooltip"
            data-bs-placement="right"
            title="Right Tooltip"
          >
            Right
          </button>
        </div>
        <div class="col-sm-6 col-xl-3">
          <button
            type="button"
            class="btn btn-primary w-100"
            data-bs-toggle="tooltip"
            data-bs-placement="bottom"
            title="Bottom Tooltip"
          >
            Bottom
          </button>
        </div>
        <div class="col-sm-6 col-xl-3">
          <button
            type="button"
            class="btn btn-primary w-100"
            data-bs-toggle="tooltip"
            data-bs-placement="left"
            title="Left Tooltip"
          >
            Left
          </button>
        </div>
      </div>
    </BaseBlock>
    <!-- END Default -->

    <!-- Click Triggered -->
    <BaseBlock title="Click Triggered">
      <p class="fs-sm text-muted">Show your tooltips on click</p>
      <div class="row items-push text-center">
        <div class="col-sm-6 col-xl-3">
          <button
            type="button"
            class="btn btn-alt-primary w-100"
            data-bs-toggle="tooltip"
            data-bs-trigger="click"
            data-bs-placement="top"
            title="Top Tooltip"
          >
            Top
          </button>
        </div>
        <div class="col-sm-6 col-xl-3">
          <button
            type="button"
            class="btn btn-alt-primary w-100"
            data-bs-toggle="tooltip"
            data-bs-trigger="click"
            data-bs-placement="right"
            title="Right Tooltip"
          >
            Right
          </button>
        </div>
        <div class="col-sm-6 col-xl-3">
          <button
            type="button"
            class="btn btn-alt-primary w-100"
            data-bs-toggle="tooltip"
            data-bs-trigger="click"
            data-bs-placement="bottom"
            title="Bottom Tooltip"
          >
            Bottom
          </button>
        </div>
        <div class="col-sm-6 col-xl-3">
          <button
            type="button"
            class="btn btn-alt-primary w-100"
            data-bs-toggle="tooltip"
            data-bs-trigger="click"
            data-bs-placement="left"
            title="Left Tooltip"
          >
            Left
          </button>
        </div>
      </div>
    </BaseBlock>
    <!-- END Click Triggered -->

    <!-- Animation -->
    <BaseBlock title="Animation">
      <p class="fs-sm text-muted">Show tooltips on hover</p>
      <div class="row items-push text-center">
        <div class="col-sm-6 col-xl-3">
          <button
            type="button"
            class="btn btn-alt-primary w-100"
            data-bs-toggle="tooltip"
            data-bs-animation="true"
            data-bs-placement="top"
            title="Top Tooltip"
          >
            Top
          </button>
        </div>
        <div class="col-sm-6 col-xl-3">
          <button
            type="button"
            class="btn btn-alt-primary w-100"
            data-bs-toggle="tooltip"
            data-bs-animation="true"
            data-bs-placement="right"
            title="Right Tooltip"
          >
            Right
          </button>
        </div>
        <div class="col-sm-6 col-xl-3">
          <button
            type="button"
            class="btn btn-alt-primary w-100"
            data-bs-toggle="tooltip"
            data-bs-animation="true"
            data-bs-placement="bottom"
            title="Bottom Tooltip"
          >
            Bottom
          </button>
        </div>
        <div class="col-sm-6 col-xl-3">
          <button
            type="button"
            class="btn btn-alt-primary w-100"
            data-bs-toggle="tooltip"
            data-bs-animation="true"
            data-bs-placement="left"
            title="Left Tooltip"
          >
            Left
          </button>
        </div>
      </div>
    </BaseBlock>
    <!-- END Animation -->

    <!-- HTML -->
    <BaseBlock title="HTML">
      <p class="fs-sm text-muted">You can add HTML in your tooltips as well</p>
      <div class="row items-push text-center">
        <div class="col-sm-6 col-xl-3">
          <button
            type="button"
            class="btn btn-alt-primary w-100"
            data-bs-toggle="tooltip"
            data-bs-html="true"
            data-bs-placement="top"
            title="<img class='img-avatar' src='/assets/media/avatars/avatar10.jpg' alt=''>"
          >
            Top
          </button>
        </div>
        <div class="col-sm-6 col-xl-3">
          <button
            type="button"
            class="btn btn-alt-primary w-100"
            data-bs-toggle="tooltip"
            data-bs-html="true"
            data-bs-placement="right"
            title="<img class='img-avatar' src='/assets/media/avatars/avatar2.jpg' alt=''>"
          >
            Right
          </button>
        </div>
        <div class="col-sm-6 col-xl-3">
          <button
            type="button"
            class="btn btn-alt-primary w-100"
            data-bs-toggle="tooltip"
            data-bs-html="true"
            data-bs-placement="bottom"
            title="<img class='img-avatar' src='/assets/media/avatars/avatar5.jpg' alt=''>"
          >
            Bottom
          </button>
        </div>
        <div class="col-sm-6 col-xl-3">
          <button
            type="button"
            class="btn btn-alt-primary w-100"
            data-bs-toggle="tooltip"
            data-bs-html="true"
            data-bs-placement="left"
            title="<img class='img-avatar' src='/assets/media/avatars/avatar16.jpg' alt=''>"
          >
            Left
          </button>
        </div>
      </div>
    </BaseBlock>
    <!-- END HTML -->
  </div>
  <!-- END Page Content -->
</template>
