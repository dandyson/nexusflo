<script setup></script>

<template>
  <!-- Hero Content -->
  <BaseBackground
    image="/assets/media/various/promo-code.png"
    inner-class="bg-primary-dark-op"
  >
    <div class="content content-full text-center py-7 pb-5">
      <h1 class="h2 text-white mb-2">
        Learn HTML5 in 10 simple and easy to follow steps
      </h1>
      <h2 class="h4 fw-normal text-white-75">10 Lessons &bull; 3 hours</h2>
    </div>
  </BaseBackground>
  <!-- END Hero Content -->

  <!-- Navigation -->
  <div class="bg-body-extra-light">
    <div class="content content-boxed py-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <RouterLink
              :to="{ name: 'backend-elearning-courses' }"
              class="link-fx"
              >Courses</RouterLink
            >
          </li>
          <li class="breadcrumb-item" aria-current="page">Learn HTML5</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- END Navigation -->

  <!-- Page Content -->
  <div class="content content-boxed">
    <div class="row">
      <div class="col-xl-8">
        <!-- Lessons -->
        <BaseBlock content-class="fs-sm">
          <!-- Introduction -->
          <table class="table table-borderless table-vcenter">
            <tbody>
              <tr class="table-active">
                <th style="width: 50px"></th>
                <th>1. Intro</th>
                <th class="text-end">
                  <span class="text-muted">0.2 hours</span>
                </th>
              </tr>
              <tr>
                <td class="table-success text-center">
                  <i class="fa fa-fw fa-unlock text-success"></i>
                </td>
                <td>
                  <RouterLink
                    :to="{ name: 'backend-elearning-lesson' }"
                    class="fw-medium"
                    >1.1 HTML5 Intro (free preview)</RouterLink
                  >
                </td>
                <td class="text-end text-muted">12 min</td>
              </tr>
            </tbody>
          </table>
          <!-- END Introduction -->

          <!-- Basics -->
          <table class="table table-borderless table-vcenter">
            <tbody>
              <tr class="table-active">
                <th style="width: 50px"></th>
                <th>2. Basics</th>
                <th class="text-end">
                  <span class="text-muted">1.3 hours</span>
                </th>
              </tr>
              <tr>
                <td class="table-danger text-center">
                  <i class="fa fa-fw fa-lock text-danger"></i>
                </td>
                <td>
                  <a class="fw-medium" href="javascript:void(0)"
                    >2.1 HTML5 Structure</a
                  >
                </td>
                <td class="text-end text-muted">15 min</td>
              </tr>
              <tr>
                <td class="table-danger text-center">
                  <i class="fa fa-fw fa-lock text-danger"></i>
                </td>
                <td>
                  <a class="fw-medium" href="javascript:void(0)"
                    >2.2 Basic HTML5 Elements</a
                  >
                </td>
                <td class="text-end text-muted">25 min</td>
              </tr>
              <tr>
                <td class="table-danger text-center">
                  <i class="fa fa-fw fa-lock text-danger"></i>
                </td>
                <td>
                  <a class="fw-medium" href="javascript:void(0)"
                    >2.3 New Elements in HTML5</a
                  >
                </td>
                <td class="text-end text-muted">20 min</td>
              </tr>
              <tr>
                <td class="table-danger text-center">
                  <i class="fa fa-fw fa-lock text-danger"></i>
                </td>
                <td>
                  <a class="fw-medium" href="javascript:void(0)"
                    >2.4 HTML5 Semantics</a
                  >
                </td>
                <td class="text-end text-muted">18 min</td>
              </tr>
            </tbody>
          </table>
          <!-- END Basics -->

          <!-- Advanced -->
          <table class="table table-borderless table-vcenter">
            <tbody>
              <tr class="table-active">
                <th style="width: 50px"></th>
                <th>3. Advanced</th>
                <th class="text-end">
                  <span class="text-muted">1.5 hours</span>
                </th>
              </tr>
              <tr>
                <td class="table-danger text-center">
                  <i class="fa fa-fw fa-lock text-danger"></i>
                </td>
                <td>
                  <a class="fw-medium" href="javascript:void(0)"
                    >3.1 HTML5 Forms</a
                  >
                </td>
                <td class="text-end text-muted">30 min</td>
              </tr>
              <tr>
                <td class="table-danger text-center">
                  <i class="fa fa-fw fa-lock text-danger"></i>
                </td>
                <td>
                  <a class="fw-medium" href="javascript:void(0)"
                    >3.2 HTML5 Media</a
                  >
                </td>
                <td class="text-end text-muted">20 min</td>
              </tr>
              <tr>
                <td class="table-danger text-center">
                  <i class="fa fa-fw fa-lock text-danger"></i>
                </td>
                <td>
                  <a class="fw-medium" href="javascript:void(0)"
                    >3.3 HTML5 APIS</a
                  >
                </td>
                <td class="text-end text-muted">10 min</td>
              </tr>
              <tr>
                <td class="table-danger text-center">
                  <i class="fa fa-fw fa-lock text-danger"></i>
                </td>
                <td>
                  <a class="fw-medium" href="javascript:void(0)"
                    >3.4 HTML5 Graphics</a
                  >
                </td>
                <td class="text-end text-muted">14 min</td>
              </tr>
              <tr>
                <td class="table-danger text-center">
                  <i class="fa fa-fw fa-lock text-danger"></i>
                </td>
                <td>
                  <a class="fw-medium" href="javascript:void(0)"
                    >3.5 HTML5 Examples</a
                  >
                </td>
                <td class="text-end text-muted">16 min</td>
              </tr>
            </tbody>
          </table>
          <!-- END Advanced -->
        </BaseBlock>
        <!-- END Lessons -->
      </div>
      <div class="col-xl-4">
        <!-- Subscribe -->
        <BaseBlock>
          <a class="btn btn-primary w-100 mb-2" href="javascript:void(0)"
            >Subscribe from $9/month</a
          >
          <p class="fs-sm text-center">
            or
            <a class="link-effect fw-medium" href="javascript:void(0)"
              >buy this course for $28</a
            >
          </p>
        </BaseBlock>
        <!-- END Subscribe -->

        <!-- Course Info -->
        <BaseBlock title="About This Course" header-class="text-center">
          <table class="table table-striped table-borderless fs-sm">
            <tbody>
              <tr>
                <td><i class="fa fa-fw fa-book me-1"></i> 10 Lessons</td>
              </tr>
              <tr>
                <td><i class="fa fa-fw fa-clock me-1"></i> 3 hours</td>
              </tr>
              <tr>
                <td><i class="fa fa-fw fa-heart me-1"></i> 16850 Favorites</td>
              </tr>
              <tr>
                <td><i class="fa fa-fw fa-calendar me-1"></i> 3 weeks ago</td>
              </tr>
              <tr>
                <td>
                  <i class="fa fa-fw fa-tags me-1"></i>
                  <a
                    class="fw-semibold link-fx text-primary"
                    href="javascript:void(0)"
                    >HTML</a
                  >,
                  <a
                    class="fw-semibold link-fx text-primary"
                    href="javascript:void(0)"
                    >CSS</a
                  >,
                  <a
                    class="fw-semibold link-fx text-primary"
                    href="javascript:void(0)"
                    >JavaScript</a
                  >
                </td>
              </tr>
            </tbody>
          </table>
        </BaseBlock>
        <!-- END Course Info -->

        <!-- About Instructor -->
        <BaseBlock
          tag="a"
          href="javascript:void(0)"
          link-shadow
          title="About The Instructor"
          header-class="text-center"
        >
          <template #content>
            <div class="block-content block-content-full text-center">
              <div class="push">
                <img
                  class="img-avatar"
                  src="/assets/media/avatars/avatar11.jpg"
                  alt=""
                />
              </div>
              <div class="fw-semibold mb-1">Jose Parker</div>
              <div class="fs-sm text-muted">Front-end Developer</div>
            </div>
          </template>
        </BaseBlock>
        <!-- END About Instructor -->
      </div>
    </div>
  </div>
  <!-- END Page Content -->

  <!-- Get Started -->
  <div class="bg-body-dark">
    <div class="content content-full text-center py-6">
      <h3 class="h4 mb-4">Subscribe today and learn HTML5 in under 3 hours.</h3>
      <a class="btn btn-primary px-4 py-2" href="javascript:void(0)"
        >Subscribe from $9/month</a
      >
    </div>
  </div>
  <!-- END Get Started -->
</template>
