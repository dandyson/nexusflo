<script setup>
import { ref } from "vue";

// Vue Cropperjs, for more info and examples you can check out https://github.com/Agontuk/vue-cropperjs
import VueCropper from "vue-cropperjs";

// Helper variables
const cropper = ref(null);
const flipXToggle = ref(null);
const flipYToggle = ref(null);

const cropData = ref(null);
const imgSrc = ref("/assets/media/photos/photo30@2x.jpg");

// Helper functions for CroppperJS
function flipX() {
  let scale = flipXToggle.value.getAttribute("data-scale");

  scale = scale ? -scale : -1;
  flipXToggle.value.setAttribute("data-scale", scale);
  cropper.value.scaleX(scale);
}

function flipY() {
  let scale = flipYToggle.value.getAttribute("data-scale");

  scale = scale ? -scale : -1;
  flipYToggle.value.setAttribute("data-scale", scale);
  cropper.value.scaleY(scale);
}

function zoom(percent) {
  cropper.value.relativeZoom(percent);
}

function rotate(deg) {
  cropper.value.rotate(deg);
}

function reset() {
  cropper.value.reset();
  cropData.value = null;
}

function setDragMode(mode) {
  cropper.value.setDragMode(mode);
}

function setAspectRatio(aspect) {
  cropper.value.setAspectRatio(aspect);
}

function getCropBoxData() {
  cropData.value = JSON.stringify(cropper.value.getCropBoxData(), null, 4);
}
</script>

<style>
@import "cropperjs/dist/cropper.css";
</style>

<template>
  <!-- Hero -->
  <BasePageHeading
    title="Image Cropper"
    subtitle="Powered by Cropper.js plugin."
  >
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href>Plugins</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Image Cropper</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <!-- Toolbar -->
    <BaseBlock class="text-center mb-2" content-class="space-x-1">
      <div class="btn-group push">
        <button
          type="button"
          class="btn btn-sm btn-alt-primary"
          title="Set drag mode to move"
          @click.prevent="setDragMode('move')"
        >
          <i class="fa fa-fw fa-arrows-alt"></i>
        </button>
        <button
          type="button"
          class="btn btn-sm btn-alt-primary"
          title="Set drag mode to crop"
          @click.prevent="setDragMode('crop')"
        >
          <i class="fa fa-fw fa-crop"></i>
        </button>
      </div>
      <div class="btn-group space-x-2 push">
        <button
          type="button"
          class="btn btn-sm btn-alt-primary"
          title="Zoom In"
          @click.prevent="zoom(0.1)"
        >
          <i class="fa fa-fw fa-search-plus"></i>
        </button>
        <button
          type="button"
          class="btn btn-sm btn-alt-primary"
          title="Zoom Out"
          @click.prevent="zoom(-0.1)"
        >
          <i class="fa fa-fw fa-search-minus"></i>
        </button>
      </div>
      <div class="btn-group space-x-2 push">
        <button
          type="button"
          class="btn btn-sm btn-alt-primary"
          title="Rotate Left"
          @click.prevent="rotate(-90)"
        >
          <i class="fa fa-fw fa-undo-alt"></i>
        </button>
        <button
          type="button"
          class="btn btn-sm btn-alt-primary"
          title="Rotate Right"
          @click.prevent="rotate(90)"
        >
          <i class="fa fa-fw fa-redo-alt"></i>
        </button>
      </div>
      <div class="btn-group space-x-2 push">
        <button
          type="button"
          class="btn btn-sm btn-alt-primary"
          title="Flip Horizontal"
          @click.prevent="flipX"
          ref="flipXToggle"
        >
          <i class="fa fa-fw fa-arrows-alt-h"></i>
        </button>
        <button
          type="button"
          class="btn btn-sm btn-alt-primary"
          title="Flip Vertical"
          @click.prevent="flipY"
          ref="flipYToggle"
        >
          <i class="fa fa-fw fa-arrows-alt-v"></i>
        </button>
      </div>
      <div class="btn-group space-x-2 push">
        <button
          type="button"
          class="btn btn-sm btn-alt-primary"
          title="Set Aspect Ratio"
          @click.prevent="setAspectRatio(16 / 9)"
        >
          16:9
        </button>
        <button
          type="button"
          class="btn btn-sm btn-alt-primary"
          title="Set Aspect Ratio"
          @click.prevent="setAspectRatio(4 / 3)"
        >
          4:3
        </button>
        <button
          type="button"
          class="btn btn-sm btn-alt-primary"
          title="Set Aspect Ratio"
          @click.prevent="setAspectRatio(1)"
        >
          1:1
        </button>
        <button
          type="button"
          class="btn btn-sm btn-alt-primary"
          title="Set Aspect Ratio"
          @click.prevent="setAspectRatio(2 / 3)"
        >
          2:3
        </button>
      </div>
      <button
        type="button"
        class="btn btn-sm btn-alt-primary push"
        title="Set Aspect Ratio"
        @click.prevent="setAspectRatio(NaN)"
      >
        Free
      </button>
      <div class="btn-group space-x-2 push">
        <button
          type="button"
          class="btn btn-sm btn-alt-primary"
          title="Clear"
          @click.prevent="reset"
        >
          <i class="fa fa-fw fa-times"></i>
        </button>
        <button
          type="button"
          class="btn btn-sm btn-alt-primary"
          title="Crop"
          @click.prevent="getCropBoxData"
        >
          <i class="fa fa-fw fa-check"></i>
        </button>
      </div>
    </BaseBlock>
    <!-- END Toolbar -->

    <!-- Image Cropper -->
    <BaseBlock content-full>
      <div class="row">
        <div class="col-xl-6">
          <h4 class="border-bottom pb-2">Cropper</h4>
          <div>
            <vue-cropper
              ref="cropper"
              :aspect-ratio="4 / 3"
              :src="imgSrc"
              alt="Source Image"
              preview=".js-img-cropper-preview"
            ></vue-cropper>
          </div>
        </div>
        <div class="col-xl-6">
          <h4 class="border-bottom pb-2">Preview</h4>
          <div class="overflow-hidden mb-4">
            <div
              class="js-img-cropper-preview mx-auto overflow-hidden"
              style="height: 200px"
            ></div>
          </div>
          <h4 class="border-bottom pb-2">Crop Data</h4>
          <textarea class="form-control" v-model="cropData" rows="6"></textarea>
        </div>
      </div>
    </BaseBlock>
    <!-- END Image Cropper -->
  </div>
  <!-- END Page Content -->
</template>
