<script setup></script>

<template>
  <!-- Hero Content -->
  <div class="bg-primary-dark">
    <div class="content content-full text-center pt-7 pb-6">
      <h1 class="h2 text-white mb-2">The latest stories only for you.</h1>
      <h2 class="h4 fw-normal text-white-75 mb-0">
        Feel free to explore and read.
      </h2>
    </div>
  </div>
  <!-- END Hero Content -->

  <!-- Page Content -->
  <div class="content content-boxed">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <!-- Story -->
        <div class="push">
          <RouterLink
            :to="{ name: 'backend-blog-story' }"
            custom
            v-slot="{ href, navigate }"
          >
            <BaseBlock
              :href="href"
              @click="navigate"
              tag="a"
              link-pop
              class="overflow-hidden"
            >
              <template #content>
                <img
                  class="img-fluid"
                  src="/assets/media/photos/photo8@2x.jpg"
                  alt=""
                />
                <div class="block-content">
                  <h4 class="mb-1">Top 10 Destinations</h4>
                  <p class="fs-sm fw-medium mb-2">
                    <span class="text-primary">Henry Harrison</span> on July 16,
                    2019 · <span class="text-muted">10 min</span>
                  </p>
                  <p class="fs-sm text-muted">
                    Dolor posuere proin blandit accumsan senectus netus nullam
                    curae, ornare laoreet adipiscing luctus mauris adipiscing
                    pretium eget fermentum, tristique lobortis est ut metus
                    lobortis tortor tincidunt himenaeos habitant quis dictumst
                    proin odio sagittis purus mi, nec taciti vestibulum quis in
                    sit varius lorem sit metus mi.
                  </p>
                </div>
              </template>
            </BaseBlock>
          </RouterLink>
        </div>
        <!-- END Story -->

        <!-- Story -->
        <div class="push">
          <RouterLink
            :to="{ name: 'backend-blog-story' }"
            custom
            v-slot="{ href, navigate }"
          >
            <BaseBlock
              :href="href"
              @click="navigate"
              tag="a"
              link-pop
              class="overflow-hidden"
            >
              <template #content>
                <img
                  class="img-fluid"
                  src="/assets/media/photos/photo12@2x.jpg"
                  alt=""
                />
                <div class="block-content">
                  <h4 class="mb-1">Follow Your Dreams</h4>
                  <p class="fs-sm fw-medium mb-2">
                    <span class="text-primary">Albert Ray</span> on July 13,
                    2019 ·
                    <span class="text-muted">15 min</span>
                  </p>
                  <p class="fs-sm text-muted">
                    Dolor posuere proin blandit accumsan senectus netus nullam
                    curae, ornare laoreet adipiscing luctus mauris adipiscing
                    pretium eget fermentum, tristique lobortis est ut metus
                    lobortis tortor tincidunt himenaeos habitant quis dictumst
                    proin odio sagittis purus mi, nec taciti vestibulum quis in
                    sit varius lorem sit metus mi.
                  </p>
                </div>
              </template>
            </BaseBlock>
          </RouterLink>
        </div>
        <!-- END Story -->

        <!-- Story -->
        <div class="push">
          <RouterLink
            :to="{ name: 'backend-blog-story' }"
            custom
            v-slot="{ href, navigate }"
          >
            <BaseBlock
              :href="href"
              @click="navigate"
              tag="a"
              link-pop
              class="overflow-hidden"
            >
              <template #content>
                <img
                  class="img-fluid"
                  src="/assets/media/photos/photo23@2x.jpg"
                  alt=""
                />
                <div class="block-content">
                  <h4 class="mb-1">Travel &amp; Work</h4>
                  <p class="fs-sm fw-medium mb-2">
                    <span class="text-primary">Danielle Jones</span> on July 6,
                    2019 · <span class="text-muted">12 min</span>
                  </p>
                  <p class="fs-sm text-muted">
                    Dolor posuere proin blandit accumsan senectus netus nullam
                    curae, ornare laoreet adipiscing luctus mauris adipiscing
                    pretium eget fermentum, tristique lobortis est ut metus
                    lobortis tortor tincidunt himenaeos habitant quis dictumst
                    proin odio sagittis purus mi, nec taciti vestibulum quis in
                    sit varius lorem sit metus mi.
                  </p>
                </div>
              </template>
            </BaseBlock>
          </RouterLink>
        </div>
        <!-- END Story -->

        <!-- Story -->
        <div class="push">
          <RouterLink
            :to="{ name: 'backend-blog-story' }"
            custom
            v-slot="{ href, navigate }"
          >
            <BaseBlock
              :href="href"
              @click="navigate"
              tag="a"
              link-pop
              class="overflow-hidden"
            >
              <template #content>
                <img
                  class="img-fluid"
                  src="/assets/media/photos/photo24@2x.jpg"
                  alt=""
                />
                <div class="block-content">
                  <h4 class="mb-1">Sleep Better</h4>
                  <p class="fs-sm fw-medium mb-2">
                    <span class="text-primary">Amanda Powell</span> on July 21,
                    2019 · <span class="text-muted">9 min</span>
                  </p>
                  <p class="fs-sm text-muted">
                    Dolor posuere proin blandit accumsan senectus netus nullam
                    curae, ornare laoreet adipiscing luctus mauris adipiscing
                    pretium eget fermentum, tristique lobortis est ut metus
                    lobortis tortor tincidunt himenaeos habitant quis dictumst
                    proin odio sagittis purus mi, nec taciti vestibulum quis in
                    sit varius lorem sit metus mi.
                  </p>
                </div>
              </template>
            </BaseBlock>
          </RouterLink>
        </div>
        <!-- END Story -->

        <!-- Story -->
        <div class="push">
          <RouterLink
            :to="{ name: 'backend-blog-story' }"
            custom
            v-slot="{ href, navigate }"
          >
            <BaseBlock
              :href="href"
              @click="navigate"
              tag="a"
              link-pop
              class="overflow-hidden"
            >
              <template #content>
                <img
                  class="img-fluid"
                  src="/assets/media/photos/photo4@2x.jpg"
                  alt=""
                />
                <div class="block-content">
                  <h4 class="mb-1">Black &amp; White</h4>
                  <p class="fs-sm fw-medium mb-2">
                    <span class="text-primary">Jose Wagner</span> on July 16,
                    2019 ·
                    <span class="text-muted">5 min</span>
                  </p>
                  <p class="fs-sm text-muted">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Maecenas ultrices, justo vel imperdiet gravida...
                  </p>
                </div>
              </template>
            </BaseBlock>
          </RouterLink>
        </div>
        <!-- END Story -->

        <!-- Story -->
        <div class="push">
          <RouterLink
            :to="{ name: 'backend-blog-story' }"
            custom
            v-slot="{ href, navigate }"
          >
            <BaseBlock
              :href="href"
              @click="navigate"
              tag="a"
              link-pop
              class="overflow-hidden"
            >
              <template #content>
                <img
                  class="img-fluid"
                  src="/assets/media/photos/photo6@2x.jpg"
                  alt=""
                />
                <div class="block-content">
                  <h4 class="mb-1">Exploring the clouds</h4>
                  <p class="fs-sm fw-medium mb-2">
                    <span class="text-primary">Brian Stevens</span> on July 1,
                    2021 · <span class="text-muted">3 min</span>
                  </p>
                  <p class="fs-sm text-muted">
                    Dolor posuere proin blandit accumsan senectus netus nullam
                    curae, ornare laoreet adipiscing luctus mauris adipiscing
                    pretium eget fermentum, tristique lobortis est ut metus
                    lobortis tortor tincidunt himenaeos habitant quis dictumst
                    proin odio sagittis purus mi, nec taciti vestibulum quis in
                    sit varius lorem sit metus mi.
                  </p>
                </div>
              </template>
            </BaseBlock>
          </RouterLink>
        </div>
        <!-- END Story -->

        <!-- Pagination -->
        <nav aria-label="Page navigation">
          <ul class="pagination justify-content-center push">
            <li class="page-item active">
              <a class="page-link" href="javascript:void(0)">1</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:void(0)">2</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:void(0)">3</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:void(0)">4</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:void(0)">5</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:void(0)" aria-label="Next">
                <span aria-hidden="true">
                  <i class="fa fa-angle-right"></i>
                </span>
                <span class="visually-hidden">Next</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- END Pagination -->
      </div>
    </div>
  </div>
  <!-- END Page Content -->

  <!-- Get Started -->
  <div class="bg-body-dark">
    <div class="content content-full">
      <div class="my-5 text-center">
        <h3 class="fw-bold mb-2">Do you like our stories?</h3>
        <h4 class="h5 fw-medium opacity-75">
          Sign up today and get access to over <strong>10,000</strong> inspiring
          stories!
        </h4>
        <a class="btn btn-primary px-4 py-2" href="javascript:void(0)"
          >Get Started Today</a
        >
      </div>
    </div>
  </div>
  <!-- END Get Started -->
</template>
