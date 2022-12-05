<script setup></script>

<template>
  <!-- Hero -->
  <BasePageHeading
    title="Alerts"
    subtitle="Inform your users about important events happenning in your app."
  >
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Elements</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Alerts</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <div class="row">
      <div class="col-xl-6">
        <!-- Simple -->
        <BaseBlock title="Simple">
          <p class="fs-sm text-muted">
            Use the colors which better fit the type of message you want to pass
          </p>
          <div class="alert alert-primary alert-dismissible" role="alert">
            <p class="mb-0">
              This is a primary message with a
              <a class="alert-link" href="javascript:void(0)">link</a>!
            </p>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="alert"
              aria-label="Close"
            ></button>
          </div>
          <div class="alert alert-secondary alert-dismissible" role="alert">
            <p class="mb-0">
              This is a secondary message with a
              <a class="alert-link" href="javascript:void(0)">link</a>!
            </p>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="alert"
              aria-label="Close"
            ></button>
          </div>
          <div class="alert alert-success alert-dismissible" role="alert">
            <p class="mb-0">
              This is a successful message with a
              <a class="alert-link" href="javascript:void(0)">link</a>!
            </p>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="alert"
              aria-label="Close"
            ></button>
          </div>
          <div class="alert alert-info alert-dismissible" role="alert">
            <p class="mb-0">
              This is an informational message with a
              <a class="alert-link" href="javascript:void(0)">link</a>!
            </p>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="alert"
              aria-label="Close"
            ></button>
          </div>
          <div class="alert alert-warning alert-dismissible" role="alert">
            <p class="mb-0">
              This is a warning message with a
              <a class="alert-link" href="javascript:void(0)">link</a>!
            </p>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="alert"
              aria-label="Close"
            ></button>
          </div>
          <div class="alert alert-danger alert-dismissible" role="alert">
            <p class="mb-0">
              This is an error message with a
              <a class="alert-link" href="javascript:void(0)">link</a>!
            </p>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="alert"
              aria-label="Close"
            ></button>
          </div>
          <div class="alert alert-dark alert-dismissible" role="alert">
            <p class="mb-0">
              This is a dark alert message with a
              <a class="alert-link" href="javascript:void(0)">link</a>!
            </p>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="alert"
              aria-label="Close"
            ></button>
          </div>
          <div class="alert alert-light alert-dismissible" role="alert">
            <p class="mb-0">
              This is a light alert message with a
              <a class="alert-link" href="javascript:void(0)">link</a>!
            </p>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="alert"
              aria-label="Close"
            ></button>
          </div>
        </BaseBlock>
        <!-- END Simple -->
      </div>
      <div class="col-xl-6">
        <!-- With Icons -->
        <BaseBlock title="With Icons">
          <p class="fs-sm text-muted">
            Choose an icon of your preference and easily add it to an alert
            message
          </p>
          <div
            class="alert alert-primary d-flex align-items-center"
            role="alert"
          >
            <div class="flex-shrink-">
              <i class="fa fa-fw fa-globe"></i>
            </div>
            <div class="flex-grow-1 ms-3">
              <p class="mb-0">
                This is a primary message with a
                <a class="alert-link" href="javascript:void(0)">link</a>!
              </p>
            </div>
          </div>
          <div
            class="alert alert-secondary d-flex align-items-center"
            role="alert"
          >
            <div class="flex-shrink-0">
              <i class="fa fa-fw fa-university"></i>
            </div>
            <div class="flex-grow-1 ms-3">
              <p class="mb-0">
                This is a secondary message with a
                <a class="alert-link" href="javascript:void(0)">link</a>!
              </p>
            </div>
          </div>
          <div
            class="alert alert-success d-flex align-items-center"
            role="alert"
          >
            <div class="flex-shrink-0">
              <i class="fa fa-fw fa-check"></i>
            </div>
            <div class="flex-grow-1 ms-3">
              <p class="mb-0">
                This is a successful message with a
                <a class="alert-link" href="javascript:void(0)">link</a>!
              </p>
            </div>
          </div>
          <div class="alert alert-info d-flex align-items-center" role="alert">
            <div class="flex-shrink-0">
              <i class="fa fa-fw fa-info-circle"></i>
            </div>
            <div class="flex-grow-1 ms-3">
              <p class="mb-0">
                This is an informational message with a
                <a class="alert-link" href="javascript:void(0)">link</a>!
              </p>
            </div>
          </div>
          <div
            class="alert alert-warning d-flex align-items-center justify-content-between"
            role="alert"
          >
            <div class="flex-grow-1 me-3">
              <p class="mb-0">
                This is a warning message with a
                <a class="alert-link" href="javascript:void(0)">link</a>!
              </p>
            </div>
            <div class="flex-shrink-0">
              <i class="fa fa-fw fa-exclamation-circle"></i>
            </div>
          </div>
          <div
            class="alert alert-danger d-flex align-items-center justify-content-between"
            role="alert"
          >
            <div class="flex-grow-1 me-3">
              <p class="mb-0">
                This is an error message with a
                <a class="alert-link" href="javascript:void(0)">link</a>!
              </p>
            </div>
            <div class="flex-shrink-0">
              <i class="fa fa-fw fa-times-circle"></i>
            </div>
          </div>
          <div
            class="alert alert-dark d-flex align-items-center justify-content-between"
            role="alert"
          >
            <div class="flex-grow-1 me-3">
              <p class="mb-0">
                This is a dark message with a
                <a class="alert-link" href="javascript:void(0)">link</a>!
              </p>
            </div>
            <div class="flex-shrink-0">
              <i class="fa fa-fw fa-camera-retro"></i>
            </div>
          </div>
          <div
            class="alert alert-light d-flex align-items-center justify-content-between"
            role="alert"
          >
            <div class="flex-grow-1 me-3">
              <p class="mb-0">
                This is a light message with a
                <a class="alert-link" href="javascript:void(0)">link</a>!
              </p>
            </div>
            <div class="flex-shrink-0">
              <i class="fab fa-fw fa-bitcoin"></i>
            </div>
          </div>
        </BaseBlock>
        <!-- END With Icons -->
      </div>
      <div class="col-12">
        <!-- With Titles -->
        <BaseBlock title="With Titles">
          <p class="text-muted">
            You can also add titles to your alert messages
          </p>
          <div class="row">
            <div class="col-md-6">
              <div class="alert alert-primary alert-dismissible" role="alert">
                <h3 class="alert-heading h4 my-2">Primary</h3>
                <p class="mb-0">
                  This is a primary message with a
                  <a class="alert-link" href="javascript:void(0)">link</a>!
                </p>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="alert"
                  aria-label="Close"
                ></button>
              </div>
              <div class="alert alert-secondary alert-dismissible" role="alert">
                <h3 class="alert-heading h4 my-2">Secondary</h3>
                <p class="mb-0">
                  This is a secondary message with a
                  <a class="alert-link" href="javascript:void(0)">link</a>!
                </p>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="alert"
                  aria-label="Close"
                ></button>
              </div>
              <div class="alert alert-success alert-dismissible" role="alert">
                <h3 class="alert-heading h4 my-2">Success</h3>
                <p class="mb-0">
                  This is a successful message with a
                  <a class="alert-link" href="javascript:void(0)">link</a>!
                </p>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="alert"
                  aria-label="Close"
                ></button>
              </div>
              <div class="alert alert-info alert-dismissible" role="alert">
                <h3 class="alert-heading h4 my-2">Information</h3>
                <p class="mb-0">
                  This is an informational message with a
                  <a class="alert-link" href="javascript:void(0)">link</a>!
                </p>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="alert"
                  aria-label="Close"
                ></button>
              </div>
            </div>
            <div class="col-md-6">
              <div class="alert alert-warning alert-dismissible" role="alert">
                <h3 class="alert-heading h4 my-2">Warning</h3>
                <p class="mb-0">
                  This is a warning message with a
                  <a class="alert-link" href="javascript:void(0)">link</a>!
                </p>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="alert"
                  aria-label="Close"
                ></button>
              </div>
              <div class="alert alert-danger alert-dismissible" role="alert">
                <h3 class="alert-heading h4 my-2">Error</h3>
                <p class="mb-0">
                  This is an error message with a
                  <a class="alert-link" href="javascript:void(0)">link</a>!
                </p>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="alert"
                  aria-label="Close"
                ></button>
              </div>
              <div class="alert alert-dark alert-dismissible" role="alert">
                <h3 class="alert-heading h4 my-2">Dark</h3>
                <p class="mb-0">
                  This is a dark message with a
                  <a class="alert-link" href="javascript:void(0)">link</a>!
                </p>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="alert"
                  aria-label="Close"
                ></button>
              </div>
              <div class="alert alert-light alert-dismissible" role="alert">
                <h3 class="alert-heading h4 my-2">Light</h3>
                <p class="mb-0">
                  This is a light message with a
                  <a class="alert-link" href="javascript:void(0)">link</a>!
                </p>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="alert"
                  aria-label="Close"
                ></button>
              </div>
            </div>
          </div>
        </BaseBlock>
        <!-- END With Titles -->
      </div>
    </div>
  </div>
  <!-- END Page Content -->
</template>
