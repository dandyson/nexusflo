<script setup></script>

<template>
  <!-- Hero -->
  <BasePageHeading
    title="Offcanvas"
    subtitle="Build hidden sidebars into your project for navigation, shopping carts, and more."
  >
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Plugins</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Offcanvas</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <!-- Bootstrap Offcanvas (data-bs-toggle="offcanvas" is auto initiliazed through Bootstrap JS) -->
  <!-- For advanced Offcanvas usage you can check out https://getbootstrap.com/docs/5.2/components/offcanvas/ -->
  <div class="content">
    <div class="row">
      <div class="col-md-6">
        <!-- Left Aligned -->
        <div class="block block-rounded">
          <div class="block-header block-header-default">
            <h3 class="block-title">Left Aligned</h3>
          </div>
          <div class="block-content block-content-full">
            <!-- Trigger offcanvas -->
            <button
              class="btn btn-primary"
              type="button"
              data-bs-toggle="offcanvas"
              data-bs-target="#offcanvasLeft"
              aria-controls="offcanvasLeft"
            >
              Open Offcanvas
            </button>
            <!-- END Trigger offcanvas -->

            <!-- Offcanvas left -->
            <div
              class="offcanvas offcanvas-start bg-body-extra-light"
              tabindex="-1"
              id="offcanvasLeft"
              aria-labelledby="offcanvasLeftLabel"
            >
              <div class="offcanvas-header bg-body-light">
                <h5 class="offcanvas-title" id="offcanvasLeftLabel">Title</h5>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="offcanvas"
                  aria-label="Close"
                ></button>
              </div>
              <div class="offcanvas-body fs-sm">
                <p>Your content..</p>
              </div>
            </div>
            <!-- END Offcanvas left -->
          </div>
        </div>
        <!-- END Left Aligned -->
      </div>
      <div class="col-md-6">
        <!-- Right Aligned -->
        <div class="block block-rounded">
          <div class="block-header block-header-default">
            <h3 class="block-title">Right Aligned</h3>
          </div>
          <div class="block-content block-content-full">
            <!-- Trigger offcanvas -->
            <button
              class="btn btn-primary"
              type="button"
              data-bs-toggle="offcanvas"
              data-bs-target="#offcanvasRight"
              aria-controls="offcanvasRight"
            >
              Open Offcanvas
            </button>
            <!-- END Trigger offcanvas -->

            <!-- Offcanvas Right -->
            <div
              class="offcanvas offcanvas-end bg-body-extra-light"
              tabindex="-1"
              id="offcanvasRight"
              aria-labelledby="offcanvasRightLabel"
            >
              <div class="offcanvas-header bg-body-light">
                <h5 class="offcanvas-title" id="offcanvasRightLabel">Title</h5>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="offcanvas"
                  aria-label="Close"
                ></button>
              </div>
              <div class="offcanvas-body">
                <p>Your content..</p>
              </div>
            </div>
            <!-- END Offcanvas Right -->
          </div>
        </div>
        <!-- END Right Aligned -->
      </div>
      <div class="col-md-6">
        <!-- Top Aligned -->
        <div class="block block-rounded">
          <div class="block-header block-header-default">
            <h3 class="block-title">Top Aligned</h3>
          </div>
          <div class="block-content block-content-full">
            <!-- Trigger offcanvas -->
            <button
              class="btn btn-primary"
              type="button"
              data-bs-toggle="offcanvas"
              data-bs-target="#offcanvasTop"
              aria-controls="offcanvasTop"
            >
              Open Offcanvas
            </button>
            <!-- END Trigger offcanvas -->

            <!-- Offcanvas Right -->
            <div
              class="offcanvas offcanvas-top bg-body-extra-light"
              tabindex="-1"
              id="offcanvasTop"
              aria-labelledby="offcanvasTopLabel"
            >
              <div class="offcanvas-header bg-body-light">
                <h5 class="offcanvas-title" id="offcanvasTopLabel">Title</h5>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="offcanvas"
                  aria-label="Close"
                ></button>
              </div>
              <div class="offcanvas-body">
                <p>Your content..</p>
              </div>
            </div>
            <!-- END Offcanvas Right -->
          </div>
        </div>
        <!-- END Top Aligned -->
      </div>
      <div class="col-md-6">
        <!-- Bottom Aligned -->
        <div class="block block-rounded">
          <div class="block-header block-header-default">
            <h3 class="block-title">Bottom Aligned</h3>
          </div>
          <div class="block-content block-content-full">
            <!-- Trigger offcanvas -->
            <button
              class="btn btn-primary"
              type="button"
              data-bs-toggle="offcanvas"
              data-bs-target="#offcanvasBottom"
              aria-controls="offcanvasBottom"
            >
              Open Offcanvas
            </button>
            <!-- END Trigger offcanvas -->

            <!-- Offcanvas Right -->
            <div
              class="offcanvas offcanvas-bottom bg-body-extra-light"
              tabindex="-1"
              id="offcanvasBottom"
              aria-labelledby="offcanvasBottomLabel"
            >
              <div class="offcanvas-header bg-body-light">
                <h5 class="offcanvas-title" id="offcanvasBottomLabel">Title</h5>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="offcanvas"
                  aria-label="Close"
                ></button>
              </div>
              <div class="offcanvas-body">
                <p>Your content..</p>
              </div>
            </div>
            <!-- END Offcanvas Right -->
          </div>
        </div>
        <!-- END Bottom Aligned -->
      </div>
      <div class="col-md-6">
        <!-- Body Scrolling -->
        <div class="block block-rounded">
          <div class="block-header block-header-default">
            <h3 class="block-title">Body Scrolling</h3>
          </div>
          <div class="block-content block-content-full">
            <!-- Trigger offcanvas -->
            <button
              class="btn btn-primary"
              type="button"
              data-bs-toggle="offcanvas"
              data-bs-target="#offcanvasScrolling"
              aria-controls="offcanvasScrolling"
            >
              Open Offcanvas
            </button>
            <!-- END Trigger offcanvas -->

            <!-- Offcanvas Right -->
            <div
              class="offcanvas offcanvas-end bg-body-extra-light"
              data-bs-scroll="true"
              data-bs-backdrop="false"
              tabindex="-1"
              id="offcanvasScrolling"
              aria-labelledby="offcanvasScrollingLabel"
            >
              <div class="offcanvas-header bg-body-light">
                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">
                  Title
                </h5>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="offcanvas"
                  aria-label="Close"
                ></button>
              </div>
              <div class="offcanvas-body">
                <p>Your content..</p>
              </div>
            </div>
            <!-- END Offcanvas Right -->
          </div>
        </div>
        <!-- END Body Scrolling -->
      </div>
      <div class="col-md-6">
        <!-- Body Scrolling with Backdrop -->
        <div class="block block-rounded">
          <div class="block-header block-header-default">
            <h3 class="block-title">Body Scrolling with Backdrop</h3>
          </div>
          <div class="block-content block-content-full">
            <!-- Trigger offcanvas -->
            <button
              class="btn btn-primary"
              type="button"
              data-bs-toggle="offcanvas"
              data-bs-target="#offcanvasScrollingBackdrop"
              aria-controls="offcanvasScrollingBackdrop"
            >
              Open Offcanvas
            </button>
            <!-- END Trigger offcanvas -->

            <!-- Offcanvas Right -->
            <div
              class="offcanvas offcanvas-end bg-body-extra-light"
              data-bs-scroll="true"
              data-bs-backdrop="true"
              tabindex="-1"
              id="offcanvasScrollingBackdrop"
              aria-labelledby="offcanvasScrollingBackdropLabel"
            >
              <div class="offcanvas-header bg-body-light">
                <h5
                  class="offcanvas-title"
                  id="offcanvasScrollingBackdropLabel"
                >
                  Title
                </h5>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="offcanvas"
                  aria-label="Close"
                ></button>
              </div>
              <div class="offcanvas-body">
                <p>Your content..</p>
              </div>
            </div>
            <!-- END Offcanvas Right -->
          </div>
        </div>
        <!-- END Body Scrolling with Backdrop -->
      </div>
    </div>
  </div>
  <!-- END Page Content -->
</template>
