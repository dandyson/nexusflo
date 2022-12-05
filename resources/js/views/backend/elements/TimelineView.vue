<script setup>
import { ref, reactive } from "vue";

// vue-easy-lightbox, for more info and examples you can check out https://onycat.com/vue-easy-lightbox/
import VueEasyLightbox from "vue-easy-lightbox";

// Grab example data
import users from "@/data/users";

// Helper variables
const timelineCentered = ref(false);

// Reactive gallery state
const gallery = reactive({
  visible: false,
  index: 0,
  photos: [
    "/assets/media/photos/photo11@2x.jpg",
    "/assets/media/photos/photo12@2x.jpg",
    "/assets/media/photos/photo13@2x.jpg",
    "/assets/media/photos/photo14@2x.jpg",
    "/assets/media/photos/photo15@2x.jpg",
    "/assets/media/photos/photo16@2x.jpg",
    "/assets/media/photos/photo17@2x.jpg",
    "/assets/media/photos/photo18@2x.jpg",
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
    title="Timeline"
    subtitle="Present various events in chronological order."
  >
    <template #extra>
      <!-- Toggle Timeline Mode -->
      <button
        class="btn btn-sm btn-alt-primary"
        @click="timelineCentered = !timelineCentered"
      >
        <i class="fa fa-arrows-alt-h opacity-50 me-1"></i> Toggle Timeline Mode
      </button>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <!-- Timeline -->
    <!--
      Available classes for timeline list:

      'timeline'                                      A normal timeline with icons to the left in all screens
      'timeline timeline-centered timeline-alt'       A centered timeline with odd events to the left and even events to the right (screen width > 1200px)
      'timeline timeline-centered'                    A centered timeline with all events to the left. You can add the class 'timeline-event-alt'
                                                      to 'timeline-event' elements to position them to the right (screen width > 1200px) (useful, if you
                                                      would like to have multiple events to the left or to the right section)
  -->
    <ul
      class="timeline timeline-alt"
      :class="{
        'timeline-centered': timelineCentered,
      }"
    >
      <!-- Photos Event -->
      <li class="timeline-event">
        <div class="timeline-event-icon bg-success">
          <i class="fa fa-images"></i>
        </div>
        <BaseBlock title="New Gallery" class="timeline-event-block">
          <template #options>
            <div
              class="timeline-event-time block-options-item fs-sm fw-semibold"
            >
              just now
            </div>
          </template>

          <div class="row items-push js-gallery img-fluid-100">
            <div
              v-for="(photo, index) in gallery.photos"
              :key="index"
              class="col-md-6 col-lg-4 col-xl-3"
            >
              <a
                href="javascript:void(0)"
                class="img-link img-link-simple img-link-zoom-in img-lightbox"
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
        </BaseBlock>
      </li>
      <!-- END Photos Event -->

      <!-- Twitter Event -->
      <li class="timeline-event">
        <div class="timeline-event-icon bg-info">
          <i class="fab fa-twitter"></i>
        </div>
        <BaseBlock title="Update" class="timeline-event-block">
          <template #options>
            <div
              class="timeline-event-time block-options-item fs-sm fw-semibold"
            >
              10 min ago
            </div>
          </template>

          <div class="d-flex fs-sm">
            <a class="flex-shrink-0 img-link me-2" href="javascript:void(0)">
              <img
                class="img-avatar img-avatar48 img-avatar-thumb"
                src="/assets/media/avatars/avatar6.jpg"
                alt="Example Avatar"
              />
            </a>
            <div class="flex-grow-1">
              <p>
                <a class="fw-semibold" href="javascript:void(0)"
                  >Amanda Powell</a
                >
                Vestibulum in vulputate at, tempus viverra turpis. Fusce
                condimentum nunc ac nisi vulputate fringilla. Lorem ipsum dolor
                sit amet, consectetur adipiscing elit. Aliquam tincidunt
                sollicitudin sem nec ultrices. Sed at mi velit.
              </p>
              <p>
                <a class="text-dark me-2" href="javascript:void(0)">
                  <i class="fa fa-reply fa-fw text-muted"></i> Reply
                </a>
                <a class="text-dark me-2" href="javascript:void(0)">
                  <i class="fa fa-redo fa-fw text-muted"></i> Retweet
                </a>
                <a class="text-dark me-2" href="javascript:void(0)">
                  <i class="fa fa-heart fa-fw text-muted"></i> Like
                </a>
              </p>
            </div>
          </div>
        </BaseBlock>
      </li>
      <!-- END Twitter Event -->

      <!-- Facebook Event -->
      <li class="timeline-event">
        <div class="timeline-event-icon bg-default">
          <i class="fab fa-facebook-f"></i>
        </div>
        <BaseBlock title="New Friends" class="timeline-event-block">
          <template #options>
            <div
              class="timeline-event-time block-options-item fs-sm fw-semibold"
            >
              42 min ago
            </div>
          </template>

          <div class="row">
            <div class="col-md-6">
              <ul class="nav-items push">
                <li
                  v-for="(user, index) in users.slice(0, 3)"
                  :key="`userlist1-${index}`"
                >
                  <a class="d-flex py-2" :href="`${user.href}`">
                    <div class="me-3 ms-2 overlay-container overlay-left">
                      <img
                        class="img-avatar img-avatar48"
                        :src="`/assets/media/avatars/${user.avatar}.jpg`"
                        alt="User Photo"
                      />
                      <span
                        :class="`overlay-item item item-tiny item-circle border border-2 border-white bg-${user.statusColor}`"
                      ></span>
                    </div>
                    <div class="flex-grow-1 fs-sm">
                      <div class="fw-semibold">{{ user.name }}</div>
                      <div class="text-muted">{{ user.profession }}</div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-md-6">
              <ul class="nav-items push">
                <li
                  v-for="(user, index) in users.slice(2, 5)"
                  :key="`userlist2-${index}`"
                >
                  <a class="d-flex py-2" :href="`${user.href}`">
                    <div class="me-3 ms-2 overlay-container overlay-left">
                      <img
                        class="img-avatar img-avatar48"
                        :src="`/assets/media/avatars/${user.avatar}.jpg`"
                        alt="User Photo"
                      />
                      <span
                        :class="`overlay-item item item-tiny item-circle border border-2 border-white bg-${user.statusColor}`"
                      ></span>
                    </div>
                    <div class="flex-grow-1 fs-sm">
                      <div class="fw-semibold">{{ user.name }}</div>
                      <div class="text-muted">{{ user.profession }}</div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </BaseBlock>
      </li>
      <!-- END Facebook Event -->

      <!-- Photos Event -->
      <li class="timeline-event">
        <div class="timeline-event-icon bg-danger">
          <i class="fa fa-calendar"></i>
        </div>
        <BaseBlock title="Meeting" class="timeline-event-block">
          <template #options>
            <div
              class="timeline-event-time block-options-item fs-sm fw-semibold"
            >
              3 hrs ago
            </div>
          </template>

          <div class="d-flex fs-sm push">
            <a class="flex-shrink-0 img-link me-2" href="javascript:void(0)">
              <i class="fa fa-utensils fa-fw fa-3x text-danger-light"></i>
            </a>
            <div class="flex-grow-1">
              <p>
                You have a meal meeting scheduled with
                <a class="fw-semibold" href="javascript:void(0)">Scott Young</a>
                today at 16:18.
              </p>
            </div>
          </div>
        </BaseBlock>
      </li>
      <!-- END Photos Event -->

      <!-- System Event -->
      <li class="timeline-event">
        <div class="timeline-event-icon bg-dark">
          <i class="fa fa-cogs"></i>
        </div>
        <BaseBlock title="System" class="timeline-event-block">
          <template #options>
            <div
              class="timeline-event-time block-options-item fs-sm fw-semibold"
            >
              1 day ago
            </div>
          </template>

          <div
            class="alert alert-success d-flex align-items-center justify-content-between"
            role="alert"
          >
            <div class="flex-grow-1 me-3">
              <p class="mb-0">
                OneUI successfully
                <a class="alert-link" href="javascript:void(0)">updated</a>!
              </p>
            </div>
            <div class="flex-shrink-0">
              <i class="fa fa-fw fa-check-circle"></i>
            </div>
          </div>
        </BaseBlock>
      </li>
      <!-- END System Event -->

      <!-- Article -->
      <li class="timeline-event">
        <div class="timeline-event-icon bg-smooth">
          <i class="far fa-file-alt"></i>
        </div>
        <BaseBlock title="Article" class="timeline-event-block">
          <template #options>
            <div
              class="timeline-event-time block-options-item fs-sm fw-semibold"
            >
              2 days ago
            </div>
          </template>
          nt">
          <p>
            Dolor posuere proin blandit accumsan senectus netus nullam curae,
            ornare laoreet adipiscing luctus mauris adipiscing pretium eget
            fermentum, tristique lobortis est ut metus lobortis tortor tincidunt
            himenaeos habitant quis dictumst proin odio sagittis purus mi, nec
            taciti vestibulum quis in sit varius lorem sit metus mi.
          </p>
          <p>
            Dolor posuere proin blandit accumsan senectus netus nullam curae,
            ornare laoreet adipiscing luctus mauris adipiscing pretium eget
            fermentum, tristique lobortis est ut metus lobortis tortor tincidunt
            himenaeos habitant quis dictumst proin odio sagittis purus mi, nec
            taciti vestibulum quis in sit varius lorem sit metus mi.
          </p>
          <a class="btn btn-sm btn-alt-secondary push" href="javascript:void(0)"
            >Read More..</a
          >
        </BaseBlock>
      </li>
      <!-- END Article -->
    </ul>
    <!-- END Timeline -->
  </div>
  <!-- END Page Content -->
</template>
