<script setup>
import { onMounted, onUnmounted } from "vue";

// Helper variables
let popoverTriggerList = [];
let popoverList = [];

// Init popovers on content loaded
onMounted(() => {
  // Grab all popover containers..
  popoverTriggerList = [].slice.call(
    document.querySelectorAll('[data-bs-toggle="popover"]')
  );

  // ..and init them
  popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    return new window.bootstrap.Popover(popoverTriggerEl, {
      container: popoverTriggerEl.dataset.bsContainer || "#page-container",
      animation:
        popoverTriggerEl.dataset.bsAnimation &&
        popoverTriggerEl.dataset.bsAnimation.toLowerCase() == "true"
          ? true
          : false,
      trigger: popoverTriggerEl.dataset.bsTrigger || "hover focus",
    });
  });
});

// Dispose popovers on unMounted
onUnmounted(() => {
  popoverList.forEach((popover) => popover.dispose());
});
</script>

<template>
  <!-- Hero -->
  <BasePageHeading
    title="Popovers"
    subtitle="Similar to the ones found on iOS."
  >
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Elements</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Popovers</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <!-- For advanced Popover usage you can check out https://getbootstrap.com/docs/5.2/components/popovers/ -->
  <div class="content">
    <!-- Default -->
    <BaseBlock title="Default">
      <p class="fs-sm text-muted">Show your popovers on hover</p>
      <div class="row items-push text-center">
        <div class="col-sm-6 col-xl-3">
          <button
            type="button"
            class="btn btn-primary w-100"
            data-bs-toggle="popover"
            data-bs-placement="top"
            title="Top Popover"
            data-bs-content="This is example content. You can put a description or more info here."
          >
            Top
          </button>
        </div>
        <div class="col-sm-6 col-xl-3">
          <button
            type="button"
            class="btn btn-primary w-100"
            data-bs-toggle="popover"
            data-bs-placement="right"
            title="Right Popover"
            data-bs-content="This is example content. You can put a description or more info here."
          >
            Right
          </button>
        </div>
        <div class="col-sm-6 col-xl-3">
          <button
            type="button"
            class="btn btn-primary w-100"
            data-bs-toggle="popover"
            data-bs-placement="bottom"
            title="Bottom Popover"
            data-bs-content="This is example content. You can put a description or more info here."
          >
            Bottom
          </button>
        </div>
        <div class="col-sm-6 col-xl-3">
          <button
            type="button"
            class="btn btn-primary w-100"
            data-bs-toggle="popover"
            data-bs-placement="left"
            title="Left Popover"
            data-bs-content="This is example content. You can put a description or more info here."
          >
            Left
          </button>
        </div>
      </div>
    </BaseBlock>
    <!-- END Default -->

    <!-- Click Triggered -->
    <BaseBlock title="Click Triggered">
      <p class="fs-sm text-muted">Show your popovers on click</p>
      <div class="row items-push text-center">
        <div class="col-sm-6 col-xl-3">
          <button
            type="button"
            class="btn btn-alt-primary w-100"
            data-bs-toggle="popover"
            data-bs-trigger="click"
            data-bs-placement="top"
            title="Top Popover"
            data-bs-content="This is example content. You can put a description or more info here."
          >
            Top
          </button>
        </div>
        <div class="col-sm-6 col-xl-3">
          <button
            type="button"
            class="btn btn-alt-primary w-100"
            data-bs-toggle="popover"
            data-bs-trigger="click"
            data-bs-placement="right"
            title="Right Popover"
            data-bs-content="This is example content. You can put a description or more info here."
          >
            Right
          </button>
        </div>
        <div class="col-sm-6 col-xl-3">
          <button
            type="button"
            class="btn btn-alt-primary w-100"
            data-bs-toggle="popover"
            data-bs-trigger="click"
            data-bs-placement="bottom"
            title="Bottom Popover"
            data-bs-content="This is example content. You can put a description or more info here."
          >
            Bottom
          </button>
        </div>
        <div class="col-sm-6 col-xl-3">
          <button
            type="button"
            class="btn btn-alt-primary w-100"
            data-bs-toggle="popover"
            data-bs-trigger="click"
            data-bs-placement="left"
            title="Left Popover"
            data-bs-content="This is example content. You can put a description or more info here."
          >
            Left
          </button>
        </div>
      </div>
    </BaseBlock>
    <!-- END Click Triggered -->

    <!-- Animation -->
    <BaseBlock title="Animation">
      <p class="fs-sm text-muted">
        You can enable a fade animation to your popovers
      </p>
      <div class="row items-push text-center">
        <div class="col-sm-6 col-xl-3">
          <button
            type="button"
            class="btn btn-alt-primary w-100"
            data-bs-toggle="popover"
            data-bs-animation="true"
            data-bs-placement="top"
            title="Top Popover"
            data-bs-content="This is example content. You can put a description or more info here."
          >
            Top
          </button>
        </div>
        <div class="col-sm-6 col-xl-3">
          <button
            type="button"
            class="btn btn-alt-primary w-100"
            data-bs-toggle="popover"
            data-bs-animation="true"
            data-bs-placement="right"
            title="Right Popover"
            data-bs-content="This is example content. You can put a description or more info here."
          >
            Right
          </button>
        </div>
        <div class="col-sm-6 col-xl-3">
          <button
            type="button"
            class="btn btn-alt-primary w-100"
            data-bs-toggle="popover"
            data-bs-animation="true"
            data-bs-placement="bottom"
            title="Bottom Popover"
            data-bs-content="This is example content. You can put a description or more info here."
          >
            Bottom
          </button>
        </div>
        <div class="col-sm-6 col-xl-3">
          <button
            type="button"
            class="btn btn-alt-primary w-100"
            data-bs-toggle="popover"
            data-bs-animation="true"
            data-bs-placement="left"
            title="Left Popover"
            data-bs-content="This is example content. You can put a description or more info here."
          >
            Left
          </button>
        </div>
      </div>
    </BaseBlock>
    <!-- END Animation -->

    <!-- HTML -->
    <BaseBlock title="HTML">
      <p class="fs-sm text-muted">You can add HTML in your popovers as well</p>
      <div class="row items-push text-center">
        <div class="col-sm-6 col-xl-3">
          <button
            type="button"
            class="btn btn-alt-primary w-100"
            data-bs-toggle="popover"
            data-bs-html="true"
            data-bs-placement="top"
            title="Popover Title"
            data-bs-content="<div class='text-center'><img class='img-avatar' src='assets/media/avatars/avatar10.jpg' alt=''></div>"
          >
            Top
          </button>
        </div>
        <div class="col-sm-6 col-xl-3">
          <button
            type="button"
            class="btn btn-alt-primary w-100"
            data-bs-toggle="popover"
            data-bs-html="true"
            data-bs-placement="right"
            title="Popover Title"
            data-bs-content="<div class='text-center'><img class='img-avatar' src='assets/media/avatars/avatar2.jpg' alt=''></div>"
          >
            Right
          </button>
        </div>
        <div class="col-sm-6 col-xl-3">
          <button
            type="button"
            class="btn btn-alt-primary w-100"
            data-bs-toggle="popover"
            data-bs-html="true"
            data-bs-placement="bottom"
            title="Popover Title"
            data-bs-content="<div class='text-center'><img class='img-avatar' src='assets/media/avatars/avatar5.jpg' alt=''></div>"
          >
            Bottom
          </button>
        </div>
        <div class="col-sm-6 col-xl-3">
          <button
            type="button"
            class="btn btn-alt-primary w-100"
            data-bs-toggle="popover"
            data-bs-html="true"
            data-bs-placement="left"
            title="Popover Title"
            data-bs-content="<div class='text-center'><img class='img-avatar' src='assets/media/avatars/avatar16.jpg' alt=''></div>"
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
