<script setup></script>

<template>
  <!-- Hero -->
  <BasePageHeading
    title="Progress"
    subtitle="Vital activity components for your project."
  >
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Elements</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Progress</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <!-- Loading -->
    <h2 class="content-heading">Loading</h2>

    <!-- Bootstrap Spinners -->
    <BaseBlock title="Bootstrap Spinners">
      <p class="fs-sm text-muted mb-5">
        You can also use the following custom CSS based spinner elements.
      </p>
      <div class="row items-push">
        <div class="col-md-6 space-x-2">
          <div
            class="spinner-border spinner-border-sm text-primary"
            role="status"
          >
            <span class="visually-hidden">Loading...</span>
          </div>
          <div
            class="spinner-border spinner-border-sm text-secondary"
            role="status"
          >
            <span class="visually-hidden">Loading...</span>
          </div>
          <div
            class="spinner-border spinner-border-sm text-success"
            role="status"
          >
            <span class="visually-hidden">Loading...</span>
          </div>
          <div
            class="spinner-border spinner-border-sm text-danger"
            role="status"
          >
            <span class="visually-hidden">Loading...</span>
          </div>
          <div
            class="spinner-border spinner-border-sm text-warning"
            role="status"
          >
            <span class="visually-hidden">Loading...</span>
          </div>
          <div class="spinner-border spinner-border-sm text-info" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <div
            class="spinner-border spinner-border-sm text-light"
            role="status"
          >
            <span class="visually-hidden">Loading...</span>
          </div>
          <div class="spinner-border spinner-border-sm text-dark" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
        </div>
        <div class="col-md-6 space-x-2">
          <div class="spinner-grow spinner-grow-sm text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <div
            class="spinner-grow spinner-grow-sm text-secondary"
            role="status"
          >
            <span class="visually-hidden">Loading...</span>
          </div>
          <div class="spinner-grow spinner-grow-sm text-success" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <div class="spinner-grow spinner-grow-sm text-danger" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <div class="spinner-grow spinner-grow-sm text-warning" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <div class="spinner-grow spinner-grow-sm text-info" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <div class="spinner-grow spinner-grow-sm text-light" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <div class="spinner-grow spinner-grow-sm text-dark" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
        </div>
        <div class="col-md-6 space-x-2">
          <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <div class="spinner-border text-secondary" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <div class="spinner-border text-success" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <div class="spinner-border text-danger" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <div class="spinner-border text-warning" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <div class="spinner-border text-info" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <div class="spinner-border text-light" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <div class="spinner-border text-dark" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
        </div>
        <div class="col-md-6 space-x-2">
          <div class="spinner-grow text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <div class="spinner-grow text-secondary" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <div class="spinner-grow text-success" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <div class="spinner-grow text-danger" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <div class="spinner-grow text-warning" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <div class="spinner-grow text-info" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <div class="spinner-grow text-light" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <div class="spinner-grow text-dark" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
        </div>
      </div>
    </BaseBlock>
    <!-- END Bootstrap Spinners -->

    <!-- Icons -->
    <BaseBlock title="Icons">
      <p class="fs-sm text-muted mb-5">
        You can create a loading indicator by adding the class
        <code>fa-spin</code> to any Font Awesome icon. Combining it with size
        classes and colors, you can get a lot of variations.
      </p>
      <div class="row items-push-3x text-center">
        <div class="col-6 col-md-3">
          <i class="fa fa-sun fa-spin"></i>
        </div>
        <div class="col-6 col-md-3">
          <i class="fa fa-2x fa-sun fa-spin"></i>
        </div>
        <div class="col-6 col-md-3">
          <i class="fa fa-3x fa-sun fa-spin"></i>
        </div>
        <div class="col-6 col-md-3">
          <i class="fa fa-4x fa-sun fa-spin text-danger"></i>
        </div>
      </div>
      <div class="row items-push-3x text-center">
        <div class="col-6 col-md-3">
          <i class="fa fa-cog fa-spin"></i>
        </div>
        <div class="col-6 col-md-3">
          <i class="fa fa-2x fa-cog fa-spin"></i>
        </div>
        <div class="col-6 col-md-3">
          <i class="fa fa-3x fa-cog fa-spin"></i>
        </div>
        <div class="col-6 col-md-3">
          <i class="fa fa-4x fa-cog fa-spin text-warning"></i>
        </div>
      </div>
      <div class="row items-push-3x text-center">
        <div class="col-6 col-md-3">
          <i class="fa fa-asterisk fa-spin"></i>
        </div>
        <div class="col-6 col-md-3">
          <i class="fa fa-2x fa-asterisk fa-spin"></i>
        </div>
        <div class="col-6 col-md-3">
          <i class="fa fa-3x fa-asterisk fa-spin"></i>
        </div>
        <div class="col-6 col-md-3">
          <i class="fa fa-4x fa-asterisk fa-spin text-success"></i>
        </div>
      </div>
    </BaseBlock>
    <!-- END Icons -->
    <!-- END Loading -->

    <!-- Progress Bars -->
    <h2 class="content-heading">Progress Bars</h2>
    <div class="row items-push">
      <div class="col-xl-6">
        <!-- Normal -->
        <BaseBlock title="Normal" class="h-100 mb-0">
          <div class="progress push">
            <div
              class="progress-bar"
              role="progressbar"
              style="width: 30%"
              aria-valuenow="30"
              aria-valuemin="0"
              aria-valuemax="100"
            >
              <span class="fs-sm fw-semibold">30%</span>
            </div>
          </div>
          <div class="progress push">
            <div
              class="progress-bar bg-warning"
              role="progressbar"
              style="width: 50%"
              aria-valuenow="50"
              aria-valuemin="0"
              aria-valuemax="100"
            >
              <span class="fs-sm fw-semibold">50%</span>
            </div>
          </div>
          <div class="progress push">
            <div
              class="progress-bar bg-danger"
              role="progressbar"
              style="width: 70%"
              aria-valuenow="70"
              aria-valuemin="0"
              aria-valuemax="100"
            >
              <span class="fs-sm fw-semibold">70%</span>
            </div>
          </div>
          <div class="progress push">
            <div
              class="progress-bar bg-info"
              role="progressbar"
              style="width: 90%"
              aria-valuenow="90"
              aria-valuemin="0"
              aria-valuemax="100"
            >
              <span class="fs-sm fw-semibold">90%</span>
            </div>
          </div>
          <div class="progress push">
            <div
              class="progress-bar bg-success"
              role="progressbar"
              style="width: 100%"
              aria-valuenow="100"
              aria-valuemin="0"
              aria-valuemax="100"
            >
              <span class="fs-sm fw-semibold">100%</span>
            </div>
          </div>
        </BaseBlock>
        <!-- END Normal -->
      </div>
      <div class="col-xl-6">
        <!-- Striped -->
        <BaseBlock title="Striped" class="h-100 mb-0">
          <div class="progress push">
            <div
              class="progress-bar progress-bar-striped"
              role="progressbar"
              style="width: 30%"
              aria-valuenow="30"
              aria-valuemin="0"
              aria-valuemax="100"
            >
              <span class="fs-sm fw-semibold">30%</span>
            </div>
          </div>
          <div class="progress push">
            <div
              class="progress-bar progress-bar-striped bg-warning"
              role="progressbar"
              style="width: 50%"
              aria-valuenow="50"
              aria-valuemin="0"
              aria-valuemax="100"
            >
              <span class="fs-sm fw-semibold">50%</span>
            </div>
          </div>
          <div class="progress push">
            <div
              class="progress-bar progress-bar-striped bg-danger"
              role="progressbar"
              style="width: 70%"
              aria-valuenow="70"
              aria-valuemin="0"
              aria-valuemax="100"
            >
              <span class="fs-sm fw-semibold">70%</span>
            </div>
          </div>
          <div class="progress push">
            <div
              class="progress-bar progress-bar-striped bg-info"
              role="progressbar"
              style="width: 90%"
              aria-valuenow="90"
              aria-valuemin="0"
              aria-valuemax="100"
            >
              <span class="fs-sm fw-semibold">90%</span>
            </div>
          </div>
          <div class="progress push">
            <div
              class="progress-bar progress-bar-striped bg-success"
              role="progressbar"
              style="width: 100%"
              aria-valuenow="100"
              aria-valuemin="0"
              aria-valuemax="100"
            >
              <span class="fs-sm fw-semibold">100%</span>
            </div>
          </div>
        </BaseBlock>
        <!-- END Striped -->
      </div>
      <div class="col-xl-6">
        <!-- Animated -->
        <BaseBlock title="Animated" class="h-100 mb-0">
          <div class="progress push">
            <div
              class="progress-bar progress-bar-striped progress-bar-animated"
              role="progressbar"
              style="width: 30%"
              aria-valuenow="30"
              aria-valuemin="0"
              aria-valuemax="100"
            >
              <span class="fs-sm fw-semibold">30%</span>
            </div>
          </div>
          <div class="progress push">
            <div
              class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
              role="progressbar"
              style="width: 50%"
              aria-valuenow="50"
              aria-valuemin="0"
              aria-valuemax="100"
            >
              <span class="fs-sm fw-semibold">50%</span>
            </div>
          </div>
          <div class="progress push">
            <div
              class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
              role="progressbar"
              style="width: 70%"
              aria-valuenow="70"
              aria-valuemin="0"
              aria-valuemax="100"
            >
              <span class="fs-sm fw-semibold">70%</span>
            </div>
          </div>
          <div class="progress push">
            <div
              class="progress-bar progress-bar-striped progress-bar-animated bg-info"
              role="progressbar"
              style="width: 90%"
              aria-valuenow="90"
              aria-valuemin="0"
              aria-valuemax="100"
            >
              <span class="fs-sm fw-semibold">90%</span>
            </div>
          </div>
          <div class="progress push">
            <div
              class="progress-bar progress-bar-striped progress-bar-animated bg-success"
              role="progressbar"
              style="width: 100%"
              aria-valuenow="100"
              aria-valuemin="0"
              aria-valuemax="100"
            >
              <span class="fs-sm fw-semibold">100%</span>
            </div>
          </div>
        </BaseBlock>
        <!-- END Animated -->
      </div>
      <div class="col-xl-6">
        <!-- Mini -->
        <BaseBlock title="Mini" class="h-100 mb-0">
          <div class="progress push" style="height: 10px">
            <div
              class="progress-bar"
              role="progressbar"
              style="width: 30%"
              aria-valuenow="30"
              aria-valuemin="0"
              aria-valuemax="100"
            ></div>
          </div>
          <div class="progress push" style="height: 10px">
            <div
              class="progress-bar bg-warning"
              role="progressbar"
              style="width: 50%"
              aria-valuenow="50"
              aria-valuemin="0"
              aria-valuemax="100"
            ></div>
          </div>
          <div class="progress push" style="height: 10px">
            <div
              class="progress-bar bg-danger"
              role="progressbar"
              style="width: 70%"
              aria-valuenow="70"
              aria-valuemin="0"
              aria-valuemax="100"
            ></div>
          </div>
          <div class="progress push" style="height: 10px">
            <div
              class="progress-bar progress-bar-striped bg-info"
              role="progressbar"
              style="width: 90%"
              aria-valuenow="90"
              aria-valuemin="0"
              aria-valuemax="100"
            ></div>
          </div>
          <div class="progress push" style="height: 10px">
            <div
              class="progress-bar progress-bar-striped bg-success"
              role="progressbar"
              style="width: 100%"
              aria-valuenow="100"
              aria-valuemin="0"
              aria-valuemax="100"
            ></div>
          </div>
          <div class="progress push" style="height: 10px">
            <div
              class="progress-bar progress-bar-striped progress-bar-animated bg-muted"
              role="progressbar"
              style="width: 80%"
              aria-valuenow="80"
              aria-valuemin="0"
              aria-valuemax="100"
            ></div>
          </div>
          <div class="progress push" style="height: 10px">
            <div
              class="progress-bar progress-bar-striped progress-bar-animated bg-dark"
              role="progressbar"
              style="width: 60%"
              aria-valuenow="60"
              aria-valuemin="0"
              aria-valuemax="100"
            ></div>
          </div>
        </BaseBlock>
        <!-- END Mini -->
      </div>
    </div>
    <!-- END Progress Bars -->
  </div>
  <!-- END Page Content -->
</template>
