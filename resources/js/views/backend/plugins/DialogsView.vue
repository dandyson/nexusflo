<script setup>
// Sweetalert2, for more info and examples, you can check out https://github.com/sweetalert2/sweetalert2
import Swal from "sweetalert2";

// Set default properties
let toast = Swal.mixin({
  buttonsStyling: false,
  target: "#page-container",
  customClass: {
    confirmButton: "btn btn-success m-1",
    cancelButton: "btn btn-danger m-1",
    input: "form-control",
  },
});

function swalSimple() {
  toast.fire("Hi, this is just a simple message!");
}

function swalSuccess() {
  toast.fire("Success", "Everything was updated perfectly!", "success");
}

function swalInfo() {
  toast.fire("Info", "Just an informational message!", "info");
}

function swalWarning() {
  toast.fire("Warning", "Something needs your attention!", "warning");
}

function swalError() {
  toast.fire("Oops...", "Something went wrong!", "error");
}

function swalQuestion() {
  toast.fire("Question", "Are you sure about that?", "question");
}

function swalConfirm() {
  toast
    .fire({
      title: "Are you sure?",
      text: "You will not be able to recover this imaginary file!",
      icon: "warning",
      showCancelButton: true,
      customClass: {
        confirmButton: "btn btn-danger m-1",
        cancelButton: "btn btn-secondary m-1",
      },
      confirmButtonText: "Yes, delete it!",
      html: false,
      preConfirm: () => {
        return new Promise((resolve) => {
          setTimeout(() => {
            resolve();
          }, 50);
        });
      },
    })
    .then((result) => {
      if (result.value) {
        toast.fire(
          "Deleted!",
          "Your imaginary file has been deleted.",
          "success"
        );
        // result.dismiss can be 'overlay', 'cancel', 'close', 'esc', 'timer'
      } else if (result.dismiss === "cancel") {
        toast.fire("Cancelled", "Your imaginary file is safe :)", "error");
      }
    });
}

function swalCustomPosition() {
  toast.fire({
    position: "top-end",
    title: "Perfect!",
    text: "Nice Position!",
    icon: "success",
  });
}
</script>

<style lang="scss">
// SweetAlert2
@import "sweetalert2/dist/sweetalert2.min.css";
</style>

<template>
  <!-- Hero -->
  <BasePageHeading
    title="Dialogs"
    subtitle="Customizable and accesible popup boxes powered by SweetAlert2 plugin."
  >
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Plugins</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Dialogs</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <BaseBlock title="SweetAlert2">
      <div class="row items-push">
        <div class="col-md-6">
          <!-- Simple -->
          <h4 class="border-bottom pb-2">Simple</h4>
          <p class="fs-sm text-muted mb-2">A dialog showing a simple message</p>
          <button
            type="button"
            class="js-swal-simple btn btn-alt-secondary push"
            @click="swalSimple"
          >
            Launch Dialog
          </button>
          <!-- END Simple -->
        </div>
        <div class="col-md-6">
          <!-- Success -->
          <h4 class="border-bottom pb-2">Success</h4>
          <p class="fs-sm text-muted mb-2">
            A dialog showing a message after a successful operation
          </p>
          <button
            type="button"
            class="btn btn-alt-secondary push"
            @click="swalSuccess"
          >
            <i class="fa fa-check-circle text-success me-1"></i> Launch Dialog
          </button>
          <!-- END Success -->
        </div>
        <div class="col-md-6">
          <!-- Info -->
          <h4 class="border-bottom pb-2">Info</h4>
          <p class="fs-sm text-muted mb-2">
            A dialog showing an informational message
          </p>
          <button
            type="button"
            class="btn btn-alt-secondary push"
            @click="swalInfo"
          >
            <i class="fa fa-info-circle text-info me-1"></i> Launch Dialog
          </button>
          <!-- END Info -->
        </div>
        <div class="col-md-6">
          <!-- Warning -->
          <h4 class="border-bottom pb-2">Warning</h4>
          <p class="fs-sm text-muted mb-2">
            A dialog showing a warning message
          </p>
          <button
            type="button"
            class="btn btn-alt-secondary push"
            @click="swalWarning"
          >
            <i class="fa fa-exclamation-triangle text-warning me-1"></i>
            Launch Dialog
          </button>
          <!-- END Warning -->
        </div>
        <div class="col-md-6">
          <!-- Error -->
          <h4 class="border-bottom pb-2">Error</h4>
          <p class="fs-sm text-muted mb-2">
            A dialog showing a message after a failed operation
          </p>
          <button
            type="button"
            class="btn btn-alt-secondary push"
            @click="swalError"
          >
            <i class="fa fa-times-circle text-danger me-1"></i> Launch Dialog
          </button>
          <!-- END Error -->
        </div>
        <div class="col-md-6">
          <!-- Question -->
          <h4 class="border-bottom pb-2">Question</h4>
          <p class="fs-sm text-muted mb-2">
            A dialog showing a question message
          </p>
          <button
            type="button"
            class="btn btn-alt-secondary push"
            @click="swalQuestion"
          >
            <i class="fa fa-question-circle text-muted me-1"></i> Launch Dialog
          </button>
          <!-- END Question -->
        </div>
        <div class="col-md-6">
          <!-- Confirmation -->
          <h4 class="border-bottom pb-2">Confirmation</h4>
          <p class="fs-sm text-muted mb-2">
            A dialog showing a confirmation message
          </p>
          <button
            type="button"
            class="btn btn-alt-secondary push mb-md-0"
            @click="swalConfirm"
          >
            <i class="fa fa-check-square text-muted me-1"></i> Launch Dialog
          </button>
          <!-- END Confirmation -->
        </div>
        <div class="col-md-6">
          <!-- Custom Position -->
          <h4 class="border-bottom pb-2">Custom Position</h4>
          <p class="fs-sm text-muted mb-2">
            A dialog showing at the top right of the screen
          </p>
          <button
            type="button"
            class="btn btn-alt-secondary"
            @click="swalCustomPosition"
          >
            <i class="fa fa-bolt text-muted me-1"></i> Launch Dialog
          </button>
          <!-- END Custom Position -->
        </div>
      </div>
    </BaseBlock>
  </div>
  <!-- END Page Content -->
</template>
