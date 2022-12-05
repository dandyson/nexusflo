<script setup>
import { reactive } from "vue";

// vue-easy-lightbox, for more info and examples you can check out https://onycat.com/vue-easy-lightbox/
import VueEasyLightbox from "vue-easy-lightbox";

// Reactive gallery state
const gallery = reactive({
  visible: false,
  index: 0,
  photos: [
    "/assets/media/photos/photo19@2x.jpg",
    "/assets/media/photos/photo12@2x.jpg",
    "/assets/media/photos/photo18@2x.jpg",
    "/assets/media/photos/photo16@2x.jpg",
    "/assets/media/photos/photo14@2x.jpg",
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
  <VueEasyLightbox
    :visible="gallery.visible"
    :index="gallery.index"
    :imgs="gallery.photos"
    @hide="handleHide"
  />

  <!-- Hero Content -->
  <BaseBackground image="/assets/media/photos/photo10@2x.jpg">
    <div class="bg-primary-dark-op">
      <div class="content content-full text-center pt-9 pb-8">
        <h1 class="text-white mb-2">Travel the world and feel alive.</h1>
        <h2 class="h4 fw-normal text-white-75 mb-0">
          Experience life to its fullest.
        </h2>
      </div>
    </div>
  </BaseBackground>
  <!-- END Hero Content -->

  <!-- Page Content -->
  <div class="bg-body-extra-light">
    <div class="content content-boxed">
      <div class="text-center fs-sm push">
        <span class="d-inline-block py-2 px-4 bg-body fw-medium rounded">
          <RouterLink
            :to="{ name: 'backend-pages-generic-profile' }"
            class="link-effect"
            >John Doe</RouterLink
          >
          on July 16, 2019 &bull; <span>5 min</span>
        </span>
      </div>
      <div class="row justify-content-center">
        <div class="col-sm-8">
          <!-- Story -->
          <article class="story">
            <p>
              Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper
              etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras
              hac ac ad massa, fusce ante convallis ante urna molestie vulputate
              bibendum tempus ante justo arcu erat accumsan adipiscing risus,
              libero condimentum venenatis sit nisl nisi ultricies sed, fames
              aliquet consectetur consequat nostra molestie neque nullam
              scelerisque neque commodo turpis quisque etiam egestas vulputate
              massa, curabitur tellus massa venenatis congue dolor enim integer
              luctus, nisi suscipit gravida fames quis vulputate nisi viverra
              luctus id leo dictum lorem, inceptos nibh orci.
            </p>

            <!-- Gallery -->
            <div class="row g-sm items-push push img-fluid-100">
              <div class="col-6 animated fadeIn">
                <a
                  class="img-link img-link-simple img-link-zoom-in img-lightbox"
                  href="javascript:void(0)"
                  @click="showPhoto(0)"
                >
                  <img
                    class="img-fluid"
                    src="/assets/media/photos/photo19.jpg"
                    alt=""
                  />
                </a>
              </div>
              <div class="col-6 animated fadeIn">
                <a
                  class="img-link img-link-simple img-link-zoom-in img-lightbox"
                  href="javascript:void(0)"
                  @click="showPhoto(1)"
                >
                  <img
                    class="img-fluid"
                    src="/assets/media/photos/photo12.jpg"
                    alt=""
                  />
                </a>
              </div>
            </div>
            <!-- END Gallery -->

            <p>
              Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper
              etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras
              hac ac ad massa, fusce ante convallis ante urna molestie vulputate
              bibendum tempus ante justo arcu erat accumsan adipiscing risus,
              libero condimentum venenatis sit nisl nisi ultricies sed, fames
              aliquet consectetur consequat nostra molestie neque nullam
              scelerisque neque commodo turpis quisque etiam egestas vulputate
              massa, curabitur tellus massa venenatis congue dolor enim integer
              luctus, nisi suscipit gravida fames quis vulputate nisi viverra
              luctus id leo dictum lorem, inceptos nibh orci.
            </p>

            <h3 class="fw-normal mt-5 mb-3">Experiences</h3>
            <p>
              Felis ullamcorper curae erat nulla luctus sociosqu phasellus
              posuere habitasse sollicitudin, libero sit potenti leo ultricies
              etiam blandit id platea augue, erat habitant fermentum lorem
              commodo taciti tristique etiam curabitur suscipit lacinia
              habitasse amet mauris eu eget ipsum nec magna in, adipiscing risus
              aenean turpis proin duis fringilla praesent ornare lorem eros
              malesuada vitae nullam diam velit potenti consectetur, vehicula
              accumsan risus lectus tortor etiam facilisis tempus sapien tortor,
              mi vestibulum taciti dapibus viverra ac justo vivamus erat
              phasellus turpis nisi class praesent duis ligula, vel ornare
              faucibus potenti nibh turpis, at id semper nunc dui blandit. Enim
              et nec habitasse ultricies id tortor curabitur, consectetur eu
              inceptos ante conubia tempor platea odio, sed sem integer lacinia
              cras non risus euismod turpis platea erat ultrices iaculis rutrum
              taciti, fusce lobortis adipiscing dapibus habitant sodales gravida
              pulvinar, elementum mi tempus ut commodo congue ipsum justo nec
              dui cursus scelerisque elementum volutpat tellus nulla laoreet
              taciti, nibh suspendisse primis arcu integer vulputate etiam
              ligula lobortis nunc, interdum commodo libero aliquam suscipit
              phasellus sollicitudin arcu varius venenatis erat ornare tempor
              nullam donec vitae etiam tellus.
            </p>

            <h3 class="fw-normal mt-5 mb-3">Exploring</h3>
            <p>
              Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper
              etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras
              hac ac ad massa, fusce ante convallis ante urna molestie vulputate
              bibendum tempus ante justo arcu erat accumsan adipiscing risus,
              libero condimentum venenatis sit nisl nisi ultricies sed, fames
              aliquet consectetur consequat nostra molestie neque nullam
              scelerisque neque commodo turpis quisque etiam egestas vulputate
              massa, curabitur tellus massa venenatis congue dolor enim integer
              luctus, nisi suscipit gravida fames quis vulputate nisi viverra
              luctus id leo dictum lorem, inceptos nibh orci.
            </p>

            <!-- Gallery -->
            <div class="row g-sm items-push push img-fluid-100">
              <div class="col-12 animated fadeIn">
                <a
                  class="img-link img-link-simple img-link-zoom-in img-lightbox"
                  href="javascript:void(0)"
                  @click="showPhoto(2)"
                >
                  <img
                    class="img-fluid"
                    src="/assets/media/photos/photo18@2x.jpg"
                    alt=""
                  />
                </a>
              </div>
              <div class="col-6 animated fadeIn">
                <a
                  class="img-link img-link-simple img-link-zoom-in img-lightbox"
                  href="javascript:void(0)"
                  @click="showPhoto(3)"
                >
                  <img
                    class="img-fluid"
                    src="/assets/media/photos/photo16.jpg"
                    alt=""
                  />
                </a>
              </div>
              <div class="col-6 animated fadeIn">
                <a
                  class="img-link img-link-simple img-link-zoom-in img-lightbox"
                  href="javascript:void(0)"
                  @click="showPhoto(4)"
                >
                  <img
                    class="img-fluid"
                    src="/assets/media/photos/photo14.jpg"
                    alt=""
                  />
                </a>
              </div>
            </div>
            <!-- END Gallery -->

            <p>
              Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper
              etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras
              hac ac ad massa, fusce ante convallis ante urna molestie vulputate
              bibendum tempus ante justo arcu erat accumsan adipiscing risus,
              libero condimentum venenatis sit nisl nisi ultricies sed, fames
              aliquet consectetur consequat nostra molestie neque nullam
              scelerisque neque commodo turpis quisque etiam egestas vulputate
              massa, curabitur tellus massa venenatis congue dolor enim integer
              luctus, nisi suscipit gravida fames quis vulputate nisi viverra
              luctus id leo dictum lorem, inceptos nibh orci.
            </p>

            <h3 class="fw-normal mt-5 mb-3">Memories</h3>
            <p>
              Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper
              etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras
              hac ac ad massa, fusce ante convallis ante urna molestie vulputate
              bibendum tempus ante justo arcu erat accumsan adipiscing risus,
              libero condimentum venenatis sit nisl nisi ultricies sed, fames
              aliquet consectetur consequat nostra molestie neque nullam
              scelerisque neque commodo turpis quisque etiam egestas vulputate
              massa, curabitur tellus massa venenatis congue dolor enim integer
              luctus, nisi suscipit gravida fames quis vulputate nisi viverra
              luctus id leo dictum lorem, inceptos nibh orci.
            </p>
          </article>
          <!-- END Story -->

          <!-- Actions -->
          <div class="mt-5 d-flex justify-content-between push">
            <a class="btn btn-alt-primary" href="javascript:void(0)">
              <i class="fa fa-heart me-1"></i> Recommend
            </a>
            <div class="btn-group" role="group">
              <button
                type="button"
                class="btn btn-alt-secondary"
                data-bs-toggle="tooltip"
                title="Like Story"
              >
                <i class="fa fa-thumbs-up"></i>
              </button>
              <div class="btn-group">
                <button
                  type="button"
                  class="btn btn-alt-secondary dropdown-toggle"
                  id="dropdown-blog-story"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="fa fa-share-alt me-1"></i> Share
                </button>
                <div
                  class="dropdown-menu dropdown-menu-end fs-sm"
                  aria-labelledby="dropdown-blog-story"
                >
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fab fa-fw fa-facebook me-1"></i> Facebook
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fab fa-fw fa-twitter me-1"></i> Twitter
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fab fa-fw fa-google-plus me-1"></i> Google+
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fab fa-fw fa-linkedin me-1"></i> LinkedIn
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- END Actions -->
        </div>
      </div>
    </div>
  </div>
  <!-- END Page Content -->

  <!-- More Stories -->
  <div class="content content-boxed">
    <!-- Section Content -->
    <div class="row py-5">
      <div class="col-md-4">
        <BaseBlock tag="a" link-pop class="overflow-hidden">
          <template #content>
            <BaseBackground image="/assets/media/photos/photo2.jpg">
              <div class="block-content bg-primary-dark-op">
                <h4 class="text-white mt-5 push">10 Productivity Tips</h4>
              </div>
            </BaseBackground>
            <div class="block-content block-content-full fs-sm fw-medium">
              <span class="text-primary">Jeffrey Shaw</span> on July 2, 2019 ·
              <span>12 min</span>
            </div>
          </template>
        </BaseBlock>
      </div>
      <div class="col-md-4">
        <BaseBlock tag="a" link-pop class="overflow-hidden">
          <template #content>
            <BaseBackground image="/assets/media/photos/photo10.jpg">
              <div class="block-content bg-primary-dark-op">
                <h4 class="text-white mt-5 push">Travel &amp; Work</h4>
              </div>
            </BaseBackground>
            <div class="block-content block-content-full fs-sm fw-medium">
              <span class="text-primary">Jack Greene</span> on July 6, 2019 ·
              <span>15 min</span>
            </div>
          </template>
        </BaseBlock>
      </div>
      <div class="col-md-4">
        <BaseBlock tag="a" link-pop class="overflow-hidden">
          <template #content>
            <BaseBackground image="/assets/media/photos/photo3.jpg">
              <div class="block-content bg-primary-dark-op">
                <h4 class="text-white mt-5 push">New Image Gallery</h4>
              </div>
            </BaseBackground>
            <div class="block-content block-content-full fs-sm fw-medium">
              <span class="text-primary">Laura Carr</span> on June 29, 2019 ·
              <span>10 min</span>
            </div>
          </template>
        </BaseBlock>
      </div>
      <div class="col-md-4">
        <BaseBlock tag="a" link-pop class="overflow-hidden">
          <template #content>
            <BaseBackground image="/assets/media/photos/photo23.jpg">
              <div class="block-content bg-primary-dark-op">
                <h4 class="text-white mt-5 push">Explore the World</h4>
              </div>
            </BaseBackground>
            <div class="block-content block-content-full fs-sm fw-medium">
              <span class="text-primary">Carol White</span> on June 16, 2019 ·
              <span>13 min</span>
            </div>
          </template>
        </BaseBlock>
      </div>
      <div class="col-md-4">
        <BaseBlock tag="a" link-pop class="overflow-hidden">
          <template #content>
            <BaseBackground image="/assets/media/photos/photo22.jpg">
              <div class="block-content bg-primary-dark-op">
                <h4 class="text-white mt-5 push">Follow Your Dreams</h4>
              </div>
            </BaseBackground>
            <div class="block-content block-content-full fs-sm fw-medium">
              <span class="text-primary">Lori Grant</span> on May 23, 2019 ·
              <span>10 min</span>
            </div>
          </template>
        </BaseBlock>
      </div>
      <div class="col-md-4">
        <BaseBlock tag="a" link-pop class="overflow-hidden">
          <template #content>
            <BaseBackground image="/assets/media/photos/photo24.jpg">
              <div class="block-content bg-primary-dark-op">
                <h4 class="text-white mt-5 push">Top 10 Destinations</h4>
              </div>
            </BaseBackground>
            <div class="block-content block-content-full fs-sm fw-medium">
              <span class="text-primary">Lisa Jenkins</span> on May 15, 2019 ·
              <span>7 min</span>
            </div>
          </template>
        </BaseBlock>
      </div>
    </div>
    <!-- END Section Content -->
  </div>
  <!-- END More Stories -->
</template>
