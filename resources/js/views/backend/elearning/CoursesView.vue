<script setup></script>

<template>
  <!-- Hero Content -->
  <div class="bg-primary-dark">
    <div class="content content-full text-center pt-7 pb-5">
      <h1 class="h2 text-white mb-2">Learn new creative skills today.</h1>
      <h2 class="h4 fw-normal text-white-75">
        Join our community and get access to over 10,000 online courses.
      </h2>
      <a class="btn btn-primary px-4 py-2" href="javascript:void(0)"
        >Subscribe from $9/month</a
      >
    </div>
  </div>
  <!-- END Hero Content -->

  <!-- Page Content -->
  <div class="content content-boxed">
    <div class="row items-push py-4">
      <!-- Course -->
      <div class="col-md-6 col-lg-4 col-xl-3">
        <RouterLink
          :to="{ name: 'backend-elearning-course' }"
          custom
          v-slot="{ href, navigate }"
        >
          <BaseBlock
            :href="href"
            @click="navigate"
            tag="a"
            link-pop
            class="h-100 mb-0"
          >
            <template #content>
              <div class="block-content block-content-full text-center bg-city">
                <div
                  class="item item-2x item-circle bg-white-10 py-3 my-3 mx-auto"
                >
                  <i class="fab fa-html5 fa-2x text-white-75"></i>
                </div>
                <div class="fs-sm text-white-75">10 lessons &bull; 3 hours</div>
              </div>
              <div class="block-content block-content-full">
                <h4 class="h5 mb-1">
                  Learn HTML5 in 10 simple and easy to follow steps
                </h4>
                <div class="fs-sm text-muted">November 5, 2021</div>
              </div>
            </template>
          </BaseBlock>
        </RouterLink>
      </div>
      <!-- END Course -->

      <!-- Course -->
      <div class="col-md-6 col-lg-4 col-xl-3">
        <RouterLink
          :to="{ name: 'backend-elearning-course' }"
          custom
          v-slot="{ href, navigate }"
        >
          <BaseBlock
            :href="href"
            @click="navigate"
            tag="a"
            link-pop
            class="h-100 mb-0"
          >
            <template #content>
              <div class="block-content block-content-full text-center bg-flat">
                <div
                  class="item item-2x item-circle bg-white-10 py-3 my-3 mx-auto"
                >
                  <i class="fab fa-css3 fa-2x text-white-75"></i>
                </div>
                <div class="fs-sm text-white-75">12 lessons &bull; 5 hours</div>
              </div>
              <div class="block-content block-content-full">
                <h4 class="h5 mb-1">Be a pro with CSS3 in only two weeks</h4>
                <div class="fs-sm text-muted">November 1, 2021</div>
              </div>
            </template>
          </BaseBlock>
        </RouterLink>
      </div>
      <!-- END Course -->

      <!-- Course -->
      <div class="col-md-6 col-lg-4 col-xl-3">
        <RouterLink
          :to="{ name: 'backend-elearning-course' }"
          custom
          v-slot="{ href, navigate }"
        >
          <BaseBlock
            :href="href"
            @click="navigate"
            tag="a"
            link-pop
            class="h-100 mb-0"
          >
            <template #content>
              <div
                class="block-content block-content-full text-center bg-amethyst"
              >
                <div
                  class="item item-2x item-circle bg-white-10 py-3 my-3 mx-auto"
                >
                  <i class="si si-vector fa-2x text-white-75"></i>
                </div>
                <div class="fs-sm text-white-75">4 lessons &bull; 2 hours</div>
              </div>
              <div class="block-content block-content-full">
                <h4 class="h5 mb-1">Using SVG is easier than ever</h4>
                <div class="fs-sm text-muted">October 27, 2021</div>
              </div>
            </template>
          </BaseBlock>
        </RouterLink>
      </div>
      <!-- END Course -->

      <!-- Course -->
      <div class="col-md-6 col-lg-4 col-xl-3">
        <RouterLink
          :to="{ name: 'backend-elearning-course' }"
          custom
          v-slot="{ href, navigate }"
        >
          <BaseBlock
            :href="href"
            @click="navigate"
            tag="a"
            link-pop
            class="h-100 mb-0"
          >
            <template #content>
              <div
                class="block-content block-content-full text-center bg-smooth"
              >
                <div
                  class="item item-2x item-circle bg-white-10 py-3 my-3 mx-auto"
                >
                  <i class="si si-rocket fa-2x text-white-75"></i>
                </div>
                <div class="fs-sm text-white-75">
                  18 lessons &bull; 25 hours
                </div>
              </div>
              <div class="block-content block-content-full">
                <h4 class="h5 mb-1">
                  Build a modern web application from scratch
                </h4>
                <div class="fs-sm text-muted">October 25, 2021</div>
              </div>
            </template>
          </BaseBlock>
        </RouterLink>
      </div>
      <!-- END Course -->

      <!-- Course -->
      <div class="col-md-6 col-lg-4 col-xl-3">
        <RouterLink
          :to="{ name: 'backend-elearning-course' }"
          custom
          v-slot="{ href, navigate }"
        >
          <BaseBlock
            :href="href"
            @click="navigate"
            tag="a"
            link-pop
            class="h-100 mb-0"
          >
            <template #content>
              <div
                class="block-content block-content-full text-center bg-default"
              >
                <div
                  class="item item-2x item-circle bg-white-10 py-3 my-3 mx-auto"
                >
                  <span class="fs-lg fw-bold text-white-75">PS</span>
                </div>
                <div class="fs-sm text-white-75">5 lessons &bull; 19 hours</div>
              </div>
              <div class="block-content block-content-full">
                <h4 class="h5 mb-1">
                  UI Design in Photoshop: Tips &amp; Tricks
                </h4>
                <div class="fs-sm text-muted">October 10, 2021</div>
              </div>
            </template>
          </BaseBlock>
        </RouterLink>
      </div>
      <!-- END Course -->

      <!-- Course -->
      <div class="col-md-6 col-lg-4 col-xl-3">
        <RouterLink
          :to="{ name: 'backend-elearning-course' }"
          custom
          v-slot="{ href, navigate }"
        >
          <BaseBlock
            :href="href"
            @click="navigate"
            tag="a"
            link-pop
            class="h-100 mb-0"
          >
            <template #content>
              <div
                class="block-content block-content-full text-center bg-modern"
              >
                <div
                  class="item item-2x item-circle bg-white-10 py-3 my-3 mx-auto"
                >
                  <i class="si si-user-following fa-2x text-white-75"></i>
                </div>
                <div class="fs-sm text-white-75">9 lessons &bull; 10 hours</div>
              </div>
              <div class="block-content block-content-full">
                <h4 class="h5 mb-1">Marketing 101: All the basics</h4>
                <div class="fs-sm text-muted">October 1, 2021</div>
              </div>
            </template>
          </BaseBlock>
        </RouterLink>
      </div>
      <!-- END Course -->

      <!-- Course -->
      <div class="col-md-6 col-lg-4 col-xl-3">
        <RouterLink
          :to="{ name: 'backend-elearning-course' }"
          custom
          v-slot="{ href, navigate }"
        >
          <BaseBlock
            :href="href"
            @click="navigate"
            tag="a"
            link-pop
            class="h-100 mb-0"
          >
            <template #content>
              <div
                class="block-content block-content-full text-center bg-warning"
              >
                <div
                  class="item item-2x item-circle bg-white-10 py-3 my-3 mx-auto"
                >
                  <i class="si si-target fa-2x text-white-75"></i>
                </div>
                <div class="fs-sm text-white-75">5 lessons &bull; 8 hours</div>
              </div>
              <div class="block-content block-content-full">
                <h4 class="h5 mb-1">
                  How to make your page convert in 5 steps
                </h4>
                <div class="fs-sm text-muted">September 19, 2021</div>
              </div>
            </template>
          </BaseBlock>
        </RouterLink>
      </div>
      <!-- END Course -->

      <!-- Course -->
      <div class="col-md-6 col-lg-4 col-xl-3">
        <RouterLink
          :to="{ name: 'backend-elearning-course' }"
          custom
          v-slot="{ href, navigate }"
        >
          <BaseBlock
            :href="href"
            @click="navigate"
            tag="a"
            link-pop
            class="h-100 mb-0"
          >
            <template #content>
              <div
                class="block-content block-content-full text-center bg-success"
              >
                <div
                  class="item item-2x item-circle bg-white-10 py-3 my-3 mx-auto"
                >
                  <i class="si si-support fa-2x text-white-75"></i>
                </div>
                <div class="fs-sm text-white-75">
                  21 lessons &bull; 29 hours
                </div>
              </div>
              <div class="block-content block-content-full">
                <h4 class="h5 mb-1">How to provide rock star support</h4>
                <div class="fs-sm text-muted">September 15, 2021</div>
              </div>
            </template>
          </BaseBlock>
        </RouterLink>
      </div>
      <!-- END Course -->

      <!-- Course -->
      <div class="col-md-6 col-lg-4 col-xl-3">
        <RouterLink
          :to="{ name: 'backend-elearning-course' }"
          custom
          v-slot="{ href, navigate }"
        >
          <BaseBlock
            :href="href"
            @click="navigate"
            tag="a"
            link-pop
            class="h-100 mb-0"
          >
            <template #content>
              <div class="block-content block-content-full text-center bg-info">
                <div
                  class="item item-2x item-circle bg-white-10 py-3 my-3 mx-auto"
                >
                  <i class="si si-social-twitter fa-2x text-white-75"></i>
                </div>
                <div class="fs-sm text-white-75">7 lessons &bull; 6 hours</div>
              </div>
              <div class="block-content block-content-full">
                <h4 class="h5 mb-1">Social marketing the right way</h4>
                <div class="fs-sm text-muted">September 7, 2021</div>
              </div>
            </template>
          </BaseBlock>
        </RouterLink>
      </div>
      <!-- END Course -->

      <!-- Course -->
      <div class="col-md-6 col-lg-4 col-xl-3">
        <RouterLink
          :to="{ name: 'backend-elearning-course' }"
          custom
          v-slot="{ href, navigate }"
        >
          <BaseBlock
            :href="href"
            @click="navigate"
            tag="a"
            link-pop
            class="h-100 mb-0"
          >
            <template #content>
              <div
                class="block-content block-content-full text-center bg-danger"
              >
                <div
                  class="item item-2x item-circle bg-white-10 py-3 my-3 mx-auto"
                >
                  <i class="si si-briefcase fa-2x text-white-75"></i>
                </div>
                <div class="fs-sm text-white-75">5 lessons &bull; 4 hours</div>
              </div>
              <div class="block-content block-content-full">
                <h4 class="h5 mb-1">Project management in 5 simple steps</h4>
                <div class="fs-sm text-muted">August 28, 2021</div>
              </div>
            </template>
          </BaseBlock>
        </RouterLink>
      </div>
      <!-- END Course -->

      <!-- Course -->
      <div class="col-md-6 col-lg-4 col-xl-3">
        <RouterLink
          :to="{ name: 'backend-elearning-course' }"
          custom
          v-slot="{ href, navigate }"
        >
          <BaseBlock
            :href="href"
            @click="navigate"
            tag="a"
            link-pop
            class="h-100 mb-0"
          >
            <template #content>
              <div
                class="block-content block-content-full text-center bg-gray-dark"
              >
                <div
                  class="item item-2x item-circle bg-white-10 py-3 my-3 mx-auto"
                >
                  <i class="si si-camcorder fa-2x text-white-75"></i>
                </div>
                <div class="fs-sm text-white-75">7 lessons &bull; 9 hours</div>
              </div>
              <div class="block-content block-content-full">
                <h4 class="h5 mb-1">Learn how to create better screencasts</h4>
                <div class="fs-sm text-muted">August 19, 2021</div>
              </div>
            </template>
          </BaseBlock>
        </RouterLink>
      </div>
      <!-- END Course -->

      <!-- Course -->
      <div class="col-md-6 col-lg-4 col-xl-3">
        <RouterLink
          :to="{ name: 'backend-elearning-course' }"
          custom
          v-slot="{ href, navigate }"
        >
          <BaseBlock
            :href="href"
            @click="navigate"
            tag="a"
            link-pop
            class="h-100 mb-0"
          >
            <template #content>
              <div
                class="block-content block-content-full text-center bg-primary"
              >
                <div
                  class="item item-2x item-circle bg-white-10 py-3 my-3 mx-auto"
                >
                  <i class="si si-chemistry fa-2x text-white-75"></i>
                </div>
                <div class="fs-sm text-white-75">12 lessons &bull; 7 hours</div>
              </div>
              <div class="block-content block-content-full">
                <h4 class="h5 mb-1">Learn how to create jQuery plugins</h4>
                <div class="fs-sm text-muted">August 5, 2021</div>
              </div>
            </template>
          </BaseBlock>
        </RouterLink>
      </div>
      <!-- END Course -->
    </div>
  </div>
  <!-- END Page Content -->

  <!-- Instructors -->
  <div class="bg-primary-dark py-5">
    <div class="content content-full content-boxed text-center">
      <h2 class="fw-semibold text-white mb-2">
        Learn from the best instructors worldwide.
      </h2>
      <h3 class="h4 fw-normal text-white-75">
        Improve your skills and find the perfect job the right way.
      </h3>
      <div class="row items-push mt-5">
        <div class="col-md-4">
          <img
            class="img-avatar img-avatar-thumb"
            src="/assets/media/avatars/avatar1.jpg"
            alt=""
          />
          <div class="fs-lg fw-semibold text-white mt-3">Amanda Powell</div>
          <div class="fs-sm text-white-75">Web Designer</div>
        </div>
        <div class="col-md-4">
          <img
            class="img-avatar img-avatar-thumb"
            src="/assets/media/avatars/avatar15.jpg"
            alt=""
          />
          <div class="fs-lg fw-semibold text-white mt-3">Jose Mills</div>
          <div class="fs-sm text-white-75">Web Developer</div>
        </div>
        <div class="col-md-4">
          <img
            class="img-avatar img-avatar-thumb"
            src="/assets/media/avatars/avatar3.jpg"
            alt=""
          />
          <div class="fs-lg fw-semibold text-white mt-3">Melissa Rice</div>
          <div class="fs-sm text-white-75">Photographer</div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Instructors -->

  <!-- Get Started -->
  <div class="bg-body-dark">
    <div class="content content-full">
      <div class="my-5 text-center">
        <h3 class="h4 mb-4">Are you ready to get started? Join today.</h3>
        <a class="btn btn-primary px-4 py-2" href="javascript:void(0)"
          >Subscribe from $9/month</a
        >
      </div>
    </div>
  </div>
  <!-- END Get Started -->
</template>
