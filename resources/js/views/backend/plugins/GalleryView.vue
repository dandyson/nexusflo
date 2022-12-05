<script setup>
import { reactive } from "vue";

// vue-easy-lightbox, for more info and examples you can check out https://onycat.com/vue-easy-lightbox/
import VueEasyLightbox from "vue-easy-lightbox";

// Reactive gallery state
const gallery = reactive({
  visible: false,
  index: 0,
  photos: [
    "/assets/media/photos/photo2@2x.jpg",
    "/assets/media/photos/photo3@2x.jpg",
    "/assets/media/photos/photo4@2x.jpg",
    "/assets/media/photos/photo5@2x.jpg",
    "/assets/media/photos/photo6@2x.jpg",
    "/assets/media/photos/photo7@2x.jpg",
    "/assets/media/photos/photo8@2x.jpg",
    "/assets/media/photos/photo9@2x.jpg",
    "/assets/media/photos/photo10@2x.jpg",
    "/assets/media/photos/photo11@2x.jpg",
    "/assets/media/photos/photo12@2x.jpg",
    "/assets/media/photos/photo13@2x.jpg",
    "/assets/media/photos/photo14@2x.jpg",
    "/assets/media/photos/photo15@2x.jpg",
    "/assets/media/photos/photo16@2x.jpg",
    "/assets/media/photos/photo17@2x.jpg",
  ],
});

// Helper function to show a photo
function showPhoto(index) {
  gallery.index = index;
  gallery.visible = true;
}

// Helper function to hide the lightbox
function handleHide() {
  gallery.visible = false;
}
</script>

<template>
  <!-- Hero -->
  <BasePageHeading
    title="Gallery"
    subtitle="Clean and easy way to showcase your images."
  >
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Plugins</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Gallery</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <div class="row items-push">
      <div
        v-for="(photo, index) in gallery.photos"
        :key="index"
        class="col-md-6 col-lg-4 col-xl-3"
      >
        <a
          href="javascript:void(0)"
          class="img-link img-link-zoom-in img-thumb img-lightbox"
          @click="showPhoto(index)"
        >
          <img class="img-fluid" :src="`${photo}`" alt="Photo" />
        </a>
      </div>
    </div>
    <VueEasyLightbox
      :visible="gallery.visible"
      :index="gallery.index"
      :imgs="gallery.photos"
      @hide="handleHide"
    />
  </div>
  <!-- END Page Content -->
</template>
