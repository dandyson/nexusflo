<script setup></script>

<template>
  <!-- Hero Content -->
  <div class="bg-primary-dark">
    <div class="content content-full overflow-hidden pt-7 pb-6 text-center">
      <h1 class="h2 text-white mb-2">The latest stories only for you.</h1>
      <h2 class="h4 fw-normal text-white-75 mb-0">
        Feel free to explore and read.
      </h2>
    </div>
  </div>
  <!-- END Hero Content -->

  <!-- Page Content -->
  <div class="content content-boxed">
    <div class="row items-push">
      <div class="col-xxl-8">
        <!-- Story -->
        <BaseBlock>
          <div class="row items-push">
            <div class="col-md-4 col-lg-5">
              <RouterLink
                :to="{ name: 'backend-blog-story' }"
                class="img-link img-link-simple"
              >
                <img
                  class="img-fluid rounded"
                  src="/assets/media/photos/photo10.jpg"
                  alt=""
                />
              </RouterLink>
            </div>
            <div class="col-md-8 col-lg-7 d-md-flex align-items-center">
              <div>
                <h4 class="mb-1">
                  <RouterLink
                    :to="{ name: 'backend-blog-story' }"
                    class="text-dark"
                    >Top 10 destinations to visit in your lifetime</RouterLink
                  >
                </h4>
                <div class="fs-sm fw-medium mb-3">
                  <RouterLink :to="{ name: 'backend-pages-generic-profile' }"
                    >Megan Fuller</RouterLink
                  >
                  on July 16, 2021 · <span class="text-muted">10 min</span>
                </div>
                <p class="fs-sm text-muted">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Maecenas ultrices, justo vel imperdiet gravida, urna ligula
                  hendrerit nibh, ac cursus nibh..
                </p>
              </div>
            </div>
          </div>
        </BaseBlock>
        <!-- END Story -->

        <!-- Story -->
        <BaseBlock>
          <div class="row items-push">
            <div class="col-md-4 col-lg-5">
              <RouterLink
                :to="{ name: 'backend-blog-story' }"
                class="img-link img-link-simple"
              >
                <img
                  class="img-fluid rounded"
                  src="/assets/media/photos/photo1.jpg"
                  alt=""
                />
              </RouterLink>
            </div>
            <div class="col-md-8 col-lg-7 d-md-flex align-items-center">
              <div>
                <h4 class="mb-1">
                  <RouterLink
                    :to="{ name: 'backend-blog-story' }"
                    class="text-dark"
                    >How to start your own digital business</RouterLink
                  >
                </h4>
                <div class="fs-sm fw-medium mb-3">
                  <RouterLink :to="{ name: 'backend-pages-generic-profile' }"
                    >Betty Kelley</RouterLink
                  >
                  on July 13, 2021 · <span class="text-muted">15 min</span>
                </div>
                <p class="fs-sm text-muted">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Maecenas ultrices, justo vel imperdiet gravida, urna ligula
                  hendrerit nibh, ac cursus nibh..
                </p>
              </div>
            </div>
          </div>
        </BaseBlock>
        <!-- END Story -->

        <!-- Story -->
        <BaseBlock>
          <div class="row items-push">
            <div class="col-md-4 col-lg-5">
              <RouterLink
                :to="{ name: 'backend-blog-story' }"
                class="img-link img-link-simple"
              >
                <img
                  class="img-fluid rounded"
                  src="/assets/media/photos/photo4.jpg"
                  alt=""
                />
              </RouterLink>
            </div>
            <div class="col-md-8 col-lg-7 d-md-flex align-items-center">
              <div>
                <h4 class="mb-1">
                  <RouterLink
                    :to="{ name: 'backend-blog-story' }"
                    class="text-dark"
                    >How to manage working while traveling</RouterLink
                  >
                </h4>
                <div class="fs-sm fw-medium mb-3">
                  <RouterLink :to="{ name: 'backend-pages-generic-profile' }"
                    >Jesse Fisher</RouterLink
                  >
                  on July 6, 2021 · <span class="text-muted">12 min</span>
                </div>
                <p class="fs-sm text-muted">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Maecenas ultrices, justo vel imperdiet gravida, urna ligula
                  hendrerit nibh, ac cursus nibh..
                </p>
              </div>
            </div>
          </div>
        </BaseBlock>
        <!-- END Story -->

        <!-- Story -->
        <BaseBlock>
          <div class="row items-push">
            <div class="col-md-4 col-lg-5">
              <RouterLink
                :to="{ name: 'backend-blog-story' }"
                class="img-link img-link-simple"
              >
                <img
                  class="img-fluid rounded"
                  src="/assets/media/photos/photo24.jpg"
                  alt=""
                />
              </RouterLink>
            </div>
            <div class="col-md-8 col-lg-7 d-md-flex align-items-center">
              <div>
                <h4 class="mb-1">
                  <RouterLink
                    :to="{ name: 'backend-blog-story' }"
                    class="text-dark"
                    >Sleeping better is doable</RouterLink
                  >
                </h4>
                <div class="fs-sm fw-medium mb-3">
                  <RouterLink :to="{ name: 'backend-pages-generic-profile' }"
                    >Jack Estrada</RouterLink
                  >
                  on July 21, 2021 · <span class="text-muted">9 min</span>
                </div>
                <p class="fs-sm text-muted">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Maecenas ultrices, justo vel imperdiet gravida, urna ligula
                  hendrerit nibh, ac cursus nibh..
                </p>
              </div>
            </div>
          </div>
        </BaseBlock>
        <!-- END Story -->

        <!-- Story -->
        <BaseBlock>
          <div class="row items-push">
            <div class="col-md-4 col-lg-5">
              <RouterLink
                :to="{ name: 'backend-blog-story' }"
                class="img-link img-link-simple"
              >
                <img
                  class="img-fluid rounded"
                  src="/assets/media/photos/photo7.jpg"
                  alt=""
                />
              </RouterLink>
            </div>
            <div class="col-md-8 col-lg-7 d-md-flex align-items-center">
              <div>
                <h4 class="mb-1">
                  <RouterLink
                    :to="{ name: 'backend-blog-story' }"
                    class="text-dark"
                    >Best 15 sunsets to experience</RouterLink
                  >
                </h4>
                <div class="fs-sm fw-medium mb-3">
                  <RouterLink :to="{ name: 'backend-pages-generic-profile' }"
                    >Megan Fuller</RouterLink
                  >
                  on June 5, 2021 · <span class="text-muted">5 min</span>
                </div>
                <p class="fs-sm text-muted">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Maecenas ultrices, justo vel imperdiet gravida, urna ligula
                  hendrerit nibh, ac cursus nibh..
                </p>
              </div>
            </div>
          </div>
        </BaseBlock>
        <!-- END Story -->

        <!-- Story -->
        <BaseBlock>
          <div class="row items-push">
            <div class="col-md-4 col-lg-5">
              <RouterLink
                :to="{ name: 'backend-blog-story' }"
                class="img-link img-link-simple"
              >
                <img
                  class="img-fluid rounded"
                  src="/assets/media/photos/photo8.jpg"
                  alt=""
                />
              </RouterLink>
            </div>
            <div class="col-md-8 col-lg-7 d-md-flex align-items-center">
              <div>
                <h4 class="mb-1">
                  <RouterLink
                    :to="{ name: 'backend-blog-story' }"
                    class="text-dark"
                    >Amazing places you should visit</RouterLink
                  >
                </h4>
                <div class="fs-sm fw-medium mb-3">
                  <RouterLink :to="{ name: 'backend-pages-generic-profile' }"
                    >Betty Kelley</RouterLink
                  >
                  on June 1, 2021 · <span class="text-muted">3 min</span>
                </div>
                <p class="fs-sm text-muted">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Maecenas ultrices, justo vel imperdiet gravida, urna ligula
                  hendrerit nibh, ac cursus nibh..
                </p>
              </div>
            </div>
          </div>
        </BaseBlock>
        <!-- END Story -->

        <!-- Pagination -->
        <nav aria-label="Page navigation">
          <ul class="pagination push">
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
      <div class="col-xxl-4">
        <div class="bg-body-dark rounded-3 p-4">
          <!-- Search -->
          <BaseBlock class="mb-3" content-class="p-3">
            <form @submit.prevent>
              <div class="input-group">
                <input
                  type="text"
                  class="form-control form-control-alt"
                  placeholder="Search all posts.."
                />
                <button class="btn btn-alt-secondary">
                  <i class="fa fa-search"></i>
                </button>
              </div>
            </form>
          </BaseBlock>
          <!-- END Search -->

          <!-- About -->
          <RouterLink
            :to="{ name: 'backend-pages-generic-profile' }"
            custom
            v-slot="{ href, navigate }"
          >
            <BaseBlock :href="href" @click="navigate" tag="a" class="mb-3">
              <template #content>
                <div class="block-content block-content-full text-center">
                  <div class="mb-3">
                    <img
                      class="img-avatar img-avatar96"
                      src="/assets/media/avatars/avatar1.jpg"
                      alt=""
                    />
                  </div>
                  <div class="fs-5 fw-semibold">Megan Fuller</div>
                  <div class="fs-sm fw-medium text-muted">Publisher</div>
                </div>
                <div class="block-content border-top">
                  <div class="row text-center">
                    <div class="col-6">
                      <div class="mb-2">
                        <i class="si si-pencil fa-2x"></i>
                      </div>
                      <p class="fs-sm fw-medium text-muted">350 Stories</p>
                    </div>
                    <div class="col-6">
                      <div class="mb-2">
                        <i class="si si-users fa-2x"></i>
                      </div>
                      <p class="fs-sm fw-medium text-muted">1.5k Followers</p>
                    </div>
                  </div>
                </div>
              </template>
            </BaseBlock>
          </RouterLink>
          <!-- END About -->

          <!-- Social -->
          <BaseBlock class="mb-3" content-full content-class="space-x-1">
            <a
              class="btn btn-sm btn-alt-secondary"
              href="javascript:void(0)"
              data-bs-toggle="tooltip"
              title="Follow us on Twitter"
            >
              <i class="fab fa-fw fa-twitter"></i>
            </a>
            <a
              class="btn btn-sm btn-alt-secondary"
              href="javascript:void(0)"
              data-bs-toggle="tooltip"
              title="Like our Facebook page"
            >
              <i class="fab fa-fw fa-facebook"></i>
            </a>
            <a
              class="btn btn-sm btn-alt-secondary"
              href="javascript:void(0)"
              data-bs-toggle="tooltip"
              title="Follow us on Google Plus"
            >
              <i class="fab fa-fw fa-google-plus"></i>
            </a>
            <a
              class="btn btn-sm btn-alt-secondary"
              href="javascript:void(0)"
              data-bs-toggle="tooltip"
              title="Follow us on Dribbble"
            >
              <i class="fab fa-fw fa-dribbble"></i>
            </a>
            <a
              class="btn btn-sm btn-alt-secondary"
              href="javascript:void(0)"
              data-bs-toggle="tooltip"
              title="Subscribe on Youtube"
            >
              <i class="fab fa-fw fa-youtube"></i>
            </a>
          </BaseBlock>
          <!-- END Social -->

          <!-- Recent Comments -->
          <BaseBlock title="Recent Comments" class="mb-0" content-class="fs-sm">
            <div class="push">
              <p class="fw-medium mb-1">
                <RouterLink :to="{ name: 'backend-pages-generic-profile' }"
                  >Danielle Jones</RouterLink
                >
                on
                <RouterLink :to="{ name: 'backend-blog-story' }"
                  >Exploring the Alps</RouterLink
                >
              </p>
              <p class="mb-0">
                Awesome trip! Looking forward going there, I'm sure it will be a
                great experience!
              </p>
            </div>
            <div class="push">
              <p class="fw-medium mb-1">
                <RouterLink :to="{ name: 'backend-pages-generic-profile' }"
                  >Justin Hunt</RouterLink
                >
                on
                <RouterLink :to="{ name: 'backend-blog-story' }"
                  >Travel &amp; Work</RouterLink
                >
              </p>
              <p class="mb-0">
                Thank you for sharing your story with us! I really appreciate
                the info, it will come in handy for sure!
              </p>
            </div>
            <div class="push">
              <p class="fw-medium mb-1">
                <RouterLink :to="{ name: 'backend-pages-generic-profile' }"
                  >Scott Young</RouterLink
                >
                on
                <RouterLink :to="{ name: 'backend-blog-story' }"
                  >Black &amp; White</RouterLink
                >
              </p>
              <p class="mb-0">
                Really touching story.. I'm so happy everything went well at the
                end!
              </p>
            </div>
            <div class="push">
              <p class="fw-medium mb-1">
                <RouterLink :to="{ name: 'backend-pages-generic-profile' }"
                  >Jack Greene</RouterLink
                >
                on
                <RouterLink :to="{ name: 'backend-blog-story' }"
                  >Sleep Better</RouterLink
                >
              </p>
              <p class="mb-0">
                Great advice! Thanks for sharing, I'm sure it will help many
                people sleep better and improve their lifes.
              </p>
            </div>
            <div class="text-sm push">
              <a class="text-dark fw-semibold" href="javascript:void(0)"
                >Read More..</a
              >
            </div>
          </BaseBlock>
          <!-- END Recent Comments -->
        </div>
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
